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
                'id' => 3,
                'potency_category_id' => 3,
                'title' => 'Pemandian Mejono',
                'address' => 'Desa Mejono, Kediri',
                'image' => 'assets/images/home/pemandian_mejono.jpg',
                'created_at' => '2020-10-09 11:19:10',
                'updated_at' => '2020-10-09 11:19:10',
            ),
            1 => 
            array (
                'id' => 4,
                'potency_category_id' => 3,
                'title' => 'Wisata Alam Joho',
                'address' => 'Sumber Podang, Kediri',
                'image' => 'assets/images/home/sumber_podang.jpg',
                'created_at' => '2020-11-01 14:56:24',
                'updated_at' => '2020-11-01 14:56:24',
            ),
            2 => 
            array (
                'id' => 5,
                'potency_category_id' => 3,
                'title' => 'Kampung Indian',
                'address' => 'Sempu Ngancar, Kediri',
                'image' => 'assets/images/home/kampung_indian.jpg',
                'created_at' => '2020-11-01 14:57:05',
                'updated_at' => '2020-11-01 14:57:05',
            ),
        ));
        
        
    }
}