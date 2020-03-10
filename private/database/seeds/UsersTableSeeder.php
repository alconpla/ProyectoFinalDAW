<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for($i = 0; $i <= 15; $i++){
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'tipo' => $faker->randomElement(['visitante', 'admin', 'tecnico']),
                'email_verified_at' => now(),
                'password' => Str::random(8),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
            ]);
        }
    }
}
