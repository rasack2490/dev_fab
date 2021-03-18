<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class HoraireTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('horaires')->insert([
            ['id_horaire'=>1, 'heur_reserve' => '09:00/13:00' ],
            ['id_horaire'=>2, 'heur_reserve' => '14:00/22:00' ],
        ]);
    }
}
