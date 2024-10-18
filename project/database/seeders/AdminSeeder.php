<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run()
    {
        Admin::create([
            'name' => 'Admin User',
            'email' => 'fares@admin.com',
            'password' => Hash::make(123456789),
        ]);
    }
}
