@extends('layouts.umkm')

@section('title', 'Book Service - UMKM Name')

@section('content')
    <div class="bg-neutral-50 min-h-screen pb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-8">
            <nav class="flex mb-8 text-sm text-neutral-500">
                <a href="{{ route('umkm.preview') }}" class="hover:text-primary-600 transition-colors">Home</a>
                <span class="mx-2">/</span>
                <a href="{{ route('umkm.catalog') }}" class="hover:text-primary-600 transition-colors">Catalog</a>
                <span class="mx-2">/</span>
                <a href="{{ route('umkm.detail') }}" class="hover:text-primary-600 transition-colors">Deep Cleaning Service</a>
                <span class="mx-2">/</span>
                <span class="text-neutral-900 font-medium">Book Service</span>
            </nav>

            <div class="mb-8">
                <h1 class="text-3xl font-black text-neutral-900">Book This Service</h1>
            </div>

            <div class="flex flex-col lg:flex-row gap-8">
                <div class="flex-1">
                    <div class="bg-white rounded-2xl border border-neutral-200 p-6 md:p-8 shadow-sm mb-6">
                        <div class="space-y-6">
                            <div>
                                <label class="block text-sm font-bold text-neutral-900 mb-2">Select Service</label>
                                <div class="relative">
                                    <select id="booking-service-select"
                                        class="w-full h-12 pl-4 pr-10 bg-neutral-50 border border-neutral-200 rounded-xl appearance-none focus:outline-none focus:border-primary-500 focus:bg-white transition-all text-neutral-900 font-medium">
                                        <option>Deep Cleaning Service</option>
                                        <option>Office Cleaning</option>
                                        <option>Window Cleaning</option>
                                    </select>
                                    <i data-lucide="chevron-down" class="absolute right-4 top-1/2 -translate-y-1/2 w-5 h-5 text-neutral-400 pointer-events-none"></i>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-bold text-neutral-900 mb-2">Service Date</label>
                                    <div class="relative">
                                        <input id="booking-date-input" type="date"
                                            class="w-full h-12 pl-4 pr-4 bg-neutral-50 border border-neutral-200 rounded-xl focus:outline-none focus:border-primary-500 focus:bg-white transition-all text-neutral-900 font-medium">
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-neutral-900 mb-2">Service Time</label>
                                    <div class="relative">
                                        <select id="booking-time-select"
                                            class="w-full h-12 pl-4 pr-10 bg-neutral-50 border border-neutral-200 rounded-xl appearance-none focus:outline-none focus:border-primary-500 focus:bg-white transition-all text-neutral-900 font-medium">
                                            <option>09:00 AM</option>
                                            <option>10:00 AM</option>
                                            <option>11:00 AM</option>
                                            <option>01:00 PM</option>
                                            <option>02:00 PM</option>
                                            <option>03:00 PM</option>
                                        </select>
                                        <i data-lucide="clock" class="absolute right-4 top-1/2 -translate-y-1/2 w-5 h-5 text-neutral-400 pointer-events-none"></i>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-neutral-900 mb-2">Service Location</label>
                                <div class="flex gap-3 mb-3">
                                    <div class="flex-1 relative">
                                        <input id="booking-location-input" type="text" placeholder="Enter full address"
                                            class="w-full h-12 pl-12 pr-4 bg-neutral-50 border border-neutral-200 rounded-xl focus:outline-none focus:border-primary-500 focus:bg-white transition-all text-neutral-900 placeholder:text-neutral-400">
                                        <i data-lucide="map-pin" class="absolute left-4 top-1/2 -translate-y-1/2 w-5 h-5 text-neutral-400"></i>
                                    </div>
                                    <button id="booking-view-map-btn"
                                        class="px-6 h-12 bg-white border border-neutral-200 rounded-xl text-neutral-700 font-bold hover:bg-neutral-50 transition-colors whitespace-nowrap flex items-center gap-2">
                                        <i data-lucide="map" class="w-4 h-4"></i>
                                        View Map
                                    </button>
                                </div>
                                <div class="h-48 bg-neutral-100 rounded-xl border border-neutral-200 flex items-center justify-center text-neutral-400">
                                    Map Preview Placeholder
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-neutral-900 mb-2">Site Photos (Optional)</label>
                                <p class="text-xs text-neutral-500 mb-3">Help us understand the condition better by uploading photos.</p>
                                <div class="grid grid-cols-2 md:grid-cols-4 gap-4" id="booking-photo-upload-area">
                                    <div
                                        class="aspect-square bg-neutral-50 border-2 border-dashed border-neutral-200 rounded-xl flex flex-col items-center justify-center cursor-pointer hover:border-primary-500 hover:bg-primary-50 transition-all group">
                                        <div class="w-10 h-10 rounded-full bg-white border border-neutral-200 flex items-center justify-center mb-2 group-hover:scale-110 transition-transform">
                                            <i data-lucide="upload-cloud" class="w-5 h-5 text-neutral-400 group-hover:text-primary-500"></i>
                                        </div>
                                        <span class="text-xs font-bold text-neutral-400 group-hover:text-primary-600">Upload</span>
                                    </div>
                                    <div class="aspect-square bg-neutral-100 rounded-xl relative group overflow-hidden">
                                        <img src="https://images.pexels.com/photos/1643384/pexels-photo-1643384.jpeg" class="w-full h-full object-cover">
                                        <button class="absolute top-2 right-2 p-1 bg-white/90 rounded-full text-red-500 opacity-0 group-hover:opacity-100 transition-opacity hover:bg-red-50">
                                            <i data-lucide="x" class="w-4 h-4"></i>
                                        </button>
                                    </div>
                                    <div class="aspect-square bg-neutral-100 rounded-xl relative group overflow-hidden">
                                        <img src="https://images.pexels.com/photos/1571460/pexels-photo-1571460.jpeg" class="w-full h-full object-cover">
                                        <button class="absolute top-2 right-2 p-1 bg-white/90 rounded-full text-red-500 opacity-0 group-hover:opacity-100 transition-opacity hover:bg-red-50">
                                            <i data-lucide="x" class="w-4 h-4"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-neutral-900 mb-2">Additional Instructions</label>
                                <textarea id="booking-instructions-input" rows="4" placeholder="Any specific requirements or details..."
                                    class="w-full p-4 bg-neutral-50 border border-neutral-200 rounded-xl focus:outline-none focus:border-primary-500 focus:bg-white transition-all text-neutral-900 placeholder:text-neutral-400 resize-none"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-96 shrink-0">
                    <div class="bg-white rounded-2xl border border-neutral-200 p-6 shadow-lg sticky top-24">
                        <h3 class="font-bold text-lg text-neutral-900 mb-6">Booking Summary</h3>

                        <div class="space-y-4 mb-6 border-b border-neutral-100 pb-6">
                            <div class="flex justify-between text-sm">
                                <span class="text-neutral-500">Service</span>
                                <span class="font-bold text-neutral-900 text-right">Deep Cleaning Service</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-neutral-500">Area Size</span>
                                <span class="font-bold text-neutral-900">100 m²</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-neutral-500">Date</span>
                                <span class="font-bold text-neutral-900">Jan 24, 2026</span>
                            </div>
                            <div class="flex justify-between text-sm">
                                <span class="text-neutral-500">Time</span>
                                <span class="font-bold text-neutral-900">09:00 AM</span>
                            </div>
                        </div>

                        <div class="space-y-3 mb-6">
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-neutral-500">Base Price</span>
                                <span class="font-medium text-neutral-900">Rp 50,000 / m²</span>
                            </div>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-neutral-500">Subtotal</span>
                                <span class="font-medium text-neutral-900">Rp 5,000,000</span>
                            </div>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-neutral-500">Service Fee</span>
                                <span class="font-medium text-neutral-900">Rp 25,000</span>
                            </div>
                        </div>

                        <div class="bg-neutral-50 rounded-xl p-4 mb-6">
                            <div class="flex justify-between items-end">
                                <div>
                                    <p class="text-xs text-neutral-500 font-medium mb-1">Estimated Total</p>
                                    <p class="text-2xl font-black text-primary-600">Rp 5,025,000</p>
                                </div>
                            </div>
                            <p class="text-[10px] text-neutral-400 mt-2 leading-tight">*Final price may be adjusted after survey.</p>
                        </div>

                        <a id="booking-checkout-btn" href="{{ route('umkm.booking-success') }}"
                            class="w-full py-4 bg-neutral-900 text-white font-bold rounded-xl hover:bg-primary-600 transition-all shadow-lg hover:shadow-xl flex items-center justify-center gap-2 text-center">
                            <span>Proceed to Checkout</span>
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>

                        <p class="text-xs text-center text-neutral-400 mt-4">
                            By proceeding, you agree to our <a href="#" class="underline hover:text-neutral-900">Terms of Service</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection