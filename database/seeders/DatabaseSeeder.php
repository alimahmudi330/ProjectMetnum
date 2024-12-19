<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\Material;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Item::create(['name' => 'Bingkai Foto', 'wood' => 140, 'paint' => 100, 'glass' => 40]);
        Item::create(['name' => 'Bingkai Cermin', 'wood' => 140, 'paint' => 100, 'glass' => 40]);
        Item::create(['name' => 'Bingkai Jam Dinding', 'wood' => 260, 'paint' => 150, 'glass' => 100]);
        Item::create(['name' => 'Rak Dinding', 'wood' => 450, 'paint' => 250]);

        // Tambahkan stok material
        Material::create(['type' => 'Balok Kayu', 'stock' => 5000]);
        Material::create(['type' => 'Cat', 'stock' => 2000]);
        Material::create(['type' => 'Kaca', 'stock' => 1000]);

        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
