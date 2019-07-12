<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FurSizesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fur_sizes')->insert([
            ['label' => 'Court'],
            ['label' => 'Moyen'],
            ['label' => 'Long']
        ]);
    }
}
