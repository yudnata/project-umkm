@extends('layouts.customer')

@section('title', 'Dashboard - Customer Area')

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-10">
            <h1 class="text-3xl font-black text-neutral-900 mb-2">Halo, Ahmad</h1>
            <p class="text-neutral-500 text-lg">Berikut ringkasan pesanan Anda</p>
            <p class="text-xs text-neutral-400 mt-1">{{ now()->format('l, d F Y') }}</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
            <div class="bg-white p-6 rounded-2xl border border-neutral-200 shadow-soft flex items-center gap-4 transition-all hover:shadow-lg hover:-translate-y-1">
                <div class="w-14 h-14 bg-neutral-50 rounded-xl flex items-center justify-center text-neutral-500">
                    <i data-lucide="package" class="w-7 h-7"></i>
                </div>
                <div>
                    <div class="text-3xl font-black text-neutral-900">2</div>
                    <div class="text-sm font-medium text-neutral-500">Pesanan Aktif</div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl shadow-soft flex items-center gap-4 transition-all hover:shadow-lg hover:-translate-y-1 overflow-hidden relative border border-neutral-100">
                <div class="w-14 h-14 bg-white rounded-xl flex items-center justify-center text-neutral-500 shadow-sm z-10">
                    <i data-lucide="alert-triangle" class="w-7 h-7"></i>
                </div>
                <div class="z-10">
                    <div class="text-3xl font-black text-neutral-900">1</div>
                    <div class="text-sm font-medium text-neutral-500">Perlu Tindakan</div>
                </div>
            </div>

            <div class="bg-white p-6 rounded-2xl border border-neutral-200 shadow-soft flex items-center gap-4 transition-all hover:shadow-lg hover:-translate-y-1">
                <div class="w-14 h-14 bg-neutral-50 rounded-xl flex items-center justify-center text-neutral-500">
                    <i data-lucide="check-circle-2" class="w-7 h-7"></i>
                </div>
                <div>
                    <div class="text-3xl font-black text-neutral-900">8</div>
                    <div class="text-sm font-medium text-neutral-500">Selesai</div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 space-y-8">
                <div class="flex items-center justify-between">
                    <h2 class="text-xl font-bold text-neutral-900">Pesanan Aktif</h2>
                    <a href="{{ route('customer.orders') }}" class="text-sm font-bold text-primary-500 hover:text-primary-600 flex items-center gap-1 transition-colors">
                        Lihat Semua
                        <i data-lucide="chevron-right" class="w-4 h-4"></i>
                    </a>
                </div>

                <div class="bg-white rounded-3xl border border-neutral-200 p-6 lg:p-8 hover:shadow-lg transition-all shadow-soft group">
                    <div class="mb-6">
                        <div class="flex justify-between items-start mb-2">
                            <span class="text-xs font-bold text-neutral-400">Nomor Pesanan: #BWP-2026-0001</span>
                        </div>
                        <h3 class="text-xl font-bold text-neutral-900 group-hover:text-primary-500 transition-colors">Deep Cleaning Service</h3>
                        <p class="text-sm text-neutral-500 mt-1">Menunggu Review Admin</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 rounded-lg bg-neutral-50 flex items-center justify-center shrink-0">
                                <i data-lucide="calendar" class="w-5 h-5 text-neutral-500"></i>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-neutral-400 mb-1">Tanggal & Waktu</p>
                                <p class="text-sm font-bold text-neutral-900">16 Januari 2026</p>
                                <p class="text-xs text-neutral-500">10:00 WIB</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 rounded-lg bg-neutral-50 flex items-center justify-center shrink-0">
                                <i data-lucide="map-pin" class="w-5 h-5 text-neutral-500"></i>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-neutral-400 mb-1">Lokasi</p>
                                <p class="text-sm font-bold text-neutral-900">Jakarta Pusat</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 rounded-lg bg-neutral-50 flex items-center justify-center shrink-0">
                                <i data-lucide="wallet" class="w-5 h-5 text-neutral-500"></i>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-neutral-400 mb-1">Harga</p>
                                <p class="text-sm font-bold text-neutral-900">Rp 2.500.000</p>
                            </div>
                        </div>
                    </div>

                    <a href="#" class="btn-outline w-full py-4 rounded-xl font-bold text-neutral-700 text-center transition-colors flex items-center justify-center gap-2">
                        Lihat Detail
                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>

                    <div class="mt-6 pt-6 border-t border-neutral-100 flex items-center gap-2 text-xs text-neutral-500">
                        <span>Penyedia Jasa:</span>
                        <span class="font-bold text-neutral-900">BWP Cleaning Service</span>
                    </div>
                </div>

                <div class="bg-white rounded-3xl border border-neutral-200 p-6 lg:p-8 hover:shadow-lg transition-all shadow-soft group">
                    <div class="mb-6">
                        <div class="flex justify-between items-start mb-2">
                            <span class="text-xs font-bold text-neutral-400">Nomor Pesanan: #ABC-2026-0042</span>
                        </div>
                        <h3 class="text-xl font-bold text-neutral-900 group-hover:text-primary-500 transition-colors">Office Cleaning Service</h3>
                        <div class="inline-flex mt-3 px-3 py-1 bg-neutral-950 text-white text-xs font-bold rounded-full">
                            Perlu Tindakan Anda
                        </div>
                    </div>

                    <div class="bg-neutral-50 rounded-xl p-4 mb-8 border border-neutral-100 text-sm text-neutral-800">
                        <div class="flex gap-2">
                            <i data-lucide="info" class="w-5 h-5 shrink-0"></i>
                            <span>Admin telah mengirim pre-invoice. Silakan review.</span>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 rounded-lg bg-neutral-50 flex items-center justify-center shrink-0">
                                <i data-lucide="calendar" class="w-5 h-5 text-neutral-500"></i>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-neutral-400 mb-1">Tanggal & Waktu</p>
                                <p class="text-sm font-bold text-neutral-900">18 Januari 2026</p>
                                <p class="text-xs text-neutral-500">14:00 WIB</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 rounded-lg bg-neutral-50 flex items-center justify-center shrink-0">
                                <i data-lucide="map-pin" class="w-5 h-5 text-neutral-500"></i>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-neutral-400 mb-1">Lokasi</p>
                                <p class="text-sm font-bold text-neutral-900">Jakarta Selatan</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <div class="w-10 h-10 rounded-lg bg-neutral-50 flex items-center justify-center shrink-0">
                                <i data-lucide="wallet" class="w-5 h-5 text-neutral-500"></i>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-neutral-400 mb-1">Harga</p>
                                <p class="text-sm font-bold text-neutral-900">Rp 3.200.000</p>
                            </div>
                        </div>
                    </div>

                    <a href="#" class="btn-primary w-full py-4 rounded-xl text-white font-bold text-center transition-all shadow-lg hover:shadow-xl flex items-center justify-center gap-2">
                        Review Pre-Invoice
                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>

                    <div class="mt-6 pt-6 border-t border-neutral-100 flex items-center gap-2 text-xs text-neutral-500">
                        <span>Penyedia Jasa:</span>
                        <span class="font-bold text-neutral-900">ABC Cleaning Co</span>
                    </div>
                </div>

                <div class="bg-primary-900 text-white rounded-3xl p-6 lg:p-8 shadow-2xl relative overflow-hidden group">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2 group-hover:bg-white/15 transition-colors duration-500"></div>

                    <div class="relative z-10">
                        <div class="flex items-center gap-2 mb-6">
                            <div class="px-2 py-1 rounded bg-error-500 text-white text-[10px] font-bold shadow-sm flex items-center gap-2 animate-pulse">
                                <i data-lucide="alert-circle" class="w-3 h-3"></i>
                                PENTING - Menunggu Pembayaran
                            </div>
                        </div>

                        <div class="mb-6">
                            <span class="text-xs font-medium text-primary-200">Nomor Pesanan: #XYZ-2026-0033</span>
                            <h3 class="text-2xl font-black mt-2">Regular Cleaning</h3>
                        </div>

                        <div class="glass-dark rounded-xl p-4 mb-8 border border-white/10 text-sm text-primary-50 flex gap-3">
                            <i data-lucide="clock" class="w-5 h-5 shrink-0 text-primary-300"></i>
                            Selesaikan pembayaran untuk konfirmasi booking
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8 text-primary-50">
                            <div class="flex items-start gap-3">
                                <div class="w-10 h-10 rounded-lg bg-white/10 flex items-center justify-center shrink-0 backdrop-blur-md">
                                    <i data-lucide="calendar" class="w-5 h-5 text-primary-300"></i>
                                </div>
                                <div>
                                    <p class="text-xs font-bold text-primary-200 mb-1">Tanggal & Waktu</p>
                                    <p class="text-sm font-bold text-white">17 Januari 2026</p>
                                    <p class="text-xs text-primary-100">09:00 WIB</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="w-10 h-10 rounded-lg bg-white/10 flex items-center justify-center shrink-0 backdrop-blur-md">
                                    <i data-lucide="map-pin" class="w-5 h-5 text-primary-300"></i>
                                </div>
                                <div>
                                    <p class="text-xs font-bold text-primary-200 mb-1">Lokasi</p>
                                    <p class="text-sm font-bold text-white">Tangerang</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="w-10 h-10 rounded-lg bg-white/10 flex items-center justify-center shrink-0 backdrop-blur-md">
                                    <i data-lucide="wallet" class="w-5 h-5 text-primary-300"></i>
                                </div>
                                <div>
                                    <p class="text-xs font-bold text-primary-200 mb-1">Harga</p>
                                    <p class="text-sm font-bold text-white">Rp 1.500.000</p>
                                </div>
                            </div>
                        </div>

                        <a href="#"
                            class="w-full py-4 rounded-xl bg-white text-primary-700 font-bold text-center hover:bg-primary-50 transition-colors shadow-lg hover:shadow-xl flex items-center justify-center gap-2">
                            Bayar Sekarang
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>

                        <div class="mt-6 pt-6 border-t border-white/10 flex items-center gap-2 text-xs text-primary-200">
                            <span>Penyedia Jasa:</span>
                            <span class="font-bold text-white">XYZ Services</span>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center mt-4">
                    <a href="{{ route('customer.orders') }}"
                        class="btn-outline inline-flex items-center gap-2 px-6 py-3 bg-white rounded-full font-bold text-sm text-neutral-700 hover:bg-neutral-50 transition-colors shadow-sm">
                        Lihat Semua Pesanan
                        <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                </div>
            </div>

            <div class="lg:col-span-1 space-y-8">
                <div class="bg-white rounded-3xl border border-neutral-200 p-6 shadow-soft">
                    <h3 class="font-bold text-neutral-900 mb-6">Menu Cepat</h3>
                    <div class="space-y-3">
                        <button
                            class="w-full flex items-center justify-between p-4 rounded-xl btn-primary text-white font-bold text-sm shadow-md hover:shadow-lg transition-transform transform hover:-translate-y-0.5">
                            <span class="flex items-center gap-3">
                                <i data-lucide="message-square" class="w-5 h-5"></i>
                                Chat Admin
                            </span>
                            <span class="bg-white text-primary-700 rounded-full w-6 h-6 flex items-center justify-center text-xs shadow-sm">3</span>
                        </button>
                        <button
                            class="w-full flex items-center justify-between p-4 rounded-xl bg-white border border-neutral-200 text-neutral-700 font-bold text-sm hover:bg-neutral-50 transition-colors group hover:border-primary-500">
                            <span class="flex items-center gap-3">
                                <i data-lucide="bell" class="w-5 h-5 text-neutral-500 group-hover:text-primary-500 transition-colors"></i>
                                Notifikasi
                            </span>
                            <span class="bg-primary-50 text-primary-600 rounded-full w-6 h-6 flex items-center justify-center text-xs group-hover:bg-primary-100">3</span>
                        </button>
                        <button
                            class="w-full flex items-center justify-between p-4 rounded-xl bg-white border border-neutral-200 text-neutral-700 font-bold text-sm hover:bg-neutral-50 transition-colors group hover:border-primary-500">
                            <span class="flex items-center gap-3">
                                <i data-lucide="phone" class="w-5 h-5 text-neutral-500 group-hover:text-primary-500 transition-colors"></i>
                                Hubungi Kami
                            </span>
                        </button>
                    </div>
                </div>

                <div class="bg-white rounded-3xl border border-neutral-200 p-6 shadow-soft">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="font-bold text-neutral-900 relative">
                            Notifikasi Terbaru
                            <span class="absolute -top-1 -right-2 w-2 h-2 bg-error-500 rounded-full"></span>
                        </h3>
                    </div>

                    <div class="space-y-4">
                        <div class="bg-success-50 rounded-xl p-4 border border-success-100 transition-colors hover:bg-success-100">
                            <div class="flex items-start gap-3 mb-2">
                                <div class="w-2 h-2 rounded-full bg-primary-500 mt-1.5 shrink-0"></div>
                                <p class="text-xs font-bold text-neutral-900 leading-normal">
                                    Pre-invoice dikirim untuk pesanan #BWP-2026-0001
                                </p>
                            </div>
                            <p class="text-[10px] text-primary-700 ml-5">5 menit lalu</p>
                        </div>
                        <div class="bg-white rounded-xl p-4 border border-neutral-100 transition-colors hover:border-primary-300 hover:bg-success-50">
                            <div class="flex items-start gap-3 mb-2">
                                <div class="w-2 h-2 rounded-full bg-neutral-300 mt-1.5 shrink-0"></div>
                                <p class="text-xs font-bold text-neutral-900 leading-normal">
                                    Pembayaran dikonfirmasi #XYZ-2026-0033
                                </p>
                            </div>
                            <p class="text-[10px] text-neutral-400 ml-5">2 jam lalu</p>
                        </div>
                        <div class="p-4 border border-neutral-100 rounded-xl opacity-60 hover:opacity-100 transition-opacity">
                            <p class="text-xs text-neutral-600 mb-1">Staff ditugaskan ke pesanan Anda</p>
                            <p class="text-[10px] text-neutral-400">1 hari lalu</p>
                        </div>
                    </div>
                    <button class="w-full mt-6 py-2.5 text-xs font-bold text-primary-500 border border-success-100 bg-success-50 rounded-lg hover:bg-success-100 hover:text-primary-700 transition-colors">
                        Lihat Semua
                    </button>
                </div>

                <div class="bg-linear-to-br from-success-50 to-white rounded-3xl p-6 text-center border border-dashed border-primary-300">
                    <h3 class="font-bold text-neutral-900 mb-2">Butuh Bantuan?</h3>
                    <p class="text-xs text-neutral-500 mb-6">Tim support kami siap membantu Anda 24/7</p>
                    <button class="w-full py-3 bg-white text-primary-500 border border-primary-500 font-bold text-sm rounded-xl hover:bg-primary-500 hover:text-white transition-all shadow-sm">
                        Hubungi Support
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection