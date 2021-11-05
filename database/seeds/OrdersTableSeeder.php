<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Order;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 10; $i++) {
            $new_order = new Order();
            $new_order->name = $faker->firstName();
            $new_order->surname = $faker->lastName();
            $new_order->address = $faker->streetAddress();
            $new_order->phone = $faker->phoneNumber();
            $new_order->mail = $faker->email();
            $new_order->total = 2.30;
            $new_order->save();
        }
    }
}
