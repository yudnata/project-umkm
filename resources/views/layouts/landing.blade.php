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

    <style>
        * {
            font-family: 'Urbanist', sans-serif;
        }

        /* Custom Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        @keyframes pulse-soft {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.7;
            }
        }

        @keyframes gradient-shift {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        @keyframes shimmer {
            0% {
                background-position: -200% 0;
            }

            100% {
                background-position: 200% 0;
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
        }

        .animate-fade-in {
            animation: fadeIn 0.6s ease-out forwards;
        }

        .animate-float {
            animation: float 3s ease-in-out infinite;
        }

        .animate-gradient {
            background-size: 200% 200%;
            animation: gradient-shift 4s ease infinite;
        }

        .animate-shimmer {
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
            background-size: 200% 100%;
            animation: shimmer 2s infinite;
        }

        .delay-100 {
            animation-delay: 0.1s;
        }

        .delay-200 {
            animation-delay: 0.2s;
        }

        .delay-300 {
            animation-delay: 0.3s;
        }

        .delay-400 {
            animation-delay: 0.4s;
        }

        .delay-500 {
            animation-delay: 0.5s;
        }

        /* Glassmorphism */
        .glass {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .glass-dark {
            background: rgba(17, 24, 39, 0.9);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }

        /* Gradient Text - Green Theme */
        .gradient-text {
            background: linear-gradient(135deg, #00aa13 0%, #008c10 50%, #006d0d 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .gradient-text-accent {
            background: linear-gradient(135deg, #1fd860 0%, #00aa13 50%, #008c10 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Smooth Scrolling */
        html {
            scroll-behavior: smooth;
        }



        /* Hero Background Pattern - Green Theme */
        .hero-pattern {
            background-image:
                radial-gradient(circle at 20% 50%, rgba(0, 170, 19, 0.08) 0%, transparent 50%),
                radial-gradient(circle at 80% 20%, rgba(0, 140, 16, 0.08) 0%, transparent 50%),
                radial-gradient(circle at 40% 80%, rgba(31, 216, 96, 0.06) 0%, transparent 50%);
        }

        /* Partner Card Hover - Green Theme */
        .partner-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .partner-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px -15px rgba(0, 170, 19, 0.25);
        }

        /* Feature Card - Green Theme */
        .feature-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .feature-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #1fd860, #00aa13, #008c10);
            transform: scaleX(0);
            transition: transform 0.4s ease;
        }

        .feature-card:hover::before {
            transform: scaleX(1);
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 25px 50px -12px rgba(0, 170, 19, 0.2);
        }

        /* Pricing Card - Green Theme */
        .pricing-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .pricing-card:hover {
            transform: scale(1.02);
        }

        .pricing-card.featured {
            background: linear-gradient(135deg, #00aa13 0%, #008c10 100%);
        }

        /* Step Circle - Green Theme */
        .step-circle {
            transition: all 0.3s ease;
        }

        .step-item:hover .step-circle {
            transform: scale(1.1);
            box-shadow: 0 0 30px rgba(0, 170, 19, 0.5);
        }

        /* Button Styles - Green Theme */
        .btn-primary {
            background: linear-gradient(135deg, #00aa13 0%, #008c10 100%);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s ease;
        }

        .btn-primary:hover::before {
            left: 100%;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px -10px rgba(0, 170, 19, 0.5);
        }

        .btn-outline {
            border: 2px solid #e2e8f0;
            transition: all 0.3s ease;
        }

        .btn-outline:hover {
            border-color: #00aa13;
            color: #00aa13;
            background: rgba(0, 170, 19, 0.05);
        }

        /* Secondary Button */
        .btn-secondary {
            background: linear-gradient(135deg, #14b8a6 0%, #0d9488 100%);
            transition: all 0.3s ease;
        }

        .btn-secondary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px -10px rgba(20, 184, 166, 0.5);
        }

        /* Header Scroll Effect - Dark Theme */
        .header-scrolled {
            background: #171717;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
        }


        /* Green Glow Effect */
        .glow-green {
            box-shadow: 0 0 40px -10px rgba(0, 170, 19, 0.4);
        }

        .glow-green-lg {
            box-shadow: 0 0 60px -15px rgba(0, 170, 19, 0.5);
        }

        /* Soft Shadow */
        .shadow-soft {
            box-shadow: 0 2px 15px -3px rgba(0, 0, 0, 0.07), 0 10px 20px -2px rgba(0, 0, 0, 0.04);
        }
    </style>
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
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in-up');
                    entry.target.style.opacity = '1';
                }
            });
        }, observerOptions);

        // Observe elements with data-animate attribute
        document.querySelectorAll('[data-animate]').forEach(el => {
            el.style.opacity = '0';
            observer.observe(el);
        });
    </script>
</body>

</html>