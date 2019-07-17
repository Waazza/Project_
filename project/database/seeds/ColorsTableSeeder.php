<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colors')->insert([
            ['label' => 'Blanc'],
            ['label' => 'Noir'],
            ['label' => 'Roux'],
            ['label' => 'Gris'],
            ['label' => 'Bleu/gris'],
            ['label' => 'Sable'],
            ['label' => 'Chocolat'],
            ['label' => 'Creme']
        ]);
    }
}
