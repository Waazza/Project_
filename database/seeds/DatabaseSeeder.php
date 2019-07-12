<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TypesTableSeeder::class);
        $this->call(AgesTableSeeder::class);
        $this->call(SizesTableSeeder::class);
        $this->call(FurSizesTableSeeder::class);
        $this->call(StatusTableSeeder::class);
        $this->call(GendersTableSeeder::class);
        $this->call(ColorsTableSeeder::class);
        $this->call(RacesTableSeeder::class);
        $this->call(ColorEyesTableSeeder::class);
    }
}
