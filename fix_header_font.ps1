
$content = Get-Content resources/views/frontend/partials/header.blade.php -Raw

# Inject Google Fonts (Cinzel for royal look, Montserrat for bold modern)
$fontImport = @"
<!-- Google Fonts for Header -->
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&family=Montserrat:wght@800&display=swap" rel="stylesheet">
"@

if ($content -notmatch "Cinzel") {
    $content = $content -replace '<header class="pl-header"', "$fontImport`n<header class=""pl-header"""
}

# Replace the specific span
$oldSpan = '<span style="font-family: ''Outfit'', sans-serif; font-weight: 800; font-size: 0.9rem; color: #f26522; letter-spacing: 0.1em; text-transform: uppercase; margin-top: 5px; display: block; line-height: 1;">Mahadev Tractor</span>'
$newSpan = '<span style="font-family: ''Cinzel'', serif; font-weight: 700; font-size: 0.95rem; color: #cc5500; letter-spacing: 1.5px; text-transform: uppercase; margin-top: 6px; display: block; line-height: 1; white-space: nowrap;">Mahadev Tractor</span>'

$content = $content.Replace($oldSpan, $newSpan)

[System.IO.File]::WriteAllText("resources/views/frontend/partials/header.blade.php", $content, (New-Object System.Text.UTF8Encoding($False)))

