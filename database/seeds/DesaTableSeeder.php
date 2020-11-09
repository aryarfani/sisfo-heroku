<?php

use Illuminate\Database\Seeder;

class DesaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('desa')->delete();
        
        \DB::table('desa')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama' => 'Lirboyo',
                'created_at' => '2020-11-09 22:03:55',
                'updated_at' => '2020-11-09 22:03:55',
            ),
            1 => 
            array (
                'id' => 2,
                'nama' => 'Kandangan',
                'created_at' => '2020-11-09 22:04:05',
                'updated_at' => '2020-11-09 22:04:05',
            ),
        ));
        
        
    }
}