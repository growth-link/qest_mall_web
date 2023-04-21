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
                'id' => 1,
                'area_name' => '北海道',
                'shop_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'area_name' => '青森
',
                'shop_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'area_name' => '宮城
山形
福島',
                'shop_id' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'area_name' => '茨城
栃木
群馬
埼玉
千葉
神奈川
東京
山梨',
                'shop_id' => 1,
            ),
            4 => 
            array (
                'id' => 5,
                'area_name' => '新潟
長野',
                'shop_id' => 1,
            ),
            5 => 
            array (
                'id' => 6,
                'area_name' => '富山
石川
福井',
                'shop_id' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'area_name' => '静岡
愛知
三重
岐阜',
                'shop_id' => 1,
            ),
            7 => 
            array (
                'id' => 8,
                'area_name' => '大阪
京都
滋賀
奈良
和歌山
兵庫',
                'shop_id' => 1,
            ),
            8 => 
            array (
                'id' => 9,
                'area_name' => '岡山
広島
山口
鳥取
島根',
                'shop_id' => 1,
            ),
            9 => 
            array (
                'id' => 10,
                'area_name' => '香川
徳島
愛媛
高知',
                'shop_id' => 1,
            ),
            10 => 
            array (
                'id' => 11,
                'area_name' => '福岡
佐賀
長崎
熊本
大分
宮崎
鹿児島',
                'shop_id' => 1,
            ),
            11 => 
            array (
                'id' => 12,
                'area_name' => '沖縄',
                'shop_id' => 1,
            ),
        ));
        
        
    }
}