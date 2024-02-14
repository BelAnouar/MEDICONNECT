<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialitie extends Model
{
    use HasFactory;
    protected $fillable = ["name"];


    public function doctors()
    {
        $this->hasMany(Doctor::class, "specialitie_id");
    }
}
