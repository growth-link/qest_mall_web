<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ShopDeliveryAreasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('shop_delivery_areas')->delete();
        
        \DB::table('shop_delivery_areas')->insert(array (
            0 => 
            array (
                'area_name' => '北海道',
                'id' => 1,
                'shop_id' => 1,
            ),
            1 => 
            array (
                'area_name' => '青森
',
                'id' => 2,
                'shop_id' => 1,
            ),
            2 => 
            array (
                'area_name' => '宮城
山形
福島',
                'id' => 3,
                'shop_id' => 1,
            ),
            3 => 
            array (
                'area_name' => '茨城
栃木
群馬
埼玉
千葉
神奈川
東京
山梨',
                'id' => 4,
                'shop_id' => 1,
            ),
            4 => 
            array (
                'area_name' => '新潟
長野',
                'id' => 5,
                'shop_id' => 1,
            ),
            5 => 
            array (
                'area_name' => '富山
石川
福井',
                'id' => 6,
                'shop_id' => 1,
            ),
            6 => 
            array (
                'area_name' => '静岡
愛知
三重
岐阜',
                'id' => 7,
                'shop_id' => 1,
            ),
            7 => 
            array (
                'area_name' => '大阪
京都
滋賀
奈良
和歌山
兵庫',
                'id' => 8,
                'shop_id' => 1,
            ),
            8 => 
            array (
                'area_name' => '岡山
広島
山口
鳥取
島根',
                'id' => 9,
                'shop_id' => 1,
            ),
            9 => 
            array (
                'area_name' => '香川
徳島
愛媛
高知',
                'id' => 10,
                'shop_id' => 1,
            ),
            10 => 
            array (
                'area_name' => '福岡
佐賀
長崎
熊本
大分
宮崎
鹿児島',
                'id' => 11,
                'shop_id' => 1,
            ),
            11 => 
            array (
                'area_name' => '沖縄',
                'id' => 12,
                'shop_id' => 1,
            ),
        ));
        
        
    }
}