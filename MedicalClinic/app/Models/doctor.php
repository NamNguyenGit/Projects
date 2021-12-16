<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
    use HasFactory;

    protected $table = 'doctor';
    protected $fillable = [
        'id',
        'name',
        'specialty_id',
        'experience',
        'image'

    ];

    public function joinspecialty()
    {
        return $this->hasOne(specialty::class, 'id', 'specialty_id');
    }
}
