<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('usuarios')->insert([
            'username' => 'yara',
            'password' => Hash::make('123456'),
            're-password' => ('123456'),
            'nombre' => 'Yajahira Alt.',
            'apellido' => 'MariÃ±ez Lara',
            'email' => 'oceandg@gmail.com',
            'doc_identidad' => '001-1375157-2',
            'telefono' => '809-338-2100',
            'celular' => '809-327-2100',
            'calle' => 'Av. / calle A',
            'edificio' => 'No. 7\', \'Edif. ',
            'apto' => 'Apto. No. ',
            'sector' => 'Sector. Libertador',
            'provincia' => '2',
            'nombre_sec' => '',
            'apellido_sec' => '',
            'doc_identidad_sec' => '',
            'fecha_nacimiento' => '0000-00-00',
            'foto' => '',
            'zona' => '0',
            'categoria' => '0',
            'nombre_tutor' => '',
            'apellido_tutor' => '',
            'nickname' => '',
            'activo' => '1',

        ]);

        Model::reguard();
    }
}
