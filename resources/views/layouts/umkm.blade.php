<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'UMKM Page')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white text-neutral-900 antialiased">
    <header class="fixed top-0 left-0 right-0 z-50 bg-white/80 backdrop-blur-md border-b border-neutral-100 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center justify-between h-20">
                <a href="{{ route('home') }}" class="flex items-center gap-2 group">
                    <div class="w-10 h-10 bg-primary-500 rounded-lg flex items-center justify-center text-white font-bold text-xl shadow-lg group-hover:scale-105 transition-transform">
                        U
                    </div>
                    <span class="text-xl font-bold text-neutral-900 tracking-tight">UMKM<span class="text-primary-500">Name</span></span>
                </a>

                <div class="hidden md:flex items-center gap-8">
                    <a href="{{ route('home') }}" class="text-sm font-bold text-primary-600 bg-primary-50 px-3 py-1.5 rounded-lg hover:bg-primary-100 transition-colors flex items-center gap-1">
                        <i data-lucide="arrow-left" class="w-4 h-4"></i>
                        Cari UMKM Lain
                    </a>
                    <div class="w-px h-6 bg-neutral-200 mx-2"></div>
                    <a href="{{ route('umkm.preview') }}" class="text-sm font-semibold text-neutral-600 hover:text-primary-600 transition-colors">Home</a>
                    <a href="{{ route('umkm.catalog') }}" class="text-sm font-semibold text-neutral-600 hover:text-primary-600 transition-colors">Products</a>
                    <a href="{{ route('umkm.preview') }}#about" class="text-sm font-semibold text-neutral-600 hover:text-primary-600 transition-colors">About</a>
                    <a href="{{ route('umkm.preview') }}#contact" class="text-sm font-semibold text-neutral-600 hover:text-primary-600 transition-colors">Contact</a>
                </div>

                <div class="flex items-center gap-3">
                    <a href="#" class="px-5 py-2 text-sm font-semibold text-neutral-600 hover:text-primary-600 transition-colors">Login</a>
                    <a href="#"
                        class="px-5 py-2 bg-neutral-900 text-white text-sm font-bold rounded-full hover:bg-neutral-800 transition-all shadow-md hover:shadow-lg transform hover:-translate-y-0.5">Register</a>
                </div>

                <button class="md:hidden p-2 text-neutral-600 hover:text-primary-600">
                    <i data-lucide="menu" class="w-6 h-6"></i>
                </button>
            </nav>
        </div>
    </header>

    <main class="pt-20">
        @yield('content')
    </main>

    <footer id="contact" class="bg-white border-t border-neutral-100 pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                <div class="col-span-1 md:col-span-1">
                    <a href="#" class="flex items-center gap-2 mb-6">
                        <div class="w-8 h-8 bg-primary-500 rounded-lg flex items-center justify-center text-white font-bold text-lg">
                            U
                        </div>
                        <span class="text-lg font-bold text-neutral-900">UMKM Name</span>
                    </a>
                    <p class="text-neutral-500 text-sm leading-relaxed mb-6">
                        Memberikan jasa cleaning service profesional terbaik untuk hunian dan kantor Anda.
                    </p>
                </div>

                <div>
                    <h4 class="font-bold text-neutral-900 mb-6">Menu</h4>
                    <ul class="space-y-4">
                        <li><a href="#" class="text-neutral-500 hover:text-primary-600 text-sm transition-colors">Home</a></li>
                        <li><a href="#" class="text-neutral-500 hover:text-primary-600 text-sm transition-colors">Layanan</a></li>
                        <li><a href="#" class="text-neutral-500 hover:text-primary-600 text-sm transition-colors">Tentang</a></li>
                        <li><a href="#" class="text-neutral-500 hover:text-primary-600 text-sm transition-colors">Kontak</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-neutral-900 mb-6">Kontak</h4>
                    <ul class="space-y-4">
                        <li class="flex items-start gap-3 text-sm text-neutral-500">
                            <i data-lucide="mail" class="w-5 h-5 text-primary-500 shrink-0"></i>
                            <span>hello@umkmname.com</span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-neutral-500">
                            <i data-lucide="phone" class="w-5 h-5 text-primary-500 shrink-0"></i>
                            <span>+62 812 3456 7890</span>
                        </li>
                        <li class="flex items-start gap-3 text-sm text-neutral-500">
                            <i data-lucide="map-pin" class="w-5 h-5 text-primary-500 shrink-0"></i>
                            <span>Jl. Raya Puputan No. 123, Denpasar, Bali</span>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-neutral-900 mb-6">Sosial Media</h4>
                    <div class="flex gap-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-neutral-100 flex items-center justify-center text-neutral-600 hover:bg-primary-500 hover:text-white transition-all">
                            <i data-lucide="instagram" class="w-5 h-5"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-neutral-100 flex items-center justify-center text-neutral-600 hover:bg-primary-500 hover:text-white transition-all">
                            <i data-lucide="facebook" class="w-5 h-5"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-neutral-100 flex items-center justify-center text-neutral-600 hover:bg-primary-500 hover:text-white transition-all">
                            <i data-lucide="twitter" class="w-5 h-5"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="border-t border-neutral-100 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-neutral-400 text-sm">© 2024 UMKM Name. All rights reserved.</p>
                <div class="flex gap-6">
                    <a href="#" class="text-neutral-400 hover:text-neutral-600 text-sm">Privacy Policy</a>
                    <a href="#" class="text-neutral-400 hover:text-neutral-600 text-sm">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        lucide.createIcons();
    </script>
</body>

</html>