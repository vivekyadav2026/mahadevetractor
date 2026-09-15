@extends('layouts.frontend')

@section('title', 'Checkout')

@section('content')
    @php
        $address1 = '';
        $address2 = '';
        if (auth()->check() && auth()->user()->address) {
            $parts = explode("\n", auth()->user()->address, 2);
            $address1 = $parts[0] ?? '';
            $address2 = $parts[1] ?? '';
            
            if (empty($address2) && str_contains($address1, ',')) {
                $parts = explode(',', $address1, 2);
                $address1 = trim($parts[0]);
                $address2 = trim($parts[1]);
            }
        }
    @endphp
    <!-- Flash Messages (cancel/error/warning) -->
    @if(session('warning'))
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-3">
            <div class="flex items-start gap-2 bg-amber-50 border border-amber-200 text-amber-800 rounded-lg px-3 py-2 text-xs font-medium shadow-sm">
                <i class="fa-solid fa-triangle-exclamation mt-0.5 text-amber-500"></i>
                <span>{{ session('warning') }}</span>
            </div>
        </div>
    @endif
    @if(session('error'))
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-3">
            <div class="flex items-start gap-2 bg-rose-50 border border-rose-200 text-rose-800 rounded-lg px-3 py-2 text-xs font-medium shadow-sm">
                <i class="fa-solid fa-circle-xmark mt-0.5 text-rose-500"></i>
                <span>{{ session('error') }}</span>
            </div>
        </div>
    @endif

<style>
    .co-card {
        background: #ffffff;
        border: 1px solid #e9ecef;
        border-radius: 14px;
        box-shadow: 0 2px 12px rgba(0,0,0,0.03);
    }
    .co-header {
        font-size: 15px;
        font-weight: 700;
        color: #1a1a1a;
        font-family: 'Outfit', sans-serif;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    .co-input {
        background: #fafafa;
        border: 1px solid #e2e8f0;
        border-radius: 10px;
        padding: 9px 14px;
        font-size: 13px;
        color: #1e293b;
        transition: all 0.2s ease;
    }
    .co-input:focus {
        background: #ffffff;
        border-color: #f08038;
        box-shadow: 0 0 0 3px rgba(240, 128, 56, 0.12);
        outline: none;
    }
    .co-label {
        display: block;
        font-size: 11px;
        font-weight: 700;
        color: #64748b;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 5px;
    }
    .order-item-row {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 10px 0;
        border-bottom: 1px solid #f1f5f9;
    }
    .order-item-row:last-child {
        border-bottom: none;
    }
    .order-item-img {
        width: 48px;
        height: 48px;
        border-radius: 8px;
        border: 1px solid #edf2f7;
        background: #f8fafc;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        padding: 4px;
    }
    .order-item-img img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
    }
