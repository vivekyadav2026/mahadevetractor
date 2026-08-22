<?php
require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

foreach(\App\Models\Product::all() as $p) {
    $img = \App\Models\ProductImage::where('product_id', $p->id)->first();
    if ($img) {
        $p->images = json_encode([$img->image_path]);
        $p->save();
    }
}
echo 'Fixed images!';

