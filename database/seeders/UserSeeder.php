<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return voidenv
     */
    public function run()
    {
        User::create([
            'name' => "Admin",
            'email' => "admin@gmail.com",
            'password' => Hash::make(54321),
            'is_admin' => true
        ]);
    }
}
