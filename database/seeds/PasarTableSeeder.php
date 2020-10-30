<?php

use Illuminate\Database\Seeder;

class PasarTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pasar')->delete();
        
        \DB::table('pasar')->insert(array (
            0 => 
            array (
                'id' => 29,
                'user_id' => 1,
                'nama' => 'Sepeda Gunung',
                'gambar' => 'assets/images/home/1604039091802.jpg',
                'deskripsi' => 'Sepeda gunus mulus',
                'harga' => '2.500.000',
                'nomer_hp' => '089517268646',
                'created_at' => '2020-10-30 13:25:11',
                'updated_at' => '2020-10-30 13:25:11',
            ),
            1 => 
            array (
                'id' => 31,
                'user_id' => 5,
                'nama' => 'Celana chinos',
                'gambar' => 'assets/images/home/1604042209540.jpg',
                'deskripsi' => 'Baru siap cod dijamin murah',
                'harga' => '56.000',
                'nomer_hp' => '089517268646',
                'created_at' => '2020-10-30 14:17:19',
                'updated_at' => '2020-10-30 14:17:19',
            ),
        ));
        
        
    }
}