$html = @''
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
<link rel="stylesheet" href="{{ asset('css/style.css?v=13') }}">
<style>
  /* Premium E-commerce Overrides */
  body { background-color: #f8f9fa; }
  
  /* Layout tweaks */
  .pl-main-container { max-width: 1500px; margin: 0 auto; }
  
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

<!-- ===================== PREMIUM FULL-WIDTH BANNER ===================== -->
<section class="mb-4">
  <div id="homeCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3500">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="2"></button>
    </div>
    <div class="carousel-inner" style="max-height: 450px;">
      <div class="carousel-item active">
        <img src="{{ asset('images/indian_tractor_1.jpg') }}" class="d-block w-100" style="object-fit: cover; height: 100%; max-height: 450px;" alt="Tractor Accessories">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/slider_new_1.jpg') }}" class="d-block w-100" style="object-fit: cover; height: 100%; max-height: 450px;" alt="Tractor Modification">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/slider_new_2.jpg') }}" class="d-block w-100" style="object-fit: cover; height: 100%; max-height: 450px;" alt="Music Systems">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: drop-shadow(0 2px 4px rgba(0,0,0,0.5));"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true" style="filter: drop-shadow(0 2px 4px rgba(0,0,0,0.5));"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>

<main class="container-fluid px-3 px-xl-5 pl-main-container py-2">

  <!-- ===================== GOD TEXT ===================== -->
  <div class="text-center mb-5">
      <div class="d-inline-flex align-items-center gap-2" style="background: #fff; padding: 10px 24px; border-radius: 30px; box-shadow: 0 4px 15px rgba(0,0,0,0.06); color: #cc5500; font-weight: 800; font-size: 1.2rem; letter-spacing: 1.5px; font-family: 'Cinzel', serif;">
         <img src="{{ asset('images/mahadev_logo.jpg') }}" style="width:24px; height:24px; border-radius:50%; object-fit:cover;">
         ॥ हर हर महादेव ॥
      </div>
  </div>

  <!-- ===================== CATEGORY CIRCLES ===================== -->
  <section class="mb-5">
    <div class="d-flex justify-content-center flex-wrap gap-3 gap-md-5">
      @foreach(\App\Models\Category::all() as $cat)
        @php
            $firstProd = $cat->products()->first();
            $catImg = $firstProd ? $firstProd->primary_image_url : asset('images/logo.jpeg');
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

  <!-- ===================== NEW ARRIVALS ===================== -->
  <section class="mb-4">
    <h2 class="section-title">New Arrivals</h2>
    <div class="row g-3 row-cols-2 row-cols-md-3 row-cols-lg-5 mb-3">
      @foreach(\App\Models\Product::orderBy('created_at', 'desc')->take(5)->get() as $product)
      <div class="col">
        <div class="pl-product-card">
          <div class="pl-card-img">
            <a href="{{ route('product.show', $product->slug) }}"><img src="{{ $product->primary_image_url }}" alt="{{ $product->name }}"></a>
          </div>
          <a href="{{ route('product.show', $product->slug) }}" class="pl-card-title">{{ $product->name }}</a>
          <div class="pl-card-price">
             &#8377;{{ number_format($product->price, 2) }} <strike>&#8377;{{ number_format($product->price * 1.2, 2) }}</strike>
          </div>
          <button class="btn-add" onclick="PL.addToCartById('{{ $product->id }}')"><i class="bi bi-cart-plus me-1"></i> ADD TO CART</button>
        </div>
      </div>
      @endforeach
    </div>
  </section>

  <!-- ===================== DYNAMIC CATEGORY SECTIONS ===================== -->
  @foreach(\App\Models\Category::has('products', '>=', 4)->take(4)->get() as $cat)
  <section class="mb-4 pt-3">
    <h2 class="section-title">{{ $cat->name }}</h2>
    <div class="row g-3 row-cols-2 row-cols-md-3 row-cols-lg-5 mb-3">
      @foreach($cat->products()->take(5)->get() as $product)
      <div class="col">
        <div class="pl-product-card">
          <div class="pl-card-img">
            <a href="{{ route('product.show', $product->slug) }}"><img src="{{ $product->primary_image_url }}" alt="{{ $product->name }}"></a>
          </div>
          <a href="{{ route('product.show', $product->slug) }}" class="pl-card-title">{{ $product->name }}</a>
          <div class="pl-card-price">
             &#8377;{{ number_format($product->price, 2) }} <strike>&#8377;{{ number_format($product->price + 50, 2) }}</strike>
          </div>
          <button class="btn-add" onclick="PL.addToCartById('{{ $product->id }}')"><i class="bi bi-cart-plus me-1"></i> ADD TO CART</button>
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
''@
[System.IO.File]::WriteAllText("resources/views/frontend/home.blade.php", $html, (New-Object System.Text.UTF8Encoding($False)))
