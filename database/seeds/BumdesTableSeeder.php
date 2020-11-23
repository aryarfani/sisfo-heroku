<?php

use Illuminate\Database\Seeder;

class BumdesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('bumdes')->delete();

        \DB::table('bumdes')->insert(array(
            0 =>
            array(
                'id' => 2,
                'desa_id' => 1,
                'bumdes_category_id' => 2,
                'name' => 'Amerta',
                'image' => 'assets/images/home/968220557.jpg',
                'phone' => '6289517268646',
                'created_at' => '2020-11-19 23:42:28',
                'updated_at' => '2020-11-19 23:42:28',
            ),
            1 =>
            array(
                'id' => 5,
                'desa_id' => 1,
                'bumdes_category_id' => 1,
                'name' => 'Cuci Mobil',
                'image' => 'assets/images/home/2039973805.jpg',
                'phone' => '6289517268646',
                'created_at' => '2020-11-20 13:41:54',
                'updated_at' => '2020-11-20 13:41:54',
            ),
            2 =>
            array(
                'id' => 6,
                'desa_id' => 1,
                'bumdes_category_id' => 1,
                'name' => 'Jahit Baju',
                'image' => 'assets/images/home/745699814.jpg',
                'phone' => '6289517268646',
                'created_at' => '2020-11-20 21:59:10',
                'updated_at' => '2020-11-20 21:59:10',
            ),
        ));
    }
}
