<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - AmikomEventHub</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-50 text-slate-900 flex min-h-screen">

    <!-- Sidebar -->
    <aside class="w-64 bg-indigo-900 text-indigo-100 flex flex-col p-6 space-y-8 sticky top-0 h-screen">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 bg-white rounded-xl flex items-center justify-center text-indigo-900 font-bold text-xl">
                AH
            </div>
            <span class="text-xl font-bold text-white tracking-tight">AmikomEventHub</span>
        </div>

        <nav class="flex-1 space-y-2">
            <p class="text-[10px] font-bold uppercase tracking-widest text-indigo-400 mb-4 px-2">
                Main Menu
            </p>

            <a href="/admin" class="flex items-center gap-3 px-4 py-3 rounded-xl font-bold
                {{ request()->is('admin') ? 'bg-indigo-800 text-white' : 'hover:bg-indigo-800' }}">
                Dashboard
            </a>

            <a href="{{ route('admin.events.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl font-bold
             {{ request()->is('admin/events*') ? 'bg-indigo-800 text-white' : 'hover:bg-indigo-800' }}">
                Kelola Event 
            </a>

            <a href="{{ route('admin.categories.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl font-bold
                {{ request()->is('admin/categories*') ? 'bg-indigo-800 text-white' : 'hover:bg-indigo-800' }}">
                Kategori
            </a>

            <a href="{{ route('admin.partners.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl font-bold
                {{ request()->is('admin/partners*') ? 'bg-indigo-800 text-white' : 'hover:bg-indigo-800' }}">
                Partner
            </a>

            <a href="/admin/transactions" class="flex items-center gap-3 px-4 py-3 rounded-xl font-bold
                {{ request()->is('admin/transactions*') ? 'bg-indigo-800 text-white' : 'hover:bg-indigo-800' }}">
                Laporan Transaksi
            </a>
        </nav>

        <div class="pt-6 border-t border-indigo-800">
            <a href="/" class="flex items-center gap-3 px-4 py-3 text-indigo-300 hover:text-white font-medium">
                Keluar
            </a>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-10 overflow-y-auto">
        
        <!-- HEADER -->
        <header class="flex justify-between items-center mb-10">
            <div>
                <h1 class="text-3xl font-black">Admin Panel</h1>
                <p class="text-slate-500 font-medium">Dashboard Admin</p>
            </div>
        </header>

        <!-- INI PENTING SESUAI MODUL -->
        @yield('content')

    </main>

</body>
</html>