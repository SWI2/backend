<?php

use Illuminate\Database\Seeder;
use \App\CarModel;

class CarModelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = CarModel::all()->count();
        if ($count == 0) {
            DB::table('car_models')->delete();

            $carModelsFakeData = [
                ['id' => 1, 'name' => 'Tesla Model S P90', 'fuel_type' => 3, 'gear' => 1, 'number_of_seats' => 5, 'car_type' => 0, 'power' => 310],
                ['id' => 2, 'name' => 'Tesla Model Y', 'fuel_type' => 3, 'gear' => 1, 'number_of_seats' => 7, 'car_type' => 0, 'power' => 310],
                ['id' => 3, 'name' => 'Skoda Superb iV', 'fuel_type' => 3, 'gear' => 1, 'number_of_seats' => 5, 'car_type' => 0, 'power' => 115],
                ['id' => 4, 'name' => 'Volkswagen Passat 2.0 TSI', 'fuel_type' => 0, 'gear' => 1, 'number_of_seats' => 5, 'car_type' => 0, 'power' => 200],
                ['id' => 5, 'name' => 'Volkswagen Passat 2.0 TDI', 'fuel_type' => 1, 'gear' => 1, 'number_of_seats' => 5, 'car_type' => 0, 'power' => 160],
                ['id' => 6, 'name' => 'Volkswagen Tiguan 1.6 TSI', 'fuel_type' => 0, 'gear' => 1, 'number_of_seats' => 5, 'car_type' => 0, 'power' => 120],
                ['id' => 7, 'name' => 'Audi A4 2.0 TFSI', 'fuel_type' => 0, 'gear' => 1, 'number_of_seats' => 5, 'car_type' => 0, 'power' => 110],
                ['id' => 8, 'name' => 'Audi A6 2.0 TDI', 'fuel_type' => 1, 'gear' => 1, 'number_of_seats' => 5, 'car_type' => 0, 'power' => 120],
                ['id' => 9, 'name' => 'Alfa Romeo Giulia GME 2.0', 'fuel_type' => 0, 'gear' => 1, 'number_of_seats' => 5, 'car_type' => 0, 'power' => 160],
                ['id' => 10, 'name' => 'Skoda Octavia RS', 'fuel_type' => 0, 'gear' => 1, 'number_of_seats' => 5, 'car_type' => 0, 'power' => 180],
                ['id' => 11, 'name' => 'Skoda Kodiaq 1.5 TSI', 'fuel_type' => 0, 'gear' => 1, 'number_of_seats' => 5, 'car_type' => 0, 'power' => 110],
                ['id' => 12, 'name' => 'Volkswagen Transporter Kombi 2.0 TDI T6.1', 'fuel_type' => 1, 'gear' => 1, 'number_of_seats' => 8, 'car_type' => 2, 'power' => 81],
                ['id' => 13, 'name' => 'Mercedes Benz Sprinter Worker', 'fuel_type' => 1, 'gear' => 1, 'number_of_seats' => 3, 'car_type' => 2, 'power' => 84],
                ['id' => 14, 'name' => 'Mercedes Benz Vito Worker', 'fuel_type' => 0, 'gear' => 1, 'number_of_seats' => 3, 'car_type' => 2, 'power' => 75],
                ['id' => 15, 'name' => 'Mercedes Benz Truck', 'fuel_type' => 0, 'gear' => 1, 'number_of_seats' => 2, 'car_type' => 1, 'power' => 460],
            ];

            CarModel::insert($carModelsFakeData);
        }

    }
}
