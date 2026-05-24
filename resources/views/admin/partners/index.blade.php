@extends('layouts.admin')

@section('content')

<div class="bg-white p-8 rounded-3xl border border-slate-200 shadow-sm">

    <div class="flex items-center justify-between mb-6">
        <div>
            <h1 class="text-3xl font-black text-slate-900">
                Data Partner
            </h1>

            <p class="text-slate-500 mt-1">
                Kelola semua partner
            </p>
        </div>

        <a href="{{ route('admin.partners.create') }}"
           class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold px-5 py-3 rounded-2xl transition">
            + Tambah Partner
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full">

            <thead>
                <tr class="border-b border-slate-200 text-slate-500 text-sm">
                    <th class="text-left py-4">ID</th>
                    <th class="text-left py-4">Logo</th>
                    <th class="text-left py-4">Nama</th>
                    <th class="text-left py-4">Dibuat</th>
                    <th class="text-left py-4">Aksi</th>
                </tr>
            </thead>

            <tbody>

                @forelse($partners as $partner)

                <tr class="border-b border-slate-100">

                    <td class="py-5 font-bold">
                        {{ $partner->id }}
                    </td>

                    <td class="py-5">
                        <img src="{{ $partner->logo_url }}"
                             class="w-16 h-16 object-contain rounded-xl border">
                    </td>

                    <td class="py-5">
                        {{ $partner->name }}
                    </td>

                    <td class="py-5 text-slate-500">
                        {{ $partner->created_at->format('d M Y') }}
                    </td>

                    <td class="py-5 flex gap-2">

                        <a href="{{ route('admin.partners.edit', $partner->id) }}"
                           class="bg-yellow-400 hover:bg-yellow-500 text-white px-4 py-2 rounded-xl font-bold">
                            Edit
                        </a>

                        <form action="{{ route('admin.partners.destroy', $partner->id) }}"
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
                        Belum ada partner
                    </td>
                </tr>

                @endforelse

            </tbody>

        </table>
    </div>

</div>

@endsection