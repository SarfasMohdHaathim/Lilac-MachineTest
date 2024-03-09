<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 30; $i++) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'fk_department' => rand(1, 5),
                'fk_designation' => rand(1, 5),
                'phone_number' => $faker->phoneNumber,
                'created_at' => now(),
            ]);
        }
    }
}
