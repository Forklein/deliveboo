<?php

use Illuminate\Database\Seeder;
use FakerRestaurant\Provider\en_US\Restaurant as Faker;
use App\Models\Plate;

class PlatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $new_plate = new Plate();
        $new_plate->user_id = '1';
        $new_plate->name = $faker->foodName();
        $new_plate->ingredients = 'ingrediente di test';
        $new_plate->description = 'descrizione di test';
        $new_plate->course = 'portata di test';
        $new_plate->price = '9.99';
        $new_plate->visibility = true;

        $new_plate->save();

        $new_plate = new Plate();
        $new_plate->user_id = '2';
        $new_plate->name = $faker->foodName();
        $new_plate->ingredients = 'ingrediente di test';
        $new_plate->description = 'descrizione di test';
        $new_plate->course = 'portata di test';
        $new_plate->price = '9.99';
        $new_plate->visibility = false;

        $new_plate->save();

    }
}
