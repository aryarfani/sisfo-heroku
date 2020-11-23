<?php

use Illuminate\Database\Seeder;

class ProdukHukumsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('produk_hukums')->delete();
        
        \DB::table('produk_hukums')->insert(array (
            0 => 
            array (
                'id' => 3,
                'desa_id' => 1,
                'uraian' => 'Perpu',
                'tahun' => 2019,
                'tentang' => 'Perjanjian Linggarjati',
                'pdf' => 'assets/documents/contoh.pdf',
                'created_at' => '2020-11-21 23:11:24',
                'updated_at' => '2020-11-21 23:11:24',
            ),
            1 => 
            array (
                'id' => 4,
                'desa_id' => 1,
                'uraian' => 'Perda',
                'tahun' => 2018,
                'tentang' => 'Perubahan Anggaran Desa',
            'pdf' => 'assets/documents/surat.suratKeteranganDomisili (15).pdf',
                'created_at' => '2020-11-22 12:41:20',
                'updated_at' => '2020-11-22 12:41:20',
            ),
        ));
        
        
    }
}