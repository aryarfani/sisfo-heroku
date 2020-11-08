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
            4 => 
            array (
                'id' => 9,
                'name' => 'Reece Summers',
                'address' => 'Aut animi fugiat om',
            'phone' => '+1 (522) 945-7607',
                'created_at' => '2020-11-08 11:24:08',
                'updated_at' => '2020-11-08 11:24:08',
            ),
            5 => 
            array (
                'id' => 10,
                'name' => 'Xerxes Knox',
                'address' => 'Fugiat fugiat velit',
            'phone' => '+1 (171) 566-4498',
                'created_at' => '2020-11-08 11:24:11',
                'updated_at' => '2020-11-08 11:24:11',
            ),
            6 => 
            array (
                'id' => 11,
                'name' => 'Lani Thompson',
                'address' => 'Praesentium dolor et',
            'phone' => '+1 (773) 117-7952',
                'created_at' => '2020-11-08 11:25:14',
                'updated_at' => '2020-11-08 11:25:14',
            ),
            7 => 
            array (
                'id' => 12,
                'name' => 'Carissa Harmon',
                'address' => 'Velit commodi pariat',
            'phone' => '+1 (944) 627-7521',
                'created_at' => '2020-11-08 11:25:21',
                'updated_at' => '2020-11-08 11:25:21',
            ),
            8 => 
            array (
                'id' => 13,
                'name' => 'Chester Delacruz',
                'address' => 'Ad id sed voluptatem',
            'phone' => '+1 (373) 282-2357',
                'created_at' => '2020-11-08 11:25:33',
                'updated_at' => '2020-11-08 11:25:33',
            ),
            9 => 
            array (
                'id' => 14,
                'name' => 'Amy Brooks',
                'address' => 'Anim nemo hic sint a',
            'phone' => '+1 (201) 424-8731',
                'created_at' => '2020-11-08 11:25:52',
                'updated_at' => '2020-11-08 11:25:52',
            ),
            10 => 
            array (
                'id' => 15,
                'name' => 'Zoe Butler',
                'address' => 'Dolorem ut quia adip',
            'phone' => '+1 (422) 347-5531',
                'created_at' => '2020-11-08 11:26:22',
                'updated_at' => '2020-11-08 11:26:22',
            ),
            11 => 
            array (
                'id' => 16,
                'name' => 'George Acevedo',
                'address' => 'Occaecat ad quos et',
            'phone' => '+1 (488) 381-6982',
                'created_at' => '2020-11-08 11:28:11',
                'updated_at' => '2020-11-08 11:28:11',
            ),
            12 => 
            array (
                'id' => 17,
                'name' => 'Joelle Ingram',
                'address' => 'Ut eveniet irure no',
            'phone' => '+1 (484) 896-6337',
                'created_at' => '2020-11-08 11:28:19',
                'updated_at' => '2020-11-08 11:28:19',
            ),
            13 => 
            array (
                'id' => 18,
                'name' => 'Lacota Bowen',
                'address' => 'Dolores repellendus',
            'phone' => '+1 (197) 156-5008',
                'created_at' => '2020-11-08 11:28:42',
                'updated_at' => '2020-11-08 11:28:42',
            ),
            14 => 
            array (
                'id' => 19,
                'name' => 'Raja Duffy',
                'address' => 'Dolores esse exercit',
            'phone' => '+1 (758) 487-5993',
                'created_at' => '2020-11-08 11:29:00',
                'updated_at' => '2020-11-08 11:29:00',
            ),
            15 => 
            array (
                'id' => 20,
                'name' => 'Maggy Stuart',
                'address' => 'Non ad consectetur n',
            'phone' => '+1 (234) 561-9493',
                'created_at' => '2020-11-08 11:29:15',
                'updated_at' => '2020-11-08 11:29:15',
            ),
            16 => 
            array (
                'id' => 21,
                'name' => 'Tobias Curtis',
                'address' => 'Magnam similique ali',
            'phone' => '+1 (879) 436-9843',
                'created_at' => '2020-11-08 11:29:27',
                'updated_at' => '2020-11-08 11:29:27',
            ),
            17 => 
            array (
                'id' => 22,
                'name' => 'Emily Coffey',
                'address' => 'Culpa dolores minim',
            'phone' => '+1 (344) 125-5647',
                'created_at' => '2020-11-08 11:29:31',
                'updated_at' => '2020-11-08 11:29:31',
            ),
            18 => 
            array (
                'id' => 23,
                'name' => 'Hamish Kirby',
                'address' => 'Qui ut numquam nisi',
            'phone' => '+1 (834) 468-5819',
                'created_at' => '2020-11-08 11:30:42',
                'updated_at' => '2020-11-08 11:30:42',
            ),
            19 => 
            array (
                'id' => 24,
                'name' => 'Rhonda Rasmussen',
                'address' => 'Voluptate sed rerum',
            'phone' => '+1 (217) 839-2309',
                'created_at' => '2020-11-08 11:30:46',
                'updated_at' => '2020-11-08 11:30:46',
            ),
            20 => 
            array (
                'id' => 25,
                'name' => 'Mohammad Duran',
                'address' => 'Ullam vero minim rer',
            'phone' => '+1 (349) 854-7394',
                'created_at' => '2020-11-08 11:31:21',
                'updated_at' => '2020-11-08 11:31:21',
            ),
            21 => 
            array (
                'id' => 26,
                'name' => 'Halla Gonzales',
                'address' => 'Eius eligendi volupt',
            'phone' => '+1 (691) 372-9276',
                'created_at' => '2020-11-08 11:31:31',
                'updated_at' => '2020-11-08 11:31:31',
            ),
            22 => 
            array (
                'id' => 27,
                'name' => 'Chiquita Potts',
                'address' => 'Soluta esse archite',
            'phone' => '+1 (151) 223-8799',
                'created_at' => '2020-11-08 11:31:39',
                'updated_at' => '2020-11-08 11:31:39',
            ),
            23 => 
            array (
                'id' => 28,
                'name' => 'Kerry Merrill',
                'address' => 'Exercitationem quia',
            'phone' => '+1 (803) 285-2867',
                'created_at' => '2020-11-08 11:32:10',
                'updated_at' => '2020-11-08 11:32:10',
            ),
            24 => 
            array (
                'id' => 29,
                'name' => 'Odette Wall',
                'address' => 'Aut adipisicing volu',
            'phone' => '+1 (838) 795-3792',
                'created_at' => '2020-11-08 11:32:18',
                'updated_at' => '2020-11-08 11:32:18',
            ),
            25 => 
            array (
                'id' => 30,
                'name' => 'Danielle Bishop',
                'address' => 'Non iure totam porro',
            'phone' => '+1 (636) 159-3056',
                'created_at' => '2020-11-08 12:31:28',
                'updated_at' => '2020-11-08 12:31:28',
            ),
        ));
        
        
    }
}