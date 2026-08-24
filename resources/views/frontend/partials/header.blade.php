<!-- Google Fonts for Header -->
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&family=Montserrat:wght@800&display=swap" rel="stylesheet">

<div style="background: #cc5500; color: #ffffff; text-align: center; padding: 6px 0; font-weight: 700; font-size: 1.1rem; letter-spacing: 1px;">
  🔱 जय श्री महाकाल 🔱
</div>

<!-- ===================== DESKTOP HEADER (d-none d-lg-block) ===================== -->
<header class="d-none d-lg-block" style="background: #ffffff; border-bottom: 1px solid #eaeaea; padding: 1rem 0; position: sticky; top: 0; z-index: 1020; box-shadow: 0 2px 10px rgba(0,0,0,0.02);">
  <div class="container-fluid px-5 d-flex align-items-center justify-content-between">
    
    <!-- LEFT: Search Bar (Moved from Center) -->
    <div class="d-flex align-items-center" style="flex: 1.5;">
      <form action="{{ route('shop') }}" method="GET" class="position-relative w-100" style="max-width: 380px;">
        <input type="text" name="search" class="form-control" placeholder="Search for tractor accessories, hoods, music systems..." style="border-radius: 30px; padding: 10px 20px; border: 1px solid #ddd; background: #f8f9fa;">
        <button type="submit" class="btn position-absolute top-50 translate-middle-y" style="right: 10px; color: #cc5500;">
          <i class="bi bi-search"></i>
        </button>
      </form>
    </div>

    <!-- CENTER: Logo & Brand Title (Centered, Moved from Left) -->
    <div style="flex: 2; display: flex; justify-content: center; padding: 0 20px;">
      <div class="d-flex flex-column align-items-center" style="gap: 2px; text-align: center;">
        <a href="{{ route('home') }}" class="d-flex align-items-center gap-2 text-decoration-none justify-content-center">
          <img src="{{ asset('images/mahadev_logo.jpg') }}" alt="Logo" style="height: 60px; width: 60px; border-radius: 50%; object-fit: cover; border: 2px solid #f08038;">
          <span style="font-family: 'Cinzel', serif; font-weight: 700; font-size: 1.35rem; color: #cc5500; letter-spacing: 1.2px; text-transform: uppercase; white-space: nowrap;">
            MAHADEV TRACTOR MODIFICATION
          </span>
        </a>
        <a href="https://www.instagram.com/mahadev_tractor_modification_" target="_blank" class="d-flex align-items-center gap-2 text-decoration-none justify-content-center" style="margin-top: 1px;">
          <span style="color: #e21e1e; font-size: 0.95rem; line-height: 1;"><i class="bi bi-heart-fill"></i></span>
          <span style="font-family: 'Montserrat', sans-serif; font-weight: 600; font-size: 0.8rem; color: #444; white-space: nowrap;">
            19000+ Instagram family का भरोसा
          </span>
        </a>
      </div>
    </div>

    <!-- RIGHT: Icons & Menu -->
    <div style="flex: 1; display: flex; justify-content: flex-end; align-items: center; gap: 20px;">
      <a href="{{ route('home') }}" class="text-dark text-decoration-none fw-bold" style="font-size: 1rem;">Home</a>
      <a href="{{ route('shop') }}" class="text-dark text-decoration-none fw-bold" style="font-size: 1rem;">Shop</a>
      
      @auth
        <a href="{{ route('dashboard') }}" class="text-dark position-relative" style="font-size: 1.3rem;"><i class="bi bi-person"></i></a>
      @else
        <a href="{{ route('login') }}" class="text-dark position-relative" style="font-size: 1.3rem;"><i class="bi bi-person"></i></a>
      @endauth

      <a href="{{ route('wishlist.index') }}" class="text-dark position-relative" style="font-size: 1.3rem;">
        <i class="bi bi-heart"></i>
        <span class="position-absolute d-flex align-items-center justify-content-center" data-wishlist-badge style="background: #f26522; color: #fff; font-size: 0.65rem; font-weight: 700; border-radius: 50%; width: 18px; height: 18px; top: -6px; right: -8px; {{ session()->has('wishlist') && count(session('wishlist')) > 0 ? 'display:flex !important;' : 'display:none !important;' }}">
          {{ session()->has('wishlist') ? count(session('wishlist')) : 0 }}
        </span>
      </a>

      <a href="{{ route('cart.index') }}" class="text-dark position-relative" style="font-size: 1.3rem;">
        <i class="bi bi-bag"></i>
        <span class="position-absolute d-flex align-items-center justify-content-center" data-cart-badge style="background: #f26522; color: #fff; font-size: 0.65rem; font-weight: 700; border-radius: 50%; width: 18px; height: 18px; top: -6px; right: -8px; {{ session()->has('cart') && array_sum(array_column(session('cart'), 'quantity')) > 0 ? 'display:flex !important;' : 'display:none !important;' }}">
          {{ session()->has('cart') ? array_sum(array_column(session('cart'), 'quantity')) : 0 }}
        </span>
      </a>
    </div>
  </div>
