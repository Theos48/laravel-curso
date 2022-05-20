<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    // Asignamos los campos que queremos permitir que se guarden
    // protected $fillable = ['name', 'descripcion', 'categoria'];
    //guarded = Asignamos los campos protegidos para que no se guarden
    protected $guarded = [''];

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
