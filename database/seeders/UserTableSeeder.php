<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
        $user = User::create([
            'name' => 'superadmin1',
            'email' => 'Superadmin1@gmail.com',
            'password' => Hash::make('Superadmin1'),
        ]);
        $user->attachRole('superadmin');

        $user = User::create([
            'name' => 'editoradmin1',
            'email' => 'editoradmin1@gmail.com',
            'password' => Hash::make('editoradmin1'),
        ]);
        $user->attachRole('editoradmin');

        $user = User::create([
            'name' => 'admin1',
            'email' => 'admin1@gmail.com',
            'password' => Hash::make('admin1admin1'),
        ]);
        $user->attachRole('admin');

        for($i=1;$i<=10;$i++)
        {
            $user = User::create([
                'name' => "client".$i,
                'email' => "client".$i."@gmail.com",
                'password' => Hash::make("client".$i."client".$i),
            ]);
            $user->attachRole('customer');
        }
     }
}
