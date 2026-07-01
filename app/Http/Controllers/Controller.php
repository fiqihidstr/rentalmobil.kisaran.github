public function storeRental(Request $request)
    {
        $request->validate([
            'car_id' => 'required|exists:cars,id',
            'tgl_mulai' => 'required|date|after_or_equal:today',
            'tgl_selesai' => 'required|date|after:tgl_mulai',
            'metode_pembayaran' => 'required|in:QRIS,DANA',
        ]);

        $car = Car::findOrFail($request->car_id);

        // Hitung durasi hari
        $mulai = new \DateTime($request->tgl_mulai);
        $selesai = new \DateTime($request->tgl_selesai);
        $durasi = $mulai->diff($selesai)->days;
        if($durasi == 0) $durasi = 1;

        $total_harga = $car->harga_per_hari * $durasi;
        $dp_pembayaran = $total_harga * 0.30;

        // BERHASIL DIPERBAIKI: Menggunakan $car->id tanpa tanda kurung ()
        \DB::table('rentals')->insert([
            'user_id' => auth()->id(),
            'car_id' => $car->id, 
            'tgl_mulai' => $request->tgl_mulai,
            'tgl_selesai' => $request->tgl_selesai,
            'total_harga' => $total_harga,
            'status' => 'pending',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Ubah status mobil menjadi terpakai
        $car->update(['status' => 'terpakai']);

        return redirect()->route('dashboard')->with('success', 'Sewa mobil berhasil diajukan! Silakan bayar DP 30% senilai Rp ' . number_format($dp_pembayaran, 0, ',', '.'));
    }