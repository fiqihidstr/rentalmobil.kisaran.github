@extends('layouts.app')

@section('content')
<div class="w-full max-w-6xl mx-auto my-6 transition-colors duration-300">
    <div class="mb-4">
        <a href="{{ route('dashboard') }}" class="text-sm font-semibold text-indigo-600 dark:text-indigo-400 hover:underline">← Kembali ke Dashboard</a>
    </div>

    @if(session('success'))
        <div class="mb-4 text-sm text-green-600 bg-green-100 dark:bg-green-900/30 dark:text-green-400 p-3 rounded-xl shadow">{{ session('success') }}</div>
    @endif

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <div class="bg-white dark:bg-slate-800 p-6 rounded-2xl shadow-lg border dark:border-slate-700 h-fit">
            <h2 class="text-xl font-bold mb-4 text-slate-800 dark:text-white">➕ Tambah Armada Mobil</h2>
            <form action="{{ route('admin.cars.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-sm font-semibold mb-1">Nama Mobil</label>
                    <input type="text" name="nama_mobil" placeholder="Contoh: Avanza" required class="w-full p-3 rounded-xl border dark:border-slate-600 bg-transparent focus:ring-2 focus:ring-indigo-500 outline-none text-sm">
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-1">Merek</label>
                    <input type="text" name="merek" placeholder="Contoh: Toyota" required class="w-full p-3 rounded-xl border dark:border-slate-600 bg-transparent focus:ring-2 focus:ring-indigo-500 outline-none text-sm">
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-1">Harga Sewa / Hari (Rp)</label>
                    <input type="number" name="harga_per_hari" min="300000" max="900000" placeholder="300000 - 900000" required class="w-full p-3 rounded-xl border dark:border-slate-600 bg-transparent focus:ring-2 focus:ring-indigo-500 outline-none text-sm">
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-1">Foto Mobil</label>
                    <input type="file" name="foto_mobil" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100 dark:file:bg-slate-700 dark:file:text-slate-200">
                </div>
                <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold p-3 rounded-xl transition shadow-lg text-sm">Simpan Mobil</button>
            </form>
        </div>

        <div class="lg:col-span-2 bg-white dark:bg-slate-800 p-6 rounded-2xl shadow-lg border dark:border-slate-700">
            <h2 class="text-xl font-bold mb-4 text-slate-800 dark:text-white">📋 Daftar Armada Mobil Kisaran</h2>
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="border-b dark:border-slate-700 text-slate-400 text-sm">
                            <th class="pb-3 font-semibold">Foto</th>
                            <th class="pb-3 font-semibold">Mobil</th>
                            <th class="pb-3 font-semibold">Harga / Hari</th>
                            <th class="pb-3 font-semibold">Status</th>
                            <th class="pb-3 font-semibold text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100 dark:divide-slate-700 text-sm">
                        @forelse($cars as $car)
                            <tr>
                                <td class="py-4">
                                    @if($car->foto_mobil)
                                        <img src="{{ asset('images/cars/' . $car->foto_mobil) }}" class="w-20 h-12 object-cover rounded-lg shadow-sm">
                                    @else
                                        <div class="w-20 h-12 bg-slate-100 dark:bg-slate-700 rounded-lg flex items-center justify-center text-[10px] text-slate-400">No Photo</div>
                                    @endif
                                </td>
                                <td class="py-4 font-medium">
                                    {{ $car->nama_mobil }}<br>
                                    <span class="text-xs text-slate-400">{{ $car->merek }}</span>
                                </td>
                                <td class="py-4 font-semibold text-indigo-600 dark:text-indigo-400">Rp {{ number_format($car->harga_per_hari, 0, ',', '.') }}</td>
                                <td class="py-4">
                                    @if($car->status == 'tersedia')
                                        <span class="px-2 py-1 bg-green-100 text-green-700 dark:bg-green-950 dark:text-green-400 rounded text-xs font-bold capitalize">{{ $car->status }}</span>
                                    @else
                                        <span class="px-2 py-1 bg-red-100 text-red-700 dark:bg-red-950 dark:text-red-400 rounded text-xs font-bold capitalize">{{ $car->status }}</span>
                                    @endif
                                </td>
                                <td class="py-4 text-center">
                                    <form action="{{ route('admin.cars.destroy', $car->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus mobil ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:text-red-600 font-semibold text-xs">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="py-8 text-center text-slate-400">Belum ada armada mobil yang diinput.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection