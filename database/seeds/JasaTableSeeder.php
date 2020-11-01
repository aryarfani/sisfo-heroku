<?php

use Illuminate\Database\Seeder;

class JasaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('jasa')->delete();

        \DB::table('jasa')->insert(array(
            0 =>
            array(
                'id' => 1,
                'user_id' => 1,
                'nama' => 'Potong  Rambut',
                'gambar' => 'assets/images/home/potong.jpg',
                'deskripsi' => 'Kekinian modis dan terjangkau',
                'harga' => '20.000',
                'nomer_hp' => '089517268646',
                'created_at' => '2020-10-31 21:49:22',
                'updated_at' => '2020-10-31 21:49:22',
            ),
            1 =>
            array(
                'id' => 2,
                'user_id' => 2,
                'nama' => 'Bejo Jahit',
                'gambar' => 'assets/images/home/jahit.jpg',
                'deskripsi' => 'Jahit segala jenis bisa ditunggu',
                'harga' => '5.000',
                'nomer_hp' => '089517268646',
                'created_at' => '2020-10-31 21:49:59',
                'updated_at' => '2020-10-31 21:49:59',
            ),
            2 =>
            array(
                'id' => 3,
                'user_id' => 3,
                'nama' => 'Pijet Tunanetra',
                'gambar' => 'assets/images/home/pijet.jpg',
                'deskripsi' => 'Pijet bisa ke rumah',
                'harga' => '50.000',
                'nomer_hp' => '089517268646',
                'created_at' => '2020-10-31 21:51:05',
                'updated_at' => '2020-10-31 21:51:05',
            ),
        ));
    }
}
