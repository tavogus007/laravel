<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $table = "notes";

    // cuando queremos que estos campo sean cumplimentados
    protected $fillable = [
        "title",
        "descrpition",
        "deadline",
        "done"
    ];

    /*
        es el contrario a fillable, declaras los campos NO cumplimentados o protegidos
        No es necesario definir ambos. Definir $fillable hace que en $guarded entren los demas
    */
    // protected $guarded =

    // Podemos forzar que ciertos campos tengan comportamiento diferente
    protected $casts = [
        "deadline" => "date"
    ];

    // para informacion sensible que no queremos que sea visible
    protected $hidden = ["password"];
}


/*
En el controlador (mas adelante)

$note = new Note();
$note->title = "Hello world";
$note->description = "lorem";

Note::get()
*/
