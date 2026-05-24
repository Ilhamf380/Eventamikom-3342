@extends('layouts.admin')

@section('content')

<div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm max-w-2xl">

    <h1 class="text-3xl font-black text-slate-900 mb-2">
        Tambah Partner
    </h1>

    <p class="text-slate-500 mb-8">
        Tambahkan partner baru
    </p>

    <form action="{{ route('admin.partners.store') }}" method="POST">

        @csrf

        <div class="mb-5">
            <label class="block text-sm font-bold text-slate-700 mb-2">
                Nama Partner
            </label>

            <input type="text"
                   name="name"
                   class="w-full border border-slate-300 rounded-2xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                   placeholder="Masukkan nama partner">
        </div>

        <div class="mb-5">
            <label class="block text-sm font-bold text-slate-700 mb-2">
                Logo URL
            </label>

            <input type="text"
                   name="logo_url"
                   class="w-full border border-slate-300 rounded-2xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                   placeholder="https://example.com/logo.png">
        </div>

        <div class="flex gap-3">

            <button type="submit"
                    class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold px-6 py-3 rounded-2xl">
                Simpan
            </button>

            <a href="{{ route('admin.partners.index') }}"
               class="bg-slate-200 hover:bg-slate-300 text-slate-700 font-bold px-6 py-3 rounded-2xl">
                Kembali
            </a>

        </div>

    </form>

</div>

@endsection