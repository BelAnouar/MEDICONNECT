<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Query\Builder as QueryBuilder;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'specialitie_id'
    ];

    public function specialitie()
    {
        return $this->belongsTo(Specialitie::class, "specialitie_id");
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function favorites()
    {
        return $this->hasMany(favorite::class, 'doctor_id');
    }

    public function appointments()
    {
        $this->hasMany(appointment::class, "doctor_id");
    }
    public function comments()
    {
        return $this->hasMany(comment::class, 'DoctorID');
    }
    public function MedicalCertificate()
    {
        return $this->hasMany(MedicalCertificate::class, 'DoctorID');
    }


    public function scopeWithAvgRating(Builder $query, $from = null, $to = null): Builder|QueryBuilder
    {
        return $query->withAvg([
            'comments' => fn (Builder $q) => $this->dateRangeFilter($q, $from, $to)
        ], 'Rating');
    }

    private function dateRangeFilter(Builder $query, $from = null, $to = null)
    {
        if ($from && !$to) {
            $query->where('created_at', '>=', $from);
        } elseif (!$from && $to) {
            $query->where('created_at', '<=', $to);
        } elseif ($from && $to) {
            $query->whereBetween('created_at', [$from, $to]);
        }
    }
}
