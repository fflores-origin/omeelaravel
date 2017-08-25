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
        $this->users();
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

    private function users() {
    	DB::table('users')->insert([
            'name' => 'admin',
            'password' => bcrypt('Novedad.2017'),
            'email' => 'pachu.flores@gmail.com',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }

    private function paises() {
        
    }

}
