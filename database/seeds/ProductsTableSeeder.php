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

        \DB::table('products')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'Daging Sapi',
                'image' => 'assets/images/home/daging_sapi.jpg',
                'address' => 'Semen, Kediri',
                'product_category_id' => 3,
                'created_at' => '2020-10-08 14:14:02',
                'updated_at' => '2020-10-08 14:14:02',
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'Kangkung',
                'image' => 'assets/images/home/kangkung.jpg',
                'address' => 'Mondo, Kediri',
                'product_category_id' => 2,
                'created_at' => '2020-10-08 14:23:42',
                'updated_at' => '2020-10-08 14:23:42',
            ),
            2 =>
            array(
                'id' => 5,
                'name' => 'Daging Kambing',
                'image' => 'assets/images/home/daging_kambing.jpg',
                'address' => 'Semen, Kediri',
                'product_category_id' => 3,
                'created_at' => '2020-10-08 17:01:08',
                'updated_at' => '2020-10-08 17:01:08',
            ),
            3 =>
            array(
                'id' => 6,
                'name' => 'Iga Sapi',
                'image' => 'assets/images/home/iga_sapi.jpeg',
                'address' => 'Bujel, Kediri',
                'product_category_id' => 3,
                'created_at' => '2020-10-08 17:01:54',
                'updated_at' => '2020-10-08 17:01:54',
            ),
            4 =>
            array(
                'id' => 7,
                'name' => 'Lele',
                'image' => 'assets/images/home/lele.jpg',
                'address' => 'Bujel, Kediri',
                'product_category_id' => 4,
                'created_at' => '2020-10-08 17:02:12',
                'updated_at' => '2020-10-08 17:02:12',
            ),
            5 =>
            array(
                'id' => 8,
                'name' => 'Ceker Ayam',
                'image' => 'assets/images/home/ceker_ayam.jpg',
                'address' => 'Mondo, Kediri',
                'product_category_id' => 3,
                'created_at' => '2020-10-08 17:33:26',
                'updated_at' => '2020-10-08 17:33:26',
            ),
        ));
    }
}
