<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            
            // Mengacu ke tabel "games"
            $table->foreignId('game_id')
                  ->constrained('games') // jika nama tabel game kamu "games"
                  ->onDelete('cascade');
            
            $table->string('name');
            $table->integer('price');
            $table->text('description')->nullable();
            $table->string('thumbnail')->nullable(); // Path ke gambar utama
            $table->json('screenshots')->nullable(); // Array path galeri (JSON)
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
}
