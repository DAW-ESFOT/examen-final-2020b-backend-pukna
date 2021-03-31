<?php
namespace Database\Seeders;

use App\Product;
use App\Supplier;
use Illuminate\Database\Seeder;
use Tymon\JWTAuth\Facades\JWTAuth;


class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vaciamos la tabla categories
        Supplier::truncate();
        $faker = \Faker\Factory::create();

        $users = \App\User::all();

        foreach ($users as $user) {
            // iniciamos sesión con este usuario
            JWTAuth::attempt(['email' => $user->email, 'password' => '123123']);

            // Y ahora con este usuario creamos algunos articulos
            for ($i = 0; $i < 6; $i++) {
                Supplier::create([
                    'name' => $faker->word,
                    'registered_by' => $faker->numberBetween(1, 10),

                ]);
            }


        }


    }
}
