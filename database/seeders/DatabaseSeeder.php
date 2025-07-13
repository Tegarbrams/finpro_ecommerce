<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Pengguna;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Buat admin default jika belum ada
        if (!Pengguna::where('email', 'admin@example.com')->exists()) {
            Pengguna::create([
                'name' => 'Administrator',
                'email' => 'admin@example.com',
                'password' => Hash::make('password123'),
                'role' => 'admin',
                'email_verified_at' => now(),
            ]);
        }

        // Buat user demo jika belum ada
        if (!Pengguna::where('email', 'user@example.com')->exists()) {
            Pengguna::create([
                'name' => 'User Demo',
                'email' => 'user@example.com',
                'password' => Hash::make('password123'),
                'role' => 'user',
                'email_verified_at' => now(),
            ]);
        }

        $this->call([
            GameSeeder::class,
        ]);
    }

    
}