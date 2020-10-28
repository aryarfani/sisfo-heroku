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
                'nama' => 'Rudi Hartanti',
                'gambar' => 'assets/images/home/2.jpg',
                'jenis_kelamin' => '1',
                'alamat' => 'Jl. Raung Kediri',
                'agama' => 'Islam',
                'status' => 'Kawin',
                'nomer_hp' => '089517268646',
                'pekerjaan' => 'PNS',
                'password' => '$2y$10$G2qpN.jD9gmU381wOAkCfOO.HOac1EW5l1sHA2kGzldifdASQhLcG',
                'created_at' => '2020-10-21 09:55:12',
                'updated_at' => '2020-10-27 11:44:58',
            ),
            1 =>
            array(
                'id' => 2,
                'nik' => '5522',
                'nama' => 'bambang',
                'gambar' => 'assets/images/home/3.jpg',
                'jenis_kelamin' => '1',
                'alamat' => 'Jl. Angkasa, Kediri',
                'agama' => 'Kristen',
                'status' => 'Kawin',
                'nomer_hp' => '089517268646',
                'pekerjaan' => 'Swasta',
                'password' => '$2y$10$jkSESi46aEQ6GdLo2khereQT7OmK1UfbpekT92JInn1mZRHmjrvwK',
                'created_at' => '2020-10-21 09:56:25',
                'updated_at' => '2020-10-21 09:56:25',
            ),
            2 =>
            array(
                'id' => 3,
                'nik' => '5533',
                'nama' => 'Rina Hartanti',
                'gambar' => 'assets/images/home/5.jpg',
                'jenis_kelamin' => '0',
                'alamat' => 'Ngasem, Kediri',
                'agama' => 'Islam',
                'status' => 'Belum Kawin',
                'nomer_hp' => '089517268646',
                'pekerjaan' => 'Mahasiswa',
                'password' => '$2y$10$hYoBn8VaABdAg26KCItkButgy4sUSEyRSfIqiJkBjLEzNfmMvcDvi',
                'created_at' => '2020-10-21 16:47:31',
                'updated_at' => '2020-10-21 16:47:31',
            ),
            3 =>
            array(
                'id' => 4,
                'nik' => '5544',
                'nama' => 'Karen Simon',
                'gambar' => 'assets/images/home/6.jpg',
                'jenis_kelamin' => '1',
                'alamat' => 'Lirboyo, Kediri',
                'agama' => 'Katolik',
                'status' => 'Cerai Mati',
                'nomer_hp' => '089517268646',
                'pekerjaan' => 'Lain-lain',
                'password' => '$2y$10$hc.2qtWW0lvlU/YCVooHvO6sV.Me9jWHUATZEK8VJpuoivkEX/Bci',
                'created_at' => '2020-10-21 22:36:20',
                'updated_at' => '2020-10-21 22:36:20',
            ),
            4 =>
            array(
                'id' => 5,
                'nik' => '5566',
                'nama' => 'Rina yuni',
                'gambar' => 'assets/images/home/1.jpg',
                'jenis_kelamin' => '0',
                'alamat' => 'Kertosono',
                'agama' => 'Hindu',
                'status' => 'Belum Kawin',
                'nomer_hp' => '089517268646',
                'pekerjaan' => 'Mahasiswa',
                'password' => '$2y$10$ukJXTW12GebEKN5fl80aFeKBsALDT53nal2Ip98DoCTUc6WAAcNbC',
                'created_at' => '2020-10-21 23:17:32',
                'updated_at' => '2020-10-21 23:17:32',
            ),
            5 =>
            array(
                'id' => 6,
                'nik' => '5577',
                'nama' => 'Ketut Subandi',
                'gambar' => 'assets/images/home/7.jpg',
                'jenis_kelamin' => '1',
                'alamat' => 'Jabang, kediri',
                'agama' => 'Hindu',
                'status' => 'Kawin',
                'nomer_hp' => '089517268646',
                'pekerjaan' => 'Swasta',
                'password' => '$2y$10$2qu.dhMqNKcwycpwwoCYOeuOz3Kaikm/aabxA0gX20vP54TS5F3L2',
                'created_at' => '2020-10-22 12:53:05',
                'updated_at' => '2020-10-22 12:53:05',
            ),
            6 =>
            array(
                'id' => 8,
                'nik' => '5534',
                'nama' => 'Kartono',
                'gambar' => 'assets/images/home/images.jpg',
                'jenis_kelamin' => '1',
                'alamat' => 'Badas, kediri',
                'agama' => 'Hindu',
                'status' => 'Kawin',
                'nomer_hp' => '089517268646',
                'pekerjaan' => 'PNS',
                'password' => '$2y$10$GyUbArPnVPIom0cJq71Tieg2y2mWuKNWh5uRPEq4wXt07W3hSyxby',
                'created_at' => '2020-10-27 11:47:49',
                'updated_at' => '2020-10-27 11:47:49',
            ),
        ));
    }
}
