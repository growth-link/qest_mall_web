<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ShopsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('shops')->delete();
        
        \DB::table('shops')->insert(array (
            0 => 
            array (
                'id' => 1,
                'shop_name' => '天のめぐみ',
                'shop_tt_code' => 'TT12345678',
                'visibility_status' => 1,
                'image_id' => 48,
                'created_at' => '2023-01-31 11:52:49',
                'updated_at' => '2023-01-31 11:52:49',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'shop_name' => 'mill mill',
                'shop_tt_code' => 'TT87654321',
                'visibility_status' => 1,
                'image_id' => 45,
                'created_at' => '2023-01-31 11:52:49',
                'updated_at' => '2023-01-31 11:52:49',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'shop_name' => '& Life.',
                'shop_tt_code' => NULL,
                'visibility_status' => 1,
                'image_id' => 47,
                'created_at' => '2023-01-31 11:52:49',
                'updated_at' => '2023-01-31 11:52:49',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'shop_name' => 'LIBRE',
                'shop_tt_code' => NULL,
                'visibility_status' => 1,
                'image_id' => 44,
                'created_at' => '2023-01-31 11:52:49',
                'updated_at' => '2023-01-31 11:52:49',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'shop_name' => 'BABY BABY',
                'shop_tt_code' => NULL,
                'visibility_status' => 1,
                'image_id' => 46,
                'created_at' => '2023-01-31 11:52:49',
                'updated_at' => '2023-01-31 11:52:49',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'shop_name' => '天のめぐみ',
                'shop_tt_code' => 'TT12345678',
                'visibility_status' => 1,
                'image_id' => 48,
                'created_at' => '2023-01-31 11:52:49',
                'updated_at' => '2023-01-31 11:52:49',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'shop_name' => 'mill mill',
                'shop_tt_code' => 'TT87654321',
                'visibility_status' => 1,
                'image_id' => 45,
                'created_at' => '2023-01-31 11:52:49',
                'updated_at' => '2023-01-31 11:52:49',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'shop_name' => '& Life.',
                'shop_tt_code' => NULL,
                'visibility_status' => 1,
                'image_id' => 47,
                'created_at' => '2023-01-31 11:52:49',
                'updated_at' => '2023-01-31 11:52:49',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'shop_name' => 'LIBRE',
                'shop_tt_code' => NULL,
                'visibility_status' => 1,
                'image_id' => 44,
                'created_at' => '2023-01-31 11:52:49',
                'updated_at' => '2023-01-31 11:52:49',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'shop_name' => 'BABY BABY',
                'shop_tt_code' => NULL,
                'visibility_status' => 1,
                'image_id' => 46,
                'created_at' => '2023-01-31 11:52:49',
                'updated_at' => '2023-01-31 11:52:49',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'shop_name' => '天のめぐみ',
                'shop_tt_code' => 'TT12345678',
                'visibility_status' => 1,
                'image_id' => 48,
                'created_at' => '2023-01-31 11:52:49',
                'updated_at' => '2023-01-31 11:52:49',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}