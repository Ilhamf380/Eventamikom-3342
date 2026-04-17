@extends('layouts.app')

@section('content')

<main class="max-w-3xl mx-auto px-6 py-20">
    <div class="mb-12">
        <a href="/event/1" class="text-indigo-600 font-bold flex items-center gap-2 mb-6">
            ← Kembali ke Event
        </a>
        <h1 class="text-4xl font-extrabold">Checkout</h1>
        <p class="text-slate-500 mt-2">Lengkapi data Anda untuk mendapatkan tiket.</p>
    </div>

    <div class="grid grid-cols-1 gap-8">
        <!-- Summary -->
        <div class="bg-white rounded-3xl border border-slate-200 p-8 shadow-sm">
            <h3 class="text-xl font-bold mb-6 border-b pb-4">Pesanan Anda</h3>

            <div class="flex gap-6 items-start">
                <img src="assets/concert.png" class="w-24 h-24 rounded-2xl">
                <div>
                    <h4 class="font-bold text-lg">Jazz Night 2024</h4>
                    <p class="text-slate-500">16 Nov 2024</p>
                    <p class="text-indigo-600 font-bold mt-2">1 x Rp 150.000</p>
                </div>
            </div>

            <div class="mt-6 pt-4 border-t">
                <div class="flex justify-between">
                    <span>Total</span>
                    <span class="font-bold text-indigo-600">Rp 155.000</span>
                </div>
            </div>
        </div>

        <!-- Form -->
        <div class="bg-white rounded-3xl border border-slate-200 p-8 shadow-sm">
            <h3 class="text-xl font-bold mb-6">Data Pemesan</h3>

            <form class="space-y-4">
                <input type="text" placeholder="Nama" class="w-full p-3 border rounded-xl">
                <input type="email" placeholder="Email" class="w-full p-3 border rounded-xl">
                <input type="tel" placeholder="No HP" class="w-full p-3 border rounded-xl">

                <button type="button" onclick="showMidtrans()"
                    class="w-full bg-indigo-600 text-white py-4 rounded-xl font-bold">
                    Bayar Sekarang
                </button>
            </form>
        </div>
    </div>
</main>

<!-- MIDTRANS -->
<div id="midtrans-overlay"
    class="fixed inset-0 bg-black/50 hidden flex items-center justify-center">
    <div class="bg-white p-6 rounded-2xl text-center">
        <h2 class="text-xl font-bold mb-4">Pembayaran</h2>

        <button onclick="window.location.href='/my-ticket'"
            class="bg-indigo-600 text-white px-6 py-3 rounded-xl">
            Simulasi Bayar
        </button>
    </div>
</div>

<script>
function showMidtrans() {
    document.getElementById('midtrans-overlay').classList.remove('hidden');
}
</script>

@endsection