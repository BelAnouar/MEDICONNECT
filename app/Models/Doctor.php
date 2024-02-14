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
}
