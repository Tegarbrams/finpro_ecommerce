<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Game;

class GameSeeder extends Seeder
{
    public function run(): void
    {
        $games = ['Mobile Legends', 'PUBG Mobile', 'Free Fire'];

        foreach ($games as $game) {
            Game::create(['name' => $game]);
        }
    }
}
