
foreach(\App\Models\Product::all() as $p) { 
    $img = \App\Models\ProductImage::where('product_id', $p->id)->first(); 
    if ($img) { 
        $p->images = json_encode([$img->image_path]); 
        $p->save(); 
    } 
}

