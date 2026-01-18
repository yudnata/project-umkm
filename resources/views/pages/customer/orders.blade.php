@extends('layouts.customer')

@section('title', 'Pesanan Saya - Customer Area')

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-8">
            <div class="text-sm text-neutral-400 mb-2">Dashboard / Pesanan Saya</div>
            <h1 class="text-3xl font-black text-neutral-900 mb-2">Pesanan Saya</h1>
            <p class="text-neutral-500">Menampilkan 12 pesanan • 5 aktif, 7 selesai</p>
        </div>

        <div class="bg-white rounded-3xl border border-neutral-200 p-6 shadow-soft mb-8">
            <div class="flex gap-2 overflow-x-auto pb-4 border-b border-neutral-100 mb-6 scrollbar-hide">
                <button class="px-4 py-2 bg-primary-500 text-white text-sm font-bold rounded-full whitespace-nowrap shadow-md hover:bg-primary-600 transition-colors">All (12)</button>
                <button
                    class="px-4 py-2 bg-white border border-neutral-200 text-neutral-600 text-sm font-bold rounded-full hover:bg-primary-50 hover:border-primary-200 hover:text-primary-700 whitespace-nowrap transition-colors flex items-center gap-2">
                    Pending Review
                    <span class="w-5 h-5 bg-neutral-100 rounded-full flex items-center justify-center text-xs">2</span>
                </button>
                <button
                    class="px-4 py-2 bg-white border border-neutral-200 text-neutral-600 text-sm font-bold rounded-full hover:bg-primary-50 hover:border-primary-200 hover:text-primary-700 whitespace-nowrap transition-colors flex items-center gap-2">
                    Negotiation
                    <span class="w-5 h-5 bg-neutral-100 rounded-full flex items-center justify-center text-xs">1</span>
                </button>
                <button
                    class="px-4 py-2 bg-white border border-neutral-200 text-neutral-600 text-sm font-bold rounded-full hover:bg-primary-50 hover:border-primary-200 hover:text-primary-700 whitespace-nowrap transition-colors flex items-center gap-2">
                    Payment
                    <span class="w-5 h-5 bg-warning-100 text-warning-700 rounded-full flex items-center justify-center text-xs">1</span>
                </button>
                <button
                    class="px-4 py-2 bg-white border border-neutral-200 text-neutral-600 text-sm font-bold rounded-full hover:bg-primary-50 hover:border-primary-200 hover:text-primary-700 whitespace-nowrap transition-colors flex items-center gap-2">
                    In Process
                    <span class="w-5 h-5 bg-secondary-100 text-secondary-700 rounded-full flex items-center justify-center text-xs">1</span>
                </button>
                <button
                    class="px-4 py-2 bg-white border border-neutral-200 text-neutral-600 text-sm font-bold rounded-full hover:bg-primary-50 hover:border-primary-200 hover:text-primary-700 whitespace-nowrap transition-colors flex items-center gap-2">
                    Completed
                    <span class="w-5 h-5 bg-success-100 text-success-700 rounded-full flex items-center justify-center text-xs">6</span>
                </button>
                <button
                    class="px-4 py-2 bg-white border border-neutral-200 text-neutral-600 text-sm font-bold rounded-full hover:bg-neutral-50 whitespace-nowrap transition-colors flex items-center gap-2">
                    Cancelled
                    <span class="w-5 h-5 bg-neutral-100 rounded-full flex items-center justify-center text-xs">1</span>
                </button>
            </div>

            <div class="flex flex-col md:flex-row gap-4 justify-between items-center">
                <div class="w-full md:w-auto flex-1 flex gap-3">
                    <div class="relative flex-1 max-w-md">
                        <i data-lucide="search" class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-neutral-400"></i>
                        <input type="text" placeholder="Cari berdasarkan no pesanan atau nama layanan..."
                            class="w-full pl-12 pr-4 py-3 bg-neutral-50 border border-neutral-200 rounded-xl focus:outline-none focus:border-primary-500 focus:ring-2 focus:ring-primary-100 transition-all text-sm font-medium">
                    </div>
                </div>

                <div class="w-full md:w-auto flex flex-wrap gap-3">
                    <button
                        class="px-4 py-3 bg-white border border-neutral-200 rounded-xl text-sm font-bold text-neutral-700 hover:bg-neutral-50 hover:border-primary-300 flex items-center gap-2 transition-colors">
                        <span>Tanggal: 1-31 Jan</span>
                        <i data-lucide="chevron-down" class="w-4 h-4 text-neutral-400"></i>
                    </button>
                    <button
                        class="px-4 py-3 bg-white border border-neutral-200 rounded-xl text-sm font-bold text-neutral-700 hover:bg-neutral-50 hover:border-primary-300 flex items-center gap-2 transition-colors">
                        <span>Status Payment</span>
                        <i data-lucide="chevron-down" class="w-4 h-4 text-neutral-400"></i>
                    </button>
                    <div class="h-10 w-px bg-neutral-200 mx-2 hidden md:block"></div>
                    <button class="px-4 py-3 bg-white border border-neutral-200 rounded-xl text-sm font-bold text-neutral-700 hover:bg-neutral-50 flex items-center gap-2 transition-colors">
                        <i data-lucide="filter" class="w-4 h-4"></i>
                        Filter Lainnya
                    </button>
                    <button class="btn-primary px-4 py-3 rounded-xl text-sm font-bold flex items-center gap-2 text-white shadow-lg">
                        <i data-lucide="download" class="w-4 h-4"></i>
                        Export Pesanan
                    </button>
                </div>
            </div>
        </div>

        <div class="space-y-6">
            <div class="bg-white rounded-3xl border border-neutral-200 p-6 md:p-8 hover:shadow-lg transition-all shadow-soft group">
                <div class="flex justify-between items-start mb-6">
                    <div>
                        <div class="text-xs font-bold text-neutral-400 mb-1">Nomor Pesanan: #BWP-2026-0001</div>
                        <h3 class="text-xl font-bold text-neutral-900 group-hover:text-primary-600 transition-colors">Deep Cleaning Service</h3>
                        <p class="text-sm text-neutral-500 mt-1">Menunggu Review Admin</p>
                    </div>
                    <div class="text-right">
                        <div class="text-xs font-bold text-neutral-400 mb-1 leading-tight">16 Jan 2026</div>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-neutral-50 flex items-center justify-center shrink-0">
                            <i data-lucide="calendar" class="w-6 h-6 text-neutral-500"></i>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-neutral-400 mb-1">Tanggal & Waktu</p>
                            <p class="font-bold text-neutral-900">16 Januari 2026</p>
                            <p class="text-xs text-neutral-500">10:00 WIB</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-neutral-50 flex items-center justify-center shrink-0">
                            <i data-lucide="map-pin" class="w-6 h-6 text-neutral-500"></i>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-neutral-400 mb-1">Lokasi</p>
                            <p class="font-bold text-neutral-900">Jakarta Pusat</p>
                        </div>
                    </div>
                </div>

                <div class="flex justify-between items-center pt-6 border-t border-neutral-100">
                    <div class="flex items-center gap-2 text-xs text-neutral-500">
                        <span>Penyedia Jasa:</span>
                        <span class="font-bold text-neutral-900">BWP Cleaning Service</span>
                    </div>
                    <div class="flex gap-3">
                        <button class="px-6 py-3 bg-white border border-neutral-200 text-neutral-700 font-bold rounded-xl hover:bg-neutral-50 hover:border-primary-300 transition-colors">
                            Chat Admin
                        </button>
                        <button class="btn-outline px-6 py-3 font-bold rounded-xl transition-colors">
                            Lihat Detail
                        </button>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-3xl border-2 border-primary-200 p-6 md:p-8 hover:shadow-lg transition-all shadow-soft relative overflow-hidden group">
                <div class="absolute top-0 left-0 w-1 h-full bg-primary-500"></div>
                <div class="flex justify-between items-start mb-6">
                    <div>
                        <div class="text-xs font-bold text-neutral-400 mb-1">Nomor Pesanan: #ABC-2026-0042</div>
                        <h3 class="text-xl font-bold text-neutral-900 group-hover:text-primary-600 transition-colors">Office Cleaning Service</h3>
                        <div class="inline-flex mt-2 px-3 py-1 bg-accent-900 text-accent-200 text-xs font-bold rounded-full">Perlu Tindakan Anda</div>
                    </div>
                    <div class="text-right">
                        <div class="text-xs font-bold text-neutral-400 mb-1 leading-tight">14 Jan 2026</div>
                    </div>
                </div>

                <div class="bg-accent-50 rounded-xl p-4 mb-8 border border-accent-100 flex items-start gap-3">
                    <i data-lucide="alert-circle" class="w-5 h-5 text-accent-700 mt-0.5"></i>
                    <p class="text-sm font-medium text-accent-800">Admin telah mengirim pre-invoice. Silakan review sebelum layanan dijadwalkan.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-neutral-50 flex items-center justify-center shrink-0">
                            <i data-lucide="calendar" class="w-6 h-6 text-neutral-500"></i>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-neutral-400 mb-1">Tanggal & Waktu</p>
                            <p class="font-bold text-neutral-900">18 Januari 2026</p>
                            <p class="text-xs text-neutral-500">14:00 WIB</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-neutral-50 flex items-center justify-center shrink-0">
                            <i data-lucide="map-pin" class="w-6 h-6 text-neutral-500"></i>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-neutral-400 mb-1">Lokasi</p>
                            <p class="font-bold text-neutral-900">Jakarta Selatan</p>
                        </div>
                    </div>
                </div>

                <div class="flex justify-between items-center pt-6 border-t border-neutral-100">
                    <div class="flex items-center gap-2 text-xs text-neutral-500">
                        <span>Penyedia Jasa:</span>
                        <span class="font-bold text-neutral-900">ABC Cleaning Co</span>
                    </div>
                    <div class="flex gap-3">
                        <button class="btn-primary px-6 py-3 font-bold rounded-xl shadow-lg text-white">
                            Review Pre-Invoice
                        </button>
                        <button class="px-6 py-3 bg-white border border-neutral-200 text-neutral-700 font-bold rounded-xl hover:bg-neutral-50 transition-colors">
                            Chat Admin
                        </button>
                    </div>
                </div>
            </div>

            <div class="bg-primary-900 rounded-3xl p-6 md:p-8 shadow-2xl relative overflow-hidden group">
                <div class="absolute top-0 right-0 w-96 h-96 bg-white/5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/3 group-hover:bg-white/10 transition-colors duration-500"></div>

                <div class="relative z-10">
                    <div class="flex justify-between items-start mb-6">
                        <div>
                            <div class="flex items-center gap-2 mb-2">
                                <i data-lucide="alert-triangle" class="w-4 h-4 text-error-500"></i>
                                <span class="text-xs font-bold text-primary-200">PENTING - Menunggu Pembayaran</span>
                            </div>
                            <div class="text-xs font-bold text-primary-300 mb-1">Nomor Pesanan: #XYZ-2026-0033</div>
                            <h3 class="text-xl font-bold text-white">Regular Cleaning</h3>
                        </div>
                        <div class="text-right">
                            <div class="text-xs font-bold text-primary-300 mb-1 leading-tight">13 Jan 2026</div>
                        </div>
                    </div>

                    <div class="bg-white/10 rounded-xl p-4 mb-8 border border-white/10 flex items-start gap-3 backdrop-blur-sm">
                        <i data-lucide="clock" class="w-5 h-5 text-primary-300 mt-0.5"></i>
                        <p class="text-sm font-medium text-white">Selesaikan pembayaran sebelum 15 Jan 2026, 23:59 untuk konfirmasi booking.</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center shrink-0">
                                <i data-lucide="calendar" class="w-6 h-6 text-primary-300"></i>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-primary-400 mb-1">Tanggal & Waktu</p>
                                <p class="font-bold text-white">17 Januari 2026</p>
                                <p class="text-xs text-primary-200">09:00 WIB</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center shrink-0">
                                <i data-lucide="map-pin" class="w-6 h-6 text-primary-300"></i>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-primary-400 mb-1">Lokasi</p>
                                <p class="font-bold text-white">Tangerang</p>
                            </div>
                        </div>
                        <div class="col-span-1 md:col-span-2 bg-white/5 rounded-2xl p-4 border border-white/5 flex items-center justify-between">
                            <div>
                                <p class="text-xs font-bold text-primary-400 mb-1">Total Pembayaran</p>
                                <p class="text-2xl font-black text-white">Rp 1.500.000</p>
                            </div>
                            <div class="text-right text-xs text-primary-300">
                                <i data-lucide="info" class="w-3 h-3 inline mr-1"></i>
                                Bayar sebelum: 15 Jan 2026
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-between items-center pt-6 border-t border-white/10">
                        <div class="flex items-center gap-2 text-xs text-primary-300">
                            <span>Penyedia Jasa:</span>
                            <span class="font-bold text-white">XYZ Services</span>
                        </div>
                        <div class="flex gap-3">
                            <button class="px-8 py-3 bg-white text-primary-700 font-bold rounded-xl hover:bg-primary-50 transition-colors shadow-lg">
                                Bayar Sekarang
                            </button>
                            <button class="px-6 py-3 bg-transparent border border-white/20 text-white font-bold rounded-xl hover:bg-white/10 transition-colors">
                                Lihat Invoice
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-3xl border border-neutral-200 p-6 md:p-8 hover:shadow-lg transition-all shadow-soft group">
                <div class="flex justify-between items-start mb-6">
                    <div>
                        <div class="text-xs font-bold text-neutral-400 mb-1">Nomor Pesanan: #DEP-2025-0901</div>
                        <h3 class="text-xl font-bold text-neutral-900 group-hover:text-primary-600 transition-colors">Deep Cleaning Service</h3>
                        <div class="flex items-center gap-2 mt-2">
                            <div class="w-2 h-2 bg-secondary-500 rounded-full animate-pulse"></div>
                            <span class="text-xs font-bold text-secondary-600">Dalam Proses</span>
                        </div>
                    </div>
                    <div class="text-right">
                        <div class="text-xs font-bold text-neutral-400 mb-1 leading-tight">12 Jan 2026</div>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-neutral-50 flex items-center justify-center shrink-0">
                            <i data-lucide="calendar" class="w-6 h-6 text-neutral-500"></i>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-neutral-400 mb-1">Tanggal & Waktu</p>
                            <p class="font-bold text-neutral-900">15 Januari 2026</p>
                            <p class="text-xs text-neutral-500">09:00 WIB</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-neutral-50 flex items-center justify-center shrink-0">
                            <i data-lucide="map-pin" class="w-6 h-6 text-neutral-500"></i>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-neutral-400 mb-1">Lokasi</p>
                            <p class="font-bold text-neutral-900">Jakarta Barat</p>
                        </div>
                    </div>
                </div>

                <div class="bg-secondary-50 rounded-2xl p-6 mb-8 border border-secondary-100">
                    <div class="flex justify-between items-end mb-3">
                        <div class="flex items-center gap-2">
                            <i data-lucide="loader" class="w-4 h-4 text-secondary-600 animate-spin"></i>
                            <span class="text-sm font-bold text-secondary-700">Pembersihan dikonfirmasi</span>
                        </div>
                        <span class="text-xs font-bold text-secondary-600">60%</span>
                    </div>
                    <div class="w-full h-2 bg-secondary-100 rounded-full overflow-hidden">
                        <div class="h-full bg-secondary-500 w-[60%] rounded-full relative overflow-hidden">
                            <div class="absolute inset-0 bg-white/20 animate-pulse"></div>
                        </div>
                    </div>

                    <div class="mt-4 flex items-center gap-3">
                        <div class="w-8 h-8 rounded-full bg-neutral-200 overflow-hidden">
                            <img src="https://api.dicebear.com/7.x/avataaars/svg?seed=John" alt="Staff" class="w-full h-full object-cover">
                        </div>
                        <div>
                            <p class="text-xs font-bold text-neutral-900">Staff: John Doe</p>
                            <p class="text-[10px] text-neutral-500">Sedang perjalanan ke lokasi</p>
                        </div>
                    </div>
                </div>

                <div class="flex justify-between items-center pt-6 border-t border-neutral-100">
                    <div class="flex items-center gap-2 text-xs text-neutral-500">
                        <span>Penyedia Jasa:</span>
                        <span class="font-bold text-neutral-900">DLX Cleaning</span>
                    </div>
                    <div class="flex gap-3">
                        <button class="btn-secondary px-6 py-3 font-bold rounded-xl shadow-md text-white">
                            Track Progress
                        </button>
                        <button class="px-6 py-3 bg-white border border-neutral-200 text-neutral-700 font-bold rounded-xl hover:bg-neutral-50 transition-colors">
                            Hubungi Staff
                        </button>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-3xl border border-neutral-100 p-6 md:p-8 hover:shadow-lg transition-all shadow-soft group">
                <div class="flex justify-between items-start mb-6">
                    <div>
                        <div class="text-xs font-bold text-neutral-400 mb-1">Nomor Pesanan: #CMP-2024-0021</div>
                        <h3 class="text-xl font-bold text-neutral-900 group-hover:text-primary-600 transition-colors">Deep Cleaning</h3>
                        <div class="inline-flex mt-2 px-3 py-1 bg-success-100 text-success-700 text-xs font-bold rounded-full border border-success-200">Selesai</div>
                    </div>
                    <div class="text-right">
                        <div class="text-xs font-bold text-neutral-400 mb-1 leading-tight">10 Jan 2026</div>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-neutral-50 flex items-center justify-center shrink-0">
                            <i data-lucide="calendar" class="w-6 h-6 text-neutral-600"></i>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-neutral-400 mb-1">Tanggal & Waktu</p>
                            <p class="font-bold text-neutral-900">11 Januari 2026</p>
                            <p class="text-xs text-neutral-500">14:00 WIB</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-neutral-50 flex items-center justify-center shrink-0">
                            <i data-lucide="map-pin" class="w-6 h-6 text-neutral-600"></i>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-neutral-400 mb-1">Lokasi</p>
                            <p class="font-bold text-neutral-900">Jakarta Timur</p>
                        </div>
                    </div>
                </div>

                <div class="bg-neutral-50 rounded-xl p-4 mb-8 border border-neutral-100">
                    <p class="text-xs font-bold text-neutral-700 mb-1">Dibayar: <span class="line-through text-neutral-400">Rp 2.500.000</span> Rp 2.250.000</p>

                    <div class="flex items-center gap-4 mt-3 pt-3 border-t border-neutral-100">
                        <span class="text-xs font-bold text-neutral-700">Beri rating untuk layanan ini:</span>
                        <div class="flex gap-1">
                            <i data-lucide="star" class="w-5 h-5 text-warning-500 fill-warning-500 cursor-pointer hover:scale-110 transition-transform"></i>
                            <i data-lucide="star" class="w-5 h-5 text-warning-500 fill-warning-500 cursor-pointer hover:scale-110 transition-transform"></i>
                            <i data-lucide="star" class="w-5 h-5 text-warning-500 fill-warning-500 cursor-pointer hover:scale-110 transition-transform"></i>
                            <i data-lucide="star" class="w-5 h-5 text-warning-500 fill-warning-500 cursor-pointer hover:scale-110 transition-transform"></i>
                            <i data-lucide="star" class="w-5 h-5 text-neutral-300 cursor-pointer hover:text-warning-500 transition-colors"></i>
                        </div>
                    </div>
                </div>


                <div class="flex justify-between items-center pt-6 border-t border-neutral-100">
                    <div class="flex items-center gap-2 text-xs text-neutral-500">
                        <span>Penyedia Jasa:</span>
                        <span class="font-bold text-neutral-900">DM Service</span>
                    </div>
                    <div class="flex gap-3">
                        <button class="btn-primary px-6 py-3 font-bold rounded-xl shadow-md text-white">
                            Tulis Review
                        </button>
                        <button class="btn-outline px-6 py-3 font-bold rounded-xl transition-colors">
                            Pesan Lagi
                        </button>
                        <button class="text-xs font-bold text-primary-600 underline hover:text-primary-800 px-2">
                            Lihat Invoice
                        </button>
                    </div>
                </div>
            </div>

            <div class="bg-neutral-50 rounded-3xl border border-neutral-200 p-6 md:p-8 hover:shadow-sm transition-all shadow-none opacity-70 hover:opacity-100 grayscale hover:grayscale-0 group">
                <div class="flex justify-between items-start mb-6">
                    <div>
                        <div class="text-xs font-bold text-neutral-400 mb-1">Nomor Pesanan: #CXL-2026-0012</div>
                        <h3 class="text-xl font-bold text-neutral-900 group-hover:text-neutral-700 transition-colors">Office Cleaning</h3>
                        <div class="inline-flex mt-2 px-3 py-1 bg-neutral-200 text-neutral-600 text-xs font-bold rounded-full border border-neutral-300">Dibatalkan</div>
                    </div>
                    <div class="text-right">
                        <div class="text-xs font-bold text-neutral-400 mb-1 leading-tight">12 Jan 2026</div>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-white border border-neutral-200 flex items-center justify-center shrink-0">
                            <i data-lucide="calendar" class="w-6 h-6 text-neutral-400"></i>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-neutral-400 mb-1">Tanggal & Waktu</p>
                            <p class="font-bold text-neutral-700">6 Januari 2026</p>
                            <p class="text-xs text-neutral-500">10:00 WIB</p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-white border border-neutral-200 flex items-center justify-center shrink-0">
                            <i data-lucide="map-pin" class="w-6 h-6 text-neutral-400"></i>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-neutral-400 mb-1">Lokasi</p>
                            <p class="font-bold text-neutral-700">Bekasi</p>
                        </div>
                    </div>
                </div>

                <div class="text-sm text-neutral-500 mb-8 bg-white border border-neutral-200 p-4 rounded-xl">
                    <span class="font-bold text-neutral-700">Alasan:</span> Dibatalkan oleh customer.
                    <div class="flex items-center gap-2 mt-2 text-xs text-neutral-400">
                        <i data-lucide="corner-down-right" class="w-3 h-3"></i>
                        Refund diproses: <span class="font-bold text-neutral-900">Rp 500.000</span>
                    </div>
                </div>

                <div class="flex justify-between items-center pt-6 border-t border-neutral-200">
                    <div class="flex items-center gap-2 text-xs text-neutral-500">
                        <span>Penyedia Jasa:</span>
                        <span class="font-bold text-neutral-700">JKL Services</span>
                    </div>
                    <div class="flex gap-3">
                        <button class="btn-outline px-8 py-3 font-bold rounded-xl transition-colors w-full md:w-auto">
                            Lihat Detail
                        </button>
                        <button class="px-8 py-3 bg-white border border-neutral-200 text-neutral-700 font-bold rounded-xl hover:bg-neutral-100 transition-colors w-full md:w-auto">
                            Pesan Lagi
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