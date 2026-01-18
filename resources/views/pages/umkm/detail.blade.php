@extends('layouts.umkm')

@section('title', 'Deep Cleaning Service - UMKM Name')

@section('content')
    <div class="bg-neutral-50 min-h-screen pb-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-8">
            <nav class="flex mb-8 text-sm text-neutral-500">
                <a href="{{ route('umkm.preview') }}" class="hover:text-primary-600 transition-colors">Home</a>
                <span class="mx-2">/</span>
                <a href="{{ route('umkm.catalog') }}" class="hover:text-primary-600 transition-colors">Catalog</a>
                <span class="mx-2">/</span>
                <span class="text-neutral-900 font-medium">Deep Cleaning Service</span>
            </nav>

            <div class="flex flex-col lg:flex-row gap-12 mb-16">
                <div class="w-full lg:w-1/2">
                    <div class="relative h-[400px] md:h-[500px] rounded-3xl overflow-hidden mb-4 group border border-neutral-100 shadow-sm">
                        <img src="https://images.pexels.com/photos/4401538/pexels-photo-4401538.jpeg" alt="Main Service Image"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        <button class="absolute top-4 right-4 p-2 bg-white/90 backdrop-blur-sm rounded-full text-neutral-500 hover:text-red-500 transition-colors shadow-sm">
                            <i data-lucide="heart" class="w-5 h-5"></i>
                        </button>
                        <div class="absolute bottom-4 left-4 bg-white/90 backdrop-blur-md px-4 py-2 rounded-xl text-sm font-bold shadow-sm">
                            56 Photos
                        </div>
                    </div>
                    <div class="grid grid-cols-4 gap-4">
                        <div class="relative h-24 rounded-2xl overflow-hidden border-2 border-primary-500 cursor-pointer">
                            <img src="https://images.pexels.com/photos/4401538/pexels-photo-4401538.jpeg" class="w-full h-full object-cover">
                        </div>
                        <div class="relative h-24 rounded-2xl overflow-hidden border border-neutral-200 cursor-pointer opacity-70 hover:opacity-100 transition-opacity">
                            <img src="https://images.pexels.com/photos/4107284/pexels-photo-4107284.jpeg" class="w-full h-full object-cover">
                        </div>
                        <div class="relative h-24 rounded-2xl overflow-hidden border border-neutral-200 cursor-pointer opacity-70 hover:opacity-100 transition-opacity">
                            <img src="https://images.pexels.com/photos/6195125/pexels-photo-6195125.jpeg" class="w-full h-full object-cover">
                        </div>
                        <div class="relative h-24 rounded-2xl overflow-hidden border border-neutral-200 cursor-pointer opacity-70 hover:opacity-100 transition-opacity">
                            <img src="https://images.pexels.com/photos/4176235/pexels-photo-4176235.jpeg" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-black/40 flex items-center justify-center text-white font-bold text-lg">
                                +53
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/2">
                    <span class="inline-block px-3 py-1 bg-neutral-900 text-white text-xs font-bold rounded-full mb-4">Service</span>
                    <h1 class="text-3xl md:text-4xl font-black text-neutral-900 mb-4 leading-tight">Deep Cleaning Service - Complete House Cleaning</h1>
                    <div class="flex items-center gap-4 mb-6">
                        <div class="flex items-center gap-1">
                            <div class="flex text-yellow-500">
                                <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                                <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                            </div>
                            <span class="font-bold text-neutral-900 ml-1">4.8</span>
                        </div>
                        <span class="text-neutral-300">|</span>
                        <span class="text-neutral-500 text-sm">(1,673 reviews)</span>
                        <a href="#" class="text-primary-600 text-sm font-bold hover:underline">See all reviews</a>
                    </div>

                    <div class="bg-primary-50 border border-primary-100 rounded-xl p-4 mb-8">
                        <p class="text-sm text-neutral-500 mb-1">Start from</p>
                        <div class="flex items-baseline gap-2">
                            <span class="text-3xl font-black text-primary-600">Rp 50,000</span>
                            <span class="text-lg text-neutral-500 font-medium">/ m²</span>
                        </div>
                        <p class="text-xs text-neutral-400 mt-2">*Final price determined after site survey</p>
                    </div>

                    <p class="text-neutral-600 leading-relaxed mb-8">
                        Professional deep cleaning service for your entire house. Our experienced team will thoroughly clean every corner of your property using professional-grade equipment and
                        eco-friendly cleaning solutions. Perfect for move-in/move-out, post-renovation, or regular maintenance.
                    </p>

                    <div class="flex gap-4 mb-8">
                        <div class="flex items-center gap-2 text-sm text-neutral-600 bg-white border border-neutral-200 px-3 py-2 rounded-lg">
                            <i data-lucide="clock" class="w-4 h-4 text-primary-500"></i>
                            <span>3-4 hours (50m²)</span>
                        </div>
                        <div class="flex items-center gap-2 text-sm text-neutral-600 bg-white border border-neutral-200 px-3 py-2 rounded-lg">
                            <i data-lucide="map-pin" class="w-4 h-4 text-primary-500"></i>
                            <span>Available in: Denpasar, Badung</span>
                        </div>
                    </div>

                    <div class="mb-10">
                        <h3 class="font-bold text-neutral-900 mb-4">What's Included</h3>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-3">
                                <i data-lucide="check-circle-2" class="w-5 h-5 text-primary-500 shrink-0 mt-0.5"></i>
                                <span class="text-neutral-600 text-sm">Floor, wall and ceiling cleaning</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="check-circle-2" class="w-5 h-5 text-primary-500 shrink-0 mt-0.5"></i>
                                <span class="text-neutral-600 text-sm">Bedroom and kitchen deep clean</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="check-circle-2" class="w-5 h-5 text-primary-500 shrink-0 mt-0.5"></i>
                                <span class="text-neutral-600 text-sm">Furniture and decoration dusting</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="check-circle-2" class="w-5 h-5 text-primary-500 shrink-0 mt-0.5"></i>
                                <span class="text-neutral-600 text-sm">Vacuum and mop entire area</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="check-circle-2" class="w-5 h-5 text-primary-500 shrink-0 mt-0.5"></i>
                                <span class="text-neutral-600 text-sm">Cleaning equipment & materials provided</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i data-lucide="check-circle-2" class="w-5 h-5 text-primary-500 shrink-0 mt-0.5"></i>
                                <span class="text-neutral-600 text-sm">100% satisfaction guarantee</span>
                            </li>
                        </ul>
                    </div>

                    <div class="bg-white border border-neutral-200 rounded-2xl p-6 shadow-lg sticky top-24">
                        <h3 class="font-bold text-lg mb-4">Quantity & Booking</h3>
                        <div class="mb-6">
                            <label class="block text-xs font-bold text-neutral-500 uppercase mb-2">Square Meter Input</label>
                            <div class="flex items-center gap-3">
                                <button class="w-12 h-12 rounded-xl border border-neutral-200 flex items-center justify-center hover:bg-neutral-50 disabled:opacity-50">
                                    <i data-lucide="minus" class="w-5 h-5 text-neutral-600"></i>
                                </button>
                                <div class="flex-1 relative">
                                    <input type="number" value="100" class="w-full h-12 text-center font-bold text-lg border border-neutral-200 rounded-xl focus:outline-none focus:border-primary-500">
                                    <span class="absolute right-4 top-1/2 -translate-y-1/2 text-neutral-400 font-medium">m²</span>
                                </div>
                                <button class="w-12 h-12 rounded-xl border border-neutral-200 flex items-center justify-center hover:bg-neutral-50">
                                    <i data-lucide="plus" class="w-5 h-5 text-neutral-600"></i>
                                </button>
                            </div>
                        </div>

                        <div class="bg-neutral-50 rounded-xl p-4 mb-6 flex justify-between items-center">
                            <div>
                                <p class="text-xs text-neutral-500 font-medium">Estimated Total</p>
                                <p class="text-xl font-black text-neutral-900">Rp 5.000.000</p>
                            </div>
                        </div>

                        <div class="flex gap-3">
                            <button class="flex-1 py-3.5 bg-neutral-900 text-white font-bold rounded-xl hover:bg-primary-600 transition-all shadow-lg hover:shadow-xl">
                                Book Now
                            </button>
                            <button class="flex-1 py-3.5 bg-white border border-neutral-200 text-neutral-700 font-bold rounded-xl hover:bg-neutral-50 transition-all">
                                Contact for Survey
                            </button>
                            <button class="w-14 shrink-0 border border-neutral-200 rounded-xl flex items-center justify-center hover:bg-neutral-50 text-neutral-400 hover:text-red-500 transition-colors">
                                <i data-lucide="heart" class="w-6 h-6"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-3xl border border-neutral-100 shadow-sm overflow-hidden mb-16">
                <div class="flex border-b border-neutral-100 overflow-x-auto">
                    <button class="px-8 py-5 text-sm font-bold text-primary-600 border-b-2 border-primary-600 bg-primary-50/50">Description</button>
                    <button class="px-8 py-5 text-sm font-bold text-neutral-500 hover:text-neutral-900 transition-colors">Terms & Conditions</button>
                    <button class="px-8 py-5 text-sm font-bold text-neutral-500 hover:text-neutral-900 transition-colors">FAQ</button>
                    <button class="px-8 py-5 text-sm font-bold text-neutral-500 hover:text-neutral-900 transition-colors">Reviews</button>
                </div>

                <div class="p-8 md:p-12">
                    <div class="max-w-4xl">
                        <h3 class="text-2xl font-black text-neutral-900 mb-6">Service Description</h3>
                        <div class="prose prose-neutral max-w-none text-neutral-600 mb-12">
                            <p class="mb-4">
                                Our Deep Cleaning Service is designed to provide a comprehensive cleaning solution for residential and commercial properties. We use state-of-the-art equipment and
                                environmentally friendly cleaning products to ensure the best results while maintaining safety standards.
                            </p>
                            <p class="mb-4">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                            <p>
                                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia deserunt mollit anim id est laborum.
                            </p>
                        </div>

                        <h3 class="text-lg font-bold text-neutral-900 mb-6">Process</h3>
                        <div class="space-y-8 relative">
                            <div class="relative flex items-start group">
                                <div
                                    class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-full border border-white bg-neutral-100 shadow shrink-0 z-10 group-hover:bg-primary-500 group-hover:text-white transition-colors">
                                    <span class="font-bold text-sm">1</span>
                                </div>
                                <div class="ml-16">
                                    <h4 class="text-base font-bold text-neutral-900">Initial Consultation</h4>
                                    <p class="mt-1 text-sm text-neutral-500">Contact us to discuss your cleaning needs and schedule initial consultation.</p>
                                </div>
                            </div>

                            <div class="relative flex items-start group">
                                <div
                                    class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-full border border-white bg-neutral-100 shadow shrink-0 z-10 group-hover:bg-primary-500 group-hover:text-white transition-colors">
                                    <span class="font-bold text-sm">2</span>
                                </div>
                                <div class="ml-16">
                                    <h4 class="text-base font-bold text-neutral-900">Survey and Negotiation</h4>
                                    <p class="mt-1 text-sm text-neutral-500">Our team visits your property to assess requirements and negotiate scope of work.</p>
                                </div>
                            </div>

                            <div class="relative flex items-start group">
                                <div
                                    class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-full border border-white bg-neutral-100 shadow shrink-0 z-10 group-hover:bg-primary-500 group-hover:text-white transition-colors">
                                    <span class="font-bold text-sm">3</span>
                                </div>
                                <div class="ml-16">
                                    <h4 class="text-base font-bold text-neutral-900">Price Agreement</h4>
                                    <p class="mt-1 text-sm text-neutral-500">Final price confirmation after survey and negotiation process.</p>
                                </div>
                            </div>

                            <div class="relative flex items-start group">
                                <div
                                    class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-full border border-white bg-neutral-100 shadow shrink-0 z-10 group-hover:bg-primary-500 group-hover:text-white transition-colors">
                                    <span class="font-bold text-sm">4</span>
                                </div>
                                <div class="ml-16">
                                    <h4 class="text-base font-bold text-neutral-900">Pro-Invoice</h4>
                                    <p class="mt-1 text-sm text-neutral-500">Initial invoice issued (final price may adjust based on actual field conditions).</p>
                                </div>
                            </div>

                            <div class="relative flex items-start group">
                                <div
                                    class="absolute left-0 top-0 flex h-10 w-10 items-center justify-center rounded-full border border-white bg-neutral-100 shadow shrink-0 z-10 group-hover:bg-primary-500 group-hover:text-white transition-colors">
                                    <span class="font-bold text-sm">5</span>
                                </div>
                                <div class="ml-16">
                                    <h4 class="text-base font-bold text-neutral-900">Service Execution</h4>
                                    <p class="mt-1 text-sm text-neutral-500">Our professional team performs the deep cleaning service.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h3 class="text-2xl font-black text-neutral-900 mb-8">You May Also Like</h3>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-neutral-100 hover:shadow-lg transition-all group">
                    <div class="aspect-4/3 bg-neutral-100 overflow-hidden relative">
                        <img src="https://images.pexels.com/photos/4107284/pexels-photo-4107284.jpeg" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-4">
                        <h4 class="font-bold text-neutral-900 mb-1 truncate">Office Cleaning Service</h4>
                        <p class="text-xs text-neutral-500 mb-3 flex items-center gap-1">
                            <i data-lucide="star" class="w-3 h-3 text-yellow-500 fill-current"></i> 4.9 (234)
                        </p>
                        <p class="text-xs text-neutral-400">Start from</p>
                        <p class="font-black text-neutral-900">Rp 75,000</p>
                        <button class="w-full mt-4 py-2 border border-neutral-200 rounded-lg text-xs font-bold hover:bg-neutral-900 hover:text-white transition-all">View Details</button>
                    </div>
                </div>

                <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-neutral-100 hover:shadow-lg transition-all group">
                    <div class="aspect-4/3 bg-neutral-100 overflow-hidden relative">
                        <img src="https://images.pexels.com/photos/6195125/pexels-photo-6195125.jpeg" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-4">
                        <h4 class="font-bold text-neutral-900 mb-1 truncate">Window Cleaning Service</h4>
                        <p class="text-xs text-neutral-500 mb-3 flex items-center gap-1">
                            <i data-lucide="star" class="w-3 h-3 text-yellow-500 fill-current"></i> 4.7 (133)
                        </p>
                        <p class="text-xs text-neutral-400">Start from</p>
                        <p class="font-black text-neutral-900">Rp 40,000</p>
                        <button class="w-full mt-4 py-2 border border-neutral-200 rounded-lg text-xs font-bold hover:bg-neutral-900 hover:text-white transition-all">View Details</button>
                    </div>
                </div>

                <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-neutral-100 hover:shadow-lg transition-all group">
                    <div class="aspect-4/3 bg-neutral-100 overflow-hidden relative">
                        <img src="https://images.pexels.com/photos/4176235/pexels-photo-4176235.jpeg" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-4">
                        <h4 class="font-bold text-neutral-900 mb-1 truncate">Carpet Deep Clean</h4>
                        <p class="text-xs text-neutral-500 mb-3 flex items-center gap-1">
                            <i data-lucide="star" class="w-3 h-3 text-yellow-500 fill-current"></i> 4.8 (189)
                        </p>
                        <p class="text-xs text-neutral-400">Start from</p>
                        <p class="font-black text-neutral-900">Rp 35,000</p>
                        <button class="w-full mt-4 py-2 border border-neutral-200 rounded-lg text-xs font-bold hover:bg-neutral-900 hover:text-white transition-all">View Details</button>
                    </div>
                </div>

                <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-neutral-100 hover:shadow-lg transition-all group">
                    <div class="aspect-4/3 bg-neutral-100 overflow-hidden relative">
                        <img src="https://images.pexels.com/photos/24828656/pexels-photo-24828656.jpeg" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    <div class="p-4">
                        <h4 class="font-bold text-neutral-900 mb-1 truncate">AC Maintenance Clean</h4>
                        <p class="text-xs text-neutral-500 mb-3 flex items-center gap-1">
                            <i data-lucide="star" class="w-3 h-3 text-yellow-500 fill-current"></i> 4.5 (89)
                        </p>
                        <p class="text-xs text-neutral-400">Start from</p>
                        <p class="font-black text-neutral-900">Rp 65,000</p>
                        <button class="w-full mt-4 py-2 border border-neutral-200 rounded-lg text-xs font-bold hover:bg-neutral-900 hover:text-white transition-all">View Details</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection