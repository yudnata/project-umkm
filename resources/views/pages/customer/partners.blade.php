@extends('layouts.customer')

@section('title', 'UMKM Partner - Customer Area')

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-8">
            <h1 class="text-3xl font-black text-neutral-900 mb-2">UMKM Partner</h1>
            <p class="text-neutral-500">Temukan mitra UMKM terbaik untuk kebutuhan Anda</p>
        </div>

        <div class="bg-white rounded-3xl border border-neutral-200 p-6 shadow-soft mb-8">
            <div class="flex flex-col md:flex-row gap-4 mb-6">
                <div class="relative flex-1">
                    <i data-lucide="search" class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-neutral-400"></i>
                    <input type="text" placeholder="Cari UMKM atau layanan..."
                        class="w-full pl-12 pr-4 py-3 bg-white border border-neutral-200 rounded-xl focus:outline-none focus:border-primary-500 focus:ring-2 focus:ring-primary-100 transition-all font-medium">
                </div>
                <button class="btn-primary px-8 py-3 font-bold rounded-xl shadow-lg flex items-center justify-center gap-2 text-white">
                    <i data-lucide="search" class="w-4 h-4"></i>
                    Cari
                </button>
            </div>

            <div class="flex gap-2 overflow-x-auto pb-2 scrollbar-hide">
                <button class="px-5 py-2.5 bg-primary-500 text-white text-sm font-bold rounded-full whitespace-nowrap shadow-md hover:bg-primary-600 transition-colors">Semua</button>
                <button
                    class="px-5 py-2.5 bg-neutral-50 hover:bg-primary-50 text-neutral-600 hover:text-primary-700 border border-neutral-200 hover:border-primary-200 text-sm font-bold rounded-full whitespace-nowrap transition-colors">Cleaning
                    Service</button>
                <button
                    class="px-5 py-2.5 bg-neutral-50 hover:bg-primary-50 text-neutral-600 hover:text-primary-700 border border-neutral-200 hover:border-primary-200 text-sm font-bold rounded-full whitespace-nowrap transition-colors">Catering</button>
                <button
                    class="px-5 py-2.5 bg-neutral-50 hover:bg-primary-50 text-neutral-600 hover:text-primary-700 border border-neutral-200 hover:border-primary-200 text-sm font-bold rounded-full whitespace-nowrap transition-colors">Laundry</button>
                <button
                    class="px-5 py-2.5 bg-neutral-50 hover:bg-primary-50 text-neutral-600 hover:text-primary-700 border border-neutral-200 hover:border-primary-200 text-sm font-bold rounded-full whitespace-nowrap transition-colors">Elektronik</button>
                <button
                    class="px-5 py-2.5 bg-neutral-50 hover:bg-primary-50 text-neutral-600 hover:text-primary-700 border border-neutral-200 hover:border-primary-200 text-sm font-bold rounded-full whitespace-nowrap transition-colors">Konstruksi</button>
            </div>
        </div>

        <div class="mb-6 text-sm text-neutral-500">
            Menampilkan <span class="font-bold text-neutral-900">6</span> UMKM
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
            <div class="partner-card bg-white rounded-3xl border border-neutral-200 overflow-hidden shadow-soft group">
                <div class="h-48 relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1581578731548-c64695cc6952?w=800&q=80" alt="Cleaning Service"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-linear-to-t from-black/60 via-transparent to-transparent"></div>
                    <div class="absolute bottom-4 left-4 z-10">
                        <div class="flex items-center gap-2">
                            <div class="w-10 h-10 bg-white rounded-lg flex items-center justify-center shadow-lg">
                                <i data-lucide="sparkles" class="w-5 h-5 text-primary-500"></i>
                            </div>
                            <span class="text-white font-bold text-sm bg-black/30 px-2 py-1 rounded backdrop-blur-sm">Cleaning Service</span>
                        </div>
                    </div>
                </div>

                <div class="p-6">
                    <div class="flex justify-between items-start mb-2">
                        <div>
                            <h3 class="text-xl font-bold text-neutral-900 group-hover:text-primary-600 transition-colors">Merrys Cleaning Service</h3>
                            <div class="flex items-center gap-1 text-sm text-neutral-500 mt-1">
                                <i data-lucide="map-pin" class="w-4 h-4 text-primary-400"></i>
                                Jakarta Pusat
                            </div>
                        </div>
                        <div class="flex items-center gap-1 bg-warning-50 px-2 py-1 rounded-lg">
                            <i data-lucide="star" class="w-4 h-4 text-warning-500 fill-warning-500"></i>
                            <span class="font-bold text-neutral-900">4.8</span>
                            <span class="text-xs text-neutral-400">(120)</span>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-2 mb-4 mt-4">
                        <span class="px-3 py-1 bg-neutral-50 border border-neutral-100 rounded-lg text-xs font-bold text-neutral-700">Deep Cleaning</span>
                        <span class="px-3 py-1 bg-neutral-50 border border-neutral-100 rounded-lg text-xs font-bold text-neutral-700">Office Cleaning</span>
                        <span class="px-3 py-1 bg-neutral-50 border border-neutral-100 rounded-lg text-xs font-bold text-neutral-700">Home Cleaning</span>
                    </div>

                    <div class="mb-6">
                        <p class="text-xs text-neutral-400 mb-1">Range Harga</p>
                        <p class="font-bold text-neutral-700">Rp 150.000 - Rp 2.500.000</p>
                    </div>

                    <div class="flex gap-3">
                        <a href="{{ route('umkm.preview') }}" class="btn-primary flex-1 py-3 font-bold rounded-xl text-center shadow-md text-white">
                            Lihat Detail
                        </a>
                        <button
                            class="w-12 py-3 bg-white border border-neutral-200 text-neutral-700 font-bold rounded-xl hover:bg-primary-50 hover:border-primary-300 hover:text-primary-600 transition-colors flex items-center justify-center">
                            <i data-lucide="message-square" class="w-5 h-5"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="partner-card bg-white rounded-3xl border border-neutral-200 overflow-hidden shadow-soft group">
                <div class="h-48 relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1628177142898-93e36e4e3a50?w=800&q=80" alt="Cleaning Service"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-linear-to-t from-black/60 via-transparent to-transparent"></div>
                    <div class="absolute bottom-4 left-4 z-10">
                        <div class="flex items-center gap-2">
                            <div class="w-10 h-10 bg-white rounded-lg flex items-center justify-center shadow-lg">
                                <i data-lucide="spray-can" class="w-5 h-5 text-primary-500"></i>
                            </div>
                            <span class="text-white font-bold text-sm bg-black/30 px-2 py-1 rounded backdrop-blur-sm">Cleaning Service</span>
                        </div>
                    </div>
                </div>

                <div class="p-6">
                    <div class="flex justify-between items-start mb-2">
                        <div>
                            <h3 class="text-xl font-bold text-neutral-900 group-hover:text-primary-600 transition-colors">BWP Cleaning Service</h3>
                            <div class="flex items-center gap-1 text-sm text-neutral-500 mt-1">
                                <i data-lucide="map-pin" class="w-4 h-4 text-primary-400"></i>
                                Jakarta Selatan
                            </div>
                        </div>
                        <div class="flex items-center gap-1 bg-warning-50 px-2 py-1 rounded-lg">
                            <i data-lucide="star" class="w-4 h-4 text-warning-500 fill-warning-500"></i>
                            <span class="font-bold text-neutral-900">4.9</span>
                            <span class="text-xs text-neutral-400">(85)</span>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-2 mb-4 mt-4">
                        <span class="px-3 py-1 bg-neutral-50 border border-neutral-100 rounded-lg text-xs font-bold text-neutral-700">General Cleaning</span>
                        <span class="px-3 py-1 bg-neutral-50 border border-neutral-100 rounded-lg text-xs font-bold text-neutral-700">Window Cleaning</span>
                        <span class="px-3 py-1 bg-neutral-50 border border-neutral-100 rounded-lg text-xs font-bold text-neutral-700">Carpet Cleaning</span>
                    </div>

                    <div class="mb-6">
                        <p class="text-xs text-neutral-400 mb-1">Range Harga</p>
                        <p class="font-bold text-neutral-700">Rp 100.000 - Rp 2.000.000</p>
                    </div>

                    <div class="flex gap-3">
                        <a href="{{ route('umkm.preview') }}" class="btn-primary flex-1 py-3 font-bold rounded-xl text-center shadow-md text-white">
                            Lihat Detail
                        </a>
                        <button
                            class="w-12 py-3 bg-white border border-neutral-200 text-neutral-700 font-bold rounded-xl hover:bg-primary-50 hover:border-primary-300 hover:text-primary-600 transition-colors flex items-center justify-center">
                            <i data-lucide="message-square" class="w-5 h-5"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="partner-card bg-white rounded-3xl border border-neutral-200 overflow-hidden shadow-soft group">
                <div class="h-48 relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1527515637462-cff94eecc1ac?w=800&q=80" alt="Cleaning Service"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-linear-to-t from-black/60 via-transparent to-transparent"></div>
                    <div class="absolute bottom-4 left-4 z-10">
                        <div class="flex items-center gap-2">
                            <div class="w-10 h-10 bg-white rounded-lg flex items-center justify-center shadow-lg">
                                <i data-lucide="clipboard-check" class="w-5 h-5 text-primary-500"></i>
                            </div>
                            <span class="text-white font-bold text-sm bg-black/30 px-2 py-1 rounded backdrop-blur-sm">Cleaning Service</span>
                        </div>
                    </div>
                </div>

                <div class="p-6">
                    <div class="flex justify-between items-start mb-2">
                        <div>
                            <h3 class="text-xl font-bold text-neutral-900 group-hover:text-primary-600 transition-colors">ABC Cleaning Co.</h3>
                            <div class="flex items-center gap-1 text-sm text-neutral-500 mt-1">
                                <i data-lucide="map-pin" class="w-4 h-4 text-primary-400"></i>
                                Tangerang
                            </div>
                        </div>
                        <div class="flex items-center gap-1 bg-warning-50 px-2 py-1 rounded-lg">
                            <i data-lucide="star" class="w-4 h-4 text-warning-500 fill-warning-500"></i>
                            <span class="font-bold text-neutral-900">4.7</span>
                            <span class="text-xs text-neutral-400">(55)</span>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-2 mb-4 mt-4">
                        <span class="px-3 py-1 bg-neutral-50 border border-neutral-100 rounded-lg text-xs font-bold text-neutral-700">Regular Cleaning</span>
                        <span class="px-3 py-1 bg-neutral-50 border border-neutral-100 rounded-lg text-xs font-bold text-neutral-700">AC Cleaning</span>
                        <span class="px-3 py-1 bg-neutral-50 border border-neutral-100 rounded-lg text-xs font-bold text-neutral-700">Sofa Cleaning</span>
                    </div>

                    <div class="mb-6">
                        <p class="text-xs text-neutral-400 mb-1">Range Harga</p>
                        <p class="font-bold text-neutral-700">Rp 75.000 - Rp 1.500.000</p>
                    </div>

                    <div class="flex gap-3">
                        <a href="{{ route('umkm.preview') }}" class="btn-primary flex-1 py-3 font-bold rounded-xl text-center shadow-md text-white">
                            Lihat Detail
                        </a>
                        <button
                            class="w-12 py-3 bg-white border border-neutral-200 text-neutral-700 font-bold rounded-xl hover:bg-primary-50 hover:border-primary-300 hover:text-primary-600 transition-colors flex items-center justify-center">
                            <i data-lucide="message-square" class="w-5 h-5"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="partner-card bg-white rounded-3xl border border-neutral-200 overflow-hidden shadow-soft group">
                <div class="h-48 relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=800&q=80" alt="Cleaning Service"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-linear-to-t from-black/60 via-transparent to-transparent"></div>
                    <div class="absolute bottom-4 left-4 z-10">
                        <div class="flex items-center gap-2">
                            <div class="w-10 h-10 bg-white rounded-lg flex items-center justify-center shadow-lg">
                                <i data-lucide="home" class="w-5 h-5 text-primary-500"></i>
                            </div>
                            <span class="text-white font-bold text-sm bg-black/30 px-2 py-1 rounded backdrop-blur-sm">Cleaning Service</span>
                        </div>
                    </div>
                </div>

                <div class="p-6">
                    <div class="flex justify-between items-start mb-2">
                        <div>
                            <h3 class="text-xl font-bold text-neutral-900 group-hover:text-primary-600 transition-colors">XYZ Services</h3>
                            <div class="flex items-center gap-1 text-sm text-neutral-500 mt-1">
                                <i data-lucide="map-pin" class="w-4 h-4 text-primary-400"></i>
                                Bali
                            </div>
                        </div>
                        <div class="flex items-center gap-1 bg-warning-50 px-2 py-1 rounded-lg">
                            <i data-lucide="star" class="w-4 h-4 text-warning-500 fill-warning-500"></i>
                            <span class="font-bold text-neutral-900">4.6</span>
                            <span class="text-xs text-neutral-400">(64)</span>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-2 mb-4 mt-4">
                        <span class="px-3 py-1 bg-neutral-50 border border-neutral-100 rounded-lg text-xs font-bold text-neutral-700">Home Cleaning</span>
                        <span class="px-3 py-1 bg-neutral-50 border border-neutral-100 rounded-lg text-xs font-bold text-neutral-700">Office Cleaning</span>
                    </div>

                    <div class="mb-6">
                        <p class="text-xs text-neutral-400 mb-1">Range Harga</p>
                        <p class="font-bold text-neutral-700">Rp 40.000 - Rp 1.000.000</p>
                    </div>

                    <div class="flex gap-3">
                        <a href="{{ route('umkm.preview') }}" class="btn-primary flex-1 py-3 font-bold rounded-xl text-center shadow-md text-white">
                            Lihat Detail
                        </a>
                        <button
                            class="w-12 py-3 bg-white border border-neutral-200 text-neutral-700 font-bold rounded-xl hover:bg-primary-50 hover:border-primary-300 hover:text-primary-600 transition-colors flex items-center justify-center">
                            <i data-lucide="message-square" class="w-5 h-5"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="partner-card bg-white rounded-3xl border border-neutral-200 overflow-hidden shadow-soft group">
                <div class="h-48 relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1584820927498-cfe5211fd8bf?w=800&q=80" alt="Cleaning Service"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-linear-to-t from-black/60 via-transparent to-transparent"></div>
                    <div class="absolute bottom-4 left-4 z-10">
                        <div class="flex items-center gap-2">
                            <div class="w-10 h-10 bg-white rounded-lg flex items-center justify-center shadow-lg">
                                <i data-lucide="droplet" class="w-5 h-5 text-primary-500"></i>
                            </div>
                            <span class="text-white font-bold text-sm bg-black/30 px-2 py-1 rounded backdrop-blur-sm">Cleaning Service</span>
                        </div>
                    </div>
                </div>

                <div class="p-6">
                    <div class="flex justify-between items-start mb-2">
                        <div>
                            <h3 class="text-xl font-bold text-neutral-900 group-hover:text-primary-600 transition-colors">Clean & Fresh</h3>
                            <div class="flex items-center gap-1 text-sm text-neutral-500 mt-1">
                                <i data-lucide="map-pin" class="w-4 h-4 text-primary-400"></i>
                                Bekasi
                            </div>
                        </div>
                        <div class="flex items-center gap-1 bg-warning-50 px-2 py-1 rounded-lg">
                            <i data-lucide="star" class="w-4 h-4 text-warning-500 fill-warning-500"></i>
                            <span class="font-bold text-neutral-900">4.8</span>
                            <span class="text-xs text-neutral-400">(112)</span>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-2 mb-4 mt-4">
                        <span class="px-3 py-1 bg-neutral-50 border border-neutral-100 rounded-lg text-xs font-bold text-neutral-700">Deep Cleaning</span>
                        <span class="px-3 py-1 bg-neutral-50 border border-neutral-100 rounded-lg text-xs font-bold text-neutral-700">Move-in/out Cleaning</span>
                    </div>

                    <div class="mb-6">
                        <p class="text-xs text-neutral-400 mb-1">Range Harga</p>
                        <p class="font-bold text-neutral-700">Rp 200.000 - Rp 3.000.000</p>
                    </div>

                    <div class="flex gap-3">
                        <a href="{{ route('umkm.preview') }}" class="btn-primary flex-1 py-3 font-bold rounded-xl text-center shadow-md text-white">
                            Lihat Detail
                        </a>
                        <button
                            class="w-12 py-3 bg-white border border-neutral-200 text-neutral-700 font-bold rounded-xl hover:bg-primary-50 hover:border-primary-300 hover:text-primary-600 transition-colors flex items-center justify-center">
                            <i data-lucide="message-square" class="w-5 h-5"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="partner-card bg-white rounded-3xl border border-neutral-200 overflow-hidden shadow-soft group">
                <div class="h-48 relative overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1563453392212-326f5e854473?w=800&q=80" alt="Cleaning Service"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute inset-0 bg-linear-to-t from-black/60 via-transparent to-transparent"></div>
                    <div class="absolute bottom-4 left-4 z-10">
                        <div class="flex items-center gap-2">
                            <div class="w-10 h-10 bg-white rounded-lg flex items-center justify-center shadow-lg">
                                <i data-lucide="stars" class="w-5 h-5 text-primary-500"></i>
                            </div>
                            <span class="text-white font-bold text-sm bg-black/30 px-2 py-1 rounded backdrop-blur-sm">Cleaning Service</span>
                        </div>
                    </div>
                </div>

                <div class="p-6">
                    <div class="flex justify-between items-start mb-2">
                        <div>
                            <h3 class="text-xl font-bold text-neutral-900 group-hover:text-primary-600 transition-colors">Sparkle Cleaning</h3>
                            <div class="flex items-center gap-1 text-sm text-neutral-500 mt-1">
                                <i data-lucide="map-pin" class="w-4 h-4 text-primary-400"></i>
                                Bandung
                            </div>
                        </div>
                        <div class="flex items-center gap-1 bg-warning-50 px-2 py-1 rounded-lg">
                            <i data-lucide="star" class="w-4 h-4 text-warning-500 fill-warning-500"></i>
                            <span class="font-bold text-neutral-900">4.9</span>
                            <span class="text-xs text-neutral-400">(98)</span>
                        </div>
                    </div>

                    <div class="flex flex-wrap gap-2 mb-4 mt-4">
                        <span class="px-3 py-1 bg-neutral-50 border border-neutral-100 rounded-lg text-xs font-bold text-neutral-700">Commercial Cleaning</span>
                        <span class="px-3 py-1 bg-neutral-50 border border-neutral-100 rounded-lg text-xs font-bold text-neutral-700">Residential Cleaning</span>
                    </div>

                    <div class="mb-6">
                        <p class="text-xs text-neutral-400 mb-1">Range Harga</p>
                        <p class="font-bold text-neutral-700">Rp 150.000 - Rp 2.500.000</p>
                    </div>

                    <div class="flex gap-3">
                        <a href="{{ route('umkm.preview') }}" class="btn-primary flex-1 py-3 font-bold rounded-xl text-center shadow-md text-white">
                            Lihat Detail
                        </a>
                        <button
                            class="w-12 py-3 bg-white border border-neutral-200 text-neutral-700 font-bold rounded-xl hover:bg-primary-50 hover:border-primary-300 hover:text-primary-600 transition-colors flex items-center justify-center">
                            <i data-lucide="message-square" class="w-5 h-5"></i>
                        </button>
                    </div>
                </div>
            </div>

        </div>

        <div class="mt-12 flex justify-center pb-12">
            <div class="flex items-center gap-2">
                <button class="w-10 h-10 flex items-center justify-center rounded-xl border border-neutral-200 text-neutral-500 hover:bg-neutral-50 hover:border-primary-300 transition-colors">
                    <i data-lucide="chevron-left" class="w-4 h-4"></i>
                </button>
                <button class="w-10 h-10 flex items-center justify-center rounded-xl bg-primary-500 text-white font-bold shadow-lg">
                    1
                </button>
                <button
                    class="w-10 h-10 flex items-center justify-center rounded-xl border border-neutral-200 text-neutral-700 font-bold hover:bg-primary-50 hover:border-primary-300 hover:text-primary-700 transition-colors">
                    2
                </button>
                <button
                    class="w-10 h-10 flex items-center justify-center rounded-xl border border-neutral-200 text-neutral-700 font-bold hover:bg-primary-50 hover:border-primary-300 hover:text-primary-700 transition-colors">
                    3
                </button>
                <span class="text-neutral-400 px-2">...</span>
                <button
                    class="w-10 h-10 flex items-center justify-center rounded-xl border border-neutral-200 text-neutral-700 font-bold hover:bg-primary-50 hover:border-primary-300 hover:text-primary-700 transition-colors">
                    10
                </button>
                <button class="w-10 h-10 flex items-center justify-center rounded-xl border border-neutral-200 text-neutral-500 hover:bg-neutral-50 hover:border-primary-300 transition-colors">
                    <i data-lucide="chevron-right" class="w-4 h-4"></i>
                </button>
            </div>
        </div>
    </div>
@endsection