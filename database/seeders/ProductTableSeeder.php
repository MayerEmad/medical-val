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
                'description' => 'Description '.Str::random(14),
                'price' => rand(10,30),
                'discount' => rand(1,5),
                'image'=>'https://placeimg.com/100/100/any?' . rand(1, 100),
                'rate'=>rand(0,5),
                'quantity'=>rand(1,100),
                'category_id'=>rand(1,9),
            ]);
        }
    }
}
