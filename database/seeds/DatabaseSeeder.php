<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->roles();
        $this->users();
        $this->role_user();
    	$this->tipoEscuelas();

    }

    private function tipoEscuelas() {

    	DB::table('tipo_escuelas')->insert([
            'id' => 1,
            'description' => 'OMEE',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('tipo_escuelas')->insert([
            'id' => 2,
            'description' => 'IAP',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }

    private function roles() {
        //1
        DB::table('roles')->insert([
            'key' => 'admin',
            'name' => 'Administrador Web',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]);
        //2
        DB::table('roles')->insert([
            'key' => 'escuela',
            'name' => 'Escuela',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]);
        //3
        DB::table('roles')->insert([
            'key' => 'alumno',
            'name' => 'Alumno',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]);
        //4
        DB::table('roles')->insert([
            'key' => 'imprenta',
            'name' => 'Impresion de Certificados',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
            ]);
    }

    private function users() {
    	DB::table('users')->insert([
            'name' => 'admin',
            'password' => bcrypt('Novedad.2017'),
            'email' => 'pachu.flores@gmail.com',
            'nombre' => 'user',
            'apellido' =>'admin',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('users')->insert([
            'name' => 'imprenta',
            'password' => bcrypt('Imprenta.2017'),
            'email' => 'imprenta@omee.com',
            'nombre' => 'user',
            'apellido' =>'imprenta',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }

    private function role_user()
    {
        DB::table('role_user')->insert([
            'user_id' => 1,
            'role_id' => 1
            ]);

        DB::table('role_user')->insert([
            'user_id' => 2,
            'role_id' => 4
            ]);
    }


}
