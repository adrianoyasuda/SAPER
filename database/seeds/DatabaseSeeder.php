<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){
        // $this->call(UsersTableSeeder::class);
        
        DB::insert('INSERT INTO categorias (title) VALUES(?)',
    		array('Tecnologi Analise e Desenvolvimento de Sistemas'));

        DB::insert('INSERT INTO categorias (title) VALUES(?)',
    		array('Meio Ambiente'));

        DB::insert('INSERT INTO categorias (title) VALUES(?)',
    		array('Mecanica'));

        DB::insert('INSERT INTO categorias (title) VALUES(?)',
    		array('Sociais'));

        DB::insert('INSERT INTO categorias (title) VALUES(?)',
    		array('Diversos'));

        DB::insert('INSERT INTO categorias (title) VALUES(?)',
    		array('Memes'));

        DB::insert('INSERT INTO categorias (title) VALUES(?)',
    		array('Outro'));

    }
}
