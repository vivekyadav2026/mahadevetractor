
$html = '<!-- ===================== FOOTER ===================== -->
<footer class="pl-footer" style="background-color: #111; color: #aaa; padding-top: 4rem; padding-bottom: 2rem; border-top: 4px solid #f26522; font-family: ''Inter'', sans-serif;">
  <div class="container-fluid px-3 px-xl-5" style="max-width: 1500px; margin: 0 auto;">
    <div class="row g-4">
      
      <!-- Column 1: Brand -->
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="d-flex align-items-center gap-2 mb-3">
          <img src="{{ asset(''images/mahadev_logo.jpg'') }}" class="pl-footer-logo" alt="Mahadev Tractor logo" style="width: 50px; height: 50px; border-radius: 50%; border: 2px solid #f26522; object-fit: cover;">
          <span class="fw-bold fs-4 text-white" style="font-family: ''Outfit'', sans-serif;">Mahadev Tractor</span>
        </div>
        <p class="mb-4 text-muted" style="font-size: 0.95rem; line-height: 1.6;">
          India''s premier destination for heavy-duty tractor modifications, fiber hoods, premium music systems, and custom accessories.
        </p>
        <div class="mb-2"><i class="bi bi-geo-alt me-2" style="color: #00bcd4;"></i>{{ \App\Models\Setting::get(''site_address'', ''Punjab, India'') }}</div>
        <div class="mb-2"><i class="bi bi-envelope me-2" style="color: #00bcd4;"></i>{{ \App\Models\Setting::get(''site_email'', ''contact@mahadevtractor.com'') }}</div>
        <div class="mb-2"><i class="bi bi-telephone me-2" style="color: #00bcd4;"></i>{{ \App\Models\Setting::get(''site_phone'', ''+91 9915978757'') }}</div>
      </div>

      <!-- Column 2: Quick Links -->
      <div class="col-lg-2 col-md-6 mb-4">
        <h5 class="text-white mb-4" style="font-weight: 700; border-bottom: 2px solid #f26522; display: inline-block; padding-bottom: 5px;">Shop</h5>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="{{ route(''home'') }}" class="footer-link">Home</a></li>
          <li class="mb-2"><a href="{{ route(''shop'') }}" class="footer-link">Shop Catalog</a></li>
          <li class="mb-2"><a href="{{ route(''cart.index'') }}" class="footer-link">Shopping Cart</a></li>
          <li class="mb-2"><a href="{{ route(''wishlist.index'') }}" class="footer-link">My Wishlist</a></li>
        </ul>
      </div>

      <!-- Column 3: Company & Policies -->
      <div class="col-lg-3 col-md-6 mb-4">
        <h5 class="text-white mb-4" style="font-weight: 700; border-bottom: 2px solid #f26522; display: inline-block; padding-bottom: 5px;">Policies</h5>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="{{ route(''about'') }}" class="footer-link">About Us</a></li>
          <li class="mb-2"><a href="{{ route(''contact'') }}" class="footer-link">Contact Us</a></li>
          <li class="mb-2"><a href="{{ route(''privacy'') }}" class="footer-link">Privacy Policy</a></li>
          <li class="mb-2"><a href="{{ route(''terms'') }}" class="footer-link">Terms & Conditions</a></li>
          <li class="mb-2"><a href="{{ route(''refund'') }}" class="footer-link">Refund & Return Policy</a></li>
        </ul>
      </div>

      <!-- Column 4: Newsletter & Social -->
      <div class="col-lg-3 col-md-6 mb-4">
        <h5 class="text-white mb-4" style="font-weight: 700; border-bottom: 2px solid #f26522; display: inline-block; padding-bottom: 5px;">Connect With Us</h5>
        <p class="mb-3 text-muted" style="font-size: 0.95rem;">Follow us for the latest tractor modifications and custom parts!</p>
        
        <div class="d-flex align-items-center gap-3 mb-4">
          @php
              $facebook = \App\Models\Setting::get(''social_facebook'', ''#'');
              $instagram = \App\Models\Setting::get(''social_instagram'', ''#'');
              $youtube = \App\Models\Setting::get(''social_youtube'', ''#'');
          @endphp
          <a href="{{ $facebook }}" class="social-circle" target="_blank"><i class="bi bi-facebook"></i></a>
          <a href="{{ $instagram }}" class="social-circle" target="_blank"><i class="bi bi-instagram"></i></a>
          <a href="{{ $youtube }}" class="social-circle" target="_blank"><i class="bi bi-youtube"></i></a>
        </div>

        <p class="mb-2 text-white">Subscribe to Offers:</p>
        <div class="input-group">
          <input type="email" class="form-control" placeholder="Email Address" style="background: #222; border: 1px solid #333; color: #fff;">
          <button class="btn" style="background: #00bcd4; color: #fff; font-weight: 600;">Join</button>
        </div>
      </div>
      
    </div>
    
    <hr style="border-color: rgba(255,255,255,0.1); margin: 2rem 0;">
    
    <div class="d-flex justify-content-between flex-wrap gap-3 align-items-center pb-4 pb-lg-0" style="font-size: 0.9rem;">
      <div>&copy; {{ date(''Y'') }} Mahadev Tractor Modification & Accessories. All rights reserved.</div>
      <div style="color: #666;">
        ॥ हर हर महादेव ॥
      </div>
    </div>
  </div>
</footer>

<style>
  .footer-link { color: #aaa; text-decoration: none; transition: 0.3s; }
  .footer-link:hover { color: #00bcd4; padding-left: 5px; }
  .social-circle { width: 40px; height: 40px; border-radius: 50%; background: #222; color: #fff; display: flex; align-items: center; justify-content: center; text-decoration: none; transition: 0.3s; font-size: 1.2rem; }
  .social-circle:hover { background: #f26522; color: #fff; transform: translateY(-3px); }
</style>
'
[System.IO.File]::WriteAllText("resources/views/frontend/partials/footer.blade.php", $html, (New-Object System.Text.UTF8Encoding($False)))

