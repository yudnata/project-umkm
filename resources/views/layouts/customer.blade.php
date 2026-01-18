<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Customer Dashboard')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-neutral-50 text-neutral-900 antialiased font-urbanist">
    <header class="fixed top-0 left-0 right-0 z-50 bg-white border-b border-neutral-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-neutral-900 rounded-lg flex items-center justify-center text-white font-bold text-lg">
                        <i data-lucide="box" class="w-5 h-5"></i>
                    </div>
                    <span class="text-lg font-bold text-neutral-900">Platform Name</span>
                </div>
                <nav class="hidden md:flex items-center gap-8">
                    <a href="{{ route('customer.dashboard') }}"
                        class="text-sm {{ request()->routeIs('customer.dashboard') ? 'font-bold text-neutral-900' : 'font-semibold text-neutral-500 hover:text-neutral-900' }} flex items-center gap-2 transition-colors">
                        <i data-lucide="layout-dashboard" class="w-4 h-4"></i>
                        Dashboard
                    </a>
                    <a href="{{ route('customer.orders') }}"
                        class="text-sm {{ request()->routeIs('customer.orders') ? 'font-bold text-neutral-900' : 'font-semibold text-neutral-500 hover:text-neutral-900' }} transition-colors">
                        Pesanan Saya
                    </a>
                    <a href="{{ route('customer.partners') }}"
                        class="text-sm {{ request()->routeIs('customer.partners') ? 'font-bold text-neutral-900' : 'font-semibold text-neutral-500 hover:text-neutral-900' }} transition-colors">
                        UMKM Partner
                    </a>
                    <a href="#"
                        class="text-sm font-semibold text-neutral-500 hover:text-neutral-900 transition-colors">
                        Bantuan
                    </a>
                </nav>
                <div class="flex items-center gap-4">
                    <button class="relative p-2 text-neutral-500 hover:text-neutral-900 transition-colors">
                        <i data-lucide="bell" class="w-5 h-5"></i>
                        <span class="absolute top-1.5 right-1.5 w-2 h-2 bg-red-500 rounded-full border border-white"></span>
                    </button>
                    <div class="w-8 h-8 rounded-full bg-neutral-200 overflow-hidden border border-neutral-300">
                        <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=Ahmad" alt="User" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="pt-28 pb-12 min-h-screen">
        @yield('content')
    </main>

    <script>
        lucide.createIcons();
    </script>
</body>

</html>
