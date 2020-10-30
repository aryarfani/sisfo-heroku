<?php

use Illuminate\Database\Seeder;

class OjekTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ojek')->delete();
        
        \DB::table('ojek')->insert(array (
            0 => 
            array (
                'id' => 3,
                'user_id' => 3,
                'nomer_plat' => 'AG5566CA',
                'nomer_hp' => '089517268646',
                'created_at' => '2020-10-29 11:58:58',
                'updated_at' => '2020-10-29 11:58:58',
            ),
            1 => 
            array (
                'id' => 28,
                'user_id' => 1,
                'nomer_plat' => 'AG5566CE',
                'nomer_hp' => '089517268646',
                'created_at' => '2020-10-30 12:41:33',
                'updated_at' => '2020-10-30 12:41:33',
            ),
        ));
        
        
    }
}