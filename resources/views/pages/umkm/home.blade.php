@extends('layouts.umkm')

@section('title', 'UMKM Name - Professional Cleaning Service')

@section('content')
    <section class="relative pt-10 pb-20 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
        <nav class="flex mb-8 text-sm text-neutral-500">
            <a href="#" class="hover:text-primary-600 transition-colors">Home</a>
            <span class="mx-2">/</span>
            <span class="text-neutral-900 font-medium">Store Profile</span>
        </nav>

        <div class="mb-8">
            <h1 class="text-4xl md:text-5xl font-black text-neutral-900 mb-4 tracking-tight">UMKM Name Cleaning Service</h1>
            <div class="flex items-center gap-2 text-neutral-500">
                <i data-lucide="map-pin" class="w-4 h-4 text-primary-500"></i>
                <span>Denpasar, Bali</span>
                <span class="mx-2">•</span>
                <span class="text-primary-600 font-medium bg-primary-50 px-3 py-1 rounded-full text-xs">Verified Partner</span>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 h-[500px] mb-8 rounded-3xl overflow-hidden">
            <div class="md:col-span-2 md:row-span-2 relative group overflow-hidden">
                <img src="https://images.unsplash.com/photo-1581578731117-104f2a863a30?w=800&q=80" alt="Cleaning Service Main"
                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/10 group-hover:bg-black/0 transition-colors duration-500"></div>
            </div>
            <div class="relative group overflow-hidden">
                <img src="https://images.unsplash.com/photo-1527515637-62da7a0a1329?w=400&q=80" alt="Cleaning Detail 1"
                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
            </div>
            <div class="relative group overflow-hidden">
                <img src="https://images.unsplash.com/photo-1584622050111-993a426fbf0a?w=400&q=80" alt="Cleaning Detail 2"
                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
            </div>
            <div class="relative group overflow-hidden">
                <img src="https://images.unsplash.com/photo-1628177142898-93e36e4e3a50?w=400&q=80" alt="Cleaning Detail 3"
                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
            </div>
            <div class="relative group overflow-hidden">
                <img src="https://images.unsplash.com/photo-1556910103-1c02745a30bf?w=400&q=80" alt="Cleaning Detail 4"
                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <button class="absolute inset-0 bg-black/50 text-white font-bold text-lg flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                    Lihat Semua Foto
                </button>
            </div>
        </div>

        <div class="bg-white border border-neutral-100 rounded-2xl p-6 shadow-soft flex flex-col md:flex-row items-center justify-between gap-6 animate-fade-in-up">
            <div class="flex flex-col md:flex-row items-center gap-6 w-full md:w-auto">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 rounded-full bg-primary-50 flex items-center justify-center text-primary-600">
                        <i data-lucide="clock" class="w-6 h-6"></i>
                    </div>
                    <div>
                        <p class="text-xs text-neutral-500 font-medium uppercase tracking-wide">Jam Buka</p>
                        <p class="font-bold text-neutral-900">08:00 - 17:00</p>
                    </div>
                </div>
                <div class="w-px h-10 bg-neutral-100 hidden md:block"></div>
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 rounded-full bg-primary-50 flex items-center justify-center text-primary-600">
                        <i data-lucide="map-pin" class="w-6 h-6"></i>
                    </div>
                    <div>
                        <p class="text-xs text-neutral-500 font-medium uppercase tracking-wide">Lokasi</p>
                        <p class="font-bold text-neutral-900">Denpasar, Bali</p>
                    </div>
                </div>
            </div>

            <div class="flex items-center gap-4 w-full md:w-auto">
                <button
                    class="flex-1 md:flex-none px-6 py-3 bg-neutral-900 text-white font-bold rounded-xl hover:bg-neutral-800 transition-all shadow-md hover:shadow-lg flex items-center justify-center gap-2">
                    <i data-lucide="phone" class="w-4 h-4"></i>
                    <span>Hubungi Kami</span>
                </button>
                <button
                    class="flex-1 md:flex-none px-6 py-3 border-2 border-primary-500 text-primary-600 font-bold rounded-xl hover:bg-primary-50 transition-all flex items-center justify-center gap-2 group">
                    <span>Lihat Layanan</span>
                    <i data-lucide="arrow-down" class="w-4 h-4 transition-transform group-hover:translate-y-1"></i>
                </button>
            </div>
        </div>

        <div class="mt-8 text-center max-w-2xl mx-auto">
            <p class="text-neutral-600 leading-relaxed">
                UMKM Name Cleaning Service adalah penyedia jasa kebersihan profesional yang berfokus pada kualitas dan kepuasan pelanggan. Kami menggunakan peralatan modern dan bahan pembersih ramah
                lingkungan.
            </p>
        </div>
    </section>

    <section id="services" class="py-20 bg-neutral-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-end justify-between mb-12 gap-6">
                <div>
                    <h2 class="text-3xl font-black text-neutral-900 mb-4">Layanan Tersedia</h2>
                    <p class="text-neutral-500">Pilih paket kebersihan yang sesuai dengan kebutuhan Anda</p>
                </div>

                <div class="relative w-full md:w-80">
                    <input type="text" placeholder="Cari layanan..."
                        class="w-full pl-12 pr-4 py-3 bg-white border border-neutral-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all shadow-sm">
                    <i data-lucide="search" class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-neutral-400"></i>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white rounded-2xl overflow-hidden shadow-soft hover:shadow-lg transition-all duration-300 border border-neutral-100 group">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1581578731117-104f2a863a30?w=600&q=80" alt="Deep Cleaning Sofa"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-white/90 backdrop-blur-md text-xs font-bold text-neutral-900 rounded-lg shadow-sm">Best Seller</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-neutral-900 mb-2 group-hover:text-primary-600 transition-colors">Deep Cleaning Sofa</h3>
                        <p class="text-sm text-neutral-500 mb-4 line-clamp-2">Pembersihan sofa secara menyeluruh menggunakan alat estrator modern.</p>
                        <div class="flex items-center justify-between mb-6">
                            <div>
                                <p class="text-xs text-neutral-400">Mulai dari</p>
                                <p class="text-lg font-black text-primary-600">Rp 40.000</p>
                            </div>
                        </div>
                        <button class="w-full py-3 bg-neutral-900 text-white font-bold rounded-xl hover:bg-neutral-800 transition-all flex items-center justify-center gap-2 group-hover:bg-primary-500">
                            <span>Pilih Layanan</span>
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </button>
                    </div>
                </div>

                <div class="bg-white rounded-2xl overflow-hidden shadow-soft hover:shadow-lg transition-all duration-300 border border-neutral-100 group">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1527515637-62da7a0a1329?w=600&q=80" alt="General Cleaning"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-neutral-900 mb-2 group-hover:text-primary-600 transition-colors">General Cleaning</h3>
                        <p class="text-sm text-neutral-500 mb-4 line-clamp-2">Layanan pembersihan umum untuk rumah atau kantor harian.</p>
                        <div class="flex items-center justify-between mb-6">
                            <div>
                                <p class="text-xs text-neutral-400">Mulai dari</p>
                                <p class="text-lg font-black text-primary-600">Rp 100.000</p>
                            </div>
                        </div>
                        <button class="w-full py-3 bg-neutral-900 text-white font-bold rounded-xl hover:bg-neutral-800 transition-all flex items-center justify-center gap-2 group-hover:bg-primary-500">
                            <span>Pilih Layanan</span>
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </button>
                    </div>
                </div>

                <div class="bg-white rounded-2xl overflow-hidden shadow-soft hover:shadow-lg transition-all duration-300 border border-neutral-100 group">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1616165529124-78332155f9ce?w=600&q=80" alt="Cuci AC Split"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-neutral-900 mb-2 group-hover:text-primary-600 transition-colors">Cuci AC Split</h3>
                        <p class="text-sm text-neutral-500 mb-4 line-clamp-2">Perawatan dan pembersihan AC split berkala agar tetap dingin.</p>
                        <div class="flex items-center justify-between mb-6">
                            <div>
                                <p class="text-xs text-neutral-400">Mulai dari</p>
                                <p class="text-lg font-black text-primary-600">Rp 75.000</p>
                            </div>
                        </div>
                        <button class="w-full py-3 bg-neutral-900 text-white font-bold rounded-xl hover:bg-neutral-800 transition-all flex items-center justify-center gap-2 group-hover:bg-primary-500">
                            <span>Pilih Layanan</span>
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </button>
                    </div>
                </div>

                <div class="bg-white rounded-2xl overflow-hidden shadow-soft hover:shadow-lg transition-all duration-300 border border-neutral-100 group">
                    <div class="relative h-48 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1558317374-a354d5f8d429?w=600&q=80" alt="Cuci Karpet"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-neutral-900 mb-2 group-hover:text-primary-600 transition-colors">Cuci Karpet</h3>
                        <p class="text-sm text-neutral-500 mb-4 line-clamp-2">Pembersihan karpet dengan mesin khusus untuk hasil maksimal.</p>
                        <div class="flex items-center justify-between mb-6">
                            <div>
                                <p class="text-xs text-neutral-400">Mulai dari</p>
                                <p class="text-lg font-black text-primary-600">Rp 35.000</p>
                            </div>
                        </div>
                        <button class="w-full py-3 bg-neutral-900 text-white font-bold rounded-xl hover:bg-neutral-800 transition-all flex items-center justify-center gap-2 group-hover:bg-primary-500">
                            <span>Pilih Layanan</span>
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="mt-12 text-center">
                <a href="#" class="inline-flex items-center gap-2 text-neutral-500 hover:text-primary-600 font-semibold transition-colors">
                    <span>Lihat Lebih Banyak</span>
                    <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
            </div>
        </div>
    </section>

    <section class="py-20 bg-neutral-900 text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-20">
            <div class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1581578731117-104f2a863a30?w=1920&q=80')] bg-cover bg-center"></div>
        </div>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <h2 class="text-3xl md:text-5xl font-black mb-6">Butuh bantuan custom?</h2>
            <p class="text-lg text-neutral-400 mb-10 max-w-2xl mx-auto">
                Kamu bisa menghubungi kami untuk paket custom sesuai dengan kebutuhan spesifik hunian atau kantor Anda.
            </p>
            <button class="px-8 py-4 bg-white text-neutral-900 font-bold text-lg rounded-full hover:bg-primary-500 hover:text-white transition-all shadow-lg hover:shadow-primary-500/30 hover:scale-105">
                Hubungi via WhatsApp
            </button>
        </div>
    </section>

    <section id="about" class="py-24 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
            <div>
                <span class="text-primary-600 font-bold uppercase tracking-wider text-sm mb-2 block">Tentang Kami</span>
                <h2 class="text-4xl md:text-5xl font-black text-neutral-900 mb-6">Layanan Kebersihan Terpercaya Sejak 2020</h2>
                <p class="text-lg text-neutral-600 mb-8 leading-relaxed">
                    UMKM Name adalah penyedia jasa cleaning service profesional yang telah berpengalaman melayani berbagai klien di Bali. Kami berkomitmen untuk memberikan layanan terbaik dengan harga
                    terjangkau.
                </p>

                <ul class="space-y-4">
                    <li class="flex items-center gap-3">
                        <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center text-primary-600">
                            <i data-lucide="check" class="w-4 h-4"></i>
                        </div>
                        <span class="text-neutral-700 font-medium">Tim profesional dan terlatih</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center text-primary-600">
                            <i data-lucide="check" class="w-4 h-4"></i>
                        </div>
                        <span class="text-neutral-700 font-medium">Peralatan modern dan berkualitas</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <div class="w-6 h-6 rounded-full bg-primary-100 flex items-center justify-center text-primary-600">
                            <i data-lucide="check" class="w-4 h-4"></i>
                        </div>
                        <span class="text-neutral-700 font-medium">Harga transparan dan terjangkau</span>
                    </li>
                </ul>
            </div>
            <div class="relative">
                <div class="absolute -inset-4 bg-primary-500/10 rounded-5xl transform rotate-3"></div>
                <img src="https://images.unsplash.com/photo-1556910103-1c02745a30bf?w=800&q=80" alt="About Us Team"
                    class="relative w-full rounded-3xl shadow-2xl transform hover:-translate-y-2 transition-transform duration-500">

                <div class="absolute -bottom-8 -left-8 bg-white p-6 rounded-2xl shadow-xl flex items-center gap-4 animate-float">
                    <div class="w-12 h-12 bg-primary-500 rounded-xl flex items-center justify-center text-white">
                        <i data-lucide="users" class="w-6 h-6"></i>
                    </div>
                    <div>
                        <p class="text-2xl font-black text-neutral-900">500+</p>
                        <p class="text-sm text-neutral-500 font-medium">Klien Puas</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection