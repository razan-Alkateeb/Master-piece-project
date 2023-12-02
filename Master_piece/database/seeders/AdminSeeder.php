<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'admin_name' => 'Khaled',
            'admin_email' => 'Khaled@gmail.com',
            'admin_phone' => '0772406992',
            'admin_image' => 'http://127.0.0.1:8000/images/seeder_img/admin_1.png',
            'admin_password' => '123456789',
        ]);
        Admin::create([
            'admin_name' => 'Asmaa',
            'admin_email' => 'Asmaa@gmail.com',
            'admin_phone' => '0772406992',
            'admin_image' => 'http://127.0.0.1:8000/images/seeder_img/admin_2.jpg',
            'admin_password' => '123456789',
        ]);
    }
}



// ('admin_name');
// ('admin_email')->unique();
// ('admin_password');
// ('admin_phone');
// ('admin_image')->default('http://127.0.0.1:8000/images/default_profile.png');
