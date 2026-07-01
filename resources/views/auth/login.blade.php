@extends('layouts.app')

@section('content')
<div class="w-full max-w-md bg-white dark:bg-slate-800 p-8 rounded-2xl shadow-xl border dark:border-slate-700 transition-colors duration-300">
    <div class="text-center mb-6">
        <h2 class="text-3xl font-bold text-indigo-600 dark:text-indigo-400">RENTAL MOBIL</h2>
        <p class="text-sm text-slate-500 dark:text-slate-400">Wilayah Kisaran & Sekitarnya</p>
    </div>

    @if(session('success'))
        <div class="mb-4 text-sm text-green-600 bg-green-100 p-3 rounded-lg">{{ session('success') }}</div>
    @endif
    @if($errors->has('loginError'))
        <div class="mb-4 text-sm text-red-600 bg-red-100 p-3 rounded-lg">{{ $errors->first('loginError') }}</div>
    @endif

    <form action="{{ url('/login') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label class="block text-sm font-semibold mb-1">Username</label>
            <input type="text" name="username" required class="w-full p-3 rounded-xl border dark:border-slate-600 bg-transparent focus:ring-2 focus:ring-indigo-500 outline-none">
        </div>
        <div>
            <label class="block text-sm font-semibold mb-1">Password</label>
            <input type="password" name="password" required class="w-full p-3 rounded-xl border dark:border-slate-600 bg-transparent focus:ring-2 focus:ring-indigo-500 outline-none">
        </div>
        <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold p-3 rounded-xl transition shadow-lg shadow-indigo-500/30">Masuk</button>
    </form>

    <div class="text-center mt-6 text-sm">
        <p class="text-slate-500">Belum punya akun? <a href="{{ route('register') }}" class="text-indigo-500 hover:underline font-semibold">Daftar di sini</a></p>
    </div>
</div>
@endsection