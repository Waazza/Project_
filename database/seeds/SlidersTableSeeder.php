<?php

use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
          'photo'=> url('https://images.theconversation.com/files/258653/original/file-20190213-90479-63gvhy.jpg?ixlib=rb-1.1.0&q=45&auto=format&w=496&fit=clip'),
          'name'=> Str::random(10),
          'desc'=> Str::random(60),
          'timestamp'=> '',
        ]);
        $this->call(SlidersTableSeeder::class);
    }
}
