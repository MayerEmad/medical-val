<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Models\User;

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
            'name'=>"superadmin1",'email'=>"Superadmin1@gmail.com",'password'=>"Superadmin1",
        ]);
        $user = DB::table('users')->where('email', 'Superadmin1@gmail.com')->first();
        $user->attachRole('superadmin');

        DB::table('users')->insert([
            'name'=>"editoradmin1",'email'=>"editoradmin1@gmail.com",'password'=>"editoradmin1",
        ]);
        $user = DB::table('users')->where('email', 'editoradmin1@gmail.com')->first();
        $user->attachRole('editoradmin');

        DB::table('users')->insert([
            'name'=>"admin1",'email'=>"admin1@gmail.com",'password'=>"admin1admin1",
        ]);
        $user = DB::table('users')->where('email', 'admin1@gmail.com')->first();
        $user->attachRole('admin');

        for($i=1;$i<=10;$i++)
        {
            DB::table('users')->insert([
                'name'=>"client".$i,'email'=>"client".$i."@gmail.com",'password'=>"client".$i."client".$i,
            ]);
            $user = DB::table('users')->where('email', 'client'.$i.'@gmail.com')->first();
            $user->attachRole('client');
        }
    }
}
