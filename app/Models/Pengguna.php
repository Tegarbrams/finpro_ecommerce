<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    //
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'email', 'password', 'nama', 'role', 'last_login',
    ];

    protected $hidden = ['password'];
    public $timestamps = false;
}
