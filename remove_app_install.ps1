
$homePath = "resources/views/frontend/home.blade.php"
$homeContent = Get-Content $homePath -Raw
$homeContent = $homeContent -replace "(?s)<!-- PWA Installation Banners and Scripts -->.*?@include\('frontend.partials.pwa_script'\)", ""
Set-Content -Path $homePath -Value $homeContent

