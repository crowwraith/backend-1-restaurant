<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Pizza;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Test user
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Pizza's
        Pizza::create([
            'name' => 'Margherita',
            'description' => 'Tomaat, mozzarella, basilicum',
            'price' => 8.50
        ]);

        Pizza::create([
            'name' => 'Pepperoni',
            'description' => 'Pittige worst, kaas',
            'price' => 9.50
        ]);
    }
}