</header>


<!-- ===================== MOBILE HEADER (d-lg-none) ===================== -->
<header class="pl-header d-lg-none" style="background: #ffffff; border-bottom: 1px solid #eaeaea; padding: 0.8rem 0; position: sticky; top: 0; z-index: 1020; box-shadow: 0 2px 10px rgba(0,0,0,0.02);">
  <div class="container-fluid px-3 px-xl-5 d-flex align-items-center justify-content-between">
    
    <!-- LEFT COLUMN: Menu Button -->
    <div style="flex: 1; display: flex; justify-content: flex-start;">
      <button class="btn d-flex align-items-center gap-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenuOffcanvas" style="border: 1px solid #ccc; border-radius: 4px; padding: 4px 10px; font-weight: 600; font-size: 0.85rem; color: #222; background: transparent;">
        <i class="bi bi-list" style="font-size: 1.4rem; line-height: 1;"></i>
        <span class="d-none d-sm-inline" style="letter-spacing: 1px;">MENU</span>
      </button>
    </div>

    <!-- CENTER COLUMN: Centered Logo -->
    <div class="text-center" style="flex: 2; display: flex; flex-direction: column; align-items: center; justify-content: center;">
      <div class="d-flex flex-column align-items-center" style="gap: 2px;">
        <a href="{{ route('home') }}" class="d-inline-block text-decoration-none">
          <img src="{{ asset('images/mahadev_logo.jpg') }}" alt="Mahadev Tractor Modification Logo" style="height: 55px; width: 55px; border-radius: 50%; object-fit: cover; display: block; margin: 0 auto 3px auto;">
          <span style="font-family: 'Cinzel', serif; font-weight: 700; font-size: 0.78rem; color: #cc5500; letter-spacing: 0.8px; text-transform: uppercase; white-space: nowrap;">MAHADEV TRACTOR MODIFICATION</span>
        </a>
        <a href="https://www.instagram.com/mahadev_tractor_modification_" target="_blank" class="d-flex align-items-center justify-content-center gap-1 text-decoration-none">
          <span style="color: #e21e1e; font-size: 0.75rem; line-height: 1;"><i class="bi bi-heart-fill"></i></span>
          <span style="font-family: 'Montserrat', sans-serif; font-weight: 600; font-size: 0.65rem; color: #444; white-space: nowrap;">19000+ Instagram family का भरोसा</span>
        </a>
      </div>
    </div>

    <!-- RIGHT COLUMN: Icons (Search, Profile, Wishlist, Cart) -->
    <div style="flex: 1; display: flex; justify-content: flex-end; align-items: center; gap: 14px;">
      
      <!-- Search
      <a href="{{ route('shop') }}" class="text-dark position-relative" style="font-size: 1.3rem;">
        <i class="bi bi-search"></i>
      </a>
      -->
      
      <!-- Account
      @auth
        <a href="{{ route('dashboard') }}" class="text-dark position-relative" style="font-size: 1.3rem;">
          <i class="bi bi-person"></i>
        </a>
      @else
        <a href="{{ route('login') }}" class="text-dark position-relative" style="font-size: 1.3rem;">
          <i class="bi bi-person"></i>
        </a>
      @endauth
      -->

      <!-- Wishlist -->
      <a href="{{ route('wishlist.index') }}" class="text-dark position-relative" style="font-size: 1.3rem;">
        <i class="bi bi-heart"></i>
        <span class="position-absolute d-flex align-items-center justify-content-center" data-wishlist-badge style="background: #f26522; color: #fff; font-size: 0.65rem; font-weight: 700; border-radius: 50%; width: 18px; height: 18px; top: -6px; right: -8px; {{ session()->has('wishlist') && count(session('wishlist')) > 0 ? 'display:flex !important;' : 'display:none !important;' }}">
          {{ session()->has('wishlist') ? count(session('wishlist')) : 0 }}
        </span>
      </a>

      <!-- Bag (Cart) -->
      <a href="{{ route('cart.index') }}" class="text-dark position-relative" style="font-size: 1.3rem;">
        <i class="bi bi-bag"></i>
        <span class="position-absolute d-flex align-items-center justify-content-center" data-cart-badge style="background: #f26522; color: #fff; font-size: 0.65rem; font-weight: 700; border-radius: 50%; width: 18px; height: 18px; top: -6px; right: -8px; {{ session()->has('cart') && array_sum(array_column(session('cart'), 'quantity')) > 0 ? 'display:flex !important;' : 'display:none !important;' }}">
          {{ session()->has('cart') ? array_sum(array_column(session('cart'), 'quantity')) : 0 }}
        </span>
      </a>

    </div>
  </div>
