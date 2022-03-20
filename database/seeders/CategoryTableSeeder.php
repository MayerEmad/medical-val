<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<10;$i++)
        {
            DB::table('categories')->insert([
                'name' => Str::random(4),
                'ar_name' => Str::random(4),

                'description' => Str::random(14),
                'discount' => rand(1,20),
                'image'=>'https://placeimg.com/100/100/any?' . rand(1, 100),
            ]);
        }
    }
}
