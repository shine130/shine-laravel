<?php

use Illuminate\Database\Seeder;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            array('movie_title' => '冰血暴'),
            array('movie_title' => '盗梦空间'),
            array('movie_title' => '机器人总动员')
        );

        DB::table('movies')->insert($data);

    }
}