</header>

<!-- Mobile Offcanvas Menu -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="mobileMenuOffcanvas" aria-labelledby="mobileMenuOffcanvasLabel" style="width: 280px; z-index: 1055;">
  <div class="offcanvas-header" style="border-bottom: 1px solid #eee;">
    <h5 class="offcanvas-title" id="mobileMenuOffcanvasLabel" style="font-weight: 700; color: #f26522;">
      <img src="{{ asset('images/mahadev_logo.jpg') }}" style="height:24px; border-radius:4px; margin-right:8px;">
      Menu
    </h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <ul class="list-group list-group-flush mb-4">
      <li class="list-group-item px-0 border-0 mb-2"><a href="{{ route('home') }}" class="text-dark text-decoration-none" style="font-weight:600; font-size:1.1rem;"><i class="bi bi-house me-2" style="color:#00bcd4;"></i> Home</a></li>
      <li class="list-group-item px-0 border-0 mb-2"><a href="{{ route('shop') }}" class="text-dark text-decoration-none" style="font-weight:600; font-size:1.1rem;"><i class="bi bi-shop me-2" style="color:#00bcd4;"></i> Shop Categories</a></li>
      <li class="list-group-item px-0 border-0 mb-2"><a href="{{ route('wishlist.index') }}" class="text-dark text-decoration-none" style="font-weight:600; font-size:1.1rem;"><i class="bi bi-heart me-2" style="color:#00bcd4;"></i> Wishlist</a></li>
      <li class="list-group-item px-0 border-0 mb-2"><a href="{{ route('cart.index') }}" class="text-dark text-decoration-none" style="font-weight:600; font-size:1.1rem;"><i class="bi bi-bag me-2" style="color:#00bcd4;"></i> Shopping Cart</a></li>
      <li class="list-group-item px-0 border-0 mb-2"><a href="{{ route('about') }}" class="text-dark text-decoration-none" style="font-weight:600; font-size:1.1rem;"><i class="bi bi-info-circle me-2" style="color:#00bcd4;"></i> About Us</a></li>
      <li class="list-group-item px-0 border-0 mb-2"><a href="{{ route('contact') }}" class="text-dark text-decoration-none" style="font-weight:600; font-size:1.1rem;"><i class="bi bi-telephone me-2" style="color:#00bcd4;"></i> Contact Us</a></li>
    </ul>

    @auth
      <a href="{{ route('dashboard') }}" class="btn btn-outline-dark w-100 mb-2" style="border-radius:20px;">My Account</a>
      <form method="POST" action="{{ route('logout') }}" class="m-0">
        @csrf
        <button type="submit" class="btn btn-danger w-100" style="border-radius:20px;">Log Out</button>
      </form>
    @else
      <a href="{{ route('login') }}" class="btn text-white w-100 mb-2" style="background:#00bcd4; border-radius:20px; font-weight:600;">Log In / Register</a>
    @endauth
  </div>
</div>