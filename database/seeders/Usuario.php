<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Usuario extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*Datos Usuario*/
        DB::table('usuarios')->insert([
            'id' => 1,
            'email' => 'diego@gmail.com',
            'nombre' => 'diego',
            'apellido' => 'montesdeoca',
            'password' => bcrypt('123456789A'),
            'telefono' => '1000000001',
            'fechaNacimiento' => '1993-01-01',
            'direccion' => 'Azuay Cuenca',
            'rol' => 'Administrador',
        ]);
    }
}
