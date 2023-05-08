<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('brands')->delete();
        
        \DB::table('brands')->insert(array (
            0 => 
            array (
                'brand_name' => '天のめぐみブランド1',
                'created_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
                'id' => 1,
                'image_id' => NULL,
                'updated_at' => '2023-01-31 11:53:18',
                'visibility_status' => 1,
            ),
            1 => 
            array (
                'brand_name' => 'ブランド2',
                'created_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
                'id' => 2,
                'image_id' => NULL,
                'updated_at' => '2023-01-31 11:53:18',
                'visibility_status' => 1,
            ),
            2 => 
            array (
                'brand_name' => 'ブランド3',
                'created_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
                'id' => 3,
                'image_id' => NULL,
                'updated_at' => '2023-01-31 11:53:18',
                'visibility_status' => 1,
            ),
            3 => 
            array (
                'brand_name' => 'ブランド4',
                'created_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
                'id' => 4,
                'image_id' => NULL,
                'updated_at' => '2023-01-31 11:53:18',
                'visibility_status' => 1,
            ),
            4 => 
            array (
                'brand_name' => 'ブランド5',
                'created_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
                'id' => 5,
                'image_id' => NULL,
                'updated_at' => '2023-01-31 11:53:18',
                'visibility_status' => 1,
            ),
            5 => 
            array (
                'brand_name' => 'A BATHING APE',
                'created_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
                'id' => 6,
                'image_id' => NULL,
                'updated_at' => '2023-01-31 11:53:18',
                'visibility_status' => 1,
            ),
            6 => 
            array (
                'brand_name' => 'A BATHING APE PIRATE',
                'created_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
                'id' => 7,
                'image_id' => NULL,
                'updated_at' => '2023-01-31 11:53:18',
                'visibility_status' => 1,
            ),
            7 => 
            array (
                'brand_name' => 'a cote',
                'created_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
                'id' => 8,
                'image_id' => NULL,
                'updated_at' => '2023-01-31 11:53:18',
                'visibility_status' => 1,
            ),
            8 => 
            array (
                'brand_name' => 'B ONE SOUL',
                'created_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
                'id' => 9,
                'image_id' => NULL,
                'updated_at' => '2023-01-31 11:53:18',
                'visibility_status' => 1,
            ),
            9 => 
            array (
                'brand_name' => 'B&T CLUB',
                'created_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
                'id' => 10,
                'image_id' => NULL,
                'updated_at' => '2023-01-31 11:53:18',
                'visibility_status' => 1,
            ),
            10 => 
            array (
                'brand_name' => 'b.box',
                'created_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
                'id' => 11,
                'image_id' => NULL,
                'updated_at' => '2023-01-31 11:53:18',
                'visibility_status' => 1,
            ),
            11 => 
            array (
                'brand_name' => 'B.C STOCK',
                'created_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
                'id' => 12,
                'image_id' => NULL,
                'updated_at' => '2023-01-31 11:53:18',
                'visibility_status' => 1,
            ),
            12 => 
            array (
                'brand_name' => '#5 DREAM',
                'created_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
                'id' => 13,
                'image_id' => NULL,
                'updated_at' => '2023-01-31 11:53:18',
                'visibility_status' => 1,
            ),
            13 => 
            array (
                'brand_name' => '#Re:room',
                'created_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
                'id' => 14,
                'image_id' => NULL,
                'updated_at' => '2023-01-31 11:53:18',
                'visibility_status' => 1,
            ),
            14 => 
            array (
                'brand_name' => 'C.C.CROSS',
                'created_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
                'id' => 15,
                'image_id' => NULL,
                'updated_at' => '2023-01-31 11:53:18',
                'visibility_status' => 1,
            ),
            15 => 
            array (
                'brand_name' => 'c.u.l',
                'created_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
                'id' => 16,
                'image_id' => NULL,
                'updated_at' => '2023-01-31 11:53:18',
                'visibility_status' => 1,
            ),
            16 => 
            array (
                'brand_name' => 'D by DADWAY',
                'created_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
                'id' => 17,
                'image_id' => NULL,
                'updated_at' => '2023-01-31 11:53:18',
                'visibility_status' => 1,
            ),
            17 => 
            array (
                'brand_name' => 'e JEANS',
                'created_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
                'id' => 18,
                'image_id' => NULL,
                'updated_at' => '2023-01-31 11:53:18',
                'visibility_status' => 1,
            ),
            18 => 
            array (
                'brand_name' => 'F by ROSSO',
                'created_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
                'id' => 19,
                'image_id' => NULL,
                'updated_at' => '2023-01-31 11:53:18',
                'visibility_status' => 1,
            ),
            19 => 
            array (
                'brand_name' => 'G by Guess',
                'created_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
                'id' => 20,
                'image_id' => NULL,
                'updated_at' => '2023-01-31 11:53:18',
                'visibility_status' => 1,
            ),
            20 => 
            array (
                'brand_name' => 'H　BEAUTY&YOUTH UNITED ARROWS',
                'created_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
                'id' => 21,
                'image_id' => NULL,
                'updated_at' => '2023-01-31 11:53:18',
                'visibility_status' => 1,
            ),
            21 => 
            array (
                'brand_name' => 'I am I in fact...',
                'created_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
                'id' => 22,
                'image_id' => NULL,
                'updated_at' => '2023-01-31 11:53:18',
                'visibility_status' => 1,
            ),
            22 => 
            array (
                'brand_name' => 'J by blue',
                'created_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
                'id' => 23,
                'image_id' => NULL,
                'updated_at' => '2023-01-31 11:53:18',
                'visibility_status' => 1,
            ),
            23 => 
            array (
                'brand_name' => 'K.Spin',
                'created_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
                'id' => 24,
                'image_id' => NULL,
                'updated_at' => '2023-01-31 11:53:18',
                'visibility_status' => 1,
            ),
            24 => 
            array (
                'brand_name' => 'L＆Co.',
                'created_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
                'id' => 25,
                'image_id' => NULL,
                'updated_at' => '2023-01-31 11:53:18',
                'visibility_status' => 1,
            ),
            25 => 
            array (
                'brand_name' => 'M A S U',
                'created_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
                'id' => 26,
                'image_id' => NULL,
                'updated_at' => '2023-01-31 11:53:18',
                'visibility_status' => 1,
            ),
            26 => 
            array (
                'brand_name' => 'N WITH.',
                'created_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
                'id' => 27,
                'image_id' => NULL,
                'updated_at' => '2023-01-31 11:53:18',
                'visibility_status' => 1,
            ),
            27 => 
            array (
                'brand_name' => 'O',
                'created_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
                'id' => 28,
                'image_id' => NULL,
                'updated_at' => '2023-01-31 11:53:18',
                'visibility_status' => 1,
            ),
            28 => 
            array (
                'brand_name' => 'P.A.M.',
                'created_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
                'id' => 29,
                'image_id' => NULL,
                'updated_at' => '2023-01-31 11:53:18',
                'visibility_status' => 1,
            ),
            29 => 
            array (
                'brand_name' => 'Q',
                'created_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
                'id' => 30,
                'image_id' => NULL,
                'updated_at' => '2023-01-31 11:53:18',
                'visibility_status' => 1,
            ),
            30 => 
            array (
                'brand_name' => 'R JUBILEE',
                'created_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
                'id' => 31,
                'image_id' => NULL,
                'updated_at' => '2023-01-31 11:53:18',
                'visibility_status' => 1,
            ),
            31 => 
            array (
                'brand_name' => 'S H',
                'created_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
                'id' => 32,
                'image_id' => NULL,
                'updated_at' => '2023-01-31 11:53:18',
                'visibility_status' => 1,
            ),
            32 => 
            array (
                'brand_name' => 't a r o s u',
                'created_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
                'id' => 33,
                'image_id' => NULL,
                'updated_at' => '2023-01-31 11:53:18',
                'visibility_status' => 1,
            ),
            33 => 
            array (
                'brand_name' => 'U',
                'created_at' => '2023-01-31 11:53:18',
                'deleted_at' => '2023-01-31 11:53:18',
                'id' => 34,
                'image_id' => NULL,
                'updated_at' => '2023-01-31 11:53:18',
                'visibility_status' => 1,
            ),
            34 => 
            array (
                'brand_name' => 'V SEVEN TWELVE THIRTY',
                'created_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
                'id' => 35,
                'image_id' => NULL,
                'updated_at' => '2023-01-31 11:53:18',
                'visibility_status' => 1,
            ),
            35 => 
            array (
                'brand_name' => 'w closet',
                'created_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
                'id' => 36,
                'image_id' => NULL,
                'updated_at' => '2023-01-31 11:53:18',
                'visibility_status' => 1,
            ),
            36 => 
            array (
            'brand_name' => 'Y(dot) BY NORDISK',
                'created_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
                'id' => 37,
                'image_id' => NULL,
                'updated_at' => '2023-01-31 11:53:18',
                'visibility_status' => 1,
            ),
            37 => 
            array (
                'brand_name' => 'Z&MA',
                'created_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
                'id' => 38,
                'image_id' => NULL,
                'updated_at' => '2023-01-31 11:53:18',
                'visibility_status' => 1,
            ),
            38 => 
            array (
                'brand_name' => 'XC',
                'created_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
                'id' => 39,
                'image_id' => NULL,
                'updated_at' => '2023-01-31 11:53:18',
                'visibility_status' => 1,
            ),
            39 => 
            array (
                'brand_name' => 'BASS',
                'created_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
                'id' => 40,
                'image_id' => NULL,
                'updated_at' => '2023-01-31 11:53:18',
                'visibility_status' => 1,
            ),
            40 => 
            array (
                'brand_name' => 'BeMee',
                'created_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
                'id' => 41,
                'image_id' => NULL,
                'updated_at' => '2023-01-31 11:53:18',
                'visibility_status' => 1,
            ),
            41 => 
            array (
                'brand_name' => 'earth music&ecology Blue Label',
                'created_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
                'id' => 42,
                'image_id' => NULL,
                'updated_at' => '2023-01-31 11:53:18',
                'visibility_status' => 1,
            ),
            42 => 
            array (
                'brand_name' => 'FIRST DOWN EXPLORATION GEAR',
                'created_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
                'id' => 43,
                'image_id' => NULL,
                'updated_at' => '2023-01-31 11:53:18',
                'visibility_status' => 1,
            ),
            43 => 
            array (
                'brand_name' => 'Fisherman Out of Ireland',
                'created_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
                'id' => 44,
                'image_id' => NULL,
                'updated_at' => '2023-01-31 11:53:18',
                'visibility_status' => 1,
            ),
            44 => 
            array (
                'brand_name' => 'FRANKLIN & MARSHALL',
                'created_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
                'id' => 45,
                'image_id' => NULL,
                'updated_at' => '2023-01-31 11:53:18',
                'visibility_status' => 1,
            ),
        ));
        
        
    }
}