<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'doctor_id', 'status'
    ];

    public function doctor()
    {
        $this->belongsTo(Doctor::class, 'id');
    }
}
