<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            array('people_name' => '汤姆.汉克斯', 'people_location' => '美国', 'people_birth' => '1960-02-06'),
            array('people_name' => '皮特', 'people_location' => '美国', 'people_birth' => '1970-05-03'),
            array('people_name' => '安吉利娜', 'people_location' => '美国', 'people_birth' => '1963-02-02'),
            array('people_name' => '莱昂纳多', 'people_location' => '美国', 'people_birth' => '1969-02-26'),
            array('people_name' => '贝尔', 'people_location' => '美国', 'people_birth' => '1980-03-16')
           
        );
        
        DB::table('people')->insert($data);
    }
}
