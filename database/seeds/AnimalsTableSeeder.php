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
            'name' => 'Serana',
            'picture' => 'https://media.wtsp.com/assets/WTSP/images/594410341/594410341_750x422.jpg',
            'tatoo' => 0,
            'microship' => 1,
            'status_id_fk' => 2,
            'color_id_fk' => 1,
            'size_id_fk' =>2,
            'fur_size_id_fk' => 3,
            'gender_id_fk' => 1,
            'age_id_fk' => 2,
            'race_id_fk' => 2,
            'color_eyes_id_fk' => 2,
        ]
      );
    }
}
