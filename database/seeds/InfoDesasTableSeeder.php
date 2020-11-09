<?php

use Illuminate\Database\Seeder;

class InfoDesasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('info_desas')->delete();
        
        \DB::table('info_desas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'kepala_desa' => 'Bambang Jatnoko SH.',
                'gambar_kepala_desa' => 'assets/images/home/poto_orang.jpg',
                'alamat_kepala_desa' => 'Jl. Ridho Agung No.25',
                'sekretaris' => 'Tarmuji K',
                'kaur_keuangan' => 'Sri Mulyani',
                'kaur_umum' => 'Titus Sembiring',
                'kaur_perencanaan' => 'Nadiem Makarim',
                'seksi_pelayanan' => 'Endang Sukamti',
                'seksi_kesejahteraan' => 'Erick Tohir',
                'seksi_pemerintahan' => 'Didi Mulyana',
                'nomor_bpd' => '089517268646',
                'nomor_pemdes' => '085790390306',
                'created_at' => '2020-11-09 10:09:52',
                'updated_at' => '2020-11-09 10:09:52',
            ),
        ));
        
        
    }
}