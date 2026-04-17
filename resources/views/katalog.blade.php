@extends('layouts.app')

@section('content')

<div class="bg-gray-100 p-10">

    <h1 class="text-3xl font-bold mb-6 text-center">Katalog Event</h1>

    <div class="grid grid-cols-3 gap-6">

        <div class="bg-white p-4 rounded shadow">
            <h2 class="font-bold">Event Musik</h2>
            <p>Konser seru di Amikom</p>
        </div>

        <div class="bg-white p-4 rounded shadow">
            <h2 class="font-bold">Seminar IT</h2>
            <p>Belajar teknologi terbaru</p>
        </div>

        <div class="bg-white p-4 rounded shadow">
            <h2 class="font-bold">Workshop</h2>
            <p>Praktek langsung skill</p>
        </div>

    </div>

</div>

@endsection