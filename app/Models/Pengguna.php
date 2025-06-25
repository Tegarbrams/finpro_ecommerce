<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengguna extends Authenticatable
{
    use HasFactory;
    
    protected $table = 'users';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'name',
        'email',
        'password', 
        'role',
        'email_verified_at',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    // Accessor untuk konsistensi dengan kode lama
    public function getIdUserAttribute()
    {
        return $this->id;
    }

    public function getNamaAttribute()
    {
        return $this->name;
    }

    public function getLevelUserAttribute()
    {
        return $this->role;
    }

    // Mutator untuk konsistensi
    public function setNamaAttribute($value)
    {
        $this->attributes['name'] = $value;
    }

    // Scope untuk filter berdasarkan role
    public function scopeAdmin($query)
    {
        return $query->where('role', 'admin');
    }

    public function scopeUser($query)
    {
        return $query->where('role', 'user');
    }

    public function scopePembeli($query)
    {
        return $query->where('role', 'user'); // Karena 'pembeli' = 'user' di database
    }
}