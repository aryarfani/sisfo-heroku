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

        \DB::table('users')->insert(array(
            0 =>
            array(
                'id' => 1,
                'nik' => '5511',
                'nama' => 'Rudi Hartanto',
                'gambar' => 'assets/images/home/2.jpg',
                'jenis_kelamin' => '1',
                'alamat' => 'Jll. Raung Kediri',
                'agama' => 'Islam',
                'status' => 'Kawin',
                'pekerjaan' => 'PNS',
                'password' => '$2y$10$G2qpN.jD9gmU381wOAkCfOO.HOac1EW5l1sHA2kGzldifdASQhLcG',
                'created_at' => '2020-10-21 09:55:12',
                'updated_at' => '2020-10-21 09:55:12',
            ),
            1 =>
            array(
                'id' => 2,
                'nik' => '5522',
                'nama' => 'bambang',
                'gambar' => 'assets/images/home/3.jpg',
                'jenis_kelamin' => '1',
                'alamat' => 'Jll. Angkasa, Kediri',
                'agama' => 'Kristen',
                'status' => 'Kawin',
                'pekerjaan' => 'Swasta',
                'password' => '$2y$10$jkSESi46aEQ6GdLo2khereQT7OmK1UfbpekT92JInn1mZRHmjrvwK',
                'created_at' => '2020-10-21 09:56:25',
                'updated_at' => '2020-10-21 09:56:25',
            ),
        ));
    }
}
