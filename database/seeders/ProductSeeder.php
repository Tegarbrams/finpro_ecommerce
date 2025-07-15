<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Game;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // Ambil ID game dari tabel 'games'
        $ml = Game::where('name', 'Mobile Legends')->first();
        $pubg = Game::where('name', 'PUBG')->first();        

        Product::create([
            'name' => 'Akun ML Epic',
            'description' => 'Level tinggi, banyak skin.',
            'price' => 150000,
            'thumbnail' => 'ml_epic.jpg',
            'screenshots' => json_encode(['ss1.jpg', 'ss2.jpg']),
            'game_id' => $ml->id, // relasi ke tabel games
        ]);

        Product::create([
            'name' => 'Akun PUBG Platinum',
            'description' => 'Rank Platinum.',
            'price' => 200000,
            'thumbnail' => 'ml_epic.jpg',
            'screenshots' => json_encode(['ss1.jpg', 'ss2.jpg']),
            'game_id' => $pubg->id,
        ]);
    }
}
