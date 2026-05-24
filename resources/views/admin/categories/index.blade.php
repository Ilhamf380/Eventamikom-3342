@extends('layouts.admin')

@section('content')

<div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm">

    <div class="flex items-center justify-between mb-6">
        <div>
            <h1 class="text-3xl font-black text-slate-900">
                Data Kategori
            </h1>

            <p class="text-slate-500 mt-1">
                Kelola semua kategori event
            </p>
        </div>

        <a href="{{ route('admin.categories.create') }}"
           class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold px-5 py-3 rounded-2xl transition">
            + Tambah Kategori
        </a>
            <form action="{{ route('admin.categories.index') }}" method="GET" class="mb-6">

        <input type="text"
               name="search"
               placeholder="Cari kategori..."
               class="border border-slate-300 rounded-2xl px-4 py-3 w-80">

        <button type="submit"
                class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold px-5 py-3 rounded-2xl">
            Cari
        </button>

    </form>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full">
            <thead>
                <tr class="border-b border-slate-200 text-slate-500 text-sm">
                    <th class="text-left py-4">ID</th>
                    <th class="text-left py-4">Nama</th>
                    <th class="text-left py-4">Slug</th>
                    <th class="text-left py-4">Dibuat</th>
                    <th class="text-left py-4">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse($categories as $category)
                <tr class="border-b border-slate-100">

                    <td class="py-5 font-bold">
                        {{ $category->id }}
                    </td>

                    <td class="py-5">
                        {{ $category->name }}
                    </td>

                    <td class="py-5 text-slate-500">
                        {{ $category->slug }}
                    </td>

                    <td class="py-5 text-slate-500">
                        {{ $category->created_at->format('d M Y') }}
                    </td>

                    <td class="py-5 flex gap-2">

                        <a href="{{ route('admin.categories.edit', $category->id) }}"
                           class="bg-yellow-400 hover:bg-yellow-500 text-white px-4 py-2 rounded-xl font-bold">
                            Edit
                        </a>

                        <form action="{{ route('admin.categories.destroy', $category->id) }}"
                              method="POST">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-xl font-bold">
                                Hapus
                            </button>
                        </form>

                    </td>

                </tr>
                @empty

                <tr>
                    <td colspan="5" class="text-center py-10 text-slate-400">
                        Belum ada kategori
                    </td>
                </tr>

                @endforelse
            </tbody>
        </table>
    </div>

</div>

@endsection

