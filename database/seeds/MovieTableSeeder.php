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
            array('movie_title' => '阿甘正传','movie_content' => '阿甘正传评论内容', 'movie_budget' => 55000000, 'movie_date' => '1994-06-23'),
            array('movie_title' => '盗梦空间','movie_content' => '盗梦空间评论内容','movie_budget' => 160000000, 'movie_data' => '2010-07-16'),
            array('movie_title' => '机器人总动员','movie_content' => '机器人总动员评论内容','movie_budget' => 180000000, 'movie_data' => '2008-06-27'),
            array('movie_title' => '海洋','movie_content' => '海洋评论内容','movie_budget' => 50000000, 'movie_data' => '2010-01-27'),
            array('movie_title' => '海上钢琴师','movie_content' => '海上钢琴师评论内容','movie_budget' => 9000000, 'movie_data' => '1998-10-28'),
            array('movie_title' => '黑暗骑士','movie_content' => '黑暗骑士评论内容','movie_budget' => 185000000, 'movie_data' => '2008-07-18')
        );

        DB::table('movies')->insert($data);

    }
}
