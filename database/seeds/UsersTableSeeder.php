<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nik' => '123235243',
                'username' => 'bambang',
                'image' => NULL,
                'password' => '$2y$10$Qmcv27JWOWH7ds9.v7vUhOuPUbzi7qnlmzksD4AhF6l/H1u8cADta',
                'api_token' => NULL,
                'created_at' => '2020-10-06 16:34:56',
                'updated_at' => '2020-10-06 16:34:56',
            ),
        ));
        
        
    }
}