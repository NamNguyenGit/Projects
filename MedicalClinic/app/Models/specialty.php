<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class specialty extends Model
{
    use HasFactory;

    protected $table = 'specialty';
    protected $fillable = [
        'id',
        'name',
        'specializing'

    ];
}
