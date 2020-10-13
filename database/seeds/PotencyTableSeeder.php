<?php

use Illuminate\Database\Seeder;

class PotencyTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('potency')->delete();
        
        \DB::table('potency')->insert(array (
            0 => 
            array (
                'id' => 1,
                'potency_category_id' => 3,
                'title' => 'Eaque voluptate moll',
                'address' => 'Laboriosam expedita',
                'image' => 'assets/images/home/banner2.jpg',
                'created_at' => '2020-10-09 08:21:37',
                'updated_at' => '2020-10-09 08:21:37',
            ),
            1 => 
            array (
                'id' => 3,
                'potency_category_id' => 3,
                'title' => 'Pemandian Mejono',
                'address' => 'Desa Mejono, Kediri',
                'image' => 'assets/images/home/pemandian_mejono.jpg',
                'created_at' => '2020-10-09 11:19:10',
                'updated_at' => '2020-10-09 11:19:10',
            ),
        ));
        
        
    }
}