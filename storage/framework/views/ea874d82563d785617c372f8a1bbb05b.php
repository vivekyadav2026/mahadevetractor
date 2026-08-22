<!-- ===================== UNIFIED HEADER (MATCHING RANISAHAB LAYOUT) ===================== -->
<!-- Google Fonts for Header -->
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&family=Montserrat:wght@800&display=swap" rel="stylesheet">
<header class="pl-header" style="background: #ffffff; border-bottom: 1px solid #eaeaea; padding: 0.8rem 0; position: sticky; top: 0; z-index: 1020; box-shadow: 0 2px 10px rgba(0,0,0,0.02);">
  <div class="container-fluid px-3 px-xl-5 d-flex align-items-center justify-content-between">
    
    <!-- LEFT COLUMN: Menu Button -->
    <div style="flex: 1; display: flex; justify-content: flex-start;">
      <button class="btn d-flex align-items-center gap-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenuOffcanvas" style="border: 1px solid #ccc; border-radius: 4px; padding: 4px 10px; font-weight: 600; font-size: 0.85rem; color: #222; background: transparent;">
        <i class="bi bi-list" style="font-size: 1.4rem; line-height: 1;"></i>
        <span class="d-none d-sm-inline" style="letter-spacing: 1px;">MENU</span>
      </button>
    </div>

    <!-- CENTER COLUMN: Centered Logo -->
    <div class="text-center" style="flex: 1; display: flex; flex-direction: column; align-items: center; justify-content: center;">
      <a href="<?php echo e(route('home')); ?>" class="d-inline-block text-decoration-none">
        <img src="<?php echo e(asset('images/mahadev_logo.jpg')); ?>" alt="Mahadev Tractor Modification Logo" style="height: 50px; width: auto; border-radius: 6px; display: block; margin: 0 auto; object-fit: contain;">
        <span style="font-family: 'Cinzel', serif; font-weight: 700; font-size: 0.95rem; color: #cc5500; letter-spacing: 1.5px; text-transform: uppercase; margin-top: 6px; display: block; line-height: 1; white-space: nowrap;">Mahadev Tractor</span>
      </a>
    </div>

    <!-- RIGHT COLUMN: Icons (Search, Profile, Wishlist, Cart) -->
    <div style="flex: 1; display: flex; justify-content: flex-end; align-items: center; gap: 14px;">
      
      <!-- Search -->
      <a href="<?php echo e(route('shop')); ?>" class="text-dark position-relative" style="font-size: 1.3rem;">
        <i class="bi bi-search"></i>
      </a>
      
      <!-- Account -->
      <?php if(auth()->guard()->check()): ?>
        <a href="<?php echo e(route('dashboard')); ?>" class="text-dark position-relative" style="font-size: 1.3rem;">
          <i class="bi bi-person"></i>
        </a>
      <?php else: ?>
        <a href="<?php echo e(route('login')); ?>" class="text-dark position-relative" style="font-size: 1.3rem;">
          <i class="bi bi-person"></i>
        </a>
      <?php endif; ?>

      <!-- Wishlist -->
      <a href="<?php echo e(route('wishlist.index')); ?>" class="text-dark position-relative" style="font-size: 1.3rem;">
        <i class="bi bi-heart"></i>
        <span class="position-absolute d-flex align-items-center justify-content-center" data-wishlist-badge style="background: #f26522; color: #fff; font-size: 0.65rem; font-weight: 700; border-radius: 50%; width: 18px; height: 18px; top: -6px; right: -8px; <?php echo e(session()->has('wishlist') && count(session('wishlist')) > 0 ? 'display:flex !important;' : 'display:none !important;'); ?>">
          <?php echo e(session()->has('wishlist') ? count(session('wishlist')) : 0); ?>

        </span>
      </a>

      <!-- Bag (Cart) -->
      <a href="<?php echo e(route('cart.index')); ?>" class="text-dark position-relative" style="font-size: 1.3rem;">
        <i class="bi bi-bag"></i>
        <span class="position-absolute d-flex align-items-center justify-content-center" data-cart-badge style="background: #f26522; color: #fff; font-size: 0.65rem; font-weight: 700; border-radius: 50%; width: 18px; height: 18px; top: -6px; right: -8px; <?php echo e(session()->has('cart') && array_sum(array_column(session('cart'), 'quantity')) > 0 ? 'display:flex !important;' : 'display:none !important;'); ?>">
          <?php echo e(session()->has('cart') ? array_sum(array_column(session('cart'), 'quantity')) : 0); ?>

        </span>
      </a>

    </div>
  </div>
</header>

<!-- Mobile Offcanvas Menu -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="mobileMenuOffcanvas" aria-labelledby="mobileMenuOffcanvasLabel" style="width: 280px; z-index: 1055;">
  <div class="offcanvas-header" style="border-bottom: 1px solid #eee;">
    <h5 class="offcanvas-title" id="mobileMenuOffcanvasLabel" style="font-weight: 700; color: #f26522;">
      <img src="<?php echo e(asset('images/mahadev_logo.jpg')); ?>" style="height:24px; border-radius:4px; margin-right:8px;">
      Menu
    </h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <ul class="list-group list-group-flush mb-4">
      <li class="list-group-item px-0 border-0 mb-2"><a href="<?php echo e(route('home')); ?>" class="text-dark text-decoration-none" style="font-weight:600; font-size:1.1rem;"><i class="bi bi-house me-2" style="color:#00bcd4;"></i> Home</a></li>
      <li class="list-group-item px-0 border-0 mb-2"><a href="<?php echo e(route('shop')); ?>" class="text-dark text-decoration-none" style="font-weight:600; font-size:1.1rem;"><i class="bi bi-shop me-2" style="color:#00bcd4;"></i> Shop Categories</a></li>
      <li class="list-group-item px-0 border-0 mb-2"><a href="<?php echo e(route('wishlist.index')); ?>" class="text-dark text-decoration-none" style="font-weight:600; font-size:1.1rem;"><i class="bi bi-heart me-2" style="color:#00bcd4;"></i> Wishlist</a></li>
      <li class="list-group-item px-0 border-0 mb-2"><a href="<?php echo e(route('cart.index')); ?>" class="text-dark text-decoration-none" style="font-weight:600; font-size:1.1rem;"><i class="bi bi-bag me-2" style="color:#00bcd4;"></i> Shopping Cart</a></li>
      <li class="list-group-item px-0 border-0 mb-2"><a href="<?php echo e(route('about')); ?>" class="text-dark text-decoration-none" style="font-weight:600; font-size:1.1rem;"><i class="bi bi-info-circle me-2" style="color:#00bcd4;"></i> About Us</a></li>
      <li class="list-group-item px-0 border-0 mb-2"><a href="<?php echo e(route('contact')); ?>" class="text-dark text-decoration-none" style="font-weight:600; font-size:1.1rem;"><i class="bi bi-telephone me-2" style="color:#00bcd4;"></i> Contact Us</a></li>
    </ul>

    <?php if(auth()->guard()->check()): ?>
      <a href="<?php echo e(route('dashboard')); ?>" class="btn btn-outline-dark w-100 mb-2" style="border-radius:20px;">My Account</a>
      <form method="POST" action="<?php echo e(route('logout')); ?>" class="m-0">
        <?php echo csrf_field(); ?>
        <button type="submit" class="btn btn-danger w-100" style="border-radius:20px;">Log Out</button>
      </form>
    <?php else: ?>
      <a href="<?php echo e(route('login')); ?>" class="btn text-white w-100 mb-2" style="background:#00bcd4; border-radius:20px; font-weight:600;">Log In / Register</a>
    <?php endif; ?>
  </div>
</div><?php /**PATH C:\xampp\htdocs\mahadevetractor\resources\views/frontend/partials/header.blade.php ENDPATH**/ ?>