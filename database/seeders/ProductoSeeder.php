<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert([
          [
            'producto'=> 'Agua 1lt'
            ,'existencias'=> 15
            ,'precio_unitario'=> 12.5
            ,'fotografia'=> 'agua.jpg'
            ,'descripcion'=> 'agua pura baja en sales'
            ,'estatus'=> 'Activo'
            ,'tasa_iva'=> 16
            ,'created_at'=> '2021-11-19 09:19'
            ,'updated_at'=> '2021-11-19 09:19'
          ]
          , [
            'producto'=> 'Leche deslactosada 1.5 lts'
            ,'existencias'=> 56
            ,'precio_unitario'=> 32
            ,'fotografia'=> 'leche.jpg'
            ,'descripcion'=> 'Leche deslactosada 100% origen animal'
            ,'estatus'=> 'Activo'
            ,'tasa_iva'=> 16
            ,'created_at'=> '2021-11-19 09:19'
            ,'updated_at'=> '2021-11-19 09:19'
          ]
        ]);
    }
}
