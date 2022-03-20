<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Category::factory(10)->create();
        
         $this->call(LaratrustSeeder::class);
        // Model::unguard();
          $this->call(CategoryTableSeeder::class); 
          $this->call(UserTableSeeder::class); 
          $this->call(ProductTableSeeder::class); 

        //    Model::reguard();
    }
}
