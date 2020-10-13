<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('news')->delete();
        
        \DB::table('news')->insert(array (
            0 => 
            array (
                'id' => 4,
                'news_category' => 2,
                'title' => 'Perawat Puskesmas Berbek Positif Covid',
                'content' => 'NGANJUK, JP Radar Nganjuk - Jumlah tenaga kesehatan yang terpapar Covid-19 bertambah lagi. Ini setelah perawat di Puskesmas Berbek dinyatakan positif korona. Perempuan yang juga istri salah satu camat di Nganjuk itu dirawat di Pu Sindok.\\n\\n Data yang dihimpun koran ini menyebutkan, perempuan berusia 56 tahun itu awalnya mengalami gejala nyeri perut, diare, dan mual. Sebelumnya, dia memiliki riwayat perjalanan dari Magetan.\\n\\n Kepala Puskesmas Berbek dr Endang Rahayu yang dikonfirmasi tentang adanya perawat gigi di Puskesmas Berbek membenarkannya. Sudah diisolasi, ujar Endang tentang salah satu perawatnya yang terpapar virus korona.',
                'image' => 'assets/images/home/banner3.jpg',
                'visitor' => 0,
                'author' => 'Walter white',
                'created_at' => '2020-10-07 12:11:37',
                'updated_at' => '2020-10-07 12:11:37',
            ),
            1 => 
            array (
                'id' => 5,
                'news_category' => 4,
                'title' => 'Irigasi Tanah Dangkal Siasati Kekeringan di Lahan Pertanian',
                'content' => 'Sejumlah sawah tadah hujan di Nganjuk kini tidak lagi kebingungan di musim kemarau. Saat debit air sungai menyusut, mereka bisa mengambil “tabungan” air di irigasi tanah dangkal untuk tanaman mereka.

September ini debit air sungai Kuncir yang berhulu di gunung Wilis sudah mulai menyusut. Akibatnya, percabangan sungai terbesar di Nganjuk ini mengering. Lahan persawahan yang menggantungkan pengairan pada sungai ini pun terancam mengalami kekeringan.

Kepala Dinas Pertanian Nganjuk Judi Ernanto mengungkapkan, hingga September ini belum ada laporan irigasi yang mengering. Meski demikian, pihaknya sudah melakukan persiapan. Apalagi, dia juga mengakui jika debit air sungai Kuncir mulai surut. “Ini (kekeringan irigasi, Red) terjadi setiap kemarau. Kami sudah mengantisipasi,” ujar Judi.

Kekeringan
KERING: Anak sungai Kuncir di Desa Tanjungrejo, Loceret yang mengairi wilayah Kota Nganjuk sudah mengering sejak awal September lalu. (Iqbal Syahroni- radarkediri.id)

Di beberapa lokasi di Nganjuk, menurut Judi dispertan sudah membangun irigasi tanah dangkal. Yakni, membangun sarana penampungan air dari sungai yang tidak terpakai saat musim penghujan. Air yang tertampung itu bisa dimanfaatkan petani saat musim kemarau seperti sekarang.

Sumur dangkal, tutur Judi, terutama dibangun di daerah yang tidak berdekatan dengan sumber air. Misalnya di wilayah Kota Nganjuk, Sukomoro, dan beberapa daerah lainnya. Lokasi yang mengandalkan pengairan dari percabangan sungai Kuncir ini akan mengalami kekeringan saat debit sungai menyusut. “Kalau untuk Berbek, Ngetos, Loceret itu dekat dengan sumber air,” lanjutnya.

Sebelum ada irigasi sumur dangkal, menurut Judi petani hanya bisa mengebor air untuk mengairi sawah. Apalagi untuk lahan dengan pengairan tadah hujan. Petani hanya bisa menggunakan pompa air untuk mengairi sawahnya.

Terpisah, Ketua Kelompok Tani Sambung Rejeki, Dusun Sembung, Desa Blitaran, Sukomoro Kamto mengatakan, di daerahnya sumur sudah mulai kering. “Pas hari ini (kemarin,Red), beberapa petani laporan untuk pengairan sawah mulai seret sumurnya,” terang pria berusia 55 tahun itu.

Diakui pria berkaus cokelat itu, selama ini Desa Blitaran sering terdampak kekeringan. Namun setelah dibangun irigasi tanah dangkal oleh dinas pertanian, lima hektare sawah di wilayahnya bisa mendapat air yang cukup di musim kemarau.

Dikatakan Kamto, sebelumnya petani di desanya juga memanfaatkan air hujan. Di musim kemarau mereka hanya bisa mengambil air dari sumur sawah yang dipompa. Itu pun debitnya akan menyusut saat kemarau.

Sementara itu, jika irigasi di Desa Blitaran, Sukomoro mulai mengering, petani di Desa Jatirejo, Loceret sebaliknya. Hingga kemarin mereka belum kesulitan air untuk sawah mereka.

Adianto, 43, petani asal Desa Jatirejo, Loceret mengaku belum menemukan kendala pengairan di lahannya. Dia optimistis dalam satu hingga dua bulan ke depan sumurnya masih mengeluarkan air. “Air dari pompa masih lancar,” urainya.

Untuk diketahui, selain sungai Kuncir, pengairan sawah warga di Nganjuk bersumber dari beberapa mata air. Mulai sungai Widas, Semantok, hingga sungai Bodor di ujung timur wilayah Nganjuk.',
                'image' => 'assets/images/home/sawah.jpg',
                'visitor' => 0,
                'author' => 'Walter white',
                'created_at' => '2020-10-07 12:13:55',
                'updated_at' => '2020-10-07 12:13:55',
            ),
            2 => 
            array (
                'id' => 6,
                'news_category' => 1,
                'title' => 'Anak Pramono Anung Lawan Kotak Kosong di Pilkada Kediri',
            'content' => 'KEDIRI, KOMPAS.com- Hanindhito Himawan Pramana, anak politisi kawakan Pramono Anung, dipastikan menjadi calon tunggal pada Pilkada Kediri 2020. Hal itu dipastikan setelah tidak ada satu pun bakal calon lainnya yang mendaftarkan diri hingga pendaftaran ditutup pada 13 September. Praktis, Dhito yang berpasangan dengan Dewi Maria Ulfa akan melawan kotak kosong dalam memperebutkan suara pemilih. "Hingga pendaftaran ditutup, KPU hanya mendapatkan satu pasangan calon saja," ujar Komisioner Divisi Teknis Penyelenggaraan KPU Kabupaten Kediri Anwar Ansori, saat dihubungi, Senin (14/9/2020). Baca juga: PDI-P Usung Hanindhito, Anak Seskab Pramono Anung Maju Pilkada Kediri 2020 KPU Kabupaten Kediri sempat membuka dua kali masa pendaftaran, yakni pada 4-6 September, dan perpanjangan pada 11-13 September. Langkah tersebut dilakukan karena pada masa pendaftaran pertama hanya ada satu bakal pasangan calon yang mendaftar, yaitu Dhito-Dewi. Sehingga menurut regulasi yang ada, KPU membuka perpanjangan pendaftaran. "Kita hanya sebagai pelaksana peraturan yang ada, sebagaimana diatur Undang-undang 10," ujar Anwari. Baca juga: Hanindhito Sempat Tak Direstui Pramono Anung Maju Pilkada Kediri Perpanjangan pendaftaran itu merupakan bagian dari upaya membuka kesempatan seluas-luasnya bagi masyarakat agar tidak terjadi calon tunggal. Anwar mengungkapkan, selama masa perpanjangan pendaftaran itu, ada LO atau utusan bapaslon lain yang mendatangi KPU, yaitu utusan pasangan Ridwan-Mudawamah. Utusan tersebut datang dua kali ke KPU untuk berkonsultasi. Namun, hingga detik-detik akhir penutupan, pasangan ini tak kunjung mendaftar. "Sekitar pukul 23.30 WIB, bapaslon yang didaftarkan datang, tapi yang mendaftarkan tidak datang. Jadi parpolnya tidak ada," ujar Anwar. Setelah pendaftaran ditutup, pasangan calon akan mengikuti pemeriksaan kesehatan yang akan berlangsung 14-17 September di RS Saeful Anwar Malang. Sedangkan penetapan paslon akan berlangsung pada 23 September, dan pada 26 September memasuki masa kampanye. Adapun pasangan Dhito-Dewi diusung sembilan parpol, yakni PDI Perjuangan, PKB, Golkar, PAN, Demokrat, Nasdem, PKS, Gerindra, dan PPP.',
                'image' => 'assets/images/home/5f179df2d8fb3.jpg',
                'visitor' => 0,
                'author' => 'Walter white',
                'created_at' => '2020-10-07 12:16:46',
                'updated_at' => '2020-10-07 12:16:46',
            ),
        ));
        
        
    }
}