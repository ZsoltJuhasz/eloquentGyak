<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function student()
    {
        return $this->hasManyThrough(Student::class, Course::class);
        //első paraméter át kell adni melyik modell adatait várjuk, másodiknak azt, hogy min kell keresztül menni hogy elérjem a kívánt választ
        //hasMany() az az ahol nincsenek külső kulcsok ez adja
        //belongsTo() itt vannak a külső kulcsok
        //mivel át kell mennem itt ezért kell a hasManyThrough()
    }

    public function teacher()
    {
        //több a többhöz kapcsolat van
        //külső kulcs az egy valahova tartozás ezért belongsTo()
        //sok helyre tartozik egy kulcs
        return $this->belongsToMany(Teacher::class);
    }
}
