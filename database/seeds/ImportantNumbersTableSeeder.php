<?php

use Illuminate\Database\Seeder;

class ImportantNumbersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('important_numbers')->delete();
        
        \DB::table('important_numbers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Polres Kediri Kota',
                'address' => 'Jl. KDP Slamet No.2, Bandar Lor, Kec. Mojoroto, Kota Kediri',
            'phone' => '(0354) 699374',
                'created_at' => '2020-10-13 05:28:25',
                'updated_at' => '2020-10-13 05:28:25',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'RS Gambiran Kediri',
                'address' => 'l. Kapten Tendean No.16, Pakunden, Kec. Pesantren, Kota Kediri',
                'phone' => '+6288216835506',
                'created_at' => '2020-10-13 05:28:45',
                'updated_at' => '2020-10-13 05:28:45',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'RSU Ratih',
                'address' => 'Jl. Penanggungan, Bandar Lor, Kec. Mojoroto, Kota Kediri',
            'phone' => '(0354) 779500',
                'created_at' => '2020-10-13 05:29:00',
                'updated_at' => '2020-10-13 05:29:00',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'RSU Lirboyo',
                'address' => 'Jl Dr Saharjo, RT.01 / RW.02, Mojoroto, Lirboyo, Campurejo, Kec. Kota Kediri',
            'phone' => '(0354) 778165',
                'created_at' => '2020-10-13 05:29:16',
                'updated_at' => '2020-10-13 05:29:16',
            ),
        ));
        
        
    }
}