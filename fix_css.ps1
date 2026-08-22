
$content = Get-Content public/css/style.css -Raw
$content = $content -replace "#0e6b57", "#ff6b00" -replace "#094f40", "#cc5500" -replace "#e6f3ee", "#fff0e6" -replace "background: #f5faf7;", "background: #f8f9fa;"
Set-Content -Path public/css/style.css -Value $content

