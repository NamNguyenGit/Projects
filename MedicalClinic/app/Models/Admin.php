<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'id',
        'name',
        'username',
        'email',
        'password',
        'remember_token',
        'created_at',
        'updated_at'
    ];
}
