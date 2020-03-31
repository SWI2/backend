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
        $this->call([
            UsersTableSeeder::class,
            CustomerTableSeeder::class,
            CarModelsTableSeeder::class,
            CarTableSeeder::class,
            ImagesTableSeeder::class,
            MalfunctionsTableSeeder::class,
            ReservationsTableSeeder::class,
            FilesTableSeeder::class
        ]);
    }
}
