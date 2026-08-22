
\Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS=0;');
\App\Models\Category::truncate();
\App\Models\Product::truncate();
\App\Models\ProductImage::truncate();
\Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS=1;');

$c1 = \App\Models\Category::create(['name'=>'Steering Covers', 'slug'=>'steering-covers', 'is_active'=>1]);
$c2 = \App\Models\Category::create(['name'=>'Wheel Caps', 'slug'=>'wheel-caps', 'is_active'=>1]);
$c3 = \App\Models\Category::create(['name'=>'Parking Lights', 'slug'=>'parking-lights', 'is_active'=>1]);
$c4 = \App\Models\Category::create(['name'=>'Music Systems', 'slug'=>'music-systems', 'is_active'=>1]);

$p1 = \App\Models\Product::create(['category_id'=>$c1->id,'name'=>'Premium Leather Steering Cover','slug'=>'premium-leather-steering-cover','price'=>150.00,'quantity'=>50,'is_active'=>1]);
$p2 = \App\Models\Product::create(['category_id'=>$c2->id,'name'=>'Neon LED Wheel Cap','slug'=>'neon-led-wheel-cap','price'=>120.00,'quantity'=>30,'is_active'=>1]);

\App\Models\ProductImage::create(['product_id'=>$p1->id,'image_path'=>'steering_cover.jpg','is_primary'=>1]);
\App\Models\ProductImage::create(['product_id'=>$p2->id,'image_path'=>'wheel_cap.jpg','is_primary'=>1]);

