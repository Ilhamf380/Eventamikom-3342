@extends('layouts.admin')

@section('content')

<header class="flex justify-between items-center mb-10">
    <div>
        <h1 class="text-3xl font-black">Edit Event</h1>
        <p class="text-slate-500 font-medium">
            Masukkan detail event yang akan diselenggarakan.
        </p>
    </div>
</header>

<div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm p-8">

    <form action="{{ route('admin.events.update', $event->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-6">
            <label class="block font-bold mb-2">Judul Event</label>

            <input
                type="text"
                name="title"
                value="{{ old('title', $event->title) }}"
                class="w-full border rounded-xl px-4 py-3"
                required>
        </div>

        <div class="mb-6">
            <label class="block font-bold mb-2">Kategori</label>

            <select
                name="category_id"
                class="w-full border rounded-xl px-4 py-3"
                required>

                <option value="">Pilih Kategori</option>

                @foreach($categories as $category)
                    <option value="{{ $category->id }}"
                        {{ old('category_id', $event->category_id) == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach

            </select>
        </div>

        <div class="mb-6">
            <label class="block font-bold mb-2">Deskripsi</label>

            <textarea
                name="description"
                rows="4"
                class="w-full border rounded-xl px-4 py-3"
                required>{{ old('description', $event->description) }}</textarea>
        </div>

        <div class="grid grid-cols-2 gap-6">

            <div>
                <label class="block font-bold mb-2">
                    Tanggal Event
                </label>

                <input
                    type="datetime-local"
                    name="date"
                    class="w-full border rounded-xl px-4 py-3"
                    required>
            </div>

            <div>
                <label class="block font-bold mb-2">
                    Lokasi
                </label>

                <input
                    type="text"
                    name="location"
                    class="w-full border rounded-xl px-4 py-3"
                    required>
            </div>

        </div>

        <div class="grid grid-cols-2 gap-6 mt-6">

            <div>
                <label class="block font-bold mb-2">
                    Harga
                </label>

                <input
                    type="number"
                    name="price"
                    class="w-full border rounded-xl px-4 py-3"
                    required>
            </div>

            <div>
                <label class="block font-bold mb-2">
                    Stok
                </label>

                <input
                    type="number"
                    name="stock"
                    class="w-full border rounded-xl px-4 py-3"
                    required>
            </div>

        </div>

        <div class="mt-8 flex gap-4">

            <a href="{{ route('admin.events.index') }}"
               class="px-6 py-3 rounded-xl border">
                Batal
            </a>

            <button
                type="submit"
                class="px-6 py-3 bg-indigo-600 text-white rounded-xl font-bold">
                Simpan Perubahan
            </button>

        </div>

    </form>

</div>

@endsection