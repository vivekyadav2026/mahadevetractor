
$html = '<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>Mahadev Tractor Modification & Accessories</title>
<meta name="description" content="India`s most trusted vehicle accessories store. Buy fiber hoods, music systems, and tractor accessories.">
<link rel="icon" href="{{ asset(''images/mahadev_logo.jpg'') }}">

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset(''css/style.css?v=11'') }}">
<style>
  /* Premium E-commerce Overrides */
  body { background-color: #f8f9fa; }
  
  /* Layout tweaks */
  .pl-main-container { max-width: 1500px; margin: 0 auto; }
  
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
  
  .god-text { color: #f26522; font-weight: 800; font-size: 1.2rem; letter-spacing: 1.5px; margin-bottom: 12px; font-family: "Outfit", sans-serif; display: flex; align-items: center; gap: 8px; }
  
  .pl-hero-text h1 { font-weight: 900; font-size: 2.8rem; color: #111; line-height: 1.2; }
  .pl-hero-text .highlight { color: #00bcd4; }
  .pl-hero-carousel { border-radius: 12px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.1); width: 100%; height: 100%; max-height: 400px; }
  .pl-hero-carousel img { width: 100%; height: 100%; object-fit: cover; }
  
  .cat-circle-wrap { text-align: center; text-decoration: none; display: block; width: 100px; }
  .cat-circle { width: 85px; height: 85px; border-radius: 50%; background: #fff; margin: 0 auto 10px; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 10px rgba(0,0,0,0.05); transition: transform 0.3s; padding: 12px; border: 2px solid transparent; }
  .cat-circle:hover { transform: translateY(-5px); border-color: #00bcd4; }
  .cat-circle img { max-width: 100%; max-height: 100%; object-fit: contain; }
  .cat-title { font-size: 0.85rem; font-weight: 700; color: #333; line-height: 1.2; }

  .section-title { font-size: 1.6rem; font-weight: 800; color: #222; text-align: center; margin-bottom: 1.5rem; }
  
  .pl-product-card {
      background: #ffffff; border-radius: 12px; padding: 15px; text-align: center;
      box-shadow: 0 4px 15px rgba(0,0,0,0.06); border: 1px solid #e5e5e5;
      transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1); height: 100%; display: flex; flex-direction: column; position: relative;
  }
  .pl-product-card:hover { box-shadow: 0 12px 30px rgba(0,0,0,0.12); transform: translateY(-5px); border-color: #00bcd4; }
  .badge-discount { position: absolute; top: 12px; left: 12px; background: #00bcd4; color: #fff; font-size: 0.75rem; font-weight: 800; padding: 4px 10px; border-radius: 20px; z-index: 2; box-shadow: 0 2px 5px rgba(0,188,212,0.4); }
  .pl-card-img { height: 180px; display: flex; align-items: center; justify-content: center; margin-bottom: 15px; padding: 10px; }
  .pl-card-img img { max-height: 100%; max-width: 100%; object-fit: contain; transition: transform 0.3s; }
  .pl-product-card:hover .pl-card-img img { transform: scale(1.05); }
  .pl-card-title { font-size: 0.95rem; font-weight: 700; color: #222; text-decoration: none; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; margin-bottom: 8px; line-height: 1.3; }
  .pl-card-title:hover { color: #00bcd4; }
  .pl-card-price { font-size: 1.2rem; font-weight: 800; color: #111; margin-bottom: 15px; }
  .pl-card-price strike { font-size: 0.9rem; color: #999; font-weight: 500; margin-left: 6px; }
  .btn-add { background: #f8f9fa; color: #111; border: 1px solid #ddd; font-weight: 700; font-size: 0.9rem; padding: 10px; border-radius: 8px; width: 100%; transition: 0.3s; margin-top: auto; }
  .pl-product-card:hover .btn-add, .btn-add:hover { background: #00bcd4; color: #fff; border-color: #00bcd4; }

  @media(max-width: 768px) {
      .pl-hero-custom { flex-direction: column; text-align: center; padding: 2rem 1rem; }
      .pl-hero-text { margin-bottom: 2rem; max-width: 100% !important; padding-right: 0 !important; }
      .pl-hero-text h1 { font-size: 2rem; }
      .god-text { justify-content: center; }
      .pl-hero-carousel-wrap { max-width: 100% !important; }
  }
</style>
</head>
<body>

@include(''frontend.partials.header'')

<main class="container-fluid px-3 px-xl-5 pl-main-container py-4">

  <!-- ===================== PREMIUM HERO BANNER ===================== -->
  <section class="pl-hero-custom">
    <div class="pl-hero-text" style="flex: 1; max-width: 45%; padding-right: 20px;">
      
      <!-- GOD ELEMENT -->
      <div class="god-text">
         <img src="{{ asset(''images/mahadev_logo.jpg'') }}" style="width:24px; height:24px; border-radius:50%; object-fit:cover;">
         ॥ हर हर महादेव ॥
      </div>

      <h1>भारत का सबसे भरोसेमंद<br><span class="highlight">वाहन एक्सेसरीज़</span> स्टोर</h1>
      <p style="font-size: 1.1rem; color: #666; margin: 1.5rem 0; font-weight: 500;">
        ट्रैक्टर हुड, बम्पर, साइलेंसर, और म्यूजिक सिस्टम की विशाल रेंज। बेहतरीन क्वालिटी और सबसे अच्छे दाम!
      </p>
      <a href="{{ url(''/shop'') }}" class="btn btn-add" style="display: inline-block; width: auto; padding: 12px 30px; font-size: 1rem; border-radius: 30px; background: #00bcd4; color: #fff; border:none;">अभी खरीदारी करें <i class="bi bi-arrow-right ms-2"></i></a>
    </div>
    
    <div class="pl-hero-carousel-wrap" style="flex: 1; max-width: 55%; width: 100%;">
      <div id="homeCarousel" class="carousel slide pl-hero-carousel" data-bs-ride="carousel" data-bs-interval="3500">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active"></button>
          <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner h-100">
          <div class="carousel-item active h-100">
            <img src="{{ asset(''images/indian_tractor_1.jpg'') }}" alt="Indian Decorated Tractor">
          </div>
          <div class="carousel-item h-100">
            <img src="{{ asset(''images/slider_new_1.jpg'') }}" alt="Modern Custom Tractor">
          </div>
          <div class="carousel-item h-100">
            <img src="{{ asset(''images/slider_new_2.jpg'') }}" alt="Tractor Audio System">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>
    </div>
  </section>

  <!-- ===================== CATEGORY CIRCLES ===================== -->
  <section class="mb-5">
    <div class="d-flex justify-content-center flex-wrap gap-3 gap-md-5">
      @foreach(\App\Models\Category::all() as $cat)
        @php
            $firstProd = $cat->products()->first();
            $catImg = $firstProd ? $firstProd->primary_image_url : asset(''images/logo.jpeg'');
        @endphp
        <a href="{{ url(''/shop?cat='' . $cat->slug) }}" class="cat-circle-wrap">
          <div class="cat-circle">
             <img src="{{ $catImg }}" alt="{{ $cat->name }}">
          </div>
          <div class="cat-title">{{ $cat->name }}</div>
        </a>
      @endforeach
    </div>
  </section>

  <!-- ===================== NEW ARRIVALS ===================== -->
  <section class="mb-4">
    <h2 class="section-title">New Arrivals</h2>
    <div class="row g-3 row-cols-2 row-cols-md-3 row-cols-lg-5 mb-3">
      @foreach(\App\Models\Product::orderBy(''created_at'', ''desc'')->take(5)->get() as $product)
      <div class="col">
        <div class="pl-product-card">
          <div class="badge-discount">20% OFF</div>
          <div class="pl-card-img">
            <a href="{{ route(''product.show'', $product->slug) }}"><img src="{{ $product->primary_image_url }}" alt="{{ $product->name }}"></a>
          </div>
          <a href="{{ route(''product.show'', $product->slug) }}" class="pl-card-title">{{ $product->name }}</a>
          <div class="pl-card-price">
             ₹{{ number_format($product->price, 2) }} <strike>₹{{ number_format($product->price * 1.2, 2) }}</strike>
          </div>
          <button class="btn-add" onclick="PL.addToCartById(''{{ $product->id }}'')">ADD TO CART</button>
        </div>
      </div>
      @endforeach
    </div>
    <div class="text-center mb-4">
       <a href="{{ url(''/shop'') }}" class="btn btn-dark text-white fw-bold px-5 py-2" style="border-radius: 30px; font-size: 1rem; text-decoration: none;">VIEW ALL</a>
    </div>
  </section>

  <!-- ===================== DYNAMIC CATEGORY SECTIONS ===================== -->
  @foreach(\App\Models\Category::has(''products'', ''>='', 4)->take(4)->get() as $cat)
  <section class="mb-4" style="background: #fff; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.02);">
    <h2 class="section-title">{{ $cat->name }}</h2>
    <div class="row g-3 row-cols-2 row-cols-md-3 row-cols-lg-5 mb-3">
      @foreach($cat->products()->take(5)->get() as $product)
      <div class="col">
        <div class="pl-product-card">
          <div class="badge-discount" style="background: var(--pl-primary);">SALE</div>
          <div class="pl-card-img">
            <a href="{{ route(''product.show'', $product->slug) }}"><img src="{{ $product->primary_image_url }}" alt="{{ $product->name }}"></a>
          </div>
          <a href="{{ route(''product.show'', $product->slug) }}" class="pl-card-title">{{ $product->name }}</a>
          <div class="pl-card-price">
             ₹{{ number_format($product->price, 2) }} <strike>₹{{ number_format($product->price + 50, 2) }}</strike>
          </div>
          <button class="btn-add" onclick="PL.addToCartById(''{{ $product->id }}'')">ADD TO CART</button>
        </div>
      </div>
      @endforeach
    </div>
    <div class="text-center">
       <a href="{{ url(''/shop?cat='' . $cat->slug) }}" class="btn btn-dark text-white fw-bold px-5 py-2" style="border-radius: 30px; font-size: 1rem; text-decoration: none;">VIEW ALL <i class="bi bi-chevron-right ms-1"></i></a>
    </div>
  </section>
  @endforeach

</main>

@include(''frontend.partials.footer'')
@include(''frontend.partials.bottom_nav'')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  window.pl_csrf = ''{{ csrf_token() }}'';
</script>
<script src="{{ asset(''js/script.js?v=4'') }}"></script>

</body>
</html>'
[System.IO.File]::WriteAllText("resources/views/frontend/home.blade.php", $html, (New-Object System.Text.UTF8Encoding($False)))

