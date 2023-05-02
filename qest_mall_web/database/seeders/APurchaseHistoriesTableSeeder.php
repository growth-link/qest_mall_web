<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class APurchaseHistoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('a_purchase_histories')->delete();
        
        \DB::table('a_purchase_histories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'item_id' => 37,
                'purchase_quantity' => 10,
                'created_at' => '2023-04-21 18:04:00',
                'updated_at' => '2023-04-21 18:04:00',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'item_id' => 2,
                'purchase_quantity' => 1,
                'created_at' => '2023-04-21 18:05:37',
                'updated_at' => '2023-04-21 18:05:37',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'item_id' => 24,
                'purchase_quantity' => 1,
                'created_at' => '2023-04-21 18:05:54',
                'updated_at' => '2023-04-21 18:05:54',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'item_id' => 60,
                'purchase_quantity' => 11,
                'created_at' => '2023-04-21 18:06:05',
                'updated_at' => '2023-04-21 18:06:05',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'item_id' => 7,
                'purchase_quantity' => 3,
                'created_at' => '2023-04-21 18:06:18',
                'updated_at' => '2023-04-21 18:06:18',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'item_id' => 1,
                'purchase_quantity' => 2,
                'created_at' => '2023-04-21 18:07:46',
                'updated_at' => '2023-04-21 18:07:46',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'item_id' => 15,
                'purchase_quantity' => 1,
                'created_at' => '2023-04-21 18:07:56',
                'updated_at' => '2023-04-21 18:07:56',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'item_id' => 24,
                'purchase_quantity' => 4,
                'created_at' => '2023-04-21 18:08:13',
                'updated_at' => '2023-04-21 18:08:13',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'item_id' => 48,
                'purchase_quantity' => 6,
                'created_at' => '2023-04-21 18:08:42',
                'updated_at' => '2023-04-21 18:08:42',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'item_id' => 5,
                'purchase_quantity' => 2,
                'created_at' => '2023-04-21 18:09:09',
                'updated_at' => '2023-04-21 18:09:09',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'item_id' => 12,
                'purchase_quantity' => 1,
                'created_at' => '2023-04-21 18:09:19',
                'updated_at' => '2023-04-21 18:09:19',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'item_id' => 17,
                'purchase_quantity' => 6,
                'created_at' => '2023-04-21 18:09:33',
                'updated_at' => '2023-04-21 18:09:33',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'item_id' => 33,
                'purchase_quantity' => 3,
                'created_at' => '2023-04-21 18:12:21',
                'updated_at' => '2023-04-21 18:12:21',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'item_id' => 31,
                'purchase_quantity' => 1,
                'created_at' => '2023-04-21 18:12:40',
                'updated_at' => '2023-04-21 18:12:40',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'item_id' => 41,
                'purchase_quantity' => 2,
                'created_at' => '2023-04-21 18:12:53',
                'updated_at' => '2023-04-21 18:12:53',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'item_id' => 45,
                'purchase_quantity' => 1,
                'created_at' => '2023-04-21 18:13:09',
                'updated_at' => '2023-04-21 18:13:09',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'item_id' => 27,
                'purchase_quantity' => 4,
                'created_at' => '2023-04-21 18:13:27',
                'updated_at' => '2023-04-21 18:13:27',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'item_id' => 16,
                'purchase_quantity' => 6,
                'created_at' => '2023-04-21 18:13:38',
                'updated_at' => '2023-04-21 18:13:38',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'item_id' => 18,
                'purchase_quantity' => 1,
                'created_at' => '2023-04-21 18:13:49',
                'updated_at' => '2023-04-21 18:13:49',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'item_id' => 6,
                'purchase_quantity' => 7,
                'created_at' => '2023-04-21 18:14:13',
                'updated_at' => '2023-04-21 18:14:13',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'item_id' => 61,
                'purchase_quantity' => 3,
                'created_at' => '2023-04-21 18:14:27',
                'updated_at' => '2023-04-21 18:14:27',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'item_id' => 58,
                'purchase_quantity' => 5,
                'created_at' => '2023-04-21 18:14:38',
                'updated_at' => '2023-04-21 18:14:38',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'item_id' => 42,
                'purchase_quantity' => 2,
                'created_at' => '2023-04-21 18:14:56',
                'updated_at' => '2023-04-21 18:14:56',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'item_id' => 58,
                'purchase_quantity' => 14,
                'created_at' => '2023-04-21 18:15:13',
                'updated_at' => '2023-04-21 18:15:13',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'item_id' => 43,
                'purchase_quantity' => 10,
                'created_at' => '2023-04-21 18:15:34',
                'updated_at' => '2023-04-21 18:15:34',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'item_id' => 32,
                'purchase_quantity' => 2,
                'created_at' => '2023-04-21 18:15:56',
                'updated_at' => '2023-04-21 18:15:56',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'item_id' => 53,
                'purchase_quantity' => 1,
                'created_at' => '2023-04-21 18:16:08',
                'updated_at' => '2023-04-21 18:16:08',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'item_id' => 11,
                'purchase_quantity' => 3,
                'created_at' => '2023-04-21 18:16:20',
                'updated_at' => '2023-04-21 18:16:20',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'item_id' => 55,
                'purchase_quantity' => 1,
                'created_at' => '2023-04-21 18:16:37',
                'updated_at' => '2023-04-21 18:16:37',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'item_id' => 47,
                'purchase_quantity' => 1,
                'created_at' => '2023-04-21 18:16:55',
                'updated_at' => '2023-04-21 18:16:55',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'item_id' => 31,
                'purchase_quantity' => 7,
                'created_at' => '2023-04-21 18:17:19',
                'updated_at' => '2023-04-21 18:17:19',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'item_id' => 26,
                'purchase_quantity' => 9,
                'created_at' => '2023-04-21 18:17:33',
                'updated_at' => '2023-04-21 18:17:33',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'item_id' => 3,
                'purchase_quantity' => 3,
                'created_at' => '2023-04-21 18:17:59',
                'updated_at' => '2023-04-21 18:17:59',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'item_id' => 9,
                'purchase_quantity' => 4,
                'created_at' => '2023-04-21 18:18:47',
                'updated_at' => '2023-04-21 18:18:47',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'item_id' => 22,
                'purchase_quantity' => 1,
                'created_at' => '2023-04-21 18:19:12',
                'updated_at' => '2023-04-21 18:19:12',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}