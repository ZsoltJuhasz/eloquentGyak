<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public $timestamps = false;

    // public function course() {
    //     //belongsTo() = a külső kulcsok tartoznak valahova a ::class-al hivatkozunk a Course osztályra
    //     return $this->belongsTo(Course::class); //visszaadjuk a kapcsolatot, saját magunkat kell visszadni
    // }
}
