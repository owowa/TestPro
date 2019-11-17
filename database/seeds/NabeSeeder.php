<?php

use Illuminate\Database\Seeder;

class NabeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Nabe::create([
            'title'=>Str::random(10),
            'content'=>Str::random(20),
            // 'password'=>int::random(4),
        ]);
    }
}
