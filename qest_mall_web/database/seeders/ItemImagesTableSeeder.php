<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ItemImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('item_images')->delete();
        
        \DB::table('item_images')->insert(array (
            0 => 
            array (
                'item_image_id' => 1,
                'item_id' => 1,
                'image_url' => '/images/item/item1.png',
                'is_sumbnail' => 1,
                'created_at' => '2023-01-31 11:52:12',
                'updated_at' => '2023-01-31 11:52:12',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'item_image_id' => 2,
                'item_id' => 2,
                'image_url' => '/images/item/item2.png',
                'is_sumbnail' => 1,
                'created_at' => '2023-01-31 11:52:12',
                'updated_at' => '2023-01-31 11:52:12',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'item_image_id' => 3,
                'item_id' => 3,
                'image_url' => '/images/item/item3.png',
                'is_sumbnail' => 1,
                'created_at' => '2023-01-31 11:52:12',
                'updated_at' => '2023-01-31 11:52:12',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'item_image_id' => 4,
                'item_id' => 4,
                'image_url' => '/images/item/item4.png',
                'is_sumbnail' => 1,
                'created_at' => '2023-01-31 11:52:12',
                'updated_at' => '2023-01-31 11:52:12',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'item_image_id' => 5,
                'item_id' => 5,
                'image_url' => '/images/item/item5.png',
                'is_sumbnail' => 1,
                'created_at' => '2023-01-31 11:52:12',
                'updated_at' => '2023-01-31 11:52:12',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'item_image_id' => 6,
                'item_id' => 6,
                'image_url' => '/images/item/item1.png',
                'is_sumbnail' => 1,
                'created_at' => '2023-01-31 11:52:12',
                'updated_at' => '2023-01-31 11:52:12',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'item_image_id' => 7,
                'item_id' => 7,
                'image_url' => '/images/item/item2.png',
                'is_sumbnail' => 1,
                'created_at' => '2023-01-31 11:52:12',
                'updated_at' => '2023-01-31 11:52:12',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'item_image_id' => 8,
                'item_id' => 8,
                'image_url' => '/images/item/item3.png',
                'is_sumbnail' => 1,
                'created_at' => '2023-01-31 11:52:12',
                'updated_at' => '2023-01-31 11:52:12',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'item_image_id' => 9,
                'item_id' => 9,
                'image_url' => '/images/item/item4.png',
                'is_sumbnail' => 1,
                'created_at' => '2023-01-31 11:52:12',
                'updated_at' => '2023-01-31 11:52:12',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'item_image_id' => 10,
                'item_id' => 10,
                'image_url' => '/images/item/item5.png',
                'is_sumbnail' => 1,
                'created_at' => '2023-01-31 11:52:12',
                'updated_at' => '2023-01-31 11:52:12',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'item_image_id' => 11,
                'item_id' => 11,
                'image_url' => '/images/item/item1.png',
                'is_sumbnail' => 1,
                'created_at' => '2023-01-31 11:52:12',
                'updated_at' => '2023-01-31 11:52:12',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'item_image_id' => 12,
                'item_id' => 12,
                'image_url' => '/images/item/item2.png',
                'is_sumbnail' => 1,
                'created_at' => '2023-01-31 11:52:12',
                'updated_at' => '2023-01-31 11:52:12',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'item_image_id' => 13,
                'item_id' => 13,
                'image_url' => '/images/item/item3.png',
                'is_sumbnail' => 1,
                'created_at' => '2023-01-31 11:52:12',
                'updated_at' => '2023-01-31 11:52:12',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'item_image_id' => 14,
                'item_id' => 14,
                'image_url' => '/images/item/item4.png',
                'is_sumbnail' => 1,
                'created_at' => '2023-01-31 11:52:12',
                'updated_at' => '2023-01-31 11:52:12',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'item_image_id' => 15,
                'item_id' => 15,
                'image_url' => '/images/item/item5.png',
                'is_sumbnail' => 1,
                'created_at' => '2023-01-31 11:52:12',
                'updated_at' => '2023-01-31 11:52:12',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'item_image_id' => 16,
                'item_id' => 16,
                'image_url' => '/images/item/item1.png',
                'is_sumbnail' => 1,
                'created_at' => '2023-01-31 11:52:12',
                'updated_at' => '2023-01-31 11:52:12',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'item_image_id' => 17,
                'item_id' => 17,
                'image_url' => '/images/item/item2.png',
                'is_sumbnail' => 1,
                'created_at' => '2023-01-31 11:52:12',
                'updated_at' => '2023-01-31 11:52:12',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'item_image_id' => 18,
                'item_id' => 18,
                'image_url' => '/images/item/item3.png',
                'is_sumbnail' => 1,
                'created_at' => '2023-01-31 11:52:12',
                'updated_at' => '2023-01-31 11:52:12',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'item_image_id' => 19,
                'item_id' => 19,
                'image_url' => '/images/item/item4.png',
                'is_sumbnail' => 1,
                'created_at' => '2023-01-31 11:52:12',
                'updated_at' => '2023-01-31 11:52:12',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'item_image_id' => 20,
                'item_id' => 20,
                'image_url' => '/images/item/item5.png',
                'is_sumbnail' => 1,
                'created_at' => '2023-01-31 11:52:12',
                'updated_at' => '2023-01-31 11:52:12',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'item_image_id' => 21,
                'item_id' => 21,
                'image_url' => '/images/item/item1.png',
                'is_sumbnail' => 1,
                'created_at' => '2023-01-31 11:52:12',
                'updated_at' => '2023-01-31 11:52:12',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'item_image_id' => 22,
                'item_id' => 22,
                'image_url' => '/images/item/item2.png',
                'is_sumbnail' => 1,
                'created_at' => '2023-01-31 11:52:12',
                'updated_at' => '2023-01-31 11:52:12',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'item_image_id' => 23,
                'item_id' => 23,
                'image_url' => '/images/item/item3.png',
                'is_sumbnail' => 1,
                'created_at' => '2023-01-31 11:52:12',
                'updated_at' => '2023-01-31 11:52:12',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'item_image_id' => 24,
                'item_id' => 24,
                'image_url' => '/images/item/item4.png',
                'is_sumbnail' => 1,
                'created_at' => '2023-01-31 11:52:12',
                'updated_at' => '2023-01-31 11:52:12',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'item_image_id' => 25,
                'item_id' => 25,
                'image_url' => '/images/item/item5.png',
                'is_sumbnail' => 1,
                'created_at' => '2023-01-31 11:52:12',
                'updated_at' => '2023-01-31 11:52:12',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'item_image_id' => 26,
                'item_id' => 26,
                'image_url' => '/images/item/item1.png',
                'is_sumbnail' => 1,
                'created_at' => '2023-01-31 11:52:12',
                'updated_at' => '2023-01-31 11:52:12',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'item_image_id' => 27,
                'item_id' => 27,
                'image_url' => '/images/item/item2.png',
                'is_sumbnail' => 1,
                'created_at' => '2023-01-31 11:52:12',
                'updated_at' => '2023-01-31 11:52:12',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'item_image_id' => 28,
                'item_id' => 28,
                'image_url' => '/images/item/item3.png',
                'is_sumbnail' => 1,
                'created_at' => '2023-01-31 11:52:12',
                'updated_at' => '2023-01-31 11:52:12',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'item_image_id' => 29,
                'item_id' => 29,
                'image_url' => '/images/item/item4.png',
                'is_sumbnail' => 1,
                'created_at' => '2023-01-31 11:52:12',
                'updated_at' => '2023-01-31 11:52:12',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'item_image_id' => 30,
                'item_id' => 30,
                'image_url' => '/images/item/item5.png',
                'is_sumbnail' => 1,
                'created_at' => '2023-01-31 11:52:12',
                'updated_at' => '2023-01-31 11:52:12',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'item_image_id' => 31,
                'item_id' => 31,
                'image_url' => '/images/item/item1.png',
                'is_sumbnail' => 0,
                'created_at' => '2023-01-31 11:52:12',
                'updated_at' => '2023-01-31 11:52:12',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'item_image_id' => 32,
                'item_id' => 31,
                'image_url' => '/images/item/item1.png',
                'is_sumbnail' => 1,
                'created_at' => '2023-01-31 11:52:12',
                'updated_at' => '2023-01-31 11:52:12',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}