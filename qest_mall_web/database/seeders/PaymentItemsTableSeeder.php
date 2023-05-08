<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaymentItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('payment_items')->delete();
        
        \DB::table('payment_items')->insert(array (
            0 => 
            array (
                'brand_name' => '天のめぐみ',
                'color_name' => NULL,
                'id' => 1,
            'item_name' => '【会計テスト用】天然水 ミネラルウォーター 500ml 1セット(6本) ',
                'price' => 3000,
                'purchase_no' => '1-2305-000000001',
                'shipping_cost' => 500,
                'size_name' => NULL,
            ),
            1 => 
            array (
                'brand_name' => 'mill mill',
                'color_name' => 'ホワイト',
                'id' => 2,
            'item_name' => '【会計テスト用】繰り返し使える 3Dビューティマスク(ホワイト) 5枚',
                'price' => 2000,
                'purchase_no' => '1-2305-000000001',
                'shipping_cost' => 500,
                'size_name' => 'M',
            ),
        ));
        
        
    }
}