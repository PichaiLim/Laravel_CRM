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
//        factory(SocialContactedTableSeeder::class, 1)->create();
        DB::table('social_contacted')->insert([
            'url'=>'#',
            'title'=>'',
        ]);
    }
}
