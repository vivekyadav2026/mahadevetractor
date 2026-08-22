
try {
  $c1 = \App\Models\Category::create(['name'=>'Steering Covers', 'slug'=>'steering-covers', 'is_active'=>1]);
  echo 'Cat created: ' . $c1->id;
} catch (\Exception $e) {
  echo $e->getMessage();
}

