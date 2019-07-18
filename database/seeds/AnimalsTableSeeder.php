<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnimalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('animals')->insert([
            'name' => 'Léopold',
            'picture' => '',
            'tatoo' => 1,
            'microship' => 0,
            'status_id_fk' => 2,
            'color_id_fk' => 3,
            'size_id_fk' => 1,
            'fur_size_id_fk' => 2,
            'gender_id_fk' => 1,
            'age_id_fk' => 1,
            'race_id_fk' => 1,
            'color_eyes_id_fk' => 1,
        ]);
    }
}
