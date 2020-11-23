<?php

use Illuminate\Database\Seeder;

class LokersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('Lokers')->delete();
        
        \DB::table('Lokers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 2,
                'desa_id' => 1,
                'name' => 'Sales',
                'business_name' => 'Honda',
                'description' => 'Mempromosikan motor - motor terbaru dari honda',
                'salary' => NULL,
                'place' => 'Mojoroto',
                'phone' => '089517268646',
                'created_at' => '2020-11-20 22:48:28',
                'updated_at' => '2020-11-20 22:48:28',
            ),
            1 => 
            array (
                'id' => 3,
                'user_id' => 3,
                'desa_id' => 1,
                'name' => 'Tukang Antar',
                'business_name' => 'Banana Bakery',
                'description' => 'Mengantarkan pesanan roti ke rumah pelanggan, wajib punya sim C, motor dipinjamkan',
                'salary' => NULL,
                'place' => 'Bandar Lor',
                'phone' => '089517268646',
                'created_at' => '2020-11-20 23:55:52',
                'updated_at' => '2020-11-20 23:55:52',
            ),
            2 => 
            array (
                'id' => 4,
                'user_id' => 2,
                'desa_id' => 1,
                'name' => 'Manager',
                'business_name' => 'Indomaret',
                'description' => 'Mengawasi dan tanggung jawab proses bisnis toko',
                'salary' => '4000000',
                'place' => 'Kemuning',
                'phone' => '089517268646',
                'created_at' => '2020-11-20 23:57:30',
                'updated_at' => '2020-11-20 23:57:30',
            ),
            3 => 
            array (
                'id' => 8,
                'user_id' => 1,
                'desa_id' => 1,
                'name' => 'Mekanik',
                'business_name' => 'Honda',
                'description' => 'Mekanik motor minimal SMK Mesin',
                'salary' => '2000000',
                'place' => 'Bandar Kediri',
                'phone' => '123',
                'created_at' => '2020-11-22 12:45:53',
                'updated_at' => '2020-11-22 12:45:53',
            ),
        ));
        
        
    }
}