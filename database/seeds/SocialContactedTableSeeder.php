<?php

use Illuminate\Database\Seeder;

class SocialContactedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('social_contacted')->insert([
            'url'=>'https://www.facebook.com',
            'title'=>'facebook',
            'created_at'=> new DateTime('now'),
            'updated_at'=>new DateTime('now')
        ]);
    }
}
