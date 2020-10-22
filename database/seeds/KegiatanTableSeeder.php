<?php

use Illuminate\Database\Seeder;

class KegiatanTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('kegiatan')->delete();
        
        \DB::table('kegiatan')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'nama' => 'Ronda Malam',
                'tempat' => 'Pos Kamling',
                'gambar' => 'assets/images/home/Ronda-malam.jpg',
                'created_at' => '2020-10-21 10:10:05',
                'updated_at' => '2020-10-21 10:10:05',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 1,
                'nama' => 'Tips Kesehatan',
                'tempat' => 'Rumah',
                'gambar' => 'assets/images/home/image_picker1805398909.jpg',
                'created_at' => '2020-10-21 10:56:22',
                'updated_at' => '2020-10-21 10:56:22',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 4,
                'nama' => 'Penyemprotan rumah warga',
                'tempat' => 'Sekitar RT. 8',
                'gambar' => 'assets/images/home/image_picker1894083680.jpg',
                'created_at' => '2020-10-21 23:16:36',
                'updated_at' => '2020-10-21 23:16:36',
            ),
            3 => 
            array (
                'id' => 5,
                'user_id' => 5,
                'nama' => 'Pembuatan masker kain',
                'tempat' => 'Karang Taruna desa lirboyo',
                'gambar' => 'assets/images/home/image_picker1674991558.jpg',
                'created_at' => '2020-10-22 12:51:56',
                'updated_at' => '2020-10-22 12:51:56',
            ),
        ));
        
        
    }
}