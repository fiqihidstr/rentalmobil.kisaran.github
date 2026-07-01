@extends('layouts.app')

@section('content')
<div class="w-full max-w-md bg-white dark:bg-slate-800 p-8 rounded-2xl shadow-xl border dark:border-slate-700 transition-colors duration-300">
    <div class="text-center mb-6">
        <h2 class="text-3xl font-bold text-indigo-600 dark:text-indigo-400">Buat Akun</h2>
        <p class="text-sm text-slate-500 dark:text-slate-400">Silakan lengkapi data diri Anda</p>
    </div>

    <form action="{{ url('/register') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label class="block text-sm font-semibold mb-1">nama Lengkap</label>
            <input type="text" name="nama" required class="w-full p-3 rounded-xl border dark:border-slate-600 bg-transparent focus:ring-2 focus:ring-indigo-500 outline-none">
        </div>
        <div>
            <label class="block text-sm font-semibold mb-1">Username</label>
            <input type="text" name="username" required class="w-full p-3 rounded-xl border dark:border-slate-600 bg-transparent focus:ring-2 focus:ring-indigo-500 outline-none">
            @error('username') <span class="text-xs text-red-500">{{ $message }}</span> @enderror
        </div>
        <div>
            <label class="block text-sm font-semibold mb-1">Password</label>
            <input type="password" name="password" required class="w-full p-3 rounded-xl border dark:border-slate-600 bg-transparent focus:ring-2 focus:ring-indigo-500 outline-none">
            @error('password') <span class="text-xs text-red-500">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold p-3 rounded-xl transition shadow-lg shadow-indigo-500/30">Daftar Sekarang</button>
    </form>

    <div class="text-center mt-6 text-sm">
        <p class="text-slate-500">Sudah punya akun? <a href="{{ route('login') }}" class="text-indigo-500 hover:underline font-semibold">Login</a></p>
    </div>
</div>
@endsection