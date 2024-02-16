<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'specialitie_id'
    ];

    public function specialitie()
    {
        return $this->belongsTo(Specialitie::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function appointments()
    {
        $this->hasMany(appointment::class, "doctor_id");
    }
    public function comments()
    {
        $this->hasMany(comment::class, "DoctorID");
    }
}
