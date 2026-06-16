@extends('layouts.admin')

@section('content')

<header class="flex justify-between items-center mb-10">
    <div>
        <h1 class="text-3xl font-black">Kelola Event</h1>
        <p class="text-slate-500 font-medium">Buat dan atur acara seru Anda di sini.</p>
    </div>

```
<a href="{{ route('admin.events.create') }}"
   class="px-6 py-3 bg-indigo-600 text-white rounded-2xl font-bold shadow-lg hover:bg-indigo-700 inline-block">
    + Tambah Event Baru
</a>
```

</header>

<div class="bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden">

```
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

            @forelse($events as $index => $event)

            <tr class="hover:bg-slate-50">

                <td class="px-8 py-6">
                    {{ $events->firstItem() + $index }}
                </td>

                <td class="px-8 py-6">
                    <img src="https://placehold.co/80x100"
                         class="w-16 h-20 rounded-xl">
                </td>

                <td class="px-8 py-6">
                    <p class="font-bold">
                        {{ $event->title }}
                    </p>

                    <p class="text-xs text-slate-400">
                        {{ $event->category->name ?? '-' }}
                        •
                        {{ $event->date }}
                    </p>
                </td>

                <td class="px-8 py-6">
                    <p class="text-indigo-600 font-bold">
                        Rp {{ number_format($event->price, 0, ',', '.') }}
                    </p>

                    <p class="text-xs text-slate-400">
                        Stok: {{ $event->stock }}
                    </p>
                </td>

                <td class="px-8 py-6">
                    <div class="flex gap-3">
                        <a href="{{ route('admin.events.edit', $event->id) }}"
                            class="text-blue-600 font-bold hover:text-blue-800">
                            Edit
                        </a>

                        <form action="{{ route('admin.events.destroy', $event->id) }}"
                            method="POST"
                            onsubmit="return confirm('Yakin ingin menghapus event ini?')">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                class="text-red-600 font-bold hover:text-red-800">
                                Hapus
                            </button>
                        </form>
                    </div>
                </td>
            </tr>

            @empty

            <tr>
                <td colspan="5" class="text-center py-10 text-slate-500">
                    Belum ada event yang ditambahkan
                </td>
            </tr>

            @endforelse

        </tbody>

    </table>
</div>

<div class="px-8 py-6 border-t">
    {{ $events->links() }}
</div>
```

</div>

@endsection