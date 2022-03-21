<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>"superadmin",
            'email'=>"Superadmin1@gmail.com",
            'password'=>"Superadmin1@gmail.com",
        ]);
        // for($i=0;$i<10;$i++)
        // {
        //
        // }
    }
}
