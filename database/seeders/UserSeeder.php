<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder {
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run() {    	 
        $email = 'admin@teste.com.br';
        $user = DB::table('users')->where('email', '=', $email)->first();
        if (empty($user)) {
            DB::table('users')->insert([
                'name' => 'Administrador',
                'email' => $email,
                'password' => Hash::make('1234')
            ]);
        }
        
        // Adicionar no método run() da classe DatabaseSeeder a seguinte chamada:
    	/**
    	
    	$this->call([
            UserSeeder::class
        ]);
    	
    	 */
    	
    	// Rodar o comando:
		// php artisan migrate --seed
    }
}
