<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;

class CarController extends BaseController
{
    // ==========================================
    // BAGIAN 1: FITUR TRANSAKSI SEWA (USER)
    // ==========================================

    /**
     * Menampilkan halaman formulir pengajuan sewa mobil.
     */
    public function showRentalForm($car_id)
    {
        $car = Car::findOrFail($car_id);
        return view('rental.create', compact('car'));
    }

    /**
     * Memproses data pengajuan sewa & kalkulasi DP 30%.
     */
    public function storeRental(Request $request)
    {
        $request->validate([
            'car_id' => 'required|exists:cars,id',
            'tgl_mulai' => 'required|date|after_or_equal:today',
            'tgl_selesai' => 'required|date|after:tgl_mulai',
            'metode_pembayaran' => 'required|in:QRIS,DANA',
        ]);

        $car = Car::findOrFail($request->car_id);

        // Menghitung selisih/durasi hari sewa
        $mulai = new \DateTime($request->tgl_mulai);
        $selesai = new \DateTime($request->tgl_selesai);
        $durasi = $mulai->diff($selesai)->days;
        if ($durasi == 0) {
            $durasi = 1;
        }

        // Kalkulasi Total Biaya & DP 30%
        $total_harga = $car->harga_per_hari * $durasi;
        $dp_pembayaran = $total_harga * 0.30;

        // PERBAIKAN TOTAL: Menggunakan Auth::id() untuk mengambil ID user yang sedang login
        \DB::table('rentals')->insert([
            'user_id' => Auth::id(), 
            'car_id' => $car->id,
            'tgl_mulai' => $request->tgl_mulai,
            'tgl_selesai' => $request->tgl_selesai,
            'total_harga' => $total_harga,
            'status' => 'pending',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Mengubah status ketersediaan armada mobil menjadi terpakai
        $car->update(['status' => 'terpakai']);

        return redirect()->route('dashboard')->with('success', 'Sewa mobil berhasil diajukan! Silakan bayar DP 30% senilai Rp ' . number_format($dp_pembayaran, 0, ',', '.'));
    }

    // ==========================================
    // BAGIAN 2: FITUR MANAJEMEN ARMADA (ADMIN)
    // ==========================================

    public function index()
    {
        $cars = Car::latest()->get();
        return view('admin.cars.index', compact('cars'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_mobil' => 'required|string|max:255',
            'merek' => 'required|string|max:255',
            'harga_per_hari' => 'required|numeric|min:300000|max:900000',
            'foto_mobil' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $input = $request->all();

        if ($request->hasFile('foto_mobil')) {
            $foto = $request->file('foto_mobil');
            $namaFoto = time() . '.' . $foto->getClientOriginalExtension();
            $foto->move(public_path('images/cars'), $namaFoto);
            $input['foto_mobil'] = $namaFoto;
        }

        Car::create($input);

        return redirect()->route('admin.cars.index')->with('success', 'Mobil berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        $car = Car::findOrFail($id);
        
        if ($car->foto_mobil && file_exists(public_path('images/cars/' . $car->foto_mobil))) {
            unlink(public_path('images/cars/' . $car->foto_mobil));
        }

        $car->delete();
        return redirect()->route('admin.cars.index')->with('success', 'Mobil berhasil dihapus!');
    }
}