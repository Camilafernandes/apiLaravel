<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
            'name'  =>  'Maria da Silva',
            'email' => 'mariasilva1830@gmail.com',
            'phone' => '1144445555',
            'cel'   => '1199998888',
            'gender'=> 'feminino',
            'dob'   => '1830-01-01',
       ]);
       DB::table('users')->insert([
            'name'  =>  'Luiza da Silva',
            'email' => 'luizadasilva1930@gmail.com',
            'phone' => '1144445555',
            'cel'   => '1199998888',
            'gender'=> 'feminino',
            'dob'   => '1930-01-01',
       ]);
       DB::table('users')->insert([
            'name'  =>  'Jose Pereira',
            'email' => 'josepereira15@hotmail.com',
            'phone' => '1144443333',
            'cel'   => '1199977777',
            'gender'=> 'masculino',
            'dob'   => '1832-01-15',
       ]);
       DB::table('users')->insert([
            'name'  =>  'Joao dos Santos',
            'email' => 'joaodsantos@gmail.com',
            'phone' => '1144443338',
            'cel'   => '1199977775',
            'gender'=> 'masculino',
            'dob'   => '1832-01-25',
       ]);
    }
}
