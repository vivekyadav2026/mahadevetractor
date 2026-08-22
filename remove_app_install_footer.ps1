
$footerPath = "resources/views/frontend/partials/footer.blade.php"
$footerContent = Get-Content $footerPath -Raw
$footerContent = $footerContent -replace "(?s)<p class=""mb-2""><a href=""javascript:void\(0\)"" onclick=""if\(window.triggerPwaInstall\) window.triggerPwaInstall\(\);"" class=""fw-bold"" style=""color:var\(--pl-yellow\) !important;"">Download App</a></p>", ""
Set-Content -Path $footerPath -Value $footerContent

