@extends('layouts.admin')

@section('content')

<header class="flex justify-between items-center mb-10">
    <div>
        <h1 class="text-3xl font-black">Kelola Event</h1>
        <p class="text-slate-500 font-medium">Buat dan atur acara seru Anda di sini.</p>
    </div>
    <button
        class="px-6 py-3 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg hover:bg-indigo-700">
        + Tambah Event Baru
    </button>
</header>

<div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden">

    <div class="px-8 py-6 bg-slate-50/50 border-b flex gap-4">
        <input type="text" placeholder="Cari nama event..."
            class="flex-1 px-5 py-3 rounded-xl border bg-white">

        <select class="px-5 py-3 rounded-xl border bg-white">
            <option>Semua Kategori</option>
            <option>Musik</option>
            <option>Workshop</option>
        </select>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead class="bg-slate-50 text-slate-400 uppercase text-[10px] font-black">
                <tr>
                    <th class="px-8 py-4">No</th>
                    <th class="px-8 py-4">Poster</th>
                    <th class="px-8 py-4">Event</th>
                    <th class="px-8 py-4">Harga / Stok</th>
                    <th class="px-8 py-4">Aksi</th>
                </tr>
            </thead>

            <tbody class="divide-y border-t">

                <tr>
                    <td class="px-8 py-6">1</td>
                    <td class="px-8 py-6">
                        <img src="assets/concert.png" class="w-16 h-20 rounded-xl">
                    </td>
                    <td class="px-8 py-6">
                        <p class="font-bold">Jazz Night 2024</p>
                        <p class="text-xs text-slate-400">Musik • 16 Nov 2024</p>
                    </td>
                    <td class="px-8 py-6">
                        <p class="text-indigo-600 font-bold">Rp 150.000</p>
                        <p class="text-xs text-slate-400">Stok: 42</p>
                    </td>
                    <td class="px-8 py-6">Edit | Hapus</td>
                </tr>

                <tr>
                    <td class="px-8 py-6">2</td>
                    <td class="px-8 py-6">
                        <img src="assets/workshop.png" class="w-16 h-20 rounded-xl">
                    </td>
                    <td class="px-8 py-6">
                        <p class="font-bold">AI Workshop</p>
                    </td>
                    <td class="px-8 py-6">
                        <p class="text-indigo-600 font-bold">Rp 50.000</p>
                    </td>
                    <td class="px-8 py-6">Edit | Hapus</td>
                </tr>

            </tbody>
        </table>
    </div>

</div>

@endsection