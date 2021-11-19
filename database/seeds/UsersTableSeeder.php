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
                'restaurant_name' => 'Dal genovese',
                'vat' => '12345678912',
                'address' => 'Via del genovese',
                'zip' => '21137',
                'phone' => '3333333331',
                'image' => 'https://www.umberto.it/wp-content/uploads/2018/11/RISTORANTE-UMBERTO-%C3%A8-UNA-TAPPA-del-MONOPOLY-NAPOLI-2.png'
            ],
            [
                'name' => 'Giuseppe',
                'email' => 'dalpugliese@live.it',
                'password' => bcrypt('password'),
                'restaurant_name' => 'Dal pugliese',
                'vat' => '55566699954',
                'address' => 'Via del pugliese',
                'zip' => '21137',
                'phone' => '3333333332',
                'image' => 'https://i.ibb.co/26JzDpz/124689152-116276153619835-6658681031194173572-n.png'

            ],
            [
                'name' => 'Alfonso',
                'email' => 'dalfonso@live.it',
                'password' => bcrypt('password'),
                'restaurant_name' => 'Da Alfonso',
                'vat' => '55566199954',
                'address' => 'Via di Alfonso',
                'zip' => '21137',
                'phone' => '3333333333',
                'image' => 'https://lirp.cdn-website.com/0912aaa6/dms3rep/multi/opt/Logo-174w.png'

            ],
            [
                'name' => 'Marco',
                'email' => 'ilbarbatrucco@live.it',
                'password' => bcrypt('password'),
                'restaurant_name' => 'Il Barbatrucco',
                'vat' => '55516699954',
                'address' => 'Via del barbatrucco',
                'zip' => '21137',
                'phone' => '3333335100',
                'image' => 'https://media-cdn.tripadvisor.com/media/photo-s/0d/34/6c/c6/getlstd-property-photo.jpg'
            ],
            [
                'name' => 'Pasquale',
                'email' => 'dalnapoletano@live.it',
                'password' => bcrypt('password'),
                'restaurant_name' => 'Bella Napoli',
                'vat' => '5156669995',
                'address' => 'Via Napoli',
                'zip' => '21137',
                'phone' => '3333335588',
                'image' => 'https://www.bellanapolilignano.info/wp-content/uploads/2018/10/bella-napoli-1.png'
            ],
            [
                'name' => 'Eugenio',
                'email' => 'ilgenio@live.it',
                'password' => bcrypt('password'),
                'restaurant_name' => 'Ristogenius',
                'vat' => '55561298854',
                'address' => 'Via del genio',
                'zip' => '21137',
                'phone' => '3334133550',
                'image' => 'https://ristoacademy.it/wp-content/uploads/2021/07/RISTOGENIUS-LOGO-bn.png'
            ],
            [
                'name' => 'Frank',
                'email' => 'frank@live.it',
                'password' => bcrypt('password'),
                'restaurant_name' => 'Da Frank',
                'vat' => '52261899995',
                'address' => 'Via di Frank',
                'zip' => '21137',
                'phone' => '3334163550',
                'image' => 'https://pizzeriafrank.it/wp-content/uploads/2020/05/logo-frank.png'
            ],
            [
                'name' => 'Chung',
                'email' => 'xuan@live.it',
                'password' => bcrypt('password'),
                'restaurant_name' => 'Xuan',
                'vat' => '55571299954',
                'address' => 'Via della seta',
                'zip' => '21137',
                'phone' => '3334133588',
                'image' => 'https://lh3.googleusercontent.com/-9l9A01-22tIcnGyliIupCbF7qChLejD5B8k5Bg_VyxWryFJ2urQFmFssCJvieThO8TeFFtEnvmPMFPv=w1080-h608-p-no-v0'
            ],
            [
                'name' => 'Filippo',
                'email' => 'pippo@live.it',
                'password' => bcrypt('password'),
                'restaurant_name' => 'Pizzeria Namek',
                'vat' => '55561200054',
                'address' => 'Via Namek',
                'zip' => '21137',
                'phone' => '33341893550',
                'image' => 'https://i.ibb.co/DWYrDWg/20506989-123062131659736-760641137862062055-o.jpg'
            ],
            [
                'name' => 'Tanaka',
                'email' => 'tanaka@live.it',
                'password' => bcrypt('password'),
                'restaurant_name' => 'Toshi',
                'vat' => '55560099954',
                'address' => 'Via Giappone',
                'zip' => '21137',
                'phone' => '3332003500',
                'image' => 'https://menu.sluurpy.it/menu-nuovi/4924/4924/miniatura.jpg'
            ]
        ];

        $types = Type::pluck('id')->toArray();

        foreach ($restaurants as $restaurant) {
            $new_user = new User();
            $new_user->fill($restaurant);
            $new_user->save();
            $new_user->types()->attach(Arr::random($types, 2));
        }

        // for ($i = 0; $i < 13; $i++) {
        //     $new_user = new User();
        //     $new_user->name = $faker->name();
        //     $new_user->email = $faker->email();
        //     $new_user->password = bcrypt($faker->word());
        //     $new_user->restaurant_name = $faker->words(2, true);
        //     $new_user->vat = $faker->randomNumber(9, true);
        //     $new_user->address = $faker->address();
        //     $new_user->zip = $faker->randomNumber(5, true);
        //     $new_user->phone = $faker->phoneNumber();
        //     $new_user->save();
        //     $new_user->types()->attach(Arr::random($types, 2));
        // }
    }
}
