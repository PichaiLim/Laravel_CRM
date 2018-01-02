<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class SocialContactedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        DB::table('social_contacted')->insert([
            'url' => 'https://www.facebook.com',
            'title' => 'facebook',
            'created_at' => $faker->dateTime($max = 'now', $timezone = null),
            'updated_at' => $faker->dateTime($max = 'now', $timezone = null)
        ]);
    }
}
