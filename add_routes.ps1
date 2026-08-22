
$content = Get-Content routes/web.php -Raw
$newRoutes = @"

// --- Shared Hosting Deployment Routes ---
Route::get('/optimize-clear', function() {
    \Illuminate\Support\Facades\Artisan::call('optimize:clear');
    \Illuminate\Support\Facades\Artisan::call('view:clear');
    \Illuminate\Support\Facades\Artisan::call('config:clear');
    \Illuminate\Support\Facades\Artisan::call('cache:clear');
    return "Application optimized and caches cleared for live server!";
});

Route::get('/create-storage-link', function() {
    \Illuminate\Support\Facades\Artisan::call('storage:link');
    return "Storage link created successfully!";
});
"@

$content = $content + $newRoutes
[System.IO.File]::WriteAllText("routes/web.php", $content, (New-Object System.Text.UTF8Encoding($False)))

