<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::Create([
            'name'=>'Ahmed Mostafa',
            'email'=>'ahmed@gmail.com',
            'password'=>bcrypt('123456'),
            'email_verified_at'=>now(),
            'remember_token'=>Str::random(10),
        ]);
        User::Create([
            'name'=>'Saloma Mostafa',
            'email'=>'saloma@gmail.com',
            'password'=>bcrypt('123456'),
            'email_verified_at'=>now(),
            'remember_token'=>Str::random(10),
        ]);
        User::Create([
            'name'=>'Mero Mostafa',
            'email'=>'mero@gmail.com',
            'password'=>bcrypt('123456'),
            'email_verified_at'=>now(),
            'remember_token'=>Str::random(10),
        ]);
        User::Create([
            'name'=>'Aya Mostafa',
            'email'=>'aya@gmail.com',
            'password'=>bcrypt('123456'),
            'email_verified_at'=>now(),
            'remember_token'=>Str::random(10),
        ]);
    }
}
