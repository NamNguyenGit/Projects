<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    use HasFactory;
    protected $table = 'appointment';
    protected $fillable = [
        'id',
        'patient_id',
        'phone',
        'date',
        'symptom',
        'service_id',
        'price',
        'status'
    ];

    public function joinsevice()
    {
        return $this->hasOne(service::class, 'id', 'service_id');
    }

    public function joinpatient()
    {
        return $this->hasOne(patient::class, 'id', 'patient_id');
    }
}
