<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
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

        foreach ($restaurants as $restaurant) {
            $new_user = new User();
            $new_user->fill($restaurant);
            $new_user->save();
        }
    }
}
