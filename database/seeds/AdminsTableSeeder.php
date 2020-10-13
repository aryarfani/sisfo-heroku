<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admins')->delete();
        
        \DB::table('admins')->insert(array (
            0 => 
            array (
                'id' => 2,
                'name' => 'Rifqi',
                'email' => 'rifqi@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$VSbu5AYZCh1b1bRbvKl1tO08IQJFcw9lEzfqJHLGoAn7tuEwKz9cq',
                'remember_token' => NULL,
                'created_at' => '2020-10-13 05:36:28',
                'updated_at' => '2020-10-13 05:36:28',
            ),
        ));
        
        
    }
}