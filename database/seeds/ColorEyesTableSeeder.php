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
            ['color_eyes' => 'Bleu'],
            ['color_eyes' => 'Vert'],
            ['color_eyes' => 'Marron'],
            ['color_eyes' => 'Jaune'],
            ['color_eyes' => 'Rouge'],
            ['color_eyes' => 'Noir'],
            ['color_eyes' => 'Vairon (bicolore)']
        ]);
    }
}
