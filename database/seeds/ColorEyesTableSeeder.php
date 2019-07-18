<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorEyesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('color_eyes')->insert([
            ['label' => 'Bleu'],
            ['label' => 'Vert'],
            ['label' => 'Marron'],
            ['label' => 'Jaune'],
            ['label' => 'Rouge'],
            ['label' => 'Noir'],
            ['label' => 'Vairon (bicolore)']
        ]);
    }
}
