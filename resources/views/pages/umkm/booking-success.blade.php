@extends('layouts.umkm')

@section('title', 'Order Success - UMKM Name')

@section('content')
    <div class="bg-neutral-50 min-h-screen pb-20">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 pt-12">

            <div class="text-center mb-10">
                <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i data-lucide="check" class="w-10 h-10 text-green-600"></i>
                </div>
                <h1 class="text-3xl font-black text-neutral-900 mb-2">Order Successfully Created!</h1>
                <p class="text-neutral-500">Thank you for booking our service. We will review your order shortly.</p>
            </div>

            <div class="bg-white rounded-3xl border border-neutral-200 overflow-hidden shadow-sm mb-8">
                <div class="p-8 border-b border-neutral-100 text-center bg-neutral-50/50">
                    <p class="text-xs font-bold text-neutral-400 uppercase tracking-wider mb-2">Order ID</p>
                    <div class="flex items-center justify-center gap-2">
                        <span class="text-xl font-bold text-neutral-900">#BWP-2026-0001</span>
                        <button id="success-copy-order-id-btn" class="text-primary-600 hover:text-primary-700">
                            <i data-lucide="copy" class="w-4 h-4"></i>
                        </button>
                    </div>
                    <div class="mt-4 inline-flex items-center gap-2 px-3 py-1 bg-yellow-100 text-yellow-700 text-xs font-bold rounded-full">
                        <span class="w-2 h-2 rounded-full bg-yellow-500"></span>
                        PENDING_REVIEW
                    </div>
                    <p class="text-xs text-neutral-400 mt-4">Created on: 15 Jan 2026, 14:30</p>
                </div>

                <div class="p-8">
                    <h3 class="font-bold text-lg text-neutral-900 mb-6">Order Summary</h3>

                    <div class="bg-neutral-50 rounded-2xl p-6 mb-8">
                        <div class="flex items-start gap-4 mb-6">
                            <div class="w-16 h-16 rounded-xl bg-neutral-200 overflow-hidden shrink-0">
                                <img src="https://images.pexels.com/photos/4401538/pexels-photo-4401538.jpeg" class="w-full h-full object-cover">
                            </div>
                            <div>
                                <h4 class="font-bold text-neutral-900">Deep Cleaning Service</h4>
                                <p class="text-sm text-neutral-500">by BWP Cleaning Service</p>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-sm">
                            <div>
                                <p class="text-neutral-500 mb-1">Service Date</p>
                                <p class="font-bold text-neutral-900">16 January 2026</p>
                            </div>
                            <div>
                                <p class="text-neutral-500 mb-1">Service Location</p>
                                <p class="font-bold text-neutral-900">Jl. Lingkar Timur No 7, Bali</p>
                                <a href="#" class="text-primary-600 text-xs font-bold hover:underline flex items-center gap-1 mt-1">
                                    <i data-lucide="map-pin" class="w-3 h-3"></i> View Map
                                </a>
                            </div>
                            <div>
                                <p class="text-neutral-500 mb-1">Service Time</p>
                                <p class="font-bold text-neutral-900">10:00 - 12:00</p>
                            </div>
                            <div>
                                <p class="text-neutral-500 mb-1">Site Photos</p>
                                <p class="font-bold text-neutral-900 mb-1">3 photos uploaded</p>
                                <button class="text-neutral-500 hover:text-neutral-900 text-xs font-bold border border-neutral-200 rounded px-2 py-1 bg-white">View Photos</button>
                            </div>
                            <div>
                                <p class="text-neutral-500 mb-1">Area Size</p>
                                <p class="font-bold text-neutral-900">50 m²</p>
                            </div>
                        </div>

                        <div class="mt-6 pt-6 border-t border-neutral-200">
                            <p class="text-sm text-neutral-500 mb-1">Estimated Price</p>
                            <p class="text-2xl font-black text-neutral-900">Rp 2,500,000</p>
                            <p class="text-xs text-neutral-400 mt-1">*Final price will be confirmed by admin after review</p>
                        </div>
                    </div>

                    <div class="bg-blue-50 border border-blue-100 rounded-2xl p-6 mb-8">
                        <div class="flex gap-4">
                            <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center shrink-0">
                                <i data-lucide="info" class="w-5 h-5 text-blue-600"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-blue-900 mb-1">What's Next?</h4>
                                <p class="text-sm text-blue-800 leading-relaxed mb-3">
                                    Your order is being reviewed by BWP Cleaning Service admin. Admin will contact you via chat to confirm details and provide final pricing proposal.
                                </p>
                                <div class="flex items-center gap-2 text-xs text-blue-600 font-medium">
                                    <i data-lucide="clock" class="w-3 h-3"></i>
                                    Average response time: 2-4 hours
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h3 class="font-bold text-neutral-900 mb-6">Order Timeline</h3>
                        <div class="relative pl-8 space-y-8 before:absolute before:left-[11px] before:top-2 before:bottom-2 before:w-[2px] before:bg-neutral-100">
                            <div class="relative">
                                <div class="absolute -left-8 w-6 h-6 rounded-full bg-neutral-900 flex items-center justify-center border-4 border-white shadow-sm">
                                    <i data-lucide="check" class="w-3 h-3 text-white"></i>
                                </div>
                                <h4 class="font-bold text-neutral-900 text-sm">Step 1: Order Created</h4>
                                <p class="text-xs text-neutral-500 mt-0.5">Completed</p>
                            </div>

                            <div class="relative">
                                <div class="absolute -left-8 w-6 h-6 rounded-full bg-white border-2 border-neutral-900 flex items-center justify-center shadow-sm">
                                    <span class="text-[10px] font-bold text-neutral-900">2</span>
                                </div>
                                <h4 class="font-bold text-neutral-900 text-sm">Step 2: Admin Review</h4>
                                <p class="text-xs text-primary-600 font-medium mt-0.5 animate-pulse">(current step - pending)</p>
                            </div>

                            <div class="relative opacity-50">
                                <div class="absolute -left-8 w-6 h-6 rounded-full bg-white border border-neutral-200 flex items-center justify-center">
                                    <span class="text-[10px] font-bold text-neutral-400">3</span>
                                </div>
                                <h4 class="font-bold text-neutral-900 text-sm">Step 3: Price Confirmation</h4>
                            </div>

                            <div class="relative opacity-50">
                                <div class="absolute -left-8 w-6 h-6 rounded-full bg-white border border-neutral-200 flex items-center justify-center">
                                    <span class="text-[10px] font-bold text-neutral-400">4</span>
                                </div>
                                <h4 class="font-bold text-neutral-900 text-sm">Step 4: Payment</h4>
                            </div>

                            <div class="relative opacity-50">
                                <div class="absolute -left-8 w-6 h-6 rounded-full bg-white border border-neutral-200 flex items-center justify-center">
                                    <span class="text-[10px] font-bold text-neutral-400">5</span>
                                </div>
                                <h4 class="font-bold text-neutral-900 text-sm">Step 5: Service Execution</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-4">
                <button id="success-view-details-btn"
                    class="w-full py-4 bg-neutral-900 text-white font-bold rounded-xl hover:bg-neutral-800 transition-all shadow-lg hover:shadow-xl flex items-center justify-center gap-2">
                    <i data-lucide="file-text" class="w-4 h-4"></i>
                    View Order Details
                </button>
                <a id="success-back-dashboard-btn" href="{{ route('umkm.preview') }}"
                    class="w-full py-4 bg-white border border-neutral-200 text-neutral-700 font-bold rounded-xl hover:bg-neutral-50 transition-all text-center">
                    Back to Dashboard
                </a>
            </div>

            <div class="mt-8 text-center bg-neutral-100 rounded-xl p-6">
                <p class="text-neutral-500 text-sm mb-4">Need help with your order?</p>
                <div class="flex justify-center gap-6 text-sm font-bold text-neutral-900">
                    <a href="#" class="flex items-center gap-2 hover:text-primary-600">
                        <i data-lucide="help-circle" class="w-4 h-4"></i> Contact Support
                    </a>
                    <a href="#" class="flex items-center gap-2 hover:text-primary-600">
                        <i data-lucide="file-question" class="w-4 h-4"></i> View FAQ
                    </a>
                </div>
            </div>

        </div>
    </div>
@endsection