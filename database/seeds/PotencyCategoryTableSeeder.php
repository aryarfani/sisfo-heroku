<?php

use Illuminate\Database\Seeder;

class PotencyCategoryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('potency_category')->delete();
        
        \DB::table('potency_category')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Perikanan',
                'created_at' => '2020-10-09 08:11:25',
                'updated_at' => '2020-10-09 08:11:25',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Wisata',
                'created_at' => '2020-10-09 08:11:36',
                'updated_at' => '2020-10-09 08:11:36',
            ),
        ));
        
        
    }
}