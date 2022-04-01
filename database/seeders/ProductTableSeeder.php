<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<60;$i++)
        {
            DB::table('products')->insert([
                'name' => 'Product '.Str::random(4),
                'ar_name' => 'منتج '.Str::random(4),

                'description' => 'Description '.Str::random(14),
                'ar_description' => 'وصف '.Str::random(14),
                'price' => rand(5,80),
                'discount' => rand(0,5),
                'image'=>'product_0'. rand(1, 6).'.png',
                'rate'=>rand(0,5),
                'quantity'=>rand(0,100),
                'category_id'=>rand(1,9),
            ]);
        }
    }
}
