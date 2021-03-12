<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('days')->insert([
            ['id_day'=>1, 'jours' => 'lundi','places'=> 25 ],
            ['id_day'=>2, 'jours' => 'mardi','places'=> 25 ],
            ['id_day'=>3, 'jours' => 'mercredi','places'=> 25 ],
            ['id_day'=>4, 'jours' => 'jeudi','places'=> 25 ],
            ['id_day'=>5, 'jours' => 'vendredi','places'=> 25 ],
            ['id_day'=>6, 'jours' => 'samedi','places'=> 25 ],
            ['id_day'=>7, 'jours' => 'dimanche','places'=> 25 ]
        ]);
    }
}
