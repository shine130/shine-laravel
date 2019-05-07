<?php

use Illuminate\Database\Seeder;

class MoviePeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            array('people_id' => '1', 'movie_id' => '1', 'job' => '演员'),
            array('people_id' => '2', 'movie_id' => '1', 'job' => '演员'),
            array('people_id' => '3', 'movie_id' => '1', 'job' => '演员'),
            array('people_id' => '4', 'movie_id' => '1', 'job' => '演员')
           
        );
        
        DB::table('movie_people')->insert($data);
    }
}
