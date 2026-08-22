
\App\Models\Banner::truncate();
\App\Models\Banner::create(['title'=>'Fiber Hoods & Bumpers', 'image_path'=>'images/slider_2.jpg', 'link'=>'/shop', 'is_active'=>1]);
\App\Models\Banner::create(['title'=>'LED Lights & Audio', 'image_path'=>'images/slider_3.jpg', 'link'=>'/shop', 'is_active'=>1]);
\App\Models\Banner::create(['title'=>'Mahadev Tractor Modification', 'image_path'=>'images/slider_1.jpg', 'link'=>'/shop', 'is_active'=>1]);

$c3 = \App\Models\Category::where('slug', 'parking-lights')->first();
$c4 = \App\Models\Category::where('slug', 'music-systems')->first();

$p3 = \App\Models\Product::create(['category_id'=>$c3->id,'name'=>'Neon LED Parking Light Bar','slug'=>'neon-led-parking-light-bar','price'=>80.00,'quantity'=>40,'is_active'=>1]);
$p4 = \App\Models\Product::create(['category_id'=>$c4->id,'name'=>'Heavy Bass Tractor DJ System','slug'=>'heavy-bass-tractor-dj-system','price'=>450.00,'quantity'=>15,'is_active'=>1]);

\App\Models\ProductImage::create(['product_id'=>$p3->id,'image_path'=>'parking_light.jpg','is_primary'=>1]);
\App\Models\ProductImage::create(['product_id'=>$p4->id,'image_path'=>'music_system.jpg','is_primary'=>1]);

