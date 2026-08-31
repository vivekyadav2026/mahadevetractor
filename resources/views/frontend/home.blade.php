<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>Mahadev Tractor Modification & Accessories</title>
<meta name="description" content="India's most trusted vehicle accessories store. Buy fiber hoods, music systems, and tractor accessories.">
<link rel="icon" href="{{ asset('images/mahadev_logo.jpg') }}">

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css?v=' . filemtime(public_path('css/style.css'))) }}">
<style>
  /* Premium E-commerce Overrides */
  body { background-color: #f8f9fa; }
  
  /* Layout tweaks */
  .pl-main-container { max-width: 1500px; margin: 0 auto; }
  
  /* HERO BANNER STYLES */
  .pl-hero-custom {
      background: linear-gradient(135deg, #ffffff 0%, #f0f4f8 100%);
      border-radius: 16px;
      padding: 3rem;
      margin-bottom: 2rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
      box-shadow: 0 4px 20px rgba(0,0,0,0.03);
  }
  .god-text { color: #f26522; font-weight: 800; font-size: 1.2rem; letter-spacing: 1.5px; margin-bottom: 12px; font-family: 'Outfit', sans-serif; display: flex; align-items: center; gap: 8px; }
  .hero-title { font-weight: 900; font-size: 2.8rem; color: #111; line-height: 1.2; }
  .hero-delivery-text { font-size: 1.3rem; color: #cc5500; margin: 1rem 0; font-weight: 700; display: flex; align-items: center; gap: 8px; }
  .pl-hero-text .highlight { color: #f08038; }
  .pl-hero-slider-img {
      width: 100%;
      aspect-ratio: 21 / 9;
      object-fit: cover;
      border-radius: 16px;
      display: block;
  }
  @media (max-width: 768px) {
      .pl-hero-slider-img {
          aspect-ratio: 16 / 9;
      }
  }
  
  .cat-circle-wrap { text-align: center; text-decoration: none; display: block; width: 100px; flex-shrink: 0; transition: color 0.2s; }
  .cat-circle-wrap:hover .cat-title { color: #f08038; }
  .scrollbar-hidden::-webkit-scrollbar { display: none; }
  .cat-circle { width: 85px; height: 85px; border-radius: 50%; background: #fff; margin: 0 auto 10px; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 12px rgba(0,0,0,0.06); transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1); padding: 12px; border: 2px solid #fff3eb; }
  .cat-circle-wrap:hover .cat-circle { transform: translateY(-6px) scale(1.05); border-color: #f08038; box-shadow: 0 8px 24px rgba(240, 128, 56, 0.15); background: linear-gradient(135deg, #ffffff 0%, #fffbf8 100%); }
  .cat-circle img { max-width: 100%; max-height: 100%; object-fit: contain; transition: transform 0.3s; }
  .cat-circle-wrap:hover .cat-circle img { transform: scale(1.08); }
  .cat-title { font-size: 0.85rem; font-weight: 700; color: #475569; line-height: 1.2; transition: color 0.2s; }
  .cat-arrow-indicator { font-size: 0.7rem; color: #cbd5e1; margin: -4px auto 4px; transition: all 0.3s ease; opacity: 0.4; transform: translateY(0); display: block; }
  .cat-circle-wrap:hover .cat-arrow-indicator { color: #f08038; opacity: 1; transform: translateY(3px); }

  .section-title { font-size: 1.6rem; font-weight: 800; color: #222; text-align: center; margin-bottom: 1.5rem; }
  
  /* Fixed Card CSS */
  .pl-product-card {
      background: #ffffff; border-radius: 10px; padding: 12px; text-align: center;
      box-shadow: 0 4px 15px rgba(0,0,0,0.06); border: 1px solid #e5e5e5;
      transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1); height: 100%; display: flex; flex-direction: column; position: relative;
  }
  .pl-product-card:hover { box-shadow: 0 12px 30px rgba(0,0,0,0.12); transform: translateY(-5px); border-color: #f08038; }
  
  /* Perfect Image sizing to fill width without overlapping */
  .pl-card-img { width: 100%; aspect-ratio: 1 / 1; display: flex; align-items: center; justify-content: center; margin-bottom: 12px; padding: 0; overflow: hidden; }
  .pl-card-img a { display: block; width: 100%; height: 100%; text-decoration: none; }
  .pl-card-img img { width: 100%; height: 100%; object-fit: contain; transition: transform 0.3s; }
  .pl-product-card:hover .pl-card-img img { transform: scale(1.05); }
  
  .pl-card-title { font-size: 0.85rem; font-weight: 700; color: #222; text-decoration: none; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; margin-bottom: 6px; line-height: 1.3; }
  .pl-card-title:hover { color: #f08038; }
  .pl-card-price { font-size: 1.05rem; font-weight: 800; color: #111; margin-bottom: 10px; }
  .pl-card-price strike { font-size: 0.8rem; color: #999; font-weight: 500; margin-left: 4px; }
  .btn-add { background: #f8f9fa; color: #111; border: 1px solid #ddd; font-weight: 700; font-size: 0.85rem; padding: 8px; border-radius: 6px; width: 100%; transition: 0.3s; margin-top: auto; }
  .pl-product-card:hover .btn-add, .btn-add:hover { background: #f08038; color: #fff; border-color: #f08038; }

  @media(max-width: 768px) {
      .pl-hero-custom { flex-direction: column; text-align: center; padding: 1rem 0.8rem; margin-bottom: 1.2rem; margin-left: -1rem; margin-right: -1rem; border-radius: 0; }
      .pl-hero-text { margin-bottom: 1.2rem; max-width: 100% !important; padding-right: 0 !important; }
      .hero-title { font-size: 1.6rem !important; line-height: 1.3 !important; }
      .hero-delivery-text { font-size: 0.95rem !important; margin: 0.6rem 0 !important; justify-content: center !important; }
      .god-text { justify-content: center; font-size: 0.95rem; margin-bottom: 8px; }
      .pl-hero-carousel-wrap { max-width: 100% !important; }

      .pl-product-card { padding: 8px; border-radius: 8px; }
      .pl-card-img { margin-bottom: 10px; }
      .pl-card-title { font-size: 0.75rem; margin-bottom: 4px; }
      .pl-card-price { font-size: 0.95rem; margin-bottom: 8px; }
      .btn-add { padding: 6px; font-size: 0.75rem; }
  }
</style>
</head>
<body>

@include('frontend.partials.header')

<main class="container-fluid px-3 px-xl-5 pl-main-container py-4">

  <!-- ===================== PREMIUM HERO BANNER SLIDER ===================== -->
  <section class="mb-4">
    <div id="heroBannerCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3500" data-bs-pause="false">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#heroBannerCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#heroBannerCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#heroBannerCarousel" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#heroBannerCarousel" data-bs-slide-to="3"></button>
      </div>
      <div class="carousel-inner" style="border-radius: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.06);">
        <!-- Slide 1: Designed Brand Banner -->
        <div class="carousel-item active">
          <a href="{{ url('/shop') }}" class="d-block w-100 overflow-hidden">
            <img src="{{ asset('images/hero_banner_new_v2.jpg') }}" alt="Tractor & Pickup Accessories Banner" class="pl-hero-slider-img" style="object-fit: fill;">
          </a>
        </div>
        <!-- Slide 2: Modified Bolero Pickup -->
        <div class="carousel-item">
          <a href="{{ url('/shop') }}" class="d-block w-100 overflow-hidden">
            <img src="{{ asset('images/pickup_slider.jpg') }}" alt="Modified Pickup Truck" class="pl-hero-slider-img">
          </a>
        </div>
        <!-- Slide 3: Generated Tractor Modifications -->
        <div class="carousel-item">
          <a href="{{ url('/shop') }}" class="d-block w-100 overflow-hidden">
            <img src="{{ asset('images/generated_banner_1.jpg') }}" alt="Tractor Modifications Banner" class="pl-hero-slider-img" style="object-fit: contain; background: #0b0d11;">
          </a>
        </div>
        <!-- Slide 4: Generated Pickup Modifications -->
        <div class="carousel-item">
          <a href="{{ url('/shop') }}" class="d-block w-100 overflow-hidden">
            <img src="{{ asset('images/generated_banner_2.jpg') }}" alt="Pickup Modifications Banner" class="pl-hero-slider-img" style="object-fit: contain; background: #0c0f13;">
          </a>
        </div>
      </div>
      
      <!-- Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#heroBannerCarousel" data-bs-slide="prev" style="width: 5%;">
        <span class="carousel-control-prev-icon bg-dark rounded-circle p-2" aria-hidden="true" style="background-size: 50% 50%;"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#heroBannerCarousel" data-bs-slide="next" style="width: 5%;">
        <span class="carousel-control-next-icon bg-dark rounded-circle p-2" aria-hidden="true" style="background-size: 50% 50%;"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  <!-- ===================== CATEGORY CIRCLES ===================== -->
  <section class="mb-5">
    <div class="d-flex align-items-center justify-content-center my-4">
      <div style="flex: 1; height: 1px; background: #e0e0e0; max-width: 80px;"></div>
      <h4 class="mx-3 fw-bold text-uppercase mb-0" style="font-size: 0.95rem; color: #222; letter-spacing: 1px;">SHOP BY CATEGORY</h4>
      <div style="flex: 1; height: 1px; background: #e0e0e0; max-width: 80px;"></div>
    </div>

    <div class="d-flex flex-nowrap overflow-x-auto pb-2 gap-3 gap-md-5 justify-content-start justify-content-md-center scrollbar-hidden" style="-webkit-overflow-scrolling: touch; scrollbar-width: none; -ms-overflow-style: none; padding: 5px 10px;">
      @foreach(\App\Models\Category::all() as $cat)
        @php
            $imagePath = 'images/categories/' . $cat->slug . '.jpg';
            $catImg = file_exists(public_path($imagePath)) ? asset($imagePath) : asset('images/logo.jpeg');
        @endphp
        <a href="{{ url('/shop?cat=' . $cat->slug) }}" class="cat-circle-wrap">
          <div class="cat-circle">
             <img src="{{ $catImg }}" alt="{{ $cat->name }}">
          </div>
          <div class="cat-arrow-indicator">
            <i class="bi bi-chevron-double-down"></i>
          </div>
          <div class="cat-title">{{ $cat->name }}</div>
        </a>
      @endforeach
    </div>

    <div class="text-center mt-3">
      <a href="{{ url('/shop') }}" class="btn fw-bold py-1 px-4" style="background: #ffffff; border: 1.5px solid #f08038; color: #f08038; border-radius: 30px; font-size: 0.82rem; transition: all 0.2s;">
        सभी Categories देखें &rarr;
      </a>
    </div>
  </section>

  <!-- ===================== BEST SELLING PRODUCTS ===================== -->
  <section class="mb-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h2 class="section-title mb-0" style="text-align: left; font-size: 1.25rem; font-weight: 800;"><span class="me-1">🔥</span>BEST SELLING PRODUCTS</h2>
      <a href="{{ url('/shop') }}" class="fw-bold text-decoration-none" style="color: #f08038; font-size: 0.85rem;">सभी देखें &rarr;</a>
    </div>
    <div class="row g-3 row-cols-2 row-cols-md-3 row-cols-lg-5 mb-3">
      @php
        $bestSellers = \App\Models\Product::where('is_bestseller', 1)->take(5)->get();
        if ($bestSellers->isEmpty()) {
            $bestSellers = \App\Models\Product::take(5)->get();
        }
      @endphp
      @foreach($bestSellers as $product)
      <div class="col">
        <div class="pl-product-card">
          <div class="pl-product-img-wrap">
            <!-- Tags Overlay -->
            @if($product->sale_price)
              <div class="pl-card-tags">
                @php
                  $discount = round((($product->price - $product->sale_price) / $product->price) * 100);
                @endphp
                <span class="pl-tag pl-tag-sale">{{ $discount }}% OFF</span>
              </div>
            @endif
            @if($product->quantity <= 0)
              <div class="pl-card-tags" style="top:auto;bottom:8px;left:8px;right:auto;">
                <span class="pl-tag" style="background:#ef4444;color:#fff;">Out of Stock</span>
              </div>
            @endif
            <button class="pl-wishlist-btn" data-wishlist-product-id="{{ $product->id }}" onclick="PL.toggleWishlist('{{ $product->id }}')"><i class="{{ is_array(session('wishlist')) && in_array($product->id, session('wishlist')) ? 'bi bi-heart-fill text-danger' : 'bi bi-heart' }}"></i></button>
            <a href="{{ route('product.show', $product->slug) }}"><img src="{{ $product->primary_image_url }}" alt="{{ $product->name }}" style="width: 100%; height: 100%; object-fit: contain;"></a>
          </div>
          <div class="pl-product-body">
            <a href="{{ route('product.show', $product->slug) }}" class="pl-product-title" title="{{ $product->name }}">{{ $product->name }}</a>
            <div class="pl-product-price">&#8377;{{ number_format($product->sale_price ?? $product->price, 2) }}
              @if($product->sale_price)
                <span class="pl-old">&#8377;{{ number_format($product->price, 2) }}</span>
              @endif
            </div>
            <div class="mt-auto d-flex gap-2">
              @if($product->quantity > 0)
                <button class="pl-btn-outline text-center flex-grow-1 py-2" onclick="PL.buyNow('{{ $product->id }}')">Buy Now</button>
                <button class="btn btn-pl-primary px-3 d-flex align-items-center justify-content-center" style="border-radius:8px;" onclick="PL.addToCartById('{{ $product->id }}')"><i class="bi bi-cart-plus"></i></button>
              @else
                <button class="btn w-100 py-2" style="border-radius:8px;background:#f1f5f9;color:#94a3b8;border:1px solid #e2e8f0;font-size:0.75rem;font-weight:700;cursor:not-allowed;" disabled><i class="bi bi-x-circle me-1"></i> Out of Stock</button>
              @endif
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </section>

  <!-- ===================== DYNAMIC CATEGORY SECTIONS ===================== -->
  @foreach(\App\Models\Category::has('products', '>=', 1)->take(6)->get() as $cat)
  <section class="mb-4 pt-3">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h2 class="section-title mb-0" style="text-align: left; font-size: 1.25rem; font-weight: 800; text-transform: uppercase;">📦 {{ $cat->name }}</h2>
      <a href="{{ url('/shop?cat=' . $cat->slug) }}" class="fw-bold text-decoration-none" style="color: #f08038; font-size: 0.85rem;">सभी देखें &rarr;</a>
    </div>
    <div class="row g-3 row-cols-2 row-cols-md-3 row-cols-lg-5 mb-3">
      @foreach($cat->products()->take(5)->get() as $product)
      <div class="col">
        <div class="pl-product-card">
          <div class="pl-product-img-wrap">
            <!-- Tags Overlay -->
            @if($product->sale_price)
              <div class="pl-card-tags">
                @php
                  $discount = round((($product->price - $product->sale_price) / $product->price) * 100);
                @endphp
                <span class="pl-tag pl-tag-sale">{{ $discount }}% OFF</span>
              </div>
            @endif
            @if($product->quantity <= 0)
              <div class="pl-card-tags" style="top:auto;bottom:8px;left:8px;right:auto;">
                <span class="pl-tag" style="background:#ef4444;color:#fff;">Out of Stock</span>
              </div>
            @endif
            <button class="pl-wishlist-btn" data-wishlist-product-id="{{ $product->id }}" onclick="PL.toggleWishlist('{{ $product->id }}')"><i class="{{ is_array(session('wishlist')) && in_array($product->id, session('wishlist')) ? 'bi bi-heart-fill text-danger' : 'bi bi-heart' }}"></i></button>
            <a href="{{ route('product.show', $product->slug) }}"><img src="{{ $product->primary_image_url }}" alt="{{ $product->name }}" style="width: 100%; height: 100%; object-fit: contain;"></a>
          </div>
          <div class="pl-product-body">
            <a href="{{ route('product.show', $product->slug) }}" class="pl-product-title" title="{{ $product->name }}">{{ $product->name }}</a>
            <div class="pl-product-price">&#8377;{{ number_format($product->sale_price ?? $product->price, 2) }}
              @if($product->sale_price)
                <span class="pl-old">&#8377;{{ number_format($product->price, 2) }}</span>
              @endif
            </div>
            <div class="mt-auto d-flex gap-2">
              @if($product->quantity > 0)
                <button class="pl-btn-outline text-center flex-grow-1 py-2" onclick="PL.buyNow('{{ $product->id }}')">Buy Now</button>
                <button class="btn btn-pl-primary px-3 d-flex align-items-center justify-content-center" style="border-radius:8px;" onclick="PL.addToCartById('{{ $product->id }}')"><i class="bi bi-cart-plus"></i></button>
              @else
                <button class="btn w-100 py-2" style="border-radius:8px;background:#f1f5f9;color:#94a3b8;border:1px solid #e2e8f0;font-size:0.75rem;font-weight:700;cursor:not-allowed;" disabled><i class="bi bi-x-circle me-1"></i> Out of Stock</button>
              @endif
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </section>
  @endforeach
  <!-- ===================== WHY CHOOSE US SECTION ===================== -->
  <section class="container mt-4 mb-3 py-4 px-3 rounded-4 text-white" style="background: #111111; border: 1px solid #222222;">
    <div class="d-flex align-items-center justify-content-center mb-4">
      <div class="d-none d-sm-block" style="flex: 1; height: 1px; background: rgba(255,255,255,0.15); max-width: 80px;"></div>
      <h3 class="mx-3 fw-bold fs-5 text-uppercase mb-0 text-center" style="color: #ffffff; letter-spacing: 0.5px;">क्यों खरीदें हमसे?</h3>
      <div class="d-none d-sm-block" style="flex: 1; height: 1px; background: rgba(255,255,255,0.15); max-width: 80px;"></div>
    </div>
    <div class="row g-2 g-md-3 justify-content-center text-center">
      <!-- Card 1: Instagram -->
      <div class="col-6 col-md-4 col-lg-2">
        <div class="p-3 rounded-4 h-100 d-flex flex-column align-items-center justify-content-center" style="background: #181818; border: 1px solid #2a2a2a; min-height: 135px; box-shadow: 0 4px 10px rgba(0,0,0,0.15);">
          <div class="d-flex align-items-center justify-content-center mb-2" style="width: 44px; height: 44px; background: rgba(240, 128, 56, 0.1); border-radius: 50%; color: #f08038; font-size: 1.3rem;">
            <i class="bi bi-instagram"></i>
          </div>
          <div class="fw-bold" style="font-size: 0.9rem;">19,000+</div>
          <div class="small" style="font-size: 0.75rem; color: #cccccc;">Instagram Family</div>
        </div>
      </div>
      <!-- Card 2: Delivery -->
      <div class="col-6 col-md-4 col-lg-2">
        <div class="p-3 rounded-4 h-100 d-flex flex-column align-items-center justify-content-center" style="background: #181818; border: 1px solid #2a2a2a; min-height: 135px; box-shadow: 0 4px 10px rgba(0,0,0,0.15);">
          <div class="d-flex align-items-center justify-content-center mb-2" style="width: 44px; height: 44px; background: rgba(240, 128, 56, 0.1); border-radius: 50%; color: #f08038; font-size: 1.3rem;">
            <i class="bi bi-truck"></i>
          </div>
          <div class="fw-bold" style="font-size: 0.9rem;">पूरे भारत में</div>
          <div class="small" style="font-size: 0.75rem; color: #cccccc;">Delivery</div>
        </div>
      </div>
      <!-- Card 3: Quality -->
      <div class="col-6 col-md-4 col-lg-2">
        <div class="p-3 rounded-4 h-100 d-flex flex-column align-items-center justify-content-center" style="background: #181818; border: 1px solid #2a2a2a; min-height: 135px; box-shadow: 0 4px 10px rgba(0,0,0,0.15);">
          <div class="d-flex align-items-center justify-content-center mb-2" style="width: 44px; height: 44px; background: rgba(240, 128, 56, 0.1); border-radius: 50%; color: #f08038; font-size: 1.3rem;">
            <i class="bi bi-patch-check"></i>
          </div>
          <div class="fw-bold" style="font-size: 0.9rem;">Best Quality</div>
          <div class="small" style="font-size: 0.75rem; color: #cccccc;">Products</div>
        </div>
      </div>
      <!-- Card 4: Secure -->
      <div class="col-6 col-md-4 col-lg-2">
        <div class="p-3 rounded-4 h-100 d-flex flex-column align-items-center justify-content-center" style="background: #181818; border: 1px solid #2a2a2a; min-height: 135px; box-shadow: 0 4px 10px rgba(0,0,0,0.15);">
          <div class="d-flex align-items-center justify-content-center mb-2" style="width: 44px; height: 44px; background: rgba(240, 128, 56, 0.1); border-radius: 50%; color: #f08038; font-size: 1.3rem;">
            <i class="bi bi-shield-lock"></i>
          </div>
          <div class="fw-bold" style="font-size: 0.9rem;">100% Secure</div>
          <div class="small" style="font-size: 0.75rem; color: #cccccc;">Payments</div>
        </div>
      </div>
      <!-- Card 5: Support -->
      <div class="col-6 col-md-4 col-lg-2">
        <div class="p-3 rounded-4 h-100 d-flex flex-column align-items-center justify-content-center" style="background: #181818; border: 1px solid #2a2a2a; min-height: 135px; box-shadow: 0 4px 10px rgba(0,0,0,0.15);">
          <div class="d-flex align-items-center justify-content-center mb-2" style="width: 44px; height: 44px; background: rgba(240, 128, 56, 0.1); border-radius: 50%; color: #f08038; font-size: 1.3rem;">
            <i class="bi bi-whatsapp"></i>
          </div>
          <div class="fw-bold" style="font-size: 0.9rem;">WhatsApp Support</div>
          <div class="small" style="font-size: 0.75rem; color: #cccccc;">तुरंत सहायता</div>
        </div>
      </div>
      <!-- Card 6: Experience -->
      <div class="col-6 col-md-4 col-lg-2">
        <div class="p-3 rounded-4 h-100 d-flex flex-column align-items-center justify-content-center" style="background: #181818; border: 1px solid #2a2a2a; min-height: 135px; box-shadow: 0 4px 10px rgba(0,0,0,0.15);">
          <div class="d-flex align-items-center justify-content-center mb-2" style="width: 44px; height: 44px; background: rgba(240, 128, 56, 0.1); border-radius: 50%; color: #f08038; font-size: 1.3rem;">
            <i class="bi bi-tools"></i>
          </div>
          <div class="fw-bold" style="font-size: 0.9rem;">Modifications</div>
          <div class="small" style="font-size: 0.75rem; color: #cccccc;">का सालों का अनुभव</div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== CUSTOMER REVIEWS SECTION ===================== -->
  <section class="container my-3">
    <div class="d-flex align-items-center justify-content-center mb-4">
      <div style="flex: 1; height: 1px; background: #e0e0e0; max-width: 80px;"></div>
      <h3 class="mx-3 fw-bold fs-5 text-uppercase mb-0" style="color: #222; letter-spacing: 0.5px;">⭐ हमारे ग्राहकों का भरोसा ⭐</h3>
      <div style="flex: 1; height: 1px; background: #e0e0e0; max-width: 80px;"></div>
    </div>
    
    <!-- DESKTOP VIEW: Clean 4-card grid row (No slider needed as 4 cards fit perfectly) -->
    <div class="d-none d-lg-block">
      <div class="row justify-content-center">
        <!-- Review 1 -->
        <div class="col-lg-3 mb-3">
          <div class="bg-white p-3 rounded-4 border shadow-sm h-100" style="min-height: 200px;">
            <div class="d-flex align-items-center gap-2 mb-2">
              <div style="width: 40px; height: 40px; background: rgba(240, 128, 56, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; color: #f08038;">RY</div>
              <div>
                <h5 class="fw-bold mb-0" style="font-size: 0.85rem;">Ramesh Yadav</h5>
                <div class="text-warning" style="font-size: 0.75rem;"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
              </div>
            </div>
            <p class="text-muted mb-0" style="font-size: 0.82rem; line-height: 1.5;">बहुत बढ़िया म्यूजिक सिस्टम है! 4 स्पीकर और भारी बास (heavy bass) की वजह से साउंड क्वालिटी कमाल की है। पैकिंग भी बहुत मजबूत थी और 3 दिन में डिलीवरी मिल गई। महाकाल की कृपा बनी रहे भाई 🙏</p>
          </div>
        </div>
        <!-- Review 2 -->
        <div class="col-lg-3 mb-3">
          <div class="bg-white p-3 rounded-4 border shadow-sm h-100" style="min-height: 200px;">
            <div class="d-flex align-items-center gap-2 mb-2">
              <div style="width: 40px; height: 40px; background: rgba(240, 128, 56, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; color: #f08038;">VC</div>
              <div>
                <h5 class="fw-bold mb-0" style="font-size: 0.85rem;">Vikram Choudhary</h5>
                <div class="text-warning" style="font-size: 0.75rem;"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
              </div>
            </div>
            <p class="text-muted mb-0" style="font-size: 0.82rem; line-height: 1.5;">मैंने स्वराज ट्रैक्टर के लिए फाइबर हुड (Fiber Hood) आर्डर किया था। फिटिंग और फिनिशिंग एकदम परफेक्ट आई है, कोई एक्स्ट्रा एडजस्टमेंट नहीं करना पड़ा। पेंट क्वालिटी भी बहुत शानदार है। 100% Recommended!</p>
          </div>
        </div>
        <!-- Review 3 -->
        <div class="col-lg-3 mb-3">
          <div class="bg-white p-3 rounded-4 border shadow-sm h-100" style="min-height: 200px;">
            <div class="d-flex align-items-center gap-2 mb-2">
              <div style="width: 40px; height: 40px; background: rgba(240, 128, 56, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; color: #f08038;">SP</div>
              <div>
                <h5 class="fw-bold mb-0" style="font-size: 0.85rem;">Suresh Patil</h5>
                <div class="text-warning" style="font-size: 0.75rem;"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
              </div>
            </div>
            <p class="text-muted mb-0" style="font-size: 0.82rem; line-height: 1.5;">सामान की क्वालिटी बहुत लाजवाब है। मैंने एलईडी हेडलाइट्स और साइलेंसर मंगवाया था, फिटिंग एकदम सही है और डिलीवरी भी बहुत फास्ट थी। सबसे भरोसेमंद दुकान है 👍</p>
          </div>
        </div>
        <!-- Review 4 -->
        <div class="col-lg-3 mb-3">
          <div class="bg-white p-3 rounded-4 border shadow-sm h-100" style="min-height: 200px;">
            <div class="d-flex align-items-center gap-2 mb-2">
              <div style="width: 40px; height: 40px; background: rgba(240, 128, 56, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; color: #f08038;">AV</div>
              <div>
                <h5 class="fw-bold mb-0" style="font-size: 0.85rem;">Amit Verma</h5>
                <div class="text-warning" style="font-size: 0.75rem;"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
              </div>
            </div>
            <p class="text-muted mb-0" style="font-size: 0.82rem; line-height: 1.5;">महादेव ट्रैक्टर मॉडिफिकेशन का कस्टमर सपोर्ट सच में बहुत बढ़िया है। कॉल और व्हाट्सएप पर जो भी सवाल पूछो, उसका तुरंत रिप्लाई और सही सलाह देते हैं। बहुत ही ईमानदार भाई हैं! Thank you 😊</p>
          </div>
        </div>
      </div>
    </div>

    <!-- MOBILE & TABLET VIEW: Responsive Slider Carousel -->
    <div id="reviewsCarouselMobile" class="carousel slide d-lg-none" data-bs-ride="carousel">
      <div class="carousel-inner">
        <!-- Slide 1: Ramesh Yadav -->
        <div class="carousel-item active">
          <div class="row justify-content-center px-4">
            <div class="col-12 col-md-8">
              <div class="bg-white p-3 rounded-4 border shadow-sm" style="min-height: 180px;">
                <div class="d-flex align-items-center gap-2 mb-2">
                  <div style="width: 40px; height: 40px; background: rgba(240, 128, 56, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; color: #f08038;">RY</div>
                  <div>
                    <h5 class="fw-bold mb-0" style="font-size: 0.85rem;">Ramesh Yadav</h5>
                    <div class="text-warning" style="font-size: 0.75rem;"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                  </div>
                </div>
                <p class="text-muted mb-0" style="font-size: 0.82rem; line-height: 1.5;">बहुत बढ़िया म्यूजिक सिस्टम है! 4 स्पीकर और भारी बास (heavy bass) की वजह से साउंड क्वालिटी कमाल की है। पैकिंग भी बहुत मजबूत थी और 3 दिन में डिलीवरी मिल गई। महाकाल की कृपा बनी रहे भाई 🙏</p>
              </div>
            </div>
          </div>
        </div>
        <!-- Slide 2: Vikram Choudhary -->
        <div class="carousel-item">
          <div class="row justify-content-center px-4">
            <div class="col-12 col-md-8">
              <div class="bg-white p-3 rounded-4 border shadow-sm" style="min-height: 180px;">
                <div class="d-flex align-items-center gap-2 mb-2">
                  <div style="width: 40px; height: 40px; background: rgba(240, 128, 56, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; color: #f08038;">VC</div>
                  <div>
                    <h5 class="fw-bold mb-0" style="font-size: 0.85rem;">Vikram Choudhary</h5>
                    <div class="text-warning" style="font-size: 0.75rem;"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                  </div>
                </div>
                <p class="text-muted mb-0" style="font-size: 0.82rem; line-height: 1.5;">मैंने स्वराज ट्रैक्टर के लिए फाइबर हुड (Fiber Hood) आर्डर किया था। फिटिंग और फिनिशिंग एकदम परफेक्ट आई है, कोई एक्स्ट्रा एडजस्टमेंट नहीं करना पड़ा। पेंट क्वालिटी भी बहुत शानदार है। 100% Recommended!</p>
              </div>
            </div>
          </div>
        </div>
        <!-- Slide 3: Suresh Patil -->
        <div class="carousel-item">
          <div class="row justify-content-center px-4">
            <div class="col-12 col-md-8">
              <div class="bg-white p-3 rounded-4 border shadow-sm" style="min-height: 180px;">
                <div class="d-flex align-items-center gap-2 mb-2">
                  <div style="width: 40px; height: 40px; background: rgba(240, 128, 56, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; color: #f08038;">SP</div>
                  <div>
                    <h5 class="fw-bold mb-0" style="font-size: 0.85rem;">Suresh Patil</h5>
                    <div class="text-warning" style="font-size: 0.75rem;"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                  </div>
                </div>
                <p class="text-muted mb-0" style="font-size: 0.82rem; line-height: 1.5;">सामान की क्वालिटी बहुत लाजवाब है। मैंने एलईडी हेडलाइट्स और साइलेंसर मंगवाया था, फिटिंग एकदम सही है और डिलीवरी भी बहुत फास्ट थी। सबसे भरोसेमंद दुकान है 👍</p>
              </div>
            </div>
          </div>
        </div>
        <!-- Slide 4: Amit Verma -->
        <div class="carousel-item">
          <div class="row justify-content-center px-4">
            <div class="col-12 col-md-8">
              <div class="bg-white p-3 rounded-4 border shadow-sm" style="min-height: 180px;">
                <div class="d-flex align-items-center gap-2 mb-2">
                  <div style="width: 40px; height: 40px; background: rgba(240, 128, 56, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; color: #f08038;">AV</div>
                  <div>
                    <h5 class="fw-bold mb-0" style="font-size: 0.85rem;">Amit Verma</h5>
                    <div class="text-warning" style="font-size: 0.75rem;"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                  </div>
                </div>
                <p class="text-muted mb-0" style="font-size: 0.82rem; line-height: 1.5;">महादेव ट्रैक्टर मॉडिफिकेशन का कस्टमर सपोर्ट सच में बहुत बढ़िया है। कॉल और व्हाट्सएप पर जो भी सवाल पूछो, उसका तुरंत रिप्लाई और सही सलाह देते हैं। बहुत ही ईमानदार भाई हैं! Thank you 😊</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Controls (Mobile/Tablet only) -->
      <button class="carousel-control-prev" type="button" data-bs-target="#reviewsCarouselMobile" data-bs-slide="prev" style="width: 8%;">
        <span class="carousel-control-prev-icon bg-dark rounded-circle p-2" aria-hidden="true" style="background-size: 50% 50%;"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#reviewsCarouselMobile" data-bs-slide="next" style="width: 8%;">
        <span class="carousel-control-next-icon bg-dark rounded-circle p-2" aria-hidden="true" style="background-size: 50% 50%;"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>

  <!-- ===================== DELIVERY PROMO BANNER ===================== -->
  <section class="container my-3">
    <div class="d-flex flex-column flex-md-row align-items-center justify-content-between p-4 rounded-4 border" style="background: #fff8f5; border-color: #ffe4d6 !important;">
      <div class="d-flex align-items-center gap-3 flex-column flex-md-row text-center text-md-start mb-3 mb-md-0">
        <div class="d-flex align-items-center justify-content-center" style="width: 100px; height: 100px; flex-shrink: 0;">
          <svg viewBox="0 0 120 120" style="width: 100%; height: 100%;">
            <defs>
              <linearGradient id="truckGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" stop-color="#ff7b00" />
                <stop offset="100%" stop-color="#cc5500" />
              </linearGradient>
            </defs>
            <!-- Background circle -->
            <circle cx="60" cy="60" r="50" fill="#fff5f0" />
            
            <!-- Speed lines -->
            <path d="M15 45h15M10 55h22M18 65h10" stroke="#f08038" stroke-width="3" stroke-linecap="round" opacity="0.7" />
            
            <!-- Truck Body -->
            <path d="M42 35h32v32H42z" fill="url(#truckGrad)" />
            <path d="M74 42l16 4v21H74z" fill="#f08038" />
            
            <!-- Cab Window -->
            <path d="M76 46l8 2v10h-8z" fill="#fff" />
            
            <!-- Wheels -->
            <circle cx="50" cy="72" r="7" fill="#111" />
            <circle cx="50" cy="72" r="3" fill="#fff" />
            <circle cx="78" cy="72" r="7" fill="#111" />
            <circle cx="78" cy="72" r="3" fill="#fff" />
          </svg>
        </div>
        <div>
          <h4 class="fw-bold mb-1" style="color: #c2410c;">पूरे भारत में Delivery</h4>
        </div>
      </div>
      <a href="{{ route('shop') }}" class="btn fw-bold pl-delivery-btn" style="background: #ffffff; border: 1.5px solid #f08038; color: #f08038; border-radius: 30px; transition: all 0.2s; padding: 6px 16px; font-size: 0.85rem;">ज्यादा जानकारी &rarr;</a>
    </div>
  </section>
  <!-- ===================== BOTTOM WHATSAPP BANNER ===================== -->
  <section class="container my-3">
    <div class="d-flex flex-column flex-md-row align-items-center justify-content-between p-4 rounded-4 text-white" style="background: #111; border: 1px solid #222;">
      <div class="d-flex align-items-center gap-3 mb-3 mb-md-0">
        <i class="bi bi-whatsapp text-success" style="font-size: 2rem;"></i>
        <h5 class="fw-bold mb-0" style="font-size: 1.1rem; letter-spacing: 0.3px;">कोई भी सवाल? हम WhatsApp पर उपलब्ध हैं</h5>
      </div>
      <a href="https://wa.me/919201964508?text={{ urlencode('जय श्री महाकाल! मुझे आपसे कुछ सवाल पूछने हैं।') }}" target="_blank" class="btn text-white px-4 py-2 fw-bold d-inline-flex align-items-center gap-2" style="background: #25d366; border-radius: 8px; box-shadow: 0 4px 12px rgba(37,211,102,0.25);">
        <i class="bi bi-whatsapp"></i> WhatsApp पर पूछें
      </a>
    </div>
  </section>
</main>

@include('frontend.partials.footer')
@include('frontend.partials.bottom_nav')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  window.pl_csrf = '{{ csrf_token() }}';
</script>
<script src="{{ asset('js/script.js?v=' . filemtime(public_path('js/script.js'))) }}"></script>

</body>
</html>
