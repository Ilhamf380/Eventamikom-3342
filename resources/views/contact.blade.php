@extends('layouts.app')

@section('content')

<div class="min-h-[70vh] flex items-center justify-center px-6">
    <div class="bg-white p-8 rounded-xl shadow-lg border border-slate-200 text-center max-w-sm w-full">
        <h1 class="text-3xl font-bold text-slate-800 mb-4">Hubungi Kami</h1>
        <p class="text-slate-600 mb-6">Email: admin@amikomeventhub.com</p>

        <a href="{{ route('home') }}"
           class="inline-block bg-indigo-600 text-white px-6 py-3 rounded-xl font-semibold hover:bg-indigo-700 transition">
            Kembali ke Home
        </a>
    </div>
</div>

@endsection