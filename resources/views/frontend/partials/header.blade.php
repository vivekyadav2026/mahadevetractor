<!-- Google Fonts for Header -->
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&family=Montserrat:wght@800;900&display=swap" rel="stylesheet">

<style>
  .mahadev-brand-text {
    font-family: 'Montserrat', sans-serif;
    font-weight: 900;
    text-transform: uppercase;
    white-space: nowrap;
    letter-spacing: 2px;
    text-shadow: 
      1px 1px 0px #000000,  
      2px 2px 0px #000000,
      3px 3px 0px #000000;
    display: inline-block;
  }

  .insta-brand-text {
    font-family: 'Montserrat', sans-serif;
    font-weight: 600;
    white-space: nowrap;
    text-shadow: 1px 1px 0px rgba(0,0,0,0.1);
    display: inline-block;
  }
</style>

<div style="background: linear-gradient(90deg, #4a0000 0%, #9e2a00 25%, #ff6a00 50%, #9e2a00 75%, #4a0000 100%); color: #ffffff; text-align: center; padding: 6px 0; font-weight: 800; font-size: 0.95rem; letter-spacing: 1.5px; text-shadow: 1px 1px 3px rgba(0,0,0,0.8); box-shadow: inset 0 -5px 15px rgba(0,0,0,0.2);">
  🔱 जय श्री महाकाल 🔱
</div>

