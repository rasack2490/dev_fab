<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Users')->insert([
            ['id_user'=>1, 'nom' => 'admin','prenom'=> 'admin', 'email' =>'admin@admin.com', 'password' => bcrypt('admin'), 'matricule' =>'B0454789', 'numero'=>'64474444', 'role' =>true , 'registed'=> true]

        ]);
    }
}
