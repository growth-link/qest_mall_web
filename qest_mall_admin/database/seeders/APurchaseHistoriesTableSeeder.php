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
                'created_at' => '2023-04-21 18:04:00',
                'deleted_at' => NULL,
                'id' => 1,
                'item_id' => 37,
                'purchase_quantity' => 10,
                'updated_at' => '2023-04-21 18:04:00',
            ),
            1 => 
            array (
                'created_at' => '2023-04-21 18:05:37',
                'deleted_at' => NULL,
                'id' => 2,
                'item_id' => 2,
                'purchase_quantity' => 1,
                'updated_at' => '2023-04-21 18:05:37',
            ),
            2 => 
            array (
                'created_at' => '2023-04-21 18:05:54',
                'deleted_at' => NULL,
                'id' => 3,
                'item_id' => 24,
                'purchase_quantity' => 1,
                'updated_at' => '2023-04-21 18:05:54',
            ),
            3 => 
            array (
                'created_at' => '2023-04-21 18:06:05',
                'deleted_at' => NULL,
                'id' => 4,
                'item_id' => 60,
                'purchase_quantity' => 11,
                'updated_at' => '2023-04-21 18:06:05',
            ),
            4 => 
            array (
                'created_at' => '2023-04-21 18:06:18',
                'deleted_at' => NULL,
                'id' => 5,
                'item_id' => 7,
                'purchase_quantity' => 3,
                'updated_at' => '2023-04-21 18:06:18',
            ),
            5 => 
            array (
                'created_at' => '2023-04-21 18:07:46',
                'deleted_at' => NULL,
                'id' => 6,
                'item_id' => 1,
                'purchase_quantity' => 2,
                'updated_at' => '2023-04-21 18:07:46',
            ),
            6 => 
            array (
                'created_at' => '2023-04-21 18:07:56',
                'deleted_at' => NULL,
                'id' => 7,
                'item_id' => 15,
                'purchase_quantity' => 1,
                'updated_at' => '2023-04-21 18:07:56',
            ),
            7 => 
            array (
                'created_at' => '2023-04-21 18:08:13',
                'deleted_at' => NULL,
                'id' => 8,
                'item_id' => 24,
                'purchase_quantity' => 4,
                'updated_at' => '2023-04-21 18:08:13',
            ),
            8 => 
            array (
                'created_at' => '2023-04-21 18:08:42',
                'deleted_at' => NULL,
                'id' => 9,
                'item_id' => 48,
                'purchase_quantity' => 6,
                'updated_at' => '2023-04-21 18:08:42',
            ),
            9 => 
            array (
                'created_at' => '2023-04-21 18:09:09',
                'deleted_at' => NULL,
                'id' => 10,
                'item_id' => 5,
                'purchase_quantity' => 2,
                'updated_at' => '2023-04-21 18:09:09',
            ),
            10 => 
            array (
                'created_at' => '2023-04-21 18:09:19',
                'deleted_at' => NULL,
                'id' => 11,
                'item_id' => 12,
                'purchase_quantity' => 1,
                'updated_at' => '2023-04-21 18:09:19',
            ),
            11 => 
            array (
                'created_at' => '2023-04-21 18:09:33',
                'deleted_at' => NULL,
                'id' => 12,
                'item_id' => 17,
                'purchase_quantity' => 6,
                'updated_at' => '2023-04-21 18:09:33',
            ),
            12 => 
            array (
                'created_at' => '2023-04-21 18:12:21',
                'deleted_at' => NULL,
                'id' => 13,
                'item_id' => 33,
                'purchase_quantity' => 3,
                'updated_at' => '2023-04-21 18:12:21',
            ),
            13 => 
            array (
                'created_at' => '2023-04-21 18:12:40',
                'deleted_at' => NULL,
                'id' => 14,
                'item_id' => 31,
                'purchase_quantity' => 1,
                'updated_at' => '2023-04-21 18:12:40',
            ),
            14 => 
            array (
                'created_at' => '2023-04-21 18:12:53',
                'deleted_at' => NULL,
                'id' => 15,
                'item_id' => 41,
                'purchase_quantity' => 2,
                'updated_at' => '2023-04-21 18:12:53',
            ),
            15 => 
            array (
                'created_at' => '2023-04-21 18:13:09',
                'deleted_at' => NULL,
                'id' => 16,
                'item_id' => 45,
                'purchase_quantity' => 1,
                'updated_at' => '2023-04-21 18:13:09',
            ),
            16 => 
            array (
                'created_at' => '2023-04-21 18:13:27',
                'deleted_at' => NULL,
                'id' => 17,
                'item_id' => 27,
                'purchase_quantity' => 4,
                'updated_at' => '2023-04-21 18:13:27',
            ),
            17 => 
            array (
                'created_at' => '2023-04-21 18:13:38',
                'deleted_at' => NULL,
                'id' => 18,
                'item_id' => 16,
                'purchase_quantity' => 6,
                'updated_at' => '2023-04-21 18:13:38',
            ),
            18 => 
            array (
                'created_at' => '2023-04-21 18:13:49',
                'deleted_at' => NULL,
                'id' => 19,
                'item_id' => 18,
                'purchase_quantity' => 1,
                'updated_at' => '2023-04-21 18:13:49',
            ),
            19 => 
            array (
                'created_at' => '2023-04-21 18:14:13',
                'deleted_at' => NULL,
                'id' => 20,
                'item_id' => 6,
                'purchase_quantity' => 7,
                'updated_at' => '2023-04-21 18:14:13',
            ),
            20 => 
            array (
                'created_at' => '2023-04-21 18:14:27',
                'deleted_at' => NULL,
                'id' => 21,
                'item_id' => 61,
                'purchase_quantity' => 3,
                'updated_at' => '2023-04-21 18:14:27',
            ),
            21 => 
            array (
                'created_at' => '2023-04-21 18:14:38',
                'deleted_at' => NULL,
                'id' => 22,
                'item_id' => 58,
                'purchase_quantity' => 5,
                'updated_at' => '2023-04-21 18:14:38',
            ),
            22 => 
            array (
                'created_at' => '2023-04-21 18:14:56',
                'deleted_at' => NULL,
                'id' => 23,
                'item_id' => 42,
                'purchase_quantity' => 2,
                'updated_at' => '2023-04-21 18:14:56',
            ),
            23 => 
            array (
                'created_at' => '2023-04-21 18:15:13',
                'deleted_at' => NULL,
                'id' => 24,
                'item_id' => 58,
                'purchase_quantity' => 14,
                'updated_at' => '2023-04-21 18:15:13',
            ),
            24 => 
            array (
                'created_at' => '2023-04-21 18:15:34',
                'deleted_at' => NULL,
                'id' => 25,
                'item_id' => 43,
                'purchase_quantity' => 10,
                'updated_at' => '2023-04-21 18:15:34',
            ),
            25 => 
            array (
                'created_at' => '2023-04-21 18:15:56',
                'deleted_at' => NULL,
                'id' => 26,
                'item_id' => 32,
                'purchase_quantity' => 2,
                'updated_at' => '2023-04-21 18:15:56',
            ),
            26 => 
            array (
                'created_at' => '2023-04-21 18:16:08',
                'deleted_at' => NULL,
                'id' => 27,
                'item_id' => 53,
                'purchase_quantity' => 1,
                'updated_at' => '2023-04-21 18:16:08',
            ),
            27 => 
            array (
                'created_at' => '2023-04-21 18:16:20',
                'deleted_at' => NULL,
                'id' => 28,
                'item_id' => 11,
                'purchase_quantity' => 3,
                'updated_at' => '2023-04-21 18:16:20',
            ),
            28 => 
            array (
                'created_at' => '2023-04-21 18:16:37',
                'deleted_at' => NULL,
                'id' => 29,
                'item_id' => 55,
                'purchase_quantity' => 1,
                'updated_at' => '2023-04-21 18:16:37',
            ),
            29 => 
            array (
                'created_at' => '2023-04-21 18:16:55',
                'deleted_at' => NULL,
                'id' => 30,
                'item_id' => 47,
                'purchase_quantity' => 1,
                'updated_at' => '2023-04-21 18:16:55',
            ),
            30 => 
            array (
                'created_at' => '2023-04-21 18:17:19',
                'deleted_at' => NULL,
                'id' => 31,
                'item_id' => 31,
                'purchase_quantity' => 7,
                'updated_at' => '2023-04-21 18:17:19',
            ),
            31 => 
            array (
                'created_at' => '2023-04-21 18:17:33',
                'deleted_at' => NULL,
                'id' => 32,
                'item_id' => 26,
                'purchase_quantity' => 9,
                'updated_at' => '2023-04-21 18:17:33',
            ),
            32 => 
            array (
                'created_at' => '2023-04-21 18:17:59',
                'deleted_at' => NULL,
                'id' => 33,
                'item_id' => 3,
                'purchase_quantity' => 3,
                'updated_at' => '2023-04-21 18:17:59',
            ),
            33 => 
            array (
                'created_at' => '2023-04-21 18:18:47',
                'deleted_at' => NULL,
                'id' => 34,
                'item_id' => 9,
                'purchase_quantity' => 4,
                'updated_at' => '2023-04-21 18:18:47',
            ),
            34 => 
            array (
                'created_at' => '2023-04-21 18:19:12',
                'deleted_at' => NULL,
                'id' => 35,
                'item_id' => 22,
                'purchase_quantity' => 1,
                'updated_at' => '2023-04-21 18:19:12',
            ),
        ));
        
        
    }
}