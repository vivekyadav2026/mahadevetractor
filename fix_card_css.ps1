
$content = Get-Content resources/views/frontend/home.blade.php -Raw
$newCss = @"
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
"@

$content = $content -replace '(?s)\.pl-product-card \{.*\.btn-add:hover \{.*?\}', $newCss
[System.IO.File]::WriteAllText("resources/views/frontend/home.blade.php", $content, (New-Object System.Text.UTF8Encoding($False)))

