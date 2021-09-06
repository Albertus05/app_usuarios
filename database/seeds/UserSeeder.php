<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users')->insert([
            'name' => 'alejandro arriaza',
            'email' => 'arri.54@gmail.com',
            'password' => bcrypt('Arriaza2021'),
            'profession_id' => '3'
        ]);

        DB::table('users')->insert([
            'name' => 'felipe salazar',
            'email' => 'fesal.lio@gmail.com',
            'password' => bcrypt('Fe125'),
            'profession_id' => '3'
        ]);

        DB::table('users')->insert([
            'name' => 'Karla menjivar',
            'email' => 'menjivar.karla@gmail.com',
            'password' => bcrypt('K2021$'),
            'profession_id' => '3'
        ]);


        DB::table('users')->insert([
            'name' => 'Kenia martinez',
            'email' => 'kf.20@gmail.com',
            'password' => bcrypt('Amlo54'),
            'profession_id' => '3'
        ]);

        DB::table('users')->insert([
            'name' => 'Rodrigo villacorta',
            'email' => 'Rv.ATENCION@gmail.com',
            'password' => bcrypt('R3052'),
            'profession_id' => '3'
        ]);

        DB::table('users')->insert([
            'name' => 'Daniela moran',
            'email' => 'Dany.style@gmail.com',
            'password' => bcrypt('Dan129$$%'),
            'profession_id' => '3'
        ]);

        DB::table('users')->insert([
            'name' => 'Jose martinez',
            'email' => 'chepe.2021@gmail.com',
            'password' => bcrypt('jc##'),
            'profession_id' => '3'
        ]);

        DB::table('users')->insert([
            'name' => 'Rene linares',
            'email' => 'renematch.@gmail.com',
            'password' => bcrypt('Renes14$'),
            'profession_id' => '3'
        ]);

        DB::table('users')->insert([
            'name' => 'Gabriela sophia',
            'email' => 'Sopy@gmail.com',
            'password' => bcrypt('GS23'),
            'profession_id' => '3'
        ]);

        DB::table('users')->insert([
            'name' => 'Angela pineda',
            'email' => 'Pangela@gmail.com',
            'password' => bcrypt('titos123'),
            'profession_id' => '3'
        ]);










        
    }
}
