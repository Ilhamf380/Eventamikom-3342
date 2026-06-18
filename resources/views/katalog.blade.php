@extends('layouts.app')

@section('content')

<div class="bg-gray-100 p-10">

    <h1 class="text-4xl font-bold mb-10 text-center">
        Katalog Event
    </h1>

    <div class="grid md:grid-cols-3 gap-6">

        @forelse($categories as $category)

            <div class="bg-white p-6 rounded-xl shadow">

                <h2 class="text-xl font-bold mb-2">
                    {{ $category->name }}
                </h2>

                <p class="text-gray-500">
                    Slug: {{ $category->slug }}
                </p>

            </div>

        @empty

            <div class="col-span-3 text-center text-gray-500">
                Belum ada kategori.
            </div>

        @endforelse

    </div>

</div>

@endsection