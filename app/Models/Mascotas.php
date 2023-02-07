<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascotas extends Model


{
    
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'codigo_mascota';
    protected $fillable= ['codigo_mascota','nombre_mascota','tipo_mascota','documentoid'];
}
