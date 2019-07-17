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
            'name' => 'Bernard',
            'picture' => '',
            'tatoo' => 0,
            'microship' => 1,
            'status_id_fk' => 2,
            'color_id_fk' => 1,
            'size_id_fk' => 1,
            'fur_size_id_fk' => 3,
            'gender_id_fk' => 1,
            'age_id_fk' => 1,
            'race_id_fk' => 2,
            'color_eyes_id_fk' => 5,
        ]);
    }
}
