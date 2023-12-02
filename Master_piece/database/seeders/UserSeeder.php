<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Ahmad',
            'email' => 'ahmad@gmail.com',
            'user_phone' => '0772406992',
            'user_address' => 'Amman',
            'user_image' => 'http://127.0.0.1:8000/images/seeder_img/person_1.jpg',
            'password' => '123456789',
        ]);
        User::create([
            'name' => 'Sara',
            'email' => 'Sara@gmail.com',
            'user_phone' => '0772406992',
            'user_address' => 'Irbid',
            'user_image' => 'http://127.0.0.1:8000/images/seeder_img/person_2.jpg',
            'password' => '123456789',
        ]);
        User::create([
            'name' => 'Ali',
            'email' => 'Ali@gmail.com',
            'user_phone' => '0772406992',
            'user_address' => 'Zarqa',
            'user_image' => 'http://127.0.0.1:8000/images/seeder_img/person_3.jpg',
            'password' => '123456789',
        ]);
        User::create([
            'name' => 'Muhammad',
            'email' => 'Muhammad@gmail.com',
            'user_phone' => '0772406992',
            'user_address' => 'Zarqa',
            'user_image' => 'http://127.0.0.1:8000/images/seeder_img/person_4.jpg',
            'password' => '123456789',
        ]);
        User::create([
            'name' => 'Rana',
            'email' => 'Rana@gmail.com',
            'user_phone' => '0772406992',
            'user_address' => 'Amman',
            'user_image' => 'http://127.0.0.1:8000/images/seeder_img/person_5.png',
            'password' => '123456789',
        ]);
        User::create([
            'name' => 'Eyad',
            'email' => 'Eyad@gmail.com',
            'user_phone' => '0772406992',
            'user_address' => 'Irbid',
            'user_image' => 'http://127.0.0.1:8000/images/seeder_img/person_6.jpg',
            'password' => '123456789',
        ]);
        User::create([
            'name' => 'Salma',
            'email' => 'Salma@gmail.com',
            'user_phone' => '0772406992',
            'user_address' => 'Irbid',
            'user_image' => 'http://127.0.0.1:8000/images/seeder_img/person_7.png',
            'password' => '123456789',
        ]);
    }
}


// string('name');
// string('email')->unique();
// string('user_phone')->default('0');
// string('user_address')->default('Amman');
// mediumText('user_image')->default('http://127.0.0.1:8000/images/default_profile.png');
// string('password')->nullable();
// string('user_role')->default('user');