</style>

    <!-- Checkout Form -->
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-5">
        <!-- Breadcrumb & Title Inline -->
        <div class="mb-5 flex flex-wrap items-center justify-between gap-2 border-b border-gray-100 pb-3">
            <div>
                <h1 class="text-2xl font-bold text-gray-900 leading-tight" style="font-family: 'Outfit', sans-serif;">Secure Checkout</h1>
                <p class="text-xs text-gray-400 mt-0.5">
                    <a href="/" class="text-gray-500 hover:text-primary transition">Home</a> / 
                    <a href="{{ route('cart.index') }}" class="text-gray-500 hover:text-primary transition">Cart</a> / 
                    <span class="text-gray-900 font-semibold">Checkout</span>
                </p>
            </div>
            <div class="flex items-center gap-2">
                <span class="text-[11px] text-emerald-700 font-bold bg-emerald-50 border border-emerald-200/60 px-3 py-1 rounded-full flex items-center gap-1.5">
                    <i class="fa-solid fa-shield-halved text-emerald-500"></i> SSL Encrypted Checkout
                </span>
            </div>
        </div>

        @if ($errors->any())
            <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl mb-4">
                <ul class="list-disc list-inside text-xs space-y-0.5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @guest
            <div class="mb-5 p-3.5 bg-amber-50/80 border border-amber-200/80 rounded-xl flex items-center justify-between gap-3">
                <div class="flex items-center gap-2.5">
                    <div class="h-8 w-8 rounded-full bg-amber-100 text-amber-700 flex items-center justify-center flex-shrink-0 text-xs">
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <p class="text-xs text-amber-950 font-medium m-0">Checking out as <strong>Guest</strong>. Have an account? <a href="{{ route('login') }}" class="text-primary font-bold hover:underline">Log In</a></p>
                </div>
            </div>
        @endguest

        @php
            $defaultAddress = auth()->check() ? auth()->user()->addresses()->where('is_default', true)->first() : null;
            $defaultAddressId = $defaultAddress ? $defaultAddress->id : 'new';
        @endphp
        <form action="{{ route('checkout.store') }}" method="POST" x-data="{ deliveryType: 'online_delivery', selectedAddressId: '{{ $defaultAddressId }}' }">
            @csrf

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
                
                <!-- LEFT COLUMN: Shipping & Info (7 cols) -->
                <div class="lg:col-span-7 space-y-5">
                    
                    <!-- 1. Delivery Options Card -->
                    <div class="co-card p-4 sm:p-5">
                        <h2 class="co-header mb-3.5">
                            <span class="w-6 h-6 rounded-full bg-primary/10 text-primary text-xs flex items-center justify-center font-bold">1</span>
                            Delivery Method
                        </h2>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            <label class="flex items-center p-3 border rounded-xl cursor-pointer transition relative"
                                   :class="deliveryType === 'online_delivery' ? 'border-primary bg-primary/5 ring-1 ring-primary' : 'border-gray-200 bg-white hover:border-gray-300'">
                                <input type="radio" name="delivery_type" value="online_delivery" x-model="deliveryType" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 cursor-pointer">
                                <div class="ml-3">
                                    <span class="font-bold text-gray-900 text-xs block">Online Delivery</span>
                                    <span class="text-[11px] text-gray-500">Express delivery to your doorstep</span>
                                </div>
                                <i class="fa-solid fa-truck-fast ml-auto text-primary text-sm opacity-75"></i>
                            </label>

                            <label class="flex items-center p-3 border rounded-xl cursor-pointer transition relative"
                                   :class="deliveryType === 'self_pickup' ? 'border-primary bg-primary/5 ring-1 ring-primary' : 'border-gray-200 bg-white hover:border-gray-300'">
                                <input type="radio" name="delivery_type" value="self_pickup" x-model="deliveryType" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 cursor-pointer">
                                <div class="ml-3">
                                    <span class="font-bold text-gray-900 text-xs block">Self Pickup</span>
                                    <span class="text-[11px] text-gray-500">Collect from our warehouse</span>
                                </div>
                                <i class="fa-solid fa-store ml-auto text-primary text-sm opacity-75"></i>
                            </label>
                        </div>
                    </div>

                    <!-- 2. Contact & Address Card -->
                    <div class="co-card p-4 sm:p-5">
                        <h2 class="co-header mb-3.5">
                            <span class="w-6 h-6 rounded-full bg-primary/10 text-primary text-xs flex items-center justify-center font-bold">2</span>
                            Customer & Shipping Details
                        </h2>

                        <!-- Contact details -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-3">
                            <div>
                                <label class="co-label">Full Name <span class="text-red-500">*</span></label>
                                <input type="text" name="shipping_name" value="{{ old('shipping_name', auth()->check() ? auth()->user()->name : '') }}" required class="co-input w-full" placeholder="Ranjeet Kumar">
                            </div>
                            <div>
                                <label class="co-label">Email Address <span class="text-red-500">*</span></label>
                                <input type="email" name="shipping_email" value="{{ old('shipping_email', auth()->check() ? auth()->user()->email : '') }}" required class="co-input w-full" placeholder="ranjeet@gmail.com">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-3">
                            <div>
                                <label class="co-label">Mobile Number <span class="text-red-500">*</span></label>
                                <div class="relative">
                                    <span class="absolute left-3.5 top-1/2 -translate-y-1/2 text-gray-500 text-xs font-bold">+91</span>
                                    <input type="tel" name="shipping_phone" value="{{ old('shipping_phone', auth()->check() ? auth()->user()->phone : '') }}" required class="co-input w-full pl-11" placeholder="9876543210" maxlength="15">
                                </div>
                            </div>
                            <div x-show="deliveryType === 'online_delivery'">
                                <label class="co-label">PIN Code <span class="text-red-500">*</span></label>
                                <input type="text" name="shipping_zip" value="{{ old('shipping_zip', auth()->check() ? auth()->user()->zip : '') }}" :required="deliveryType === 'online_delivery'" class="co-input w-full" placeholder="e.g. 110001" maxlength="10">
                            </div>
                        </div>

                        <!-- Warehouse details on self pickup -->
                        <div x-show="deliveryType === 'self_pickup'" class="p-3.5 bg-amber-50/60 border border-amber-200/80 rounded-xl text-xs text-amber-950 space-y-1 mb-3">
                            <p class="font-bold flex items-center gap-1.5 text-amber-900 m-0">
                                <i class="fa-solid fa-location-dot text-amber-600"></i> Pickup Location:
                            </p>
                            <p class="text-slate-700 m-0 leading-relaxed font-medium">
                                {{ \App\Models\Setting::get('site_address', 'Mahadev Tractor Modification, Main Workshop, Haryana') }}
                            </p>
                        </div>

                        <!-- Address fields on online delivery -->
                        <div x-show="deliveryType === 'online_delivery'" class="space-y-3">
                            @auth
                                @php
                                    $userAddresses = auth()->user()->addresses;
                                @endphp
                                @if($userAddresses->isNotEmpty())
                                    <div class="bg-slate-50 p-3 rounded-xl border border-slate-200/80 space-y-2 mb-3">
                                        <label class="co-label mb-1">Select Saved Address</label>
                                        <div class="space-y-2 max-h-40 overflow-y-auto">
                                            @foreach($userAddresses as $addr)
                                                <label class="flex items-start p-2.5 border {{ $addr->is_default ? 'border-primary bg-primary/5' : 'border-slate-200 bg-white' }} rounded-lg cursor-pointer transition text-xs">
                                                    <input type="radio" name="selected_address_id" value="{{ $addr->id }}" {{ $addr->is_default ? 'checked' : '' }}
                                                           @click="selectedAddressId = '{{ $addr->id }}';"
                                                           class="mt-0.5 h-3.5 w-3.5 text-primary border-gray-300">
                                                    <div class="ml-2.5">
                                                        <span class="font-bold text-gray-900 block">{{ $addr->address }}@if($addr->address2), {{ $addr->address2 }}@endif</span>
                                                        <span class="text-gray-500 text-[11px]">{{ $addr->city }}, {{ $addr->state }} - {{ $addr->zip }}</span>
                                                    </div>
                                                </label>
                                            @endforeach
                                            <label class="flex items-center p-2 border border-dashed border-slate-300 bg-white rounded-lg cursor-pointer hover:border-primary text-xs">
                                                <input type="radio" name="selected_address_id" value="new" {{ !$defaultAddress ? 'checked' : '' }}
                                                       @click="selectedAddressId = 'new';"
                                                       class="h-3.5 w-3.5 text-primary border-gray-300">
                                                <span class="ml-2 font-bold text-primary">+ Deliver to another address</span>
                                            </label>
                                        </div>
                                    </div>
                                @endif
                            @endauth

                            <div x-show="selectedAddressId === 'new'" class="space-y-3">
                                <div>
                                    <div class="flex justify-between items-center mb-1">
                                        <label class="co-label mb-0">House No. / Building / Street Address <span class="text-red-500">*</span></label>
                                        <button type="button" id="detect-location-btn" class="text-[10px] text-primary bg-primary/10 hover:bg-primary/20 border border-primary/20 rounded-full px-2 py-0.5 font-bold flex items-center gap-1 cursor-pointer transition">
                                            <i class="fa-solid fa-location-crosshairs"></i> Auto-Detect
                                        </button>
                                    </div>
                                    <input type="text" name="shipping_address" value="{{ old('shipping_address', $address1) }}" :required="deliveryType === 'online_delivery' && selectedAddressId === 'new'" class="co-input w-full" placeholder="e.g. House No. 45, Near Main Market">
                                </div>

                                <div>
                                    <label class="co-label">Area / Landmark / Village (Optional)</label>
                                    <input type="text" name="shipping_address2" value="{{ old('shipping_address2', $address2) }}" class="co-input w-full" placeholder="e.g. Opposite Post Office, Sector 4">
                                </div>

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                                    <div>
                                        <label class="co-label">City / District <span class="text-red-500">*</span></label>
                                        <input type="text" name="shipping_city" value="{{ old('shipping_city', auth()->check() ? auth()->user()->city : '') }}" :required="deliveryType === 'online_delivery' && selectedAddressId === 'new'" class="co-input w-full" placeholder="e.g. Rohtak">
                                    </div>
                                    <div>
                                        <label class="co-label">State <span class="text-red-500">*</span></label>
                                        <input type="text" name="shipping_state" value="{{ old('shipping_state', auth()->check() ? auth()->user()->state : '') }}" :required="deliveryType === 'online_delivery' && selectedAddressId === 'new'" class="co-input w-full" placeholder="e.g. Haryana">
                                    </div>
                                </div>

                                @auth
                                    <div class="flex items-center gap-2 pt-1">
                                        <input type="checkbox" name="is_default" id="is_default" value="1" class="rounded border-gray-300 text-primary h-3.5 w-3.5 cursor-pointer">
                                        <label for="is_default" class="text-xs text-gray-600 cursor-pointer select-none font-medium">Save this as my default address</label>
                                    </div>
                                @endauth
                            </div>
                        </div>

                        <!-- Order Notes -->
                        <div class="mt-3.5 pt-3 border-t border-gray-100">
                            <label class="co-label">Order Instructions (Optional)</label>
                            <textarea name="notes" rows="1.5" class="co-input w-full" placeholder="Any specific notes or tractor model details...">{{ old('notes') }}</textarea>
                        </div>
                    </div>

                    <!-- 3. Payment Methods Card -->
                    <div class="co-card p-4 sm:p-5">
                        <h2 class="co-header mb-3.5">
                            <span class="w-6 h-6 rounded-full bg-primary/10 text-primary text-xs flex items-center justify-center font-bold">3</span>
                            Select Payment Method
                        </h2>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            <label class="flex items-center p-3.5 border-2 border-primary bg-primary/5 rounded-xl cursor-pointer transition shadow-2xs relative">
                                <input type="radio" name="payment_method" value="cashfree" checked class="h-4 w-4 text-primary focus:ring-primary border-gray-300 cursor-pointer">
                                <div class="ml-3 flex-1">
                                    <div class="flex items-center gap-1.5">
                                        <span class="font-bold text-gray-900 text-xs block">Online Payment</span>
                                        <span class="text-[9px] font-extrabold bg-emerald-100 text-emerald-800 px-1.5 py-0.5 rounded uppercase">Fast & Safe</span>
                                    </div>
                                    <span class="text-[11px] text-gray-500 block mt-0.5">UPI (GPay/PhonePe), Cards, NetBanking</span>
                                </div>
                                <i class="fa-solid fa-bolt text-primary text-sm ml-auto"></i>
                            </label>

                            <label class="flex items-center p-3.5 border border-gray-200 bg-white rounded-xl cursor-pointer hover:border-gray-300 transition relative">
                                <input type="radio" name="payment_method" value="cod" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 cursor-pointer">
                                <div class="ml-3">
                                    <span class="font-bold text-gray-900 text-xs block">Cash on Delivery</span>
                                    <span class="text-[11px] text-gray-500 block mt-0.5">Pay in cash upon delivery</span>
                                </div>
                                <i class="fa-solid fa-wallet text-gray-400 text-sm ml-auto"></i>
                            </label>
                        </div>
                    </div>

                </div>

                <!-- RIGHT COLUMN: Compact & Clean Order Summary (5 cols) -->
                <div class="lg:col-span-5 sticky top-24">
                    <div class="co-card p-5">
                        
                        <!-- Header -->
                        <div class="flex items-center justify-between pb-3.5 border-b border-gray-100">
                            <h3 class="text-sm font-bold text-gray-900 uppercase tracking-wider flex items-center gap-2 m-0" style="font-family: 'Outfit', sans-serif;">
                                <i class="fa-solid fa-bag-shopping text-primary text-xs"></i>
                                Order Summary
                            </h3>
                            <span class="text-xs font-bold text-gray-500 bg-gray-100 px-2.5 py-0.5 rounded-full">
                                {{ count($cart) }} {{ count($cart) === 1 ? 'Item' : 'Items' }}
                            </span>
                        </div>

                        <!-- Items Scrollable List -->
                        <div class="divide-y divide-gray-100 max-h-72 overflow-y-auto my-3 pr-1">
                            @foreach($cart as $id => $item)
                                @php
                                    $liveProduct = \App\Models\Product::find($id);
                                    $itemName = $liveProduct ? $liveProduct->name : $item['name'];
                                    $itemPrice = $liveProduct ? ($liveProduct->sale_price ?? $liveProduct->price) : $item['price'];
                                    $itemImage = $liveProduct ? $liveProduct->primary_image_url : $item['image'];
                                @endphp
                                <div class="order-item-row">
                                    <div class="order-item-img">
                                        <img src="{{ $itemImage }}" alt="{{ $itemName }}">
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <h4 class="text-xs font-semibold text-gray-900 leading-snug truncate m-0" title="{{ $itemName }}">
                                            {{ $itemName }}
                                        </h4>
                                        <p class="text-[11px] text-gray-500 font-medium mt-0.5 m-0">
                                            Qty: <span class="font-bold text-gray-800">{{ $item['quantity'] }}</span> &times; &#8377;{{ number_format($itemPrice, 2) }}
                                        </p>
                                    </div>
                                    <div class="text-right flex-shrink-0">
                                        <span class="text-xs font-extrabold text-gray-900 font-sans">&#8377;{{ number_format($itemPrice * $item['quantity'], 2) }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <!-- Price Breakdown -->
                        <div class="bg-gray-50/90 rounded-xl p-3.5 space-y-2 border border-gray-100 mb-4">
                            <div class="flex justify-between text-xs text-gray-600 font-medium">
                                <span>Subtotal</span>
                                <span class="font-bold text-gray-900 font-sans">&#8377;{{ number_format($subtotal, 2) }}</span>
                            </div>
                            <div class="flex justify-between text-xs text-gray-600 font-medium">
                                <span class="flex items-center gap-1.5">
                                    <i class="fa-solid fa-truck-fast text-[11px] text-emerald-600"></i> Delivery Charges
                                </span>
                                <span class="text-emerald-700 font-bold text-[11px] uppercase">Free</span>
                            </div>
                            <div class="border-t border-dashed border-gray-200 pt-2.5 flex justify-between items-center">
                                <div>
                                    <span class="text-xs font-bold text-gray-900 block">Total Amount</span>
                                    <span class="text-[10px] text-gray-400 font-medium">Inclusive of all taxes</span>
                                </div>
                                <span class="text-lg font-extrabold text-primary font-sans leading-none">&#8377;{{ number_format($subtotal, 2) }}</span>
                            </div>
                        </div>

                        <!-- Place Order Button -->
                        <button type="submit" class="w-full bg-primary hover:bg-primary-dark text-white font-bold py-3.5 px-4 rounded-xl text-xs uppercase tracking-wider transition-all duration-300 shadow-md hover:shadow-lg flex items-center justify-center gap-2 cursor-pointer">
                            <i class="fa-solid fa-lock text-[11px]"></i>
                            <span>Place Order &middot; &#8377;{{ number_format($subtotal, 2) }}</span>
                        </button>

                        <!-- Trust Footer -->
                        <div class="flex items-center justify-between text-[11px] text-gray-400 mt-3 pt-3 border-t border-gray-100 font-medium">
                            <span class="flex items-center gap-1">
                                <i class="fa-solid fa-shield-check text-emerald-500"></i> 100% Genuine Parts
                            </span>
                            <span class="flex items-center gap-1">
                                <i class="fa-solid fa-headset text-blue-500"></i> Fast Support
                            </span>
                        </div>

                    </div>
                </div>

            </div>
        </form>
    </div>
