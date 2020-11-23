<?php

use Illuminate\Database\Seeder;

class InfoBpdsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('info_bpds')->delete();
        
        \DB::table('info_bpds')->insert(array (
            0 => 
            array (
                'id' => 1,
                'desa_id' => 1,
                'ketua' => 'Walter White',
                'sekretaris' => 'Tom Hanks',
                'wakil' => 'Jesse Pinkman',
                'anggota1' => 'Uzumaki Naruto',
                'anggota2' => 'Uciha Itachi',
                'anggota3' => 'Sakura Haruno',
                'anggota4' => NULL,
                'anggota5' => NULL,
                'created_at' => '2020-11-22 20:57:31',
                'updated_at' => '2020-11-22 21:16:19',
            ),
        ));
        
        
    }
}