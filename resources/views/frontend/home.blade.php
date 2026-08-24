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
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/style.css?v=14') }}">
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
  .pl-hero-text h1 { font-weight: 900; font-size: 2.8rem; color: #111; line-height: 1.2; }
  .pl-hero-text .highlight { color: #00bcd4; }
  .pl-hero-carousel { border-radius: 12px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.1); width: 100%; aspect-ratio: 16 / 9; }
  .pl-hero-carousel img { width: 100%; height: 100%; object-fit: contain; background: #080d16; }
  
  .cat-circle-wrap { text-align: center; text-decoration: none; display: block; width: 100px; }
  .cat-circle { width: 85px; height: 85px; border-radius: 50%; background: #fff; margin: 0 auto 10px; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 10px rgba(0,0,0,0.05); transition: transform 0.3s; padding: 12px; border: 2px solid transparent; }
  .cat-circle:hover { transform: translateY(-5px); border-color: #00bcd4; }
  .cat-circle img { max-width: 100%; max-height: 100%; object-fit: contain; }
  .cat-title { font-size: 0.85rem; font-weight: 700; color: #333; line-height: 1.2; }

  .section-title { font-size: 1.6rem; font-weight: 800; color: #222; text-align: center; margin-bottom: 1.5rem; }
  
  /* Fixed Card CSS */
  .pl-product-card {
      background: #ffffff; border-radius: 10px; padding: 12px; text-align: center;
      box-shadow: 0 4px 15px rgba(0,0,0,0.06); border: 1px solid #e5e5e5;
      transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1); height: 100%; display: flex; flex-direction: column; position: relative;
  }
  .pl-product-card:hover { box-shadow: 0 12px 30px rgba(0,0,0,0.12); transform: translateY(-5px); border-color: #00bcd4; }
  
  /* Perfect Image sizing to fill width without overlapping */
  .pl-card-img { width: 100%; aspect-ratio: 1 / 1; display: flex; align-items: center; justify-content: center; margin-bottom: 12px; padding: 0; overflow: hidden; }
  .pl-card-img a { display: block; width: 100%; height: 100%; text-decoration: none; }
  .pl-card-img img { width: 100%; height: 100%; object-fit: contain; transition: transform 0.3s; }
  .pl-product-card:hover .pl-card-img img { transform: scale(1.05); }
  
  .pl-card-title { font-size: 0.85rem; font-weight: 700; color: #222; text-decoration: none; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; margin-bottom: 6px; line-height: 1.3; }
  .pl-card-title:hover { color: #00bcd4; }
  .pl-card-price { font-size: 1.05rem; font-weight: 800; color: #111; margin-bottom: 10px; }
  .pl-card-price strike { font-size: 0.8rem; color: #999; font-weight: 500; margin-left: 4px; }
  .btn-add { background: #f8f9fa; color: #111; border: 1px solid #ddd; font-weight: 700; font-size: 0.85rem; padding: 8px; border-radius: 6px; width: 100%; transition: 0.3s; margin-top: auto; }
  .pl-product-card:hover .btn-add, .btn-add:hover { background: #00bcd4; color: #fff; border-color: #00bcd4; }

  @media(max-width: 768px) {
      .pl-hero-custom { flex-direction: column; text-align: center; padding: 2rem 1rem; }
      .pl-hero-text { margin-bottom: 2rem; max-width: 100% !important; padding-right: 0 !important; }
      .pl-hero-text h1 { font-size: 2rem; }
      .god-text { justify-content: center; }
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

  <!-- ===================== PREMIUM HERO BANNER ===================== -->
  <section class="pl-hero-custom">
    <div class="pl-hero-text" style="flex: 1; max-width: 45%; padding-right: 20px;">
      
  
      <h1 style="font-weight: 900; font-size: 2.6rem; color: #111; line-height: 1.2;">Tractor & Pickup<br><span class="highlight">Accessories Store</span></h1>
      <p style="font-size: 1.3rem; color: #cc5500; margin: 1rem 0; font-weight: 700; display: flex; align-items: center; gap: 8px;">
        🇮🇳 घर बैठे आर्डर करे, पुरे भारत में डिलीवरी
      </p>
      <br>
      <a href="{{ url('/shop') }}" class="btn btn-add" style="display: inline-block; width: auto; padding: 12px 30px; font-size: 1rem; border-radius: 30px; background: #00bcd4; color: #fff; border:none;">अभी खरीदारी करें <i class="bi bi-arrow-right ms-2"></i></a>
    </div>
    
    <div class="pl-hero-carousel-wrap" style="flex: 1; max-width: 55%; width: 100%;">
      <div id="homeCarousel" class="carousel slide pl-hero-carousel" data-bs-ride="carousel" data-bs-interval="2000">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active"></button>
          <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner h-100">
          <div class="carousel-item active h-100">
            <img src="{{ asset('images/tractor_parts_banner.jpg') }}" alt="Tractor Modification Parts Banner">
          </div>
          <div class="carousel-item h-100">
            <img src="{{ asset('images/tractor_pickup_banner.jpg') }}" alt="Tractor and Pickup Modification Banner">
          </div>
          <div class="carousel-item h-100">
            <img src="{{ asset('images/slider_new_2.jpg') }}" alt="Tractor Audio System">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== CATEGORY CIRCLES ===================== -->
  <section class="mb-5">
    <div class="d-flex justify-content-center flex-wrap gap-3 gap-md-5">
      @foreach(\App\Models\Category::all() as $cat)
        @php
            $imagePath = 'images/categories/' . $cat->slug . '.jpg';
            $catImg = file_exists(public_path($imagePath)) ? asset($imagePath) : asset('images/logo.jpeg');
        @endphp
        <a href="{{ url('/shop?cat=' . $cat->slug) }}" class="cat-circle-wrap">
          <div class="cat-circle">
             <img src="{{ $catImg }}" alt="{{ $cat->name }}">
          </div>
          <div class="cat-title">{{ $cat->name }}</div>
        </a>
      @endforeach
    </div>
  </section>

  <!-- ===================== BEST SELLING PRODUCTS ===================== -->
  <section class="mb-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h2 class="section-title mb-0" style="text-align: left; font-size: 1.5rem;">Best Selling Product</h2>
      <a href="{{ url('/shop') }}" class="fw-bold text-decoration-none" style="color: #00bcd4; font-size: 0.95rem;">View All <i class="bi bi-chevron-right"></i></a>
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
      <h2 class="section-title mb-0" style="text-align: left; font-size: 1.5rem;">{{ $cat->name }}</h2>
      <a href="{{ url('/shop?cat=' . $cat->slug) }}" class="fw-bold text-decoration-none" style="color: #00bcd4; font-size: 0.95rem;">View All <i class="bi bi-chevron-right"></i></a>
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

</main>

@include('frontend.partials.footer')
@include('frontend.partials.bottom_nav')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  window.pl_csrf = '{{ csrf_token() }}';
</script>
<script src="{{ asset('js/script.js?v=4') }}"></script>

</body>
</html>
