@extends('layouts.umkm')

@section('title', 'Service Catalog - UMKM Name')

@section('content')
    <div class="bg-neutral-50 min-h-screen pb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-8">
            <nav class="flex mb-8 text-sm text-neutral-500">
                <a href="{{ route('umkm.preview') }}" class="hover:text-primary-600 transition-colors">Home</a>
                <span class="mx-2">/</span>
                <span class="text-neutral-900 font-medium">Catalog</span>
            </nav>
            <div class="mb-8">
                <h1 class="text-3xl md:text-4xl font-black text-neutral-900 mb-2">Service Catalog</h1>
                <p class="text-neutral-500">Jelajahi koleksi lengkap layanan kebersihan kami</p>
            </div>

            <div class="bg-white p-4 rounded-xl shadow-sm border border-neutral-100 mb-8">
                <div class="relative">
                    <i data-lucide="search" class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-neutral-400"></i>
                    <input type="text" placeholder="Cari layanan kebersihan..."
                        class="w-full pl-12 pr-4 py-3 bg-neutral-50 border-none rounded-lg focus:ring-2 focus:ring-primary-500 transition-all font-medium placeholder-neutral-400">
                </div>
            </div>

            <div class="flex flex-col lg:flex-row gap-8">
                <aside class="w-full lg:w-72 shrink-0">
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-neutral-100 sticky top-24">
                        <div class="flex items-center gap-2 mb-6">
                            <i data-lucide="sliders-horizontal" class="w-5 h-5 text-neutral-900"></i>
                            <h3 class="font-bold text-lg text-neutral-900">Filters</h3>
                        </div>

                        <div class="mb-8">
                            <h4 class="font-bold text-sm text-neutral-900 mb-4 uppercase tracking-wide">Kategori</h4>
                            <div class="space-y-3">
                                <label class="flex items-center gap-3 cursor-pointer group">
                                    <input type="checkbox" class="w-4 h-4 rounded border-neutral-300 text-primary-600 focus:ring-primary-500">
                                    <span class="text-neutral-600 group-hover:text-primary-600 transition-colors">Deep Cleaning</span>
                                </label>
                                <label class="flex items-center gap-3 cursor-pointer group">
                                    <input type="checkbox" class="w-4 h-4 rounded border-neutral-300 text-primary-600 focus:ring-primary-500">
                                    <span class="text-neutral-600 group-hover:text-primary-600 transition-colors">Office Cleaning</span>
                                </label>
                                <label class="flex items-center gap-3 cursor-pointer group">
                                    <input type="checkbox" class="w-4 h-4 rounded border-neutral-300 text-primary-600 focus:ring-primary-500">
                                    <span class="text-neutral-600 group-hover:text-primary-600 transition-colors">Cuci AC</span>
                                </label>
                                <label class="flex items-center gap-3 cursor-pointer group">
                                    <input type="checkbox" class="w-4 h-4 rounded border-neutral-300 text-primary-600 focus:ring-primary-500">
                                    <span class="text-neutral-600 group-hover:text-primary-600 transition-colors">Cuci Karpet</span>
                                </label>
                            </div>
                        </div>

                        <div class="mb-8">
                            <h4 class="font-bold text-sm text-neutral-900 mb-4 uppercase tracking-wide">Rentang Harga</h4>
                            <div class="flex items-center gap-2 mb-4">
                                <div class="relative flex-1">
                                    <span class="absolute left-3 top-1/2 -translate-y-1/2 text-xs text-neutral-400">Rp</span>
                                    <input type="number" placeholder="Min"
                                        class="w-full pl-8 pr-2 py-2 text-sm bg-neutral-50 border border-neutral-200 rounded-lg focus:outline-none focus:border-primary-500">
                                </div>
                                <span class="text-neutral-400">-</span>
                                <div class="relative flex-1">
                                    <span class="absolute left-3 top-1/2 -translate-y-1/2 text-xs text-neutral-400">Rp</span>
                                    <input type="number" placeholder="Max"
                                        class="w-full pl-8 pr-2 py-2 text-sm bg-neutral-50 border border-neutral-200 rounded-lg focus:outline-none focus:border-primary-500">
                                </div>
                            </div>
                            <input type="range" class="w-full accent-primary-500 h-1 bg-neutral-200 rounded-lg appearance-none cursor-pointer">
                        </div>

                        <div class="mb-8">
                            <h4 class="font-bold text-sm text-neutral-900 mb-4 uppercase tracking-wide">Urutkan</h4>
                            <div class="relative">
                                <select
                                    class="w-full appearance-none bg-neutral-50 border border-neutral-200 text-neutral-700 py-3 px-4 pr-8 rounded-lg leading-tight focus:outline-none focus:bg-white focus:border-primary-500">
                                    <option>Paling Relevan</option>
                                    <option>Harga Terendah</option>
                                    <option>Harga Tertinggi</option>
                                    <option>Rating Tertinggi</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-neutral-500">
                                    <i data-lucide="chevron-down" class="w-4 h-4"></i>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-col gap-3">
                            <button class="w-full py-3 bg-neutral-900 text-white font-bold rounded-xl hover:bg-primary-600 transition-all shadow-md">Terapkan Filter</button>
                            <button class="w-full py-3 bg-white text-neutral-500 font-bold rounded-xl border border-neutral-200 hover:bg-neutral-50 transition-all">Reset</button>
                        </div>
                    </div>
                </aside>

                <div class="flex-1">
                    <div class="flex items-center justify-between mb-6">
                        <p class="text-neutral-500 text-sm">Menampilkan <span class="font-bold text-neutral-900">8</span> layanan</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                        @php
                            $services = [
                                [
                                    'name' => 'Deep Cleaning Sofa',
                                    'price' => 150000,
                                    'rating' => 4.8,
                                    'review_count' => 120,
                                    'image' => 'https://images.pexels.com/photos/4401538/pexels-photo-4401538.jpeg',
                                    'desc' => 'Pembersihan mendalam untuk sofa kain dan kulit, menghilangkan noda membandel.'
                                ],
                                [
                                    'name' => 'Office Cleaning Monthly',
                                    'price' => 2500000,
                                    'rating' => 4.9,
                                    'review_count' => 85,
                                    'image' => 'https://images.pexels.com/photos/4107284/pexels-photo-4107284.jpeg',
                                    'desc' => 'Paket bulanan kebersihan kantor, mencakup lantai, kaca, dan toilet.'
                                ],
                                [
                                    'name' => 'Window Cleaning Service',
                                    'price' => 180000,
                                    'rating' => 4.6,
                                    'review_count' => 94,
                                    'image' => 'https://images.pexels.com/photos/6195125/pexels-photo-6195125.jpeg',
                                    'desc' => 'Membersihkan kaca jendela gedung dan rumah hingga kinclong tanpa goresan.'
                                ],
                                [
                                    'name' => 'Carpet Steam Cleaning',
                                    'price' => 300000,
                                    'rating' => 4.9,
                                    'review_count' => 167,
                                    'image' => 'https://images.pexels.com/photos/4176235/pexels-photo-4176235.jpeg',
                                    'desc' => 'Cuci karpet dengan teknologi uap panas untuk membasmi kuman dan tungau.'
                                ],
                                [
                                    'name' => 'Kitchen Deep Clean',
                                    'price' => 220000,
                                    'rating' => 4.8,
                                    'review_count' => 115,
                                    'image' => 'https://images.pexels.com/photos/4098579/pexels-photo-4098579.jpeg',
                                    'desc' => 'Membersihkan dapur menyeluruh termasuk kompor, sink, dan area berminyak.'
                                ],
                                [
                                    'name' => 'Bathroom Sanitizing',
                                    'price' => 120000,
                                    'rating' => 4.5,
                                    'review_count' => 98,
                                    'image' => 'https://images.pexels.com/photos/4239074/pexels-photo-4239074.jpeg',
                                    'desc' => 'Disinfeksi dan pembersihan total kamar mandi, bebas kerak dan bakteri.'
                                ],
                            ];
                        @endphp

                        @foreach($services as $service)
                            <div class="bg-white rounded-2xl overflow-hidden border border-neutral-100 hover:shadow-xl transition-all duration-300 group flex flex-col h-full">
                                <div class="relative h-48 overflow-hidden bg-neutral-100">
                                    <span class="absolute top-4 left-4 z-10 bg-neutral-900 text-white text-xs font-bold px-3 py-1 rounded-full">Service</span>
                                    <img src="{{ $service['image'] }}" alt="{{ $service['name'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                </div>
                                <div class="p-5 flex-1 flex flex-col">
                                    <div class="flex items-center gap-1 mb-2">
                                        <div class="flex text-yellow-500">
                                            @for($i = 0; $i < 5; $i++)
                                                <i data-lucide="star" class="w-3 h-3 {{ $i < floor($service['rating']) ? 'fill-current' : '' }}"></i>
                                            @endfor
                                        </div>
                                        <span class="text-xs text-neutral-500 font-medium">{{ $service['rating'] }} ({{ $service['review_count'] }})</span>
                                    </div>
                                    <h3 class="font-bold text-lg text-neutral-900 mb-2 leading-tight group-hover:text-primary-600 transition-colors">{{ $service['name'] }}</h3>
                                    <p class="text-sm text-neutral-500 mb-4 line-clamp-2 flex-1">{{ $service['desc'] }}</p>

                                    <div class="mt-auto pt-4 border-t border-neutral-100">
                                        <p class="text-xs text-neutral-400 mb-1">Mulai dari</p>
                                        <div class="flex items-center justify-between">
                                            <p class="text-lg font-black text-primary-600">Rp {{ number_format($service['price'], 0, ',', '.') }}</p>
                                        </div>
                                        <div class="grid grid-cols-4 gap-2 mt-4">
                                            <a href="{{ route('umkm.detail') }}"
                                                class="col-span-3 py-2.5 bg-white border border-neutral-200 text-neutral-700 font-bold rounded-lg hover:bg-primary-50 hover:border-primary-200 hover:text-primary-700 transition-all text-sm flex items-center justify-center">
                                                View Details
                                            </a>
                                            <button class="col-span-1 flex items-center justify-center bg-white border border-neutral-200 rounded-lg hover:bg-neutral-900 hover:text-white transition-all">
                                                <i data-lucide="shopping-cart" class="w-4 h-4"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="flex justify-center mt-12 gap-2">
                        <button class="w-10 h-10 rounded-lg border border-neutral-200 flex items-center justify-center text-neutral-500 hover:bg-neutral-50 transition-all">
                            <i data-lucide="chevron-left" class="w-4 h-4"></i>
                        </button>
                        <button class="w-10 h-10 rounded-lg bg-neutral-900 text-white font-bold flex items-center justify-center">1</button>
                        <button class="w-10 h-10 rounded-lg border border-neutral-200 flex items-center justify-center text-neutral-600 font-bold hover:bg-neutral-50 transition-all">2</button>
                        <button class="w-10 h-10 rounded-lg border border-neutral-200 flex items-center justify-center text-neutral-600 font-bold hover:bg-neutral-50 transition-all">3</button>
                        <span class="w-10 h-10 flex items-center justify-center text-neutral-400">...</span>
                        <button class="w-10 h-10 rounded-lg border border-neutral-200 flex items-center justify-center text-neutral-500 hover:bg-neutral-50 transition-all">
                            <i data-lucide="chevron-right" class="w-4 h-4"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection