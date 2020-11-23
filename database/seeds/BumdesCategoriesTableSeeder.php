<?php

use Illuminate\Database\Seeder;

class BumdesCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('bumdes_categories')->delete();
        
        \DB::table('bumdes_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'desa_id' => 1,
                'name' => 'Jasa',
                'created_at' => '2020-11-22 14:58:07',
                'updated_at' => '2020-11-22 14:58:07',
            ),
            1 => 
            array (
                'id' => 2,
                'desa_id' => 1,
                'name' => 'Perdagangan',
                'created_at' => '2020-11-22 14:58:16',
                'updated_at' => '2020-11-22 14:58:16',
            ),
        ));
        
        
    }
}