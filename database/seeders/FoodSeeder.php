<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Food;
use App\Models\User;

class FoodSeeder extends Seeder
{
    public function run()
    {
        // Create admin user
        User::updateOrCreate(
            ['email' => 'admin@example.com'],
            ['name' => 'Admin', 'password' => Hash::make('admin123'), 'role' => 'admin']
        );

        // Sample foods
        Food::create(['name' => 'Burger', 'description' => 'Juicy beef burger', 'price' => 150.00]);
        Food::create(['name' => 'Pizza', 'description' => 'Cheesy pepperoni pizza', 'price' => 350.00]);
        Food::create(['name' => 'Fries', 'description' => 'Crispy french fries', 'price' => 80.00]);
        Food::create(['name' => 'Sushi', 'description' => 'Assorted sushi rolls', 'price' => 420.00]);
    }
}
