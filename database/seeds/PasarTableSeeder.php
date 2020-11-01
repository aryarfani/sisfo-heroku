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
                'user_id' => 2,
                'nama' => 'Celana chinos',
                'gambar' => 'assets/images/home/1604042209540.jpg',
                'deskripsi' => 'Baru siap cod dijamin murah',
                'harga' => '56.000',
                'nomer_hp' => '089517268646',
                'created_at' => '2020-10-30 14:17:19',
                'updated_at' => '2020-10-30 14:17:19',
            ),
            2 => 
            array (
                'id' => 32,
                'user_id' => 3,
                'nama' => 'Susu sapi asli',
                'gambar' => 'assets/images/home/susu.jpg',
                'deskripsi' => 'susu sapi asli murni tanpa campuran bisa cod',
                'harga' => '15.000',
                'nomer_hp' => '089517268646',
                'created_at' => '2020-10-31 21:31:45',
                'updated_at' => '2020-10-31 21:31:45',
            ),
            3 => 
            array (
                'id' => 33,
                'user_id' => 4,
                'nama' => 'Kartu Indosat',
                'gambar' => 'assets/images/home/kartu.jpg',
                'deskripsi' => 'kartu paketan 20gb',
                'harga' => '23.000',
                'nomer_hp' => '089517268646',
                'created_at' => '2020-10-31 21:33:18',
                'updated_at' => '2020-10-31 21:33:18',
            ),
            4 => 
            array (
                'id' => 34,
                'user_id' => 5,
                'nama' => 'Laptop bekas',
                'gambar' => 'assets/images/home/laptop.jpg',
                'deskripsi' => 'Laptop toshiba mulus',
                'harga' => '2.300.000',
                'nomer_hp' => '089517268646',
                'created_at' => '2020-10-31 21:33:57',
                'updated_at' => '2020-10-31 21:33:57',
            ),
        ));
        
        
    }
}