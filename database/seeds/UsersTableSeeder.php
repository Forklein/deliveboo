<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\User;
use App\Models\Type;
use Illuminate\Support\Arr;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $restaurants = [
            [
                'name' => 'Mirko',
                'email' => 'dalgenovese@live.it',
                'password' => bcrypt('password'),
                'restaurant_name' => 'dal genovese',
                'vat' => '12345678912',
                'address' => 'via del genovese',
                'zip' => '21137',
                'phone' => '3333335555'
            ],
            [
                'name' => 'Giuseppe',
                'email' => 'dalpugliese@live.it',
                'password' => bcrypt('password'),
                'restaurant_name' => 'dal pugliese',
                'vat' => '55566699954',
                'address' => 'via del pugliese',
                'zip' => '70043',
                'phone' => '3333335500'
            ]
        ];

        $types = Type::pluck('id')->toArray();

        foreach ($restaurants as $restaurant) {
            $new_user = new User();
            $new_user->fill($restaurant);
            $new_user->save();
            $new_user->types()->attach(Arr::random($types));
        }

        for ($i = 0; $i < 8; $i++) {
            $new_user = new User();
            $new_user->name = $faker->name();
            $new_user->email = $faker->email();
            $new_user->password = bcrypt($faker->word());
            $new_user->restaurant_name = $faker->words(2, true);
            $new_user->vat = $faker->randomNumber(9, true);
            $new_user->address = $faker->address();
            $new_user->zip = $faker->randomNumber(5, true);
            $new_user->phone = $faker->phoneNumber();
            $new_user->save();
            $new_user->types()->attach(Arr::random($types));
        }
    }
}
