<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_category_id' => 3,
                'name' => 'Daging Sapi',
                'image' => 'assets/images/home/daging_sapi.jpg',
                'address' => 'Semen, Kediri',
                'created_at' => '2020-10-08 14:14:02',
                'updated_at' => '2020-10-08 14:14:02',
            ),
            1 => 
            array (
                'id' => 2,
                'product_category_id' => 2,
                'name' => 'Kangkung',
                'image' => 'assets/images/home/kangkung.jpg',
                'address' => 'Mondo, Kediri',
                'created_at' => '2020-10-08 14:23:42',
                'updated_at' => '2020-10-08 14:23:42',
            ),
            2 => 
            array (
                'id' => 5,
                'product_category_id' => 3,
                'name' => 'Daging Kambing',
                'image' => 'assets/images/home/daging_kambing.jpg',
                'address' => 'Semen, Kediri',
                'created_at' => '2020-10-08 17:01:08',
                'updated_at' => '2020-10-08 17:01:08',
            ),
            3 => 
            array (
                'id' => 6,
                'product_category_id' => 3,
                'name' => 'Iga Sapi',
                'image' => 'assets/images/home/iga_sapi.jpeg',
                'address' => 'Bujel, Kediri',
                'created_at' => '2020-10-08 17:01:54',
                'updated_at' => '2020-10-08 17:01:54',
            ),
            4 => 
            array (
                'id' => 7,
                'product_category_id' => 4,
                'name' => 'Lele',
                'image' => 'assets/images/home/lele.jpg',
                'address' => 'Bujel, Kediri',
                'created_at' => '2020-10-08 17:02:12',
                'updated_at' => '2020-10-08 17:02:12',
            ),
            5 => 
            array (
                'id' => 8,
                'product_category_id' => 3,
                'name' => 'Ceker Ayam',
                'image' => 'assets/images/home/ceker_ayam.jpg',
                'address' => 'Mondo, Kediri',
                'created_at' => '2020-10-08 17:33:26',
                'updated_at' => '2020-10-08 17:33:26',
            ),
            6 => 
            array (
                'id' => 9,
                'product_category_id' => 5,
                'name' => 'Semangka',
                'image' => 'assets/images/home/semangka.jpg',
                'address' => 'Ngasem, Kediri',
                'created_at' => '2020-11-08 22:04:47',
                'updated_at' => '2020-11-08 22:04:47',
            ),
            7 => 
            array (
                'id' => 10,
                'product_category_id' => 5,
                'name' => 'Pisang Uli',
                'image' => 'assets/images/home/pisang_uli.jpg',
                'address' => 'Kasembon, Pare',
                'created_at' => '2020-11-08 22:05:10',
                'updated_at' => '2020-11-08 22:05:10',
            ),
            8 => 
            array (
                'id' => 11,
                'product_category_id' => 5,
                'name' => 'Apel Import',
                'image' => 'assets/images/home/apel.jpg',
                'address' => 'Jl. Raung No.3',
                'created_at' => '2020-11-08 22:05:48',
                'updated_at' => '2020-11-08 22:05:48',
            ),
            9 => 
            array (
                'id' => 12,
                'product_category_id' => 4,
                'name' => 'Bandeng',
                'image' => 'assets/images/home/bandeng.jpg',
                'address' => 'Semen, Kediri',
                'created_at' => '2020-11-08 22:06:21',
                'updated_at' => '2020-11-08 22:06:21',
            ),
            10 => 
            array (
                'id' => 13,
                'product_category_id' => 4,
                'name' => 'Patin',
                'image' => 'assets/images/home/patin.jpg',
                'address' => 'Semen, Kediri',
                'created_at' => '2020-11-08 22:06:44',
                'updated_at' => '2020-11-08 22:06:44',
            ),
            11 => 
            array (
                'id' => 14,
                'product_category_id' => 6,
                'name' => 'Kacang Tanah',
                'image' => 'assets/images/home/kacang_merah.jpg',
                'address' => 'Kandangan, Kediri',
                'created_at' => '2020-11-08 22:07:15',
                'updated_at' => '2020-11-08 22:07:15',
            ),
            12 => 
            array (
                'id' => 15,
                'product_category_id' => 6,
                'name' => 'Bawang Merah',
                'image' => 'assets/images/home/bawang_merah.jpg',
                'address' => 'Semen, Kediri',
                'created_at' => '2020-11-08 22:07:43',
                'updated_at' => '2020-11-08 22:07:43',
            ),
        ));
        
        
    }
}