@endsection

@push('scripts')
<script>
    document.getElementById('detect-location-btn').addEventListener('click', function() {
        const btn = this;
        const originalText = btn.innerHTML;
        
        btn.disabled = true;
        btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Detecting...';

        // Function to run IP-based fallback geolocator
        function runIpFallback() {
            fetch('https://ipapi.co/json/')
                .then(res => res.json())
                .then(data => {
                    btn.disabled = false;
                    btn.innerHTML = originalText;
                    if (data && data.city) {
                        document.querySelector('input[name="shipping_city"]').value = data.city || '';
                        document.querySelector('input[name="shipping_state"]').value = data.region || data.region_code || '';
                        document.querySelector('input[name="shipping_zip"]').value = data.postal || '';
                        
                        alert('Location resolved via IP address successfully. Please enter your street address details manually.');
                    } else {
                        alert('Could not resolve your location automatically. Please enter your address details manually.');
                    }
                })
                .catch(err => {
                    btn.disabled = false;
                    btn.innerHTML = originalText;
                    alert('Could not detect location. Please fill your address details manually.');
                });
        }

        // Try standard browser Geolocation
        if (!navigator.geolocation) {
            runIpFallback();
            return;
        }

        navigator.geolocation.getCurrentPosition(function(position) {
            const lat = position.coords.latitude;
            const lon = position.coords.longitude;
            
            fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=${lat}&lon=${lon}&addressdetails=1`)
                .then(response => response.json())
                .then(data => {
                    btn.disabled = false;
                    btn.innerHTML = originalText;
                    
                    if (data && data.address) {
                        const addr = data.address;
                        const line1Parts = [
                            addr.house_number,
                            addr.building,
                            addr.road,
                        ].filter(Boolean);
                        const line1 = line1Parts.join(', ') || addr.road || '';
                        
                        const line2Parts = [
                            addr.suburb,
                            addr.neighbourhood,
                            addr.village,
                            addr.city_district,
                        ].filter(Boolean);
                        const line2 = line2Parts.join(', ') || addr.county || '';
                        
                        document.querySelector('input[name="shipping_address"]').value = line1;
                        document.querySelector('input[name="shipping_address2"]').value = line2;
                        document.querySelector('input[name="shipping_city"]').value = addr.city || addr.town || addr.village || addr.county || '';
                        document.querySelector('input[name="shipping_state"]').value = addr.state || '';
                        document.querySelector('input[name="shipping_zip"]').value = addr.postcode || '';
                    } else {
                        runIpFallback();
                    }
                })
                .catch(error => {
                    runIpFallback();
                });
        }, function(error) {
            // Geolocation failed or user denied permission â€” run the IP fallback instantly
            runIpFallback();
        }, {
            timeout: 6000 // 6 seconds timeout for browser geolocation
        });
    });
</script>
@endpush
