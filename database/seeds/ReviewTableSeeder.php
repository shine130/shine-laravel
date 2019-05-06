<?php

use Illuminate\Database\Seeder;

class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            array('review_content' => '他是一个占据着成年人躯体的幼童、一个圣贤级的傻子、一个超越真实的普通人、一个代表着民族个性的小人物。', 'review_rate' => 9, 'movie_id' => 1),
            array('review_content' => '本片被定义为“发生在意识结构内的当代动作科幻片”，诺兰继《黑暗骑士》后再次给我们带来惊喜，带观众游走于梦境与现实之间。', 'review_rate' => 8, 'movie_id' => 2),
            array('review_content' => 'WALL·E已经在地球上孤独地生活几百年了，他爱上了自己遇见的第一个机器人伊芙，并跟随着她展开了一场充满奇幻的太空之旅。', 'review_rate' => 9, 'movie_id' => 3),
            array('review_content' => '法国导演雅克·贝汉与雅克·克鲁佐德深入探索这个覆盖着地球表面的四分之三的“蓝色领土”，完整地呈现海洋的壮美辽阔。', 'review_rate' => 9, 'movie_id' => 4 ),
            array('review_content' => '一名具有钢琴天赋的孤儿历经一切的苦难：音乐、爱情及两次大战，但他从未放弃过他生长的地方。一部荡气回肠的诗意旅程电影。', 'review_rate' => 8, 'movie_id' => 5 ),
            array('review_content' => '继续以拯救生命、打击犯罪为己任的“蝙蝠侠”，遭遇到了最具威胁性的对手“小丑”，一个喜欢将自己的脸上涂满了油彩的犯罪专家。', 'review_rate' => 8, 'movie_id' => 6 )
        );
        
        DB::table('reviews')->insert($data);
    }
}
