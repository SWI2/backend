<?php

use Illuminate\Database\Seeder;
use \App\Malfunction;

class MalfunctionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Malfunction::class, 100)->create();
    }
}
