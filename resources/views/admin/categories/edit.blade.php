@extends('layouts.admin')

@section('content')

<div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm max-w-2xl">

    <h1 class="text-3xl font-black text-slate-900 mb-2">
        Edit Kategori
    </h1>

    <p class="text-slate-500 mb-8">
        Update data kategori
    </p>

    <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-5">
            <label class="block text-sm font-bold text-slate-700 mb-2">
                Nama Kategori
            </label>

            <input type="text"
                   name="name"
                   value="{{ $category->name }}"
                   class="w-full border border-slate-300 rounded-2xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>

        <div class="flex gap-3">

            <button type="submit"
                    class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold px-6 py-3 rounded-2xl">
                Update
            </button>

            <a href="{{ route('admin.categories.index') }}"
               class="bg-slate-200 hover:bg-slate-300 text-slate-700 font-bold px-6 py-3 rounded-2xl">
                Kembali
            </a>

        </div>

    </form>

</div>

@endsection