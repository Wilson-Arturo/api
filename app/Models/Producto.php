<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';

    protected $fillable = [
        'producto'
        ,'existencias'
        ,'precio_unitario'
        ,'fotografia'
        ,'descripcion'
        ,'estatus'
        ,'tasa_iva'
    ];

    //reglas de validacion
    public static function reglas(){
        return[
        'producto' => 'required|max:45'
        ,'existencias' => 'required|integer|min:0'
        ,'precio_unitario' => 'required|numeric|min:0'
        ,'fotografia' => 'required|max:45'
        ,'descripcion' => 'required|max:1000'
        ,'estatus' => 'required|in:Activo,Inactivo'
        ,'tasa_iva' => 'required|numeric|min:0'
        ];
    }
}
