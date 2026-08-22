
\Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS=0;');
\App\Models\Category::truncate();
\App\Models\Product::truncate();
\App\Models\ProductImage::truncate();
\App\Models\Banner::truncate();
\Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS=1;');

$c1 = \App\Models\Category::create(['name'=>'Steering Covers', 'slug'=>'steering-covers', 'is_active'=>1]);
$c2 = \App\Models\Category::create(['name'=>'Wheel Caps', 'slug'=>'wheel-caps', 'is_active'=>1]);
$c3 = \App\Models\Category::create(['name'=>'Parking Lights', 'slug'=>'parking-lights', 'is_active'=>1]);
$c4 = \App\Models\Category::create(['name'=>'Music Systems', 'slug'=>'music-systems', 'is_active'=>1]);

$p1 = \App\Models\Product::create(['category_id'=>$c1->id,'name'=>'Premium Leather Steering Cover','slug'=>'premium-leather-steering-cover','price'=>150.00,'quantity'=>50,'is_active'=>1]);
$p2 = \App\Models\Product::create(['category_id'=>$c2->id,'name'=>'Neon LED Wheel Cap','slug'=>'neon-led-wheel-cap','price'=>120.00,'quantity'=>30,'is_active'=>1]);
$p3 = \App\Models\Product::create(['category_id'=>$c3->id,'name'=>'Neon LED Parking Light Bar','slug'=>'neon-led-parking-light-bar','price'=>80.00,'quantity'=>40,'is_active'=>1]);
$p4 = \App\Models\Product::create(['category_id'=>$c4->id,'name'=>'Heavy Bass Tractor DJ System','slug'=>'heavy-bass-tractor-dj-system','price'=>450.00,'quantity'=>15,'is_active'=>1]);

\App\Models\ProductImage::create(['product_id'=>$p1->id,'image_path'=>'steering_cover.jpg','is_primary'=>1]);
\App\Models\ProductImage::create(['product_id'=>$p2->id,'image_path'=>'wheel_cap.jpg','is_primary'=>1]);
\App\Models\ProductImage::create(['product_id'=>$p3->id,'image_path'=>'parking_light.jpg','is_primary'=>1]);
\App\Models\ProductImage::create(['product_id'=>$p4->id,'image_path'=>'music_system.jpg','is_primary'=>1]);

\App\Models\Banner::create(['title'=>'Fiber Hoods & Bumpers', 'image_path'=>'images/slider_2.jpg', 'link'=>'/shop', 'is_active'=>1]);
\App\Models\Banner::create(['title'=>'LED Lights & Audio', 'image_path'=>'images/slider_3.jpg', 'link'=>'/shop', 'is_active'=>1]);
\App\Models\Banner::create(['title'=>'Mahadev Tractor Modification', 'image_path'=>'images/slider_1.jpg', 'link'=>'/shop', 'is_active'=>1]);

