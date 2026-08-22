
$content = Get-Content resources/views/frontend/home.blade.php -Raw
$newContent = $content -replace "(?s)<!-- ===================== TOP CATEGORIES ===================== -->.*<!-- ===================== PERKS ===================== -->", "<!-- ===================== TOP CATEGORIES ===================== -->
  <section class=""pl-section pt-0"">
    <div class=""pl-section-head"">
      <h2>Top Categories</h2>
      <a href=""{{ url('/shop') }}"" class=""pl-view-all"">View All</a>
    </div>
    <div class=""pl-cat-list"">
      @foreach(\App\Models\Category::all() as `$cat)
      <a href=""{{ url('/shop') }}?category={{ `$cat->slug }}"" class=""pl-cat-pill text-decoration-none"">
        <div class=""pl-cat-icon cat-mexican""><i class=""bi bi-gear""></i></div>
        <span>{{ `$cat->name }}</span>
      </a>
      @endforeach
    </div>
  </section>
  <!-- ===================== PERKS ===================== -->"
Set-Content -Path resources/views/frontend/home.blade.php -Value $newContent

