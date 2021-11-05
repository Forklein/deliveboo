<?php

use Illuminate\Database\Seeder;
use App\Models\Type;
use Faker\Generator as Faker;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $types = [
            [
                'name' => 'Italian',
                'color' => $faker->hexColor()
            ],
            [
                'name' => 'Chinese',
                'color' => $faker->hexColor()
            ],
            [
                'name' => 'Japanese',
                'color' => $faker->hexColor()
            ],
            [
                'name' => 'American',
                'color' => $faker->hexColor()
            ],
            [
                'name' => 'Indian',
                'color' => $faker->hexColor()
            ],
            [
                'name' => 'Mexican',
                'color' => $faker->hexColor()
            ],
            [
                'name' => 'Fusion',
                'color' => $faker->hexColor()
            ],
        ];

        foreach ($types as $type) {
            $new_type = new Type();
            $new_type->fill($type);
            $new_type->save();
        }
    }
}
