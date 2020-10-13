<?php

use Illuminate\Database\Seeder;

class NewsCategoryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('news_category')->delete();
        
        \DB::table('news_category')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Politik',
                'created_at' => '2020-10-07 02:38:12',
                'updated_at' => '2020-10-07 02:38:12',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Kesehatan',
                'created_at' => '2020-10-07 02:39:09',
                'updated_at' => '2020-10-07 02:39:09',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Sejarah',
                'created_at' => '2020-10-07 02:40:01',
                'updated_at' => '2020-10-07 02:40:01',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Pertanian',
                'created_at' => '2020-10-07 12:12:14',
                'updated_at' => '2020-10-07 12:12:14',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Budaya',
                'created_at' => '2020-10-07 16:35:50',
                'updated_at' => '2020-10-07 16:35:50',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Masyarakat',
                'created_at' => '2020-10-07 16:36:29',
                'updated_at' => '2020-10-07 16:36:29',
            ),
        ));
        
        
    }
}