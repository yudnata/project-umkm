<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Platform digitalisasi UMKM Indonesia - Kemudahan untuk semua pelaku usaha mikro, kecil, dan menengah">
    <title>@yield('title', 'Platform UMKM - Digitalisasi Bisnis Anda')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white text-neutral-900 antialiased">
    <header id="header" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex items-center justify-between h-20">
                <a href="/" class="flex items-center gap-2">
                    <i data-lucide="store" class="w-5 h-5 text-white"></i>
                    <span id="logo-text" class="text-xl font-black text-white transition-colors">UMKM</span>
                </a>

                <div class="hidden md:flex items-center gap-8">
                    <a href="#layanan" class="nav-link text-white hover:text-primary-400 transition-colors font-semibold">Layanan</a>
                    <a href="#fitur" class="nav-link text-white hover:text-primary-400 transition-colors font-semibold">Fitur</a>
                    <a href="#cara-kerja" class="nav-link text-white hover:text-primary-400 transition-colors font-semibold">Cara Kerja</a>
                    <a href="#harga" class="nav-link text-white hover:text-primary-400 transition-colors font-semibold">Harga</a>
                </div>

                <div class="flex items-center gap-3">
                    <a href="{{ route('login') ?? '#' }}" id="login-btn" class="px-5 py-2.5 text-white font-semibold hover:text-white/80 transition-colors hidden sm:block">Masuk</a>
                    <a href="{{ route('register') ?? '#' }}" id="register-btn"
                        class="px-6 py-2.5 bg-white text-primary-600 font-bold rounded-full hover:bg-neutral-100 transition-all shadow-md">Daftar</a>
                </div>

                <button id="mobile-menu-btn" class="md:hidden p-2">
                    <i data-lucide="menu" id="menu-icon" class="w-6 h-6 text-white transition-colors"></i>
                </button>
            </nav>
        </div>

        <div id="mobile-menu" class="hidden md:hidden bg-neutral-900 border-t border-neutral-800 shadow-lg">
            <div class="px-4 py-4 space-y-3">
                <a href="#layanan" class="block py-2 text-white hover:text-primary-400 font-semibold">Layanan</a>
                <a href="#fitur" class="block py-2 text-white hover:text-primary-400 font-semibold">Fitur</a>
                <a href="#cara-kerja" class="block py-2 text-white hover:text-primary-400 font-semibold">Cara Kerja</a>
                <a href="#harga" class="block py-2 text-white hover:text-primary-400 font-semibold">Harga</a>
                <hr class="my-2 border-neutral-700">
                <a href="{{ route('login') ?? '#' }}" class="block py-2 text-neutral-300 font-semibold">Masuk</a>
                <a href="{{ route('register') ?? '#' }}" class="block py-3 text-center bg-primary-500 text-white font-bold rounded-full">Daftar Gratis</a>
            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-neutral-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8">
                <div class="col-span-2">
                    <div class="flex items-center gap-2 mb-4">
                        <div class="w-10 h-10 bg-primary-500 rounded-xl flex items-center justify-center">
                            <i data-lucide="store" class="w-5 h-5 text-white"></i>
                        </div>
                        <span class="text-2xl font-black text-white">UMKM</span>
                    </div>
                    <p class="text-neutral-300 mb-6 max-w-xs">Platform digitalisasi UMKM Indonesia. Solusi lengkap untuk bisnis kamu.</p>
                    <div class="flex gap-3">
                        <a href="#" class="w-10 h-10 bg-neutral-800 hover:bg-primary-500 rounded-full flex items-center justify-center transition-all text-white">
                            <i data-lucide="facebook" class="w-5 h-5"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-neutral-800 hover:bg-primary-500 rounded-full flex items-center justify-center transition-all text-white">
                            <i data-lucide="instagram" class="w-5 h-5"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-neutral-800 hover:bg-primary-500 rounded-full flex items-center justify-center transition-all text-white">
                            <i data-lucide="twitter" class="w-5 h-5"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-neutral-800 hover:bg-primary-500 rounded-full flex items-center justify-center transition-all text-white">
                            <i data-lucide="youtube" class="w-5 h-5"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <h4 class="font-bold text-white mb-4">Layanan</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-neutral-300 hover:text-primary-400 transition-colors">Jadi Seller</a></li>
                        <li><a href="#" class="text-neutral-300 hover:text-primary-400 transition-colors">Jadi Mitra</a></li>
                        <li><a href="#" class="text-neutral-300 hover:text-primary-400 transition-colors">Business Partner</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-white mb-4">Fitur</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-neutral-300 hover:text-primary-400 transition-colors">Katalog Online</a></li>
                        <li><a href="#" class="text-neutral-300 hover:text-primary-400 transition-colors">Pembayaran</a></li>
                        <li><a href="#" class="text-neutral-300 hover:text-primary-400 transition-colors">Booking System</a></li>
                        <li><a href="#" class="text-neutral-300 hover:text-primary-400 transition-colors">Laporan</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-white mb-4">Bantuan</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-neutral-300 hover:text-primary-400 transition-colors">FAQ</a></li>
                        <li><a href="#" class="text-neutral-300 hover:text-primary-400 transition-colors">Hubungi Kami</a></li>
                        <li><a href="#" class="text-neutral-300 hover:text-primary-400 transition-colors">Pusat Bantuan</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold text-white mb-4">Perusahaan</h4>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-neutral-300 hover:text-primary-400 transition-colors">Tentang Kami</a></li>
                        <li><a href="#" class="text-neutral-300 hover:text-primary-400 transition-colors">Blog</a></li>
                        <li><a href="#" class="text-neutral-300 hover:text-primary-400 transition-colors">Karir</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="border-t border-neutral-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    <p class="text-neutral-400 text-sm">
                        &copy; {{ date('Y') }} Platform UMKM. All rights reserved.
                    </p>
                    <div class="flex flex-wrap gap-6 text-sm">
                        <a href="#" class="text-neutral-400 hover:text-primary-400 transition-colors">Syarat & Ketentuan</a>
                        <a href="#" class="text-neutral-400 hover:text-primary-400 transition-colors">Kebijakan Privasi</a>
                        <a href="#" class="text-neutral-400 hover:text-primary-400 transition-colors">Keamanan</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Initialize Lucide Icons
        lucide.createIcons();

        // Header Scroll Effect
        const header = document.getElementById('header');
        const navLinks = document.querySelectorAll('.nav-link');

        function updateHeader() {
            if (window.scrollY > 20) {
                header.classList.add('header-scrolled');
            } else {
                header.classList.remove('header-scrolled');
            }
        }

        window.addEventListener('scroll', updateHeader);
        updateHeader(); // Initial check


        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Intersection Observer for Animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in-up');
                    entry.target.style.opacity = '1';
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        // Observe elements with data-animate attribute
        document.querySelectorAll('[data-animate]').forEach((el) => {
            el.style.opacity = '0';
            observer.observe(el);
        });
    </script>
</body>

</html>