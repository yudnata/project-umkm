@extends('layouts.landing')

@section('title', 'Platform UMKM - Digitalisasi Bisnis Anda')

@section('content')
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?w=1920&q=80" alt="Background UMKM" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black/60 backdrop-blur-sm"></div>
            <div class="absolute bottom-0 left-0 right-0 h-64 bg-linear-gradient-to-t from-black/80 to-transparent"></div>
        </div>

        <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center mb-20">

            <h1 class="text-6xl md:text-7xl lg:text-9xl font-black leading-none mb-8 text-white tracking-tight drop-shadow-lg animate-fade-in-up" style="animation-delay: 0.1s;">
                Digitalisasi<br><span class="text-primary-400">UMKM</span>
            </h1>

            <p class="text-xl md:text-2xl text-neutral-200 mb-10 max-w-3xl mx-auto leading-relaxed drop-shadow animate-fade-in-up" style="animation-delay: 0.2s;">
                Platform yang bikin jualan jadi gampang. Kelola toko, terima order, dan kembangkan bisnis—semua di satu tempat.
            </p>

            <div class="flex flex-wrap justify-center gap-4 animate-fade-in-up" style="animation-delay: 0.3s;">
                <a href="{{ route('register') ?? '#' }}"
                    class="inline-flex items-center gap-2 px-10 py-5 bg-primary-500 text-white font-bold text-lg rounded-full hover:bg-primary-600 transition-all shadow-[0_0_30px_rgba(0,170,19,0.5)] hover:scale-105">
                    <span>Mulai Gratis</span>
                    <i data-lucide="arrow-right" class="w-6 h-6"></i>
                </a>
                <a href="#layanan"
                    class="inline-flex items-center gap-2 px-10 py-5 bg-white/10 backdrop-blur-md text-white font-bold text-lg rounded-full hover:bg-white/20 transition-all border-2 border-white/50 hover:scale-105">
                    <span>Lihat Layanan</span>
                </a>
            </div>
        </div>

        <div class="absolute -bottom-1 left-0 right-0 z-20">
            <svg class="w-full h-auto block align-middle" viewBox="0 0 1440 320" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                <path fill="#ffffff" fill-opacity="1"
                    d="M0,192L48,197.3C96,203,192,213,288,229.3C384,245,480,267,576,250.7C672,235,768,181,864,181.3C960,181,1056,235,1152,234.7C1248,235,1344,181,1392,154.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                </path>
            </svg>
        </div>
    </section>

    <section id="mitra" class="py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-4xl md:text-6xl font-black text-neutral-900 mb-4">Mitra UMKM Pilihan</h2>
                <p class="text-lg text-neutral-600">Temukan ribuan UMKM berkualitas yang siap melayani kebutuhanmu</p>
            </div>

            <div class="max-w-4xl mx-auto mb-12">
                <div class="bg-white rounded-2xl shadow-md p-2 md:p-4 mb-8">
                    <div class="relative">
                        <i data-lucide="search" class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-neutral-400"></i>
                        <input type="text" id="mitra-search" placeholder="Cari nama mitra, kategori, atau lokasi..."
                            class="w-full pl-12 pr-4 py-3 bg-neutral-50 rounded-xl border-none focus:ring-2 focus:ring-primary-500 font-medium placeholder-neutral-400">
                    </div>
                </div>

                <div class="flex flex-wrap justify-center gap-3" id="category-filters">
                    <button class="filter-btn active px-6 py-2.5 rounded-full bg-neutral-900 text-white font-semibold transition-all hover:shadow-lg" data-category="all">Semua</button>
                    <button class="filter-btn px-6 py-2.5 rounded-full bg-white text-neutral-600 font-semibold border border-neutral-200 hover:bg-neutral-50 hover:border-neutral-300 transition-all"
                        data-category="kuliner">Kuliner</button>
                    <button class="filter-btn px-6 py-2.5 rounded-full bg-white text-neutral-600 font-semibold border border-neutral-200 hover:bg-neutral-50 hover:border-neutral-300 transition-all"
                        data-category="fashion">Fashion</button>
                    <button class="filter-btn px-6 py-2.5 rounded-full bg-white text-neutral-600 font-semibold border border-neutral-200 hover:bg-neutral-50 hover:border-neutral-300 transition-all"
                        data-category="jasa">Jasa</button>
                    <button class="filter-btn px-6 py-2.5 rounded-full bg-white text-neutral-600 font-semibold border border-neutral-200 hover:bg-neutral-50 hover:border-neutral-300 transition-all"
                        data-category="craft">Craft</button>
                </div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6" id="mitra-grid">
                <div class="mitra-card group bg-white rounded-3xl overflow-hidden border border-neutral-100 hover:shadow-xl transition-all duration-300" data-category="kuliner" data-name="Kopi Senja">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1497935586351-b67a49e012bf?w=400&h=300&fit=crop" alt="Kopi Senja"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-white/90 backdrop-blur-sm rounded-full text-xs font-bold text-neutral-900 shadow-sm">
                                Kuliner
                            </span>
                        </div>
                    </div>
                    <div class="p-5">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="font-bold text-lg text-neutral-900 group-hover:text-primary-600 transition-colors">Kopi Senja</h3>
                            <div class="flex items-center gap-1">
                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-yellow-500"></i>
                                <span class="text-sm font-bold text-neutral-900">4.9</span>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 text-neutral-500 text-sm mb-4">
                            <i data-lucide="map-pin" class="w-4 h-4"></i>
                            <span>Jakarta Selatan</span>
                        </div>
                        <div class="flex items-center justify-between pt-4 border-t border-neutral-100">
                            <span class="text-xs font-semibold text-green-600 bg-green-50 px-2 py-1 rounded-md">Buka</span>
                            <button class="w-8 h-8 rounded-full bg-neutral-100 flex items-center justify-center hover:bg-primary-500 hover:text-white transition-all">
                                <i data-lucide="arrow-right" class="w-4 h-4"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="mitra-card group bg-white rounded-3xl overflow-hidden border border-neutral-100 hover:shadow-xl transition-all duration-300" data-category="jasa" data-name="Clean Pro">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80" alt="Clean Pro"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-white/90 backdrop-blur-sm rounded-full text-xs font-bold text-neutral-900 shadow-sm">
                                Jasa
                            </span>
                        </div>
                    </div>
                    <div class="p-5">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="font-bold text-lg text-neutral-900 group-hover:text-primary-600 transition-colors">Clean Pro</h3>
                            <div class="flex items-center gap-1">
                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-yellow-500"></i>
                                <span class="text-sm font-bold text-neutral-900">4.8</span>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 text-neutral-500 text-sm mb-4">
                            <i data-lucide="map-pin" class="w-4 h-4"></i>
                            <span>Bandung</span>
                        </div>
                        <div class="flex items-center justify-between pt-4 border-t border-neutral-100">
                            <span class="text-xs font-semibold text-green-600 bg-green-50 px-2 py-1 rounded-md">Online</span>
                            <button class="w-8 h-8 rounded-full bg-neutral-100 flex items-center justify-center hover:bg-primary-500 hover:text-white transition-all">
                                <i data-lucide="arrow-right" class="w-4 h-4"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="mitra-card group bg-white rounded-3xl overflow-hidden border border-neutral-100 hover:shadow-xl transition-all duration-300" data-category="fashion" data-name="Batik Modern">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?w=400&h=300&fit=crop" alt="Batik Modern"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-white/90 backdrop-blur-sm rounded-full text-xs font-bold text-neutral-900 shadow-sm">
                                Fashion
                            </span>
                        </div>
                    </div>
                    <div class="p-5">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="font-bold text-lg text-neutral-900 group-hover:text-primary-600 transition-colors">Batik Modern</h3>
                            <div class="flex items-center gap-1">
                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-yellow-500"></i>
                                <span class="text-sm font-bold text-neutral-900">5.0</span>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 text-neutral-500 text-sm mb-4">
                            <i data-lucide="map-pin" class="w-4 h-4"></i>
                            <span>Yogyakarta</span>
                        </div>
                        <div class="flex items-center justify-between pt-4 border-t border-neutral-100">
                            <span class="text-xs font-semibold text-green-600 bg-green-50 px-2 py-1 rounded-md">Buka</span>
                            <button class="w-8 h-8 rounded-full bg-neutral-100 flex items-center justify-center hover:bg-primary-500 hover:text-white transition-all">
                                <i data-lucide="arrow-right" class="w-4 h-4"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="mitra-card group bg-white rounded-3xl overflow-hidden border border-neutral-100 hover:shadow-xl transition-all duration-300" data-category="craft" data-name="Pottery Art">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1493106641515-6b5631de4bb9?w=400&h=300&fit=crop" alt="Pottery Art"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-white/90 backdrop-blur-sm rounded-full text-xs font-bold text-neutral-900 shadow-sm">
                                Craft
                            </span>
                        </div>
                    </div>
                    <div class="p-5">
                        <div class="flex items-center justify-between mb-2">
                            <h3 class="font-bold text-lg text-neutral-900 group-hover:text-primary-600 transition-colors">Pottery Art</h3>
                            <div class="flex items-center gap-1">
                                <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-yellow-500"></i>
                                <span class="text-sm font-bold text-neutral-900">4.7</span>
                            </div>
                        </div>
                        <div class="flex items-center gap-2 text-neutral-500 text-sm mb-4">
                            <i data-lucide="map-pin" class="w-4 h-4"></i>
                            <span>Bali</span>
                        </div>
                        <div class="flex items-center justify-between pt-4 border-t border-neutral-100">
                            <span class="text-xs font-semibold text-neutral-500 bg-neutral-100 px-2 py-1 rounded-md">Tutup</span>
                            <button class="w-8 h-8 rounded-full bg-neutral-100 flex items-center justify-center hover:bg-primary-500 hover:text-white transition-all">
                                <i data-lucide="arrow-right" class="w-4 h-4"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-12 text-center">
                <a href="#"
                    class="inline-flex items-center gap-2 px-8 py-4 bg-white border-2 border-neutral-200 text-neutral-900 font-bold rounded-full hover:border-primary-500 hover:text-primary-600 transition-all group">
                    <span>Lihat Semua Mitra</span>
                    <i data-lucide="arrow-right" class="w-5 h-5 group-hover:translate-x-1 transition-transform"></i>
                </a>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const searchInput = document.getElementById('mitra-search');
                const filterBtns = document.querySelectorAll('.filter-btn');
                const cards = document.querySelectorAll('.mitra-card');

                // Category Filter
                filterBtns.forEach(btn => {
                    btn.addEventListener('click', () => {
                        // Remove active class from all
                        filterBtns.forEach(b => {
                            b.classList.remove('active', 'bg-neutral-900', 'text-white');
                            b.classList.add('bg-white', 'text-neutral-600');
                        });

                        // Add active class to clicked
                        btn.classList.remove('bg-white', 'text-neutral-600');
                        btn.classList.add('active', 'bg-neutral-900', 'text-white');

                        const category = btn.dataset.category;
                        filterCards(category, searchInput.value);
                    });
                });

                // Search Filter
                searchInput.addEventListener('input', (e) => {
                    const activeBtn = document.querySelector('.filter-btn.active');
                    const category = activeBtn.dataset.category;
                    filterCards(category, e.target.value);
                });

                function filterCards(category, searchTerm) {
                    searchTerm = searchTerm.toLowerCase();

                    cards.forEach(card => {
                        const cardCategory = card.dataset.category;
                        const cardName = card.dataset.name.toLowerCase();

                        const matchesCategory = category === 'all' || cardCategory === category;
                        const matchesSearch = cardName.includes(searchTerm);

                        if (matchesCategory && matchesSearch) {
                            card.style.display = 'block';
                            // Add animation
                            card.style.opacity = '0';
                            card.style.transform = 'translateY(20px)';
                            setTimeout(() => {
                                card.style.transition = 'all 0.4s ease';
                                card.style.opacity = '1';
                                card.style.transform = 'translateY(0)';
                            }, 50);
                        } else {
                            card.style.display = 'none';
                        }
                    });
                }
            });
        </script>
    </section>

    <section id="layanan" class="py-20 bg-neutral-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-4xl md:text-5xl font-black text-neutral-900 mb-4">Mengapa Memilih Platform Kami</h2>
                <p class="text-lg text-neutral-600">Platform terpercaya untuk membantu UMKM berkembang di era digital</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="group" data-animate>
                    <div class="bg-white rounded-3xl p-8 h-full border border-neutral-100 hover:border-primary-200 hover:shadow-lg transition-all text-center">
                        <div class="w-16 h-16 bg-primary-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <i data-lucide="mouse-pointer-click" class="w-8 h-8 text-primary-600"></i>
                        </div>
                        <h3 class="text-xl font-bold text-neutral-900 mb-3">Mudah Diakses</h3>
                        <p class="text-neutral-600">Akses platform kapan saja dan dimana saja melalui perangkat apapun.</p>
                    </div>
                </div>

                <div class="group" data-animate>
                    <div class="bg-white rounded-3xl p-8 h-full border border-neutral-100 hover:border-secondary-200 hover:shadow-lg transition-all text-center">
                        <div class="w-16 h-16 bg-secondary-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <i data-lucide="layers" class="w-8 h-8 text-secondary-600"></i>
                        </div>
                        <h3 class="text-xl font-bold text-neutral-900 mb-3">Beragam</h3>
                        <p class="text-neutral-600">Tersedia berbagai kategori layanan dan produk dari UMKM terpilih.</p>
                    </div>
                </div>

                <div class="group" data-animate>
                    <div class="bg-white rounded-3xl p-8 h-full border border-neutral-100 hover:border-accent-200 hover:shadow-lg transition-all text-center">
                        <div class="w-16 h-16 bg-accent-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <i data-lucide="wallet" class="w-8 h-8 text-accent-600"></i>
                        </div>
                        <h3 class="text-xl font-bold text-neutral-900 mb-3">Harga Terjangkau</h3>
                        <p class="text-neutral-600">Biaya berlangganan yang terjangkau untuk semua skala bisnis.</p>
                    </div>
                </div>

                <div class="group" data-animate>
                    <div class="bg-white rounded-3xl p-8 h-full border border-neutral-100 hover:border-primary-200 hover:shadow-lg transition-all text-center">
                        <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <i data-lucide="shield-check" class="w-8 h-8 text-green-600"></i>
                        </div>
                        <h3 class="text-xl font-bold text-neutral-900 mb-3">Dapat Dipercaya</h3>
                        <p class="text-neutral-600">Platform aman dan terpercaya dengan sistem keamanan terjamin.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-4xl md:text-5xl font-black text-neutral-900 mb-4">Semua Fitur yang Anda Butuhkan</h2>
                <p class="text-lg text-neutral-600">Lengkapi kebutuhan bisnis Anda dengan fitur-fitur yang kami sediakan</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div class="md:col-span-2 bg-linear-to-br from-primary-500 to-primary-600 rounded-3xl p-8 flex flex-col justify-between hover:shadow-xl transition-all relative overflow-hidden group min-h-[220px]"
                    data-animate>
                    <div class="absolute -right-10 -bottom-10 w-48 h-48 bg-white/10 rounded-full"></div>
                    <div class="relative z-10">
                        <div class="w-14 h-14 bg-white/20 backdrop-blur-sm rounded-2xl flex items-center justify-center mb-4">
                            <i data-lucide="globe" class="w-7 h-7 text-white"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-2">Website Instan</h3>
                        <p class="text-white/80">Miliki website toko online profesional tanpa biaya tambahan.</p>
                    </div>
                </div>

                <div class="bg-neutral-900 rounded-3xl p-6 flex flex-col justify-between hover:shadow-xl transition-all group min-h-[220px]" data-animate>
                    <div class="w-12 h-12 bg-secondary-500 rounded-xl flex items-center justify-center">
                        <i data-lucide="layout-dashboard" class="w-6 h-6 text-white"></i>
                    </div>
                    <div class="mt-auto">
                        <h3 class="text-xl font-bold text-white mb-2">Dashboard</h3>
                        <p class="text-neutral-400 text-sm">Kelola bisnis dalam satu dashboard.</p>
                    </div>
                </div>

                <div class="bg-linear-to-br from-accent-400 to-accent-500 rounded-3xl p-6 flex flex-col justify-between hover:shadow-xl transition-all group min-h-[220px]" data-animate>
                    <div class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center">
                        <i data-lucide="package" class="w-6 h-6 text-white"></i>
                    </div>
                    <div class="mt-auto">
                        <h3 class="text-xl font-bold text-white mb-2">Kelola Produk</h3>
                        <p class="text-white/80 text-sm">Atur katalog produk dengan mudah.</p>
                    </div>
                </div>

                <div class="bg-linear-to-br from-emerald-500 to-green-600 rounded-3xl p-6 flex flex-col justify-between hover:shadow-xl transition-all group min-h-[220px]" data-animate>
                    <div class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center">
                        <i data-lucide="wallet" class="w-6 h-6 text-white"></i>
                    </div>
                    <div class="mt-auto">
                        <h3 class="text-xl font-bold text-white mb-2">Pembayaran</h3>
                        <p class="text-white/80 text-sm">QRIS, Transfer, E-Wallet.</p>
                    </div>
                </div>

                <div class="bg-linear-to-br from-blue-500 to-indigo-600 rounded-3xl p-6 flex flex-col justify-between hover:shadow-xl transition-all group min-h-[220px]" data-animate>
                    <div class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center">
                        <i data-lucide="calendar-check" class="w-6 h-6 text-white"></i>
                    </div>
                    <div class="mt-auto">
                        <h3 class="text-xl font-bold text-white mb-2">Booking</h3>
                        <p class="text-white/80 text-sm">Penjadwalan otomatis.</p>
                    </div>
                </div>

                <div class="md:col-span-2 bg-linear-to-r from-purple-600 to-violet-600 rounded-3xl p-6 flex flex-col justify-between hover:shadow-xl transition-all group min-h-[220px] relative overflow-hidden"
                    data-animate>
                    <div class="absolute -right-16 -top-16 w-48 h-48 bg-white/5 rounded-full"></div>
                    <div class="flex items-center gap-3 relative z-10">
                        <div class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center">
                            <i data-lucide="smartphone" class="w-6 h-6 text-white"></i>
                        </div>
                        <div class="w-12 h-12 bg-white/20 backdrop-blur-sm rounded-xl flex items-center justify-center">
                            <i data-lucide="headphones" class="w-6 h-6 text-white"></i>
                        </div>
                    </div>
                    <div class="mt-auto relative z-10">
                        <h3 class="text-xl font-bold text-white mb-2">Mobile & Support 24/7</h3>
                        <p class="text-white/80 text-sm">Responsif di semua perangkat. Tim support siap membantu.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="fitur" class="py-20 bg-neutral-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-black mb-4">Kami bantu kamu navigasi bisnis dengan mudah</h2>
                <p class="text-neutral-400 text-lg">Dalam kondisi apapun</p>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-primary-500 rounded-3xl p-8" data-animate>
                    <div class="flex items-center gap-3 mb-6">
                        <i data-lucide="sparkles" class="w-6 h-6"></i>
                        <span class="font-semibold">Jasa & Layanan</span>
                    </div>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3">
                            <i data-lucide="check" class="w-5 h-5"></i>
                            <span>Cleaning Service</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="check" class="w-5 h-5"></i>
                            <span>Laundry</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="check" class="w-5 h-5"></i>
                            <span>Salon & Kecantikan</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="check" class="w-5 h-5"></i>
                            <span>Perbaikan Rumah</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="check" class="w-5 h-5"></i>
                            <span>Pet Grooming</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-white text-neutral-900 rounded-3xl p-8" data-animate>
                    <div class="flex items-center gap-3 mb-6">
                        <i data-lucide="utensils" class="w-6 h-6 text-secondary-500"></i>
                        <span class="font-semibold">Makanan & Minuman</span>
                    </div>
                    <ul class="space-y-3 text-neutral-600">
                        <li class="flex items-center gap-3">
                            <i data-lucide="check" class="w-5 h-5 text-secondary-500"></i>
                            <span>Catering Harian</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="check" class="w-5 h-5 text-secondary-500"></i>
                            <span>Snack & Kue</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="check" class="w-5 h-5 text-secondary-500"></i>
                            <span>Minuman Kekinian</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="check" class="w-5 h-5 text-secondary-500"></i>
                            <span>Frozen Food</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="check" class="w-5 h-5 text-secondary-500"></i>
                            <span>Sembako</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-neutral-800 rounded-3xl p-8" data-animate>
                    <div class="flex items-center gap-3 mb-6">
                        <i data-lucide="briefcase" class="w-6 h-6 text-accent-400"></i>
                        <span class="font-semibold">Solusi Bisnis</span>
                    </div>
                    <ul class="space-y-3 text-neutral-300">
                        <li class="flex items-center gap-3">
                            <i data-lucide="check" class="w-5 h-5 text-accent-400"></i>
                            <span>Dashboard Analytics</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="check" class="w-5 h-5 text-accent-400"></i>
                            <span>Laporan Keuangan</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="check" class="w-5 h-5 text-accent-400"></i>
                            <span>Booking System</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="check" class="w-5 h-5 text-accent-400"></i>
                            <span>Multi Payment</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="check" class="w-5 h-5 text-accent-400"></i>
                            <span>Customer CRM</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="cara-kerja" class="py-20 bg-neutral-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-4xl md:text-5xl font-black text-neutral-900 mb-4">Cara Kerja</h2>
                <p class="text-lg text-neutral-600">Mulai perjalanan digital bisnis Anda dalam 4 langkah mudah</p>
            </div>

            <div class="grid md:grid-cols-4 gap-8">
                <div class="text-center relative" data-animate>
                    <div class="w-16 h-16 bg-primary-500 rounded-full flex items-center justify-center mx-auto mb-4 text-white text-2xl font-black relative z-10">
                        1
                    </div>
                    <div class="hidden md:block absolute top-8 left-1/2 w-full h-0.5 bg-neutral-200 z-0"></div>
                    <h3 class="text-xl font-bold text-neutral-900 mb-2">Daftar Akun</h3>
                    <p class="text-neutral-600">Buat akun gratis dan lengkapi profil bisnis Anda.</p>
                </div>

                <div class="text-center relative" data-animate>
                    <div class="w-16 h-16 bg-secondary-500 rounded-full flex items-center justify-center mx-auto mb-4 text-white text-2xl font-black relative z-10">
                        2
                    </div>
                    <div class="hidden md:block absolute top-8 left-1/2 w-full h-0.5 bg-neutral-200 z-0"></div>
                    <h3 class="text-xl font-bold text-neutral-900 mb-2">Setup Toko</h3>
                    <p class="text-neutral-600">Tambahkan produk atau layanan yang ingin dijual.</p>
                </div>

                <div class="text-center relative" data-animate>
                    <div class="w-16 h-16 bg-accent-500 rounded-full flex items-center justify-center mx-auto mb-4 text-white text-2xl font-black relative z-10">
                        3
                    </div>
                    <div class="hidden md:block absolute top-8 left-1/2 w-full h-0.5 bg-neutral-200 z-0"></div>
                    <h3 class="text-xl font-bold text-neutral-900 mb-2">Terima Order</h3>
                    <p class="text-neutral-600">Toko online! Mulai terima pesanan dari pelanggan.</p>
                </div>

                <div class="text-center" data-animate>
                    <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4 text-white text-2xl font-black">
                        4
                    </div>
                    <h3 class="text-xl font-bold text-neutral-900 mb-2">Raih Untung</h3>
                    <p class="text-neutral-600">Kelola bisnis dan pantau perkembangan pendapatan.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="harga" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl md:text-5xl font-black text-center text-neutral-900 mb-4">Pilih paket yang cocok</h2>
            <p class="text-lg text-neutral-600 text-center mb-16">Mulai dari gratis, upgrade kapan aja</p>

            <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                <div class="bg-neutral-50 rounded-3xl p-8 border-2 border-neutral-200" data-animate>
                    <div class="flex items-center justify-between mb-6">
                        <div>
                            <h3 class="text-2xl font-bold text-neutral-900">Gratis</h3>
                            <p class="text-neutral-500">Untuk yang baru mulai</p>
                        </div>
                        <div class="text-right">
                            <p class="text-4xl font-black text-neutral-900">Rp 0</p>
                            <p class="text-neutral-500">/bulan</p>
                        </div>
                    </div>

                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center gap-3">
                            <i data-lucide="check" class="w-5 h-5 text-primary-500"></i>
                            <span class="text-neutral-700">Maksimal 20 produk</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="check" class="w-5 h-5 text-primary-500"></i>
                            <span class="text-neutral-700">Dashboard basic</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="check" class="w-5 h-5 text-primary-500"></i>
                            <span class="text-neutral-700">Pembayaran transfer</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="x" class="w-5 h-5 text-neutral-300"></i>
                            <span class="text-neutral-400">Booking system</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="x" class="w-5 h-5 text-neutral-300"></i>
                            <span class="text-neutral-400">Laporan keuangan</span>
                        </li>
                    </ul>

                    <a href="{{ route('register') ?? '#' }}" class="block w-full py-4 text-center bg-neutral-900 text-white font-bold rounded-full hover:bg-neutral-800 transition-all">
                        Mulai Gratis
                    </a>
                </div>

                <div class="bg-primary-500 rounded-3xl p-8 text-white relative overflow-hidden" data-animate>
                    <div class="flex items-center justify-between mb-6">
                        <div>
                            <h3 class="text-2xl font-bold">Pro</h3>
                            <p class="text-white/70">Untuk yang mau scale up</p>
                        </div>
                        <div class="text-right">
                            <p class="text-4xl font-black">Rp 99K</p>
                            <p class="text-white/70">/bulan</p>
                        </div>
                    </div>

                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center gap-3">
                            <i data-lucide="check" class="w-5 h-5"></i>
                            <span>Produk unlimited</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="check" class="w-5 h-5"></i>
                            <span>Dashboard lengkap</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="check" class="w-5 h-5"></i>
                            <span>Multi pembayaran + QRIS</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="check" class="w-5 h-5"></i>
                            <span>Booking system</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i data-lucide="check" class="w-5 h-5"></i>
                            <span>Laporan keuangan lengkap</span>
                        </li>
                    </ul>

                    <a href="{{ route('register') ?? '#' }}" class="block w-full py-4 text-center bg-white text-primary-600 font-bold rounded-full hover:bg-neutral-100 transition-all">
                        Pilih Pro
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-primary-500 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-10 left-10 w-40 h-40 border-4 border-white rounded-full"></div>
            <div class="absolute bottom-10 right-10 w-32 h-32 border-4 border-white rounded-full"></div>
            <div class="absolute top-1/2 left-1/2 w-60 h-60 border-4 border-white rounded-full -translate-x-1/2 -translate-y-1/2"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="text-white">
                    <h2 class="text-4xl md:text-5xl font-black mb-6">
                        Punya UMKM?<br>
                        <span class="text-neutral-900">Bergabunglah dengan Kami</span>
                    </h2>
                    <p class="text-lg text-white/80 mb-8 max-w-md">
                        Bergabunglah dengan ribuan UMKM lainnya yang telah sukses berjualan online. Daftarkan bisnis Anda sekarang!
                    </p>
                    <div class="flex flex-wrap gap-4">
                        <a href="{{ route('register') ?? '#' }}"
                            class="inline-flex items-center gap-2 px-8 py-4 bg-white text-primary-600 font-bold rounded-full hover:bg-neutral-100 transition-all shadow-lg">
                            <span>Daftar Sekarang</span>
                            <i data-lucide="arrow-right" class="w-5 h-5"></i>
                        </a>
                        <a href="#" class="inline-flex items-center gap-2 px-8 py-4 bg-primary-600 text-white font-bold rounded-full hover:bg-primary-700 transition-all border-2 border-white/30">
                            <i data-lucide="message-circle" class="w-5 h-5"></i>
                            <span>Hubungi Sales</span>
                        </a>
                    </div>
                </div>

                <div class="relative hidden lg:block">
                    <div class="bg-white rounded-3xl p-6 shadow-2xl max-w-sm ml-auto transform rotate-3">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-14 h-14 bg-primary-100 rounded-2xl flex items-center justify-center">
                                <i data-lucide="store" class="w-7 h-7 text-primary-600"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-neutral-900">Toko Kamu</h3>
                                <p class="text-sm text-neutral-500">Online & siap terima order</p>
                            </div>
                        </div>
                        <div class="space-y-3">
                            <div class="flex items-center justify-between p-3 bg-neutral-50 rounded-xl">
                                <span class="text-sm text-neutral-600">Order Hari Ini</span>
                                <span class="font-bold text-primary-600">12 order</span>
                            </div>
                            <div class="flex items-center justify-between p-3 bg-neutral-50 rounded-xl">
                                <span class="text-sm text-neutral-600">Pendapatan</span>
                                <span class="font-bold text-primary-600">Rp 2.4jt</span>
                            </div>
                            <div class="flex items-center justify-between p-3 bg-primary-50 rounded-xl">
                                <span class="text-sm text-primary-600">Rating</span>
                                <div class="flex items-center gap-1">
                                    <i data-lucide="star" class="w-4 h-4 text-yellow-500 fill-yellow-500"></i>
                                    <span class="font-bold text-primary-600">4.9</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection