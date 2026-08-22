<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title><?php echo e($product->name); ?> | Mahadev Tractor</title>
<meta name="description" content="<?php echo e($product->short_description ?? \Illuminate\Support\Str::limit(strip_tags($product->description), 150)); ?>">
<meta name="keywords" content="<?php echo e($product->category->name ?? 'grocery'); ?>, <?php echo e($product->name); ?>, buy <?php echo e($product->name); ?> online, Mahadev Tractor">
<meta name="robots" content="index, follow">
<link rel="canonical" href="<?php echo e(route('product.show', $product->slug)); ?>">

<!-- PWA Meta Tags -->
<?php echo $__env->make('frontend.partials.pwa_head', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<!-- Open Graph / Facebook -->
<meta property="og:type" content="product">
<meta property="og:url" content="<?php echo e(route('product.show', $product->slug)); ?>">
<meta property="og:title" content="<?php echo e($product->name); ?> | Mahadev Tractor">
<meta property="og:description" content="<?php echo e($product->short_description ?? \Illuminate\Support\Str::limit(strip_tags($product->description), 150)); ?>">
<meta property="og:image" content="<?php echo e($product->primary_image_url); ?>">
<meta property="product:price:amount" content="<?php echo e($product->sale_price ?? $product->price); ?>">
<meta property="product:price:currency" content="USD">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:url" content="<?php echo e(route('product.show', $product->slug)); ?>">
<meta name="twitter:title" content="<?php echo e($product->name); ?> | Mahadev Tractor">
<meta name="twitter:description" content="<?php echo e($product->short_description ?? \Illuminate\Support\Str::limit(strip_tags($product->description), 150)); ?>">
<meta name="twitter:image" content="<?php echo e($product->primary_image_url); ?>">
<link rel="icon" href="<?php echo e(asset('images/logo.jpeg')); ?>">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo e(asset('css/style.css?v=14')); ?>">
</head>
<body class="pl-product-page-body pl-hide-on-product">

<?php echo $__env->make('frontend.partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<!-- ===================== MOBILE PAGE HEADER ===================== -->
<header class="pl-page-header d-lg-none" style="position: sticky; top: 0; z-index: 1020; background: #fff; box-shadow: 0 2px 10px rgba(0,0,0,0.05);">
  <a href="<?php echo e(url('/shop')); ?>" class="pl-back-btn"><i class="bi bi-arrow-left"></i></a>
  <h1 id="mobile-product-title"><?php echo e($product->name); ?></h1>
  <div class="pl-header-icons">
    <button class="pl-icon-btn btn p-0 border-0 bg-transparent flex-shrink-0" onclick="PL.shareProduct('<?php echo e(addslashes($product->name)); ?>', '<?php echo e(route('product.show', $product->slug)); ?>')" title="Share Product" style="width:34px;height:34px;color: inherit; display: flex; align-items: center; justify-content: center;"><i class="bi bi-share"></i></button>
  </div>
</header>

<main class="container pl-section" data-product id="pl-product-detail-container">

  <!-- desktop breadcrumb -->
  <nav class="d-none d-lg-block mb-3">
    <ol class="breadcrumb small" id="pl-breadcrumb">
      <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>" class="text-decoration-none">Home</a></li>
      <li class="breadcrumb-item"><a href="<?php echo e(url('/shop')); ?>" class="text-decoration-none" id="pl-bread-cat"><?php echo e($product->category->name ?? 'Category'); ?></a></li>
      <li class="breadcrumb-item active" id="pl-bread-name"><?php echo e($product->name); ?></li>
    </ol>
  </nav>

  <div class="row g-4">
    <div class="col-lg-5">
      <div class="pl-detail-gallery" id="pl-main-image-wrap">
        <?php
          $images = $product->all_image_urls;
          $mainImage = $images[0];
        ?>
        <img src="<?php echo e($mainImage); ?>" alt="<?php echo e($product->name); ?>" id="pl-main-image" style="max-height: 420px; object-fit: contain; width: 100%;">
      </div>
      <div class="d-flex gap-2 mt-3 justify-content-center flex-wrap" id="pl-thumbnails-wrap">
        <?php if(count($images) > 1): ?>
          <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idx => $imgUrl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="pl-detail-thumbnail p-2 <?php echo e($idx === 0 ? 'active' : ''); ?>" 
                 onclick="document.getElementById('pl-main-image').src = '<?php echo e($imgUrl); ?>'; document.querySelectorAll('.pl-detail-thumbnail').forEach(t => t.classList.remove('active')); this.classList.add('active');"
                 style="width:70px;height:70px;cursor:pointer;background:#fff;border-radius:8px;border:1px solid #e2e8f0;">
              <img src="<?php echo e($imgUrl); ?>" alt="Thumbnail <?php echo e($idx + 1); ?>" style="max-width:100%;max-height:100%;object-fit:contain;">
            </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
      </div>
    </div>

    <div class="col-lg-7">
      <span class="badge rounded-pill mb-2" id="pl-product-badge" style="background:var(--pl-primary-light);color:var(--pl-primary-dark);"><?php echo e($product->category->name ?? 'Details'); ?></span>
      <div class="d-flex align-items-start justify-content-between gap-3 mb-2">
        <h1 class="fs-4 fw-bold" id="pl-product-title" style="font-family:var(--pl-font-head); margin-bottom: 0; line-height: 1.2;">
          <?php echo e($product->name); ?>

        </h1>
        <button class="btn d-none d-lg-flex align-items-center justify-content-center p-0 flex-shrink-0" style="width: 38px; height: 38px; border-radius: 50%; border: 1px solid #e2e8f0; background: #fff; color: #475569; transition: all 0.2s; cursor: pointer;" onclick="PL.shareProduct('<?php echo e(addslashes($product->name)); ?>', '<?php echo e(route('product.show', $product->slug)); ?>')" title="Share Product" onmouseover="this.style.background='#f8fafc'; this.style.color='#0f172a';" onmouseout="this.style.background='#fff'; this.style.color='#475569';">
          <i class="bi bi-share"></i>
        </button>
      </div>
      <div class="d-flex align-items-center gap-2 mb-3">
        <?php
          $rating = 4.0 + (($product->id * 3) % 11) / 10.0;
          if ($rating > 5.0) $rating = 5.0;
          $reviewsCount = 30 + (($product->id * 17) % 151);
          $fullStars = floor($rating);
          $hasHalf = ($rating - $fullStars) >= 0.4;
        ?>
        <span class="text-warning">
          <?php for($i = 1; $i <= 5; $i++): ?>
            <?php if($i <= $fullStars): ?>
              <i class="bi bi-star-fill"></i>
            <?php elseif($i == $fullStars + 1 && $hasHalf): ?>
              <i class="bi bi-star-half"></i>
            <?php else: ?>
              <i class="bi bi-star"></i>
            <?php endif; ?>
          <?php endfor; ?>
        </span>
        <span class="text-muted small"><?php echo e(number_format($rating, 1)); ?> (<?php echo e($reviewsCount); ?> reviews)</span>
      </div>

      <div class="fs-2 fw-bold mb-3" style="font-family:var(--pl-font-head);color:var(--pl-primary-dark);" id="pl-product-price-wrap">
        <span id="pl-product-price">$<?php echo e(number_format($product->sale_price ?? $product->price, 2)); ?></span> 
        <?php if($product->sale_price): ?>
          <span class="pl-old" id="pl-product-old-price">$<?php echo e(number_format($product->price, 2)); ?></span>
        <?php endif; ?>
      </div>

      <hr>

      <?php if($product->quantity > 0): ?>
        <div class="mb-3">
          <div class="fw-semibold mb-2">Add Quantity <span class="text-muted small fw-normal">(Max available: <?php echo e($product->quantity); ?>)</span></div>
          <div class="pl-qty-stepper" id="pl-detail-qty-stepper">
            <button type="button" class="pl-minus">−</button>
            <span class="pl-qty-val" id="pl-detail-qty">1</span>
            <button type="button" class="pl-plus">+</button>
          </div>
        </div>

        <div class="pl-action-buttons mb-4">
          <!-- Add to Cart & Wishlist row -->
          <div class="d-flex gap-2 align-items-center mb-2">
            <button class="pl-btn-add-cart w-50" id="pl-add-to-cart-btn" onclick="PL.addToCartById('<?php echo e($product->id); ?>')">
              <span class="pl-btn-icon"><i class="bi bi-cart-plus"></i></span>
              <span class="pl-btn-label">Add to Cart</span>
            </button>
            <button class="pl-btn-wish-half w-50 btn-wishlist" data-wishlist-product-id="<?php echo e($product->id); ?>" onclick="PL.toggleWishlist('<?php echo e($product->id); ?>')" title="Add to Wishlist">
              <i class="<?php echo e(is_array(session('wishlist')) && in_array($product->id, session('wishlist')) ? 'bi bi-heart-fill text-danger' : 'bi bi-heart'); ?>"></i>
              <span>Wishlist</span>
            </button>
          </div>
          <!-- Buy Now row -->
          <button class="pl-btn-buy-now w-100" onclick="PL.buyNow('<?php echo e($product->id); ?>')">
            <span class="pl-btn-icon"><i class="bi bi-lightning-fill"></i></span>
            <span class="pl-btn-label">Buy Now</span>
          </button>
        </div>
      <?php else: ?>
        <div class="mb-4">
          <div class="alert alert-warning border-0 rounded-3 text-danger fw-bold d-flex align-items-center gap-2 mb-3" style="background:#fff5f5;">
            <i class="bi bi-exclamation-triangle-fill"></i> Out of Stock
          </div>
          <div class="d-flex gap-2 align-items-center">
            <button class="btn btn-secondary w-50 py-2.5 rounded-3 disabled" disabled>
              <i class="bi bi-cart-x"></i> Out of Stock
            </button>
            <button class="pl-btn-wish-half w-50 btn-wishlist" data-wishlist-product-id="<?php echo e($product->id); ?>" onclick="PL.toggleWishlist('<?php echo e($product->id); ?>')" title="Add to Wishlist">
              <i class="<?php echo e(is_array(session('wishlist')) && in_array($product->id, session('wishlist')) ? 'bi bi-heart-fill text-danger' : 'bi bi-heart'); ?>"></i>
              <span>Wishlist</span>
            </button>
          </div>
        </div>
      <?php endif; ?>

      <div class="row text-center g-2 mb-4">
        <div class="col-4">
          <div class="pl-product-card p-2">
            <i class="bi bi-truck fs-5" style="color:var(--pl-primary);"></i>
            <div class="small mt-1">Fast Delivery</div>
          </div>
        </div>
        <div class="col-4">
          <div class="pl-product-card p-2">
            <i class="bi bi-box-seam fs-5" style="color:var(--pl-primary);"></i>
            <div class="small mt-1">Bulk Case Pack</div>
          </div>
        </div>
        <div class="col-4">
          <div class="pl-product-card p-2">
            <i class="bi bi-shield-check fs-5" style="color:var(--pl-primary);"></i>
            <div class="small mt-1">Quality Assured</div>
          </div>
        </div>
      </div>

      <!-- ===================== ACCORDIONS ===================== -->
      <div>
        <div class="pl-accordion-item">
          <button class="pl-accordion-btn" aria-expanded="true" aria-controls="descPanel">
            Description <i class="bi bi-chevron-down"></i>
          </button>
          <div id="descPanel" class="pl-accordion-panel show" style="max-height:220px;overflow:hidden;transition:max-height .25s;">
            <p class="text-muted small pb-3" id="pl-product-desc">
              <?php echo e($product->description); ?>

            </p>
          </div>
        </div>
        <div class="pl-accordion-item">
          <button class="pl-accordion-btn" aria-expanded="false" aria-controls="specPanel">
            Case Specifications <i class="bi bi-chevron-down"></i>
          </button>
          <div id="specPanel" class="pl-accordion-panel" style="max-height:0;overflow:hidden;transition:max-height .25s;">
            <ul class="text-muted small pb-3 mb-0" id="pl-product-specs" style="list-style-type: none; padding-left: 0;">
              <?php
                $catSlug = $product->category->slug ?? '';
                $weightGrams = $product->weight ? number_format($product->weight * 1000, 0) : null;
              ?>
              <li class="mb-2"><strong class="text-dark">SKU Code:</strong> <?php echo e($product->sku); ?></li>
              <li class="mb-2"><strong class="text-dark">Category:</strong> <?php echo e($product->category->name ?? 'Grocery'); ?></li>
              <?php if($product->weight): ?>
                <li class="mb-2"><strong class="text-dark">Case Weight:</strong> <?php echo e($weightGrams); ?>g (<?php echo e(number_format($product->weight, 3)); ?> kg)</li>
              <?php endif; ?>
              <?php if($product->length && $product->width && $product->height): ?>
                <li class="mb-2"><strong class="text-dark">Dimensions (L×W×H):</strong> <?php echo e($product->length); ?> cm × <?php echo e($product->width); ?> cm × <?php echo e($product->height); ?> cm</li>
              <?php endif; ?>
              <li class="mb-2"><strong class="text-dark">Stock Availability:</strong> <?php echo e($product->quantity > 0 ? 'In Stock (' . $product->quantity . ' units available)' : 'Out of Stock'); ?></li>
              <?php if($catSlug === 'beverage' || $catSlug === 'water' || $catSlug === 'mexican'): ?>
                <li class="mb-2"><strong class="text-dark">Storage:</strong> Serve chilled. Refrigerate after opening.</li>
                <li class="mb-2"><strong class="text-dark">Shelf Life:</strong> 12 Months from packing</li>
              <?php elseif($catSlug === 'chocolate' || $catSlug === 'candy'): ?>
                <li class="mb-2"><strong class="text-dark">Storage:</strong> Keep in a cool, dry place (16-20°C).</li>
                <li class="mb-2"><strong class="text-dark">Allergens:</strong> May contain traces of dairy, soy, or nuts.</li>
              <?php else: ?>
                <li class="mb-2"><strong class="text-dark">Storage:</strong> Store in a cool, dry environment.</li>
                <li class="mb-2"><strong class="text-dark">Quality:</strong> 100% Quality Assured & Verified</li>
              <?php endif; ?>
            </ul>
          </div>
        </div>
        <div class="pl-accordion-item">
          <button class="pl-accordion-btn" aria-expanded="false" aria-controls="shipPanel">
            Shipping & Returns <i class="bi bi-chevron-down"></i>
          </button>
          <div id="shipPanel" class="pl-accordion-panel" style="max-height:0;overflow:hidden;transition:max-height .25s;">
            <p class="text-muted small pb-3 mb-0">
              Orders ship within 1-2 business days from our Houston, TX warehouse. Damaged case returns accepted within 7 days of delivery.
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- ===================== RELATED PRODUCTS ===================== -->
  <section class="pl-section">
    <div class="pl-section-head">
      <h2>You May Also Like</h2>
      <div class="pl-scroll-arrows d-none d-md-flex gap-2" data-scroll-target="related-products-render">
        <button type="button" class="scroll-prev"><i class="bi bi-chevron-left"></i></button>
        <button type="button" class="scroll-next"><i class="bi bi-chevron-right"></i></button>
      </div>
    </div>
    <div class="pl-hscroll" id="related-products-render">
      <?php $__currentLoopData = $relatedProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $relProduct): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="pl-hscroll-item" data-product>
        <div class="pl-product-card">
          <div class="pl-product-img-wrap">
            <button class="pl-wishlist-btn" data-wishlist-product-id="<?php echo e($relProduct->id); ?>" onclick="PL.toggleWishlist('<?php echo e($relProduct->id); ?>')"><i class="<?php echo e(is_array(session('wishlist')) && in_array($relProduct->id, session('wishlist')) ? 'bi bi-heart-fill text-danger' : 'bi bi-heart'); ?>"></i></button>
            <a href="<?php echo e(route('product.show', $relProduct->slug)); ?>"><img src="<?php echo e($relProduct->primary_image_url); ?>" alt="<?php echo e($relProduct->name); ?>"></a>
          </div>
          <div class="pl-product-body">
            <a href="<?php echo e(route('product.show', $relProduct->slug)); ?>" class="pl-product-title" title="<?php echo e($relProduct->name); ?>"><?php echo e($relProduct->name); ?></a>
            <div class="pl-product-price">$<?php echo e(number_format($relProduct->sale_price ?? $relProduct->price, 2)); ?>

              <?php if($relProduct->sale_price): ?>
                <span class="pl-old">$<?php echo e(number_format($relProduct->price, 2)); ?></span>
              <?php endif; ?>
            </div>
            <div class="mt-auto d-flex gap-2">
              <a href="<?php echo e(route('product.show', $relProduct->slug)); ?>" class="pl-btn-outline text-center flex-grow-1 py-2">Details</a>
              <?php if($relProduct->quantity > 0): ?>
                <button class="btn btn-pl-primary px-3 d-flex align-items-center justify-content-center" style="border-radius:8px;" onclick="PL.addToCartById('<?php echo e($relProduct->id); ?>')">
                  <i class="bi bi-cart-plus"></i>
                </button>
              <?php else: ?>
                <button class="btn px-3 d-flex align-items-center justify-content-center" style="border-radius:8px;background:#f1f5f9;color:#94a3b8;border:1px solid #e2e8f0;cursor:not-allowed;" disabled title="Out of Stock">
                  <i class="bi bi-x-circle"></i>
                </button>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </section>

</main>

<?php echo $__env->make('frontend.partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('frontend.partials.bottom_nav', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<!-- Mobile Sticky Add-to-Cart Bar -->
<div class="pl-mobile-sticky-bar d-lg-none" id="plMobileStickyBar">
  <div class="d-flex align-items-center justify-content-between mb-2">
    <div>
      <span class="small text-muted me-1">Price:</span>
      <span class="fw-bold fs-5" style="color:var(--pl-primary-dark);" id="pl-sticky-price">$<?php echo e(number_format($product->sale_price ?? $product->price, 2)); ?></span>
    </div>
    <?php if($product->quantity > 0): ?>
    <div class="pl-qty-stepper" id="pl-sticky-qty-stepper" style="gap:8px;">
      <button type="button" class="pl-minus" style="width:28px;height:28px;font-size:0.9rem;">−</button>
      <span class="pl-qty-val" id="pl-sticky-qty" style="font-size:0.95rem;min-width:18px;">1</span>
      <button type="button" class="pl-plus" style="width:28px;height:28px;font-size:0.9rem;">+</button>
    </div>
    <?php else: ?>
    <span class="badge bg-danger-subtle text-danger fw-bold px-3 py-2 rounded-pill" style="font-size:0.7rem;">Out of Stock</span>
    <?php endif; ?>
  </div>
  <div class="d-flex gap-2">
    <?php if($product->quantity > 0): ?>
      <button class="pl-btn-add-cart flex-grow-1" style="height:42px;font-size:0.85rem;" onclick="PL.addToCartById('<?php echo e($product->id); ?>', parseInt(document.getElementById('pl-sticky-qty').textContent, 10))">
        <span class="pl-btn-icon"><i class="bi bi-cart-plus"></i></span>
        <span class="pl-btn-label">Add to Cart</span>
      </button>
      <button class="pl-btn-buy-now" style="height:42px;font-size:0.85rem;" onclick="PL.buyNow('<?php echo e($product->id); ?>')">
        <span class="pl-btn-icon"><i class="bi bi-lightning-fill"></i></span>
        <span class="pl-btn-label">Buy Now</span>
      </button>
    <?php else: ?>
      <button class="btn w-100" style="height:42px;font-size:0.85rem;background:#f1f5f9;color:#94a3b8;border:1px solid #e2e8f0;font-weight:700;border-radius:10px;cursor:not-allowed;" disabled>
        <i class="bi bi-x-circle me-1"></i> Out of Stock — Check back soon
      </button>
    <?php endif; ?>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  window.pl_csrf = '<?php echo e(csrf_token()); ?>';
</script>
<script src="<?php echo e(asset('js/script.js?v=10')); ?>"></script>
<script>
  // Sync both steppers together
  document.addEventListener('DOMContentLoaded', function() {
    var detailQtyEl = document.getElementById('pl-detail-qty');
    var stickyQtyEl = document.getElementById('pl-sticky-qty');
    var maxStock = <?php echo e((int) $product->quantity); ?>;

    function syncQty(val) {
      val = Math.max(1, Math.min(maxStock, val));
      if (detailQtyEl) detailQtyEl.textContent = val;
      if (stickyQtyEl) stickyQtyEl.textContent = val;
    }

    function getQty() {
      return parseInt((detailQtyEl || stickyQtyEl || {textContent: '1'}).textContent, 10) || 1;
    }

    // Detail stepper
    var detailStepper = document.getElementById('pl-detail-qty-stepper');
    if (detailStepper) {
      detailStepper.querySelector('.pl-minus').addEventListener('click', function() {
        syncQty(getQty() - 1);
      });
      detailStepper.querySelector('.pl-plus').addEventListener('click', function() {
        syncQty(getQty() + 1);
      });
    }

    // Sticky stepper
    var stickyStepper = document.getElementById('pl-sticky-qty-stepper');
    if (stickyStepper) {
      stickyStepper.querySelector('.pl-minus').addEventListener('click', function() {
        syncQty(getQty() - 1);
      });
      stickyStepper.querySelector('.pl-plus').addEventListener('click', function() {
        syncQty(getQty() + 1);
      });
    }
  });
</script>

<!-- PWA Installation Banners and Scripts -->
<?php echo $__env->make('frontend.partials.pwa_script', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

</body>
</html>


<?php /**PATH C:\xampp\htdocs\mahadevetractor\resources\views/frontend/product.blade.php ENDPATH**/ ?>