@extends('layouts.app')

@section('content')
<div class="w-full max-w-3xl mx-auto my-6 transition-colors duration-300">
    <div class="mb-4">
        <a href="{{ route('dashboard') }}" class="text-sm font-semibold text-indigo-600 dark:text-indigo-400 hover:underline">← Batal & Kembali</a>
    </div>

    <div class="bg-white dark:bg-slate-800 p-6 rounded-2xl shadow-lg border dark:border-slate-700">
        <h2 class="text-xl font-bold mb-2 text-slate-800 dark:text-white">🔑 Form Pengajuan Sewa Mobil</h2>
        <p class="text-sm text-slate-500 dark:text-slate-400 mb-6">Silakan isi tanggal sewa untuk armada: <span class="font-bold text-indigo-600 dark:text-indigo-400">{{ $car->nama_mobil }}</span></p>

        <form action="{{ route('rental.store') }}" method="POST" class="space-y-6">
            @csrf
            <input type="hidden" name="car_id" value="{{ $car->id }}">
            <input type="hidden" id="harga_harian" value="{{ $car->harga_per_hari }}">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-semibold mb-1">Tanggal Mulai Sewa</label>
                    <input type="date" name="tgl_mulai" id="tgl_mulai" required class="w-full p-3 rounded-xl border dark:border-slate-600 bg-transparent focus:ring-2 focus:ring-indigo-500 outline-none text-sm">
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-1">Tanggal Selesai Sewa</label>
                    <input type="date" name="tgl_selesai" id="tgl_selesai" required class="w-full p-3 rounded-xl border dark:border-slate-600 bg-transparent focus:ring-2 focus:ring-indigo-500 outline-none text-sm">
                </div>
            </div>

            <div class="bg-slate-50 dark:bg-slate-900/50 p-4 rounded-xl border dark:border-slate-700 space-y-2 text-sm text-slate-700 dark:text-slate-300">
                <div class="flex justify-between">
                    <span>Durasi Sewa:</span>
                    <span id="view_durasi" class="font-bold">0 Hari</span>
                </div>
                <div class="flex justify-between">
                    <span>Total Biaya Sewa:</span>
                    <span id="view_total" class="font-bold text-slate-800 dark:text-white">Rp 0</span>
                </div>
                <div class="flex justify-between text-indigo-600 dark:text-indigo-400 font-semibold border-t dark:border-slate-700 pt-2">
                    <span>Wajib DP Awal (30%):</span>
                    <span id="view_dp" class="font-bold">Rp 0</span>
                </div>
            </div>

            <div>
                <label class="block text-sm font-semibold mb-2">Metode Pembayaran DP</label>
                <div class="grid grid-cols-2 gap-4">
                    <label class="border dark:border-slate-700 p-4 rounded-xl flex items-center gap-3 cursor-pointer hover:bg-slate-50 dark:hover:bg-slate-700/30">
                        <input type="radio" name="metode_pembayaran" value="QRIS" checked class="text-indigo-600 focus:ring-indigo-500">
                        <span class="font-bold text-sm">QRIS (Otomatis)</span>
                    </label>
                    <label class="border dark:border-slate-700 p-4 rounded-xl flex items-center gap-3 cursor-pointer hover:bg-slate-50 dark:hover:bg-slate-700/30">
                        <input type="radio" name="metode_pembayaran" value="DANA" class="text-indigo-600 focus:ring-indigo-500">
                        <span class="font-bold text-sm">DANA / E-Wallet</span>
                    </label>
                </div>
            </div>

            <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold p-3 rounded-xl transition shadow-lg text-sm">
                Konfirmasi & Ajukan Sewa
            </button>
        </form>
    </div>
</div>

<script>
    const tglMulai = document.getElementById('tgl_mulai');
    const tglSelesai = document.getElementById('tgl_selesai');
    const hargaHarian = parseInt(document.getElementById('harga_harian').value);

    function hitungBiaya() {
        if (tglMulai.value && tglSelesai.value) {
            const date1 = new Date(tglMulai.value);
            const date2 = new Date(tglSelesai.value);
            
            const diffTime = Math.abs(date2 - date1);
            let diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
            if(diffDays === 0) diffDays = 1;

            if(date2 >= date1) {
                const total = hargaHarian * diffDays;
                const dp = total * 0.3;

                document.getElementById('view_durasi').innerText = `${diffDays} Hari`;
                document.getElementById('view_total').innerText = 'Rp ' + total.toLocaleString('id-ID');
                document.getElementById('view_dp').innerText = 'Rp ' + dp.toLocaleString('id-ID');
            }
        }
    }

    tglMulai.addEventListener('change', hitungBiaya);
    tglSelesai.addEventListener('change', hitungBiaya);
</script>
@endsection