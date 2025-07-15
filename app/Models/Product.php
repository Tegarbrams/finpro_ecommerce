<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'game_id', 'name', 'price', 'description', 'thumbnail', 'screenshots'
    ];
    
    protected $casts = [
        'screenshots' => 'array', // supaya Laravel tahu ini array JSON
    ];

    public function game()
    {
        return $this->belongsTo(Game::class);
    }
}