<!-- ===================== DESKTOP HEADER (d-none d-lg-block) ===================== -->
<header class="d-none d-lg-block" style="background: #ffffff; border-bottom: 1px solid #eaeaea; padding: 1rem 0; position: sticky; top: 0; z-index: 1020; box-shadow: 0 2px 10px rgba(0,0,0,0.02);">
  <div class="container-fluid px-5 d-flex align-items-center justify-content-between">
    
    <!-- LEFT: Search Bar (Moved from Center) -->
    <div class="d-flex align-items-center" style="flex: 1.5;">
      <form action="{{ route('shop') }}" method="GET" class="position-relative w-100" style="max-width: 380px;">
        <input type="text" name="search" class="form-control" placeholder="Search for tractor accessories, hoods, music systems..." style="border-radius: 30px; padding: 10px 45px 10px 20px; border: 1px solid #ddd; background: #f8f9fa;">
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
          <div class="d-flex flex-column align-items-start">
            <span class="mahadev-brand-text" style="font-size: 1.35rem; letter-spacing: 2px; padding-bottom: 2px;">
              <span style="color: #f08038;"><span style="font-size: 1.65rem; font-weight: 900;">M</span>AHADEV</span> <span style="color: #f08038;"><span style="font-size: 1.65rem; font-weight: 900;">T</span>RACTOR</span> <span style="color: #f08038;"><span style="font-size: 1.65rem; font-weight: 900;">M</span>ODIFICATION</span>
            </span>
            <div style="height: 2px; width: 100%; background: linear-gradient(to right, #f08038, #ffaa00, #f08038, transparent); margin-top: 1px;"></div>
          </div>
        </a>
        <a href="https://www.instagram.com/mahadev_tractor_modification_" target="_blank" class="d-flex align-items-center gap-2 text-decoration-none justify-content-center" style="margin-top: 1px; color: #2b2b2b !important;">
          <span style="color: #e21e1e; font-size: 0.95rem; line-height: 1;"><i class="bi bi-heart-fill"></i></span>
          <span class="insta-brand-text" style="font-size: 0.8rem; color: #2b2b2b !important;">
            <span style="color: #e65100 !important; font-weight: 800;">19,000+</span> Instagram family का भरोसा
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
<header class="pl-header d-lg-none" style="background: #111111; position: sticky; top: 0; z-index: 1020; box-shadow: 0 4px 15px rgba(0,0,0,0.3);">
  <!-- Top Row: Hamburger, Logo, Icons -->
  <div style="border-bottom: 1px solid #222222; padding: 0.8rem 0; background: #111111;">
    <div class="container-fluid px-3 d-flex align-items-center justify-content-between">
      
      <!-- LEFT COLUMN: Hamburger Menu Button -->
      <div style="flex: 1; display: flex; justify-content: flex-start;">
        <button class="btn d-flex align-items-center justify-content-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenuOffcanvas" style="background: #ffffff; border: none; border-radius: 12px; width: 44px; height: 44px; box-shadow: 0 3px 8px rgba(0,0,0,0.15); padding: 0;">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#111" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <line x1="3" y1="12" x2="21" y2="12"></line>
            <line x1="3" y1="18" x2="21" y2="18"></line>
          </svg>
        </button>
      </div>

      <!-- CENTER COLUMN: Logo -->
      <div class="text-center" style="flex: 2; display: flex; justify-content: center;">
        <a href="{{ route('home') }}" class="d-inline-block text-decoration-none">
          <img src="{{ asset('images/mahadev_logo.jpg') }}" alt="Mahadev Tractor Modification Logo" style="height: 55px; width: 55px; border-radius: 50%; object-fit: cover; display: block; border: 2px solid #f08038; box-shadow: 0 0 10px rgba(240, 128, 56, 0.4);">
        </a>
      </div>

      <!-- RIGHT COLUMN: Wishlist & Cart Icons -->
      <div style="flex: 1; display: flex; justify-content: flex-end; align-items: center; gap: 6px;">
        
        <!-- Wishlist -->
        <a href="{{ route('wishlist.index') }}" class="position-relative d-flex align-items-center justify-content-center text-decoration-none" style="width: 40px; height: 40px;">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
          </svg>
          <span class="position-absolute d-flex align-items-center justify-content-center fw-bold" data-wishlist-badge style="background: #f08038; color: #fff; font-size: 0.6rem; border-radius: 50%; width: 16px; height: 16px; top: 1px; right: 1px; {{ session()->has('wishlist') && count(session('wishlist')) > 0 ? 'display:flex !important;' : 'display:none !important;' }}">
            {{ session()->has('wishlist') ? count(session('wishlist')) : 0 }}
          </span>
        </a>

        <!-- Cart (Bag) -->
        <a href="{{ route('cart.index') }}" class="position-relative d-flex align-items-center justify-content-center text-decoration-none" style="width: 40px; height: 40px;">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
            <line x1="3" y1="6" x2="21" y2="6"></line>
            <path d="M16 10a4 4 0 0 1-8 0"></path>
          </svg>
          <span class="position-absolute d-flex align-items-center justify-content-center fw-bold" data-cart-badge style="background: #f26522; color: #fff; font-size: 0.6rem; border-radius: 50%; width: 16px; height: 16px; top: 1px; right: 1px;">
            {{ session()->has('cart') ? array_sum(array_column(session('cart'), 'quantity')) : 0 }}
          </span>
        </a>
      </div>
    </div>
  </div>

  <!-- Main Title & Trust Badge Below -->
  <div style="background: #111111; padding: 12px 10px 18px 10px; text-align: center; border-bottom: 1px solid #222222;">
    <a href="{{ route('home') }}" class="text-decoration-none d-block mb-3" style="overflow: hidden;">
      <span style="font-size: 1.12rem; font-weight: 900; font-family: 'Montserrat', sans-serif; font-style: italic; letter-spacing: -0.3px; text-transform: uppercase; display: block; line-height: 1.2; white-space: nowrap;">
        <span style="color: #ff4e00;">MAHADEV</span> <span style="color: #ffffff;">TRACTOR MODIFICATION</span>
      </span>
    </a>
    <div class="d-inline-flex align-items-center justify-content-center bg-white px-3 py-2" style="border-radius: 30px; box-shadow: 0 4px 12px rgba(0,0,0,0.4); max-width: 95%;">
      <span style="font-size: 0.95rem; font-weight: 800; color: #111111; font-family: 'Montserrat', sans-serif; display: flex; align-items: center; gap: 6px; justify-content: center; line-height: 1;">
        <span style="font-size: 1.25rem; line-height: 1;">❤️</span> 19,000+ Instagram family का भरोसा
      </span>
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