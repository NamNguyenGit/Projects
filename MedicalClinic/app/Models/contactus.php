<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contactus extends Model
{
    use HasFactory;

    protected $table = 'contactus';
    protected $fillable = [
        'id',
        'name',
        'email',
        'messages',
        'status'

    ];
}
