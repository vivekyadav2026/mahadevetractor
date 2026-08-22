
$content = Get-Content resources/views/frontend/partials/header.blade.php -Raw
$newMobileHeader = @"
<!-- ===================== MOBILE WELCOME HEADER ===================== -->
<header class="pl-welcome-bar d-lg-none" style="background: #ffffff; border-bottom: 1px solid var(--pl-border); padding: 0.8rem 1rem; position: sticky; top: 0; z-index: 1020;">
  <div class="container-fluid d-flex align-items-center justify-content-between p-0">
    <div class="d-flex align-items-center gap-2">
      <!-- Hamburger Menu Button -->
      <button class="btn btn-link p-0 text-dark me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenuOffcanvas" aria-controls="mobileMenuOffcanvas" style="font-size: 1.6rem; line-height: 1;">
        <i class="bi bi-list"></i>
      </button>

      <a href="{{ route(''home'') }}" class="d-flex align-items-center gap-2 text-decoration-none">
        <img src="{{ asset(''images/mahadev_logo.jpg'') }}" alt="Mahadev Tractor Modification Logo" style="height: 38px; width: auto; border-radius: 6px; object-fit: contain;">
        <div>
          <div class="pl-name" style="color: var(--pl-primary-dark); font-weight: 700; font-size: 1.02rem; line-height: 1.1; font-family: var(--pl-font-head);">Mahadev Tractor</div>
          <div class="pl-hi" style="font-size: 0.62rem; color: var(--pl-muted); letter-spacing: 0.03em; text-transform: uppercase;">Fiber Hood & Accessories</div>
        </div>
      </a>
    </div>

    <div class="d-flex align-items-center gap-3">
      <a href="{{ route(''shop'') }}" class="position-relative" title="Search" style="color: var(--pl-primary-dark); font-size: 1.25rem; display: flex;">
        <i class="bi bi-search"></i>
      </a>
    </div>
  </div>
</header>

<!-- Mobile Offcanvas Menu -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="mobileMenuOffcanvas" aria-labelledby="mobileMenuOffcanvasLabel" style="width: 280px; z-index: 1055;">
  <div class="offcanvas-header" style="border-bottom: 1px solid #eee;">
    <h5 class="offcanvas-title" id="mobileMenuOffcanvasLabel" style="font-weight: 700; color: #f26522;">
      <img src="{{ asset(''images/mahadev_logo.jpg'') }}" style="height:24px; border-radius:4px; margin-right:8px;">
      Menu
    </h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <ul class="list-group list-group-flush mb-4">
      <li class="list-group-item px-0 border-0 mb-2"><a href="{{ route(''home'') }}" class="text-dark text-decoration-none" style="font-weight:600; font-size:1.1rem;"><i class="bi bi-house me-2" style="color:#00bcd4;"></i> Home</a></li>
      <li class="list-group-item px-0 border-0 mb-2"><a href="{{ route(''shop'') }}" class="text-dark text-decoration-none" style="font-weight:600; font-size:1.1rem;"><i class="bi bi-shop me-2" style="color:#00bcd4;"></i> Shop Categories</a></li>
      <li class="list-group-item px-0 border-0 mb-2"><a href="{{ route(''wishlist.index'') }}" class="text-dark text-decoration-none" style="font-weight:600; font-size:1.1rem;"><i class="bi bi-heart me-2" style="color:#00bcd4;"></i> Wishlist</a></li>
      <li class="list-group-item px-0 border-0 mb-2"><a href="{{ route(''cart.index'') }}" class="text-dark text-decoration-none" style="font-weight:600; font-size:1.1rem;"><i class="bi bi-bag me-2" style="color:#00bcd4;"></i> Shopping Cart</a></li>
      <li class="list-group-item px-0 border-0 mb-2"><a href="{{ route(''about'') }}" class="text-dark text-decoration-none" style="font-weight:600; font-size:1.1rem;"><i class="bi bi-info-circle me-2" style="color:#00bcd4;"></i> About Us</a></li>
      <li class="list-group-item px-0 border-0 mb-2"><a href="{{ route(''contact'') }}" class="text-dark text-decoration-none" style="font-weight:600; font-size:1.1rem;"><i class="bi bi-telephone me-2" style="color:#00bcd4;"></i> Contact Us</a></li>
    </ul>

    @auth
      <a href="{{ route(''dashboard'') }}" class="btn btn-outline-dark w-100 mb-2" style="border-radius:20px;">My Account</a>
      <form method="POST" action="{{ route(''logout'') }}" class="m-0">
        @csrf
        <button type="submit" class="btn btn-danger w-100" style="border-radius:20px;">Log Out</button>
      </form>
    @else
      <a href="{{ route(''login'') }}" class="btn text-white w-100 mb-2" style="background:#00bcd4; border-radius:20px; font-weight:600;">Log In / Register</a>
    @endauth
  </div>
</div>
"@

$content = $content -replace '(?s)<!-- ===================== MOBILE WELCOME HEADER ===================== -->.*</header>', $newMobileHeader
[System.IO.File]::WriteAllText("resources/views/frontend/partials/header.blade.php", $content, (New-Object System.Text.UTF8Encoding($False)))

