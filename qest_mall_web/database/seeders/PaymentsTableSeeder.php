<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaymentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('payments')->delete();
        
        \DB::table('payments')->insert(array (
            0 => 
            array (
                'coupon_id' => NULL,
                'coupon_price' => NULL,
                'created_at' => '2023-05-06 00:00:00',
                'credit_card' => 4444,
                'delivery_address_1' => '東京都江東区',
                'delivery_first_name' => '加藤',
                'delivery_first_name_kana' => 'かとう',
                'delivery_last_name' => '未輝斗',
                'delivery_last_name_kana' => 'みきと',
                'delivery_post_code' => 1350004,
                'get_point' => NULL,
                'id' => 1,
                'memo' => NULL,
                'purchase_no' => '1-2305-000000001',
                'shipping_cost' => 1000,
                'user_id' => NULL,
                'voucher_id' => '202305060001',
                'waon_point' => 500,
            ),
            1 => 
            array (
                'coupon_id' => NULL,
                'coupon_price' => NULL,
                'created_at' => '2023-05-06 00:00:00',
                'credit_card' => 4444,
                'delivery_address_1' => '東京都江東区',
                'delivery_first_name' => '加藤',
                'delivery_first_name_kana' => 'かとう',
                'delivery_last_name' => '未輝斗',
                'delivery_last_name_kana' => 'みきと',
                'delivery_post_code' => 1350004,
                'get_point' => NULL,
                'id' => 2,
                'memo' => NULL,
                'purchase_no' => '1-2305-000000002',
                'shipping_cost' => 2000,
                'user_id' => NULL,
                'voucher_id' => '202305060002',
                'waon_point' => 500,
            ),
        ));
        
        
    }
}