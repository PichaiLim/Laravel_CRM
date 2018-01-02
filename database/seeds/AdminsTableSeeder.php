<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $countAdmin = (int)20;

        //
        factory(\Pichai\Admins::class, $countAdmin)->create();

        for ($roleUser = 1; $roleUser <= $countAdmin; $roleUser++) {
            DB::table('role_user')->insert([
                'role_id' => random_int(1,2),
                'user_id' => $roleUser,
                'created_at' => $faker->dateTime($max = 'now', $timezone = null),
                'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
            ]);
        }
    }
}
