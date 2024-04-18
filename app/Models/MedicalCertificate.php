<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalCertificate extends Model
{
    use HasFactory;
    protected $fillable = [
        'PatientID',
        'DoctorID',
        'ConsultationDate',
        'NumberOfDaysRecomended'
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
