<?php

use Illuminate\Database\Seeder;

class ProductCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_categories')->delete();
        
        \DB::table('product_categories')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Sayuran',
                'created_at' => '2020-10-07 16:42:18',
                'updated_at' => '2020-10-07 16:42:18',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Daging',
                'created_at' => '2020-10-07 16:42:25',
                'updated_at' => '2020-10-07 16:42:25',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Ikan',
                'created_at' => '2020-10-08 17:01:35',
                'updated_at' => '2020-10-08 17:01:35',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'Buah',
                'created_at' => '2020-11-08 20:22:37',
                'updated_at' => '2020-11-08 20:22:37',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'Rempah',
                'created_at' => '2020-11-08 20:22:44',
                'updated_at' => '2020-11-08 20:22:44',
            ),
        ));
        
        
    }
}