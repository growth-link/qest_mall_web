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
                'id' => 1,
                'brand_name' => '天のめぐみブランド1',
                'visibility_status' => 1,
                'image_id' => NULL,
                'created_at' => '2023-01-31 11:53:18',
                'updated_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'brand_name' => 'ブランド2',
                'visibility_status' => 1,
                'image_id' => NULL,
                'created_at' => '2023-01-31 11:53:18',
                'updated_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'brand_name' => 'ブランド3',
                'visibility_status' => 1,
                'image_id' => NULL,
                'created_at' => '2023-01-31 11:53:18',
                'updated_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'brand_name' => 'ブランド4',
                'visibility_status' => 1,
                'image_id' => NULL,
                'created_at' => '2023-01-31 11:53:18',
                'updated_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'brand_name' => 'ブランド5',
                'visibility_status' => 1,
                'image_id' => NULL,
                'created_at' => '2023-01-31 11:53:18',
                'updated_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'brand_name' => 'A BATHING APE',
                'visibility_status' => 1,
                'image_id' => NULL,
                'created_at' => '2023-01-31 11:53:18',
                'updated_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'brand_name' => 'A BATHING APE PIRATE',
                'visibility_status' => 1,
                'image_id' => NULL,
                'created_at' => '2023-01-31 11:53:18',
                'updated_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'brand_name' => 'a cote',
                'visibility_status' => 1,
                'image_id' => NULL,
                'created_at' => '2023-01-31 11:53:18',
                'updated_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'brand_name' => 'B ONE SOUL',
                'visibility_status' => 1,
                'image_id' => NULL,
                'created_at' => '2023-01-31 11:53:18',
                'updated_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'brand_name' => 'B&T CLUB',
                'visibility_status' => 1,
                'image_id' => NULL,
                'created_at' => '2023-01-31 11:53:18',
                'updated_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'brand_name' => 'b.box',
                'visibility_status' => 1,
                'image_id' => NULL,
                'created_at' => '2023-01-31 11:53:18',
                'updated_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'brand_name' => 'B.C STOCK',
                'visibility_status' => 1,
                'image_id' => NULL,
                'created_at' => '2023-01-31 11:53:18',
                'updated_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'brand_name' => '#5 DREAM',
                'visibility_status' => 1,
                'image_id' => NULL,
                'created_at' => '2023-01-31 11:53:18',
                'updated_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'brand_name' => '#Re:room',
                'visibility_status' => 1,
                'image_id' => NULL,
                'created_at' => '2023-01-31 11:53:18',
                'updated_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'brand_name' => 'C.C.CROSS',
                'visibility_status' => 1,
                'image_id' => NULL,
                'created_at' => '2023-01-31 11:53:18',
                'updated_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'brand_name' => 'c.u.l',
                'visibility_status' => 1,
                'image_id' => NULL,
                'created_at' => '2023-01-31 11:53:18',
                'updated_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'brand_name' => 'D by DADWAY',
                'visibility_status' => 1,
                'image_id' => NULL,
                'created_at' => '2023-01-31 11:53:18',
                'updated_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'brand_name' => 'e JEANS',
                'visibility_status' => 1,
                'image_id' => NULL,
                'created_at' => '2023-01-31 11:53:18',
                'updated_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'brand_name' => 'F by ROSSO',
                'visibility_status' => 1,
                'image_id' => NULL,
                'created_at' => '2023-01-31 11:53:18',
                'updated_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'brand_name' => 'G by Guess',
                'visibility_status' => 1,
                'image_id' => NULL,
                'created_at' => '2023-01-31 11:53:18',
                'updated_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'brand_name' => 'H　BEAUTY&YOUTH UNITED ARROWS',
                'visibility_status' => 1,
                'image_id' => NULL,
                'created_at' => '2023-01-31 11:53:18',
                'updated_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'brand_name' => 'I am I in fact...',
                'visibility_status' => 1,
                'image_id' => NULL,
                'created_at' => '2023-01-31 11:53:18',
                'updated_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'brand_name' => 'J by blue',
                'visibility_status' => 1,
                'image_id' => NULL,
                'created_at' => '2023-01-31 11:53:18',
                'updated_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'brand_name' => 'K.Spin',
                'visibility_status' => 1,
                'image_id' => NULL,
                'created_at' => '2023-01-31 11:53:18',
                'updated_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'brand_name' => 'L＆Co.',
                'visibility_status' => 1,
                'image_id' => NULL,
                'created_at' => '2023-01-31 11:53:18',
                'updated_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'brand_name' => 'M A S U',
                'visibility_status' => 1,
                'image_id' => NULL,
                'created_at' => '2023-01-31 11:53:18',
                'updated_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'brand_name' => 'N WITH.',
                'visibility_status' => 1,
                'image_id' => NULL,
                'created_at' => '2023-01-31 11:53:18',
                'updated_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'brand_name' => 'O',
                'visibility_status' => 1,
                'image_id' => NULL,
                'created_at' => '2023-01-31 11:53:18',
                'updated_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'brand_name' => 'P.A.M.',
                'visibility_status' => 1,
                'image_id' => NULL,
                'created_at' => '2023-01-31 11:53:18',
                'updated_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'brand_name' => 'Q',
                'visibility_status' => 1,
                'image_id' => NULL,
                'created_at' => '2023-01-31 11:53:18',
                'updated_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'brand_name' => 'R JUBILEE',
                'visibility_status' => 1,
                'image_id' => NULL,
                'created_at' => '2023-01-31 11:53:18',
                'updated_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'brand_name' => 'S H',
                'visibility_status' => 1,
                'image_id' => NULL,
                'created_at' => '2023-01-31 11:53:18',
                'updated_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'brand_name' => 't a r o s u',
                'visibility_status' => 1,
                'image_id' => NULL,
                'created_at' => '2023-01-31 11:53:18',
                'updated_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'brand_name' => 'U',
                'visibility_status' => 1,
                'image_id' => NULL,
                'created_at' => '2023-01-31 11:53:18',
                'updated_at' => '2023-01-31 11:53:18',
                'deleted_at' => '2023-01-31 11:53:18',
            ),
            34 => 
            array (
                'id' => 35,
                'brand_name' => 'V SEVEN TWELVE THIRTY',
                'visibility_status' => 1,
                'image_id' => NULL,
                'created_at' => '2023-01-31 11:53:18',
                'updated_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'brand_name' => 'w closet',
                'visibility_status' => 1,
                'image_id' => NULL,
                'created_at' => '2023-01-31 11:53:18',
                'updated_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
            'brand_name' => 'Y(dot) BY NORDISK',
                'visibility_status' => 1,
                'image_id' => NULL,
                'created_at' => '2023-01-31 11:53:18',
                'updated_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'brand_name' => 'Z&MA',
                'visibility_status' => 1,
                'image_id' => NULL,
                'created_at' => '2023-01-31 11:53:18',
                'updated_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'brand_name' => 'XC',
                'visibility_status' => 1,
                'image_id' => NULL,
                'created_at' => '2023-01-31 11:53:18',
                'updated_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'brand_name' => 'BASS',
                'visibility_status' => 1,
                'image_id' => NULL,
                'created_at' => '2023-01-31 11:53:18',
                'updated_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'brand_name' => 'BeMee',
                'visibility_status' => 1,
                'image_id' => NULL,
                'created_at' => '2023-01-31 11:53:18',
                'updated_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'brand_name' => 'earth music&ecology Blue Label',
                'visibility_status' => 1,
                'image_id' => NULL,
                'created_at' => '2023-01-31 11:53:18',
                'updated_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'brand_name' => 'FIRST DOWN EXPLORATION GEAR',
                'visibility_status' => 1,
                'image_id' => NULL,
                'created_at' => '2023-01-31 11:53:18',
                'updated_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'brand_name' => 'Fisherman Out of Ireland',
                'visibility_status' => 1,
                'image_id' => NULL,
                'created_at' => '2023-01-31 11:53:18',
                'updated_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'brand_name' => 'FRANKLIN & MARSHALL',
                'visibility_status' => 1,
                'image_id' => NULL,
                'created_at' => '2023-01-31 11:53:18',
                'updated_at' => '2023-01-31 11:53:18',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}