<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Order;
use App\Models\Plate;
use App\User;
use Illuminate\Support\Arr;


class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $users = User::all();
        foreach ($users as $user) {
            $plates = Plate::where('user_id', $user->id)->pluck('id')->toArray();
            for ($i = 0; $i < 5; $i++) {
                $new_order = new Order();
                $new_order->name = $faker->firstName();
                $new_order->surname = $faker->lastName();
                $new_order->address = $faker->streetAddress();
                $new_order->phone = $faker->phoneNumber();
                $new_order->mail = $faker->email();
                $new_order->total = 0;
                $new_order->save();

                for ($q = 0; $q < 3; $q++) $new_order->plates()->attach(Arr::random($plates), ['quantity' => rand(1, 5)]);

                foreach ($new_order->plates as $plate) {
                    $new_order->total += $plate->price * $plate->pivot->quantity;
                }

                $new_order->save();
            }
        }
    }
}
