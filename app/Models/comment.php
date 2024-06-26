<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'PatientID',
        'DoctorID',
        'Rating',
        'Comment',
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'DoctorID');
    }

    public function patient()
    {
        return $this->belongsTo(User::class, 'PatientID');
    }
}
