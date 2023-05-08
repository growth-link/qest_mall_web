<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PrefecturesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('prefectures')->delete();
        
        \DB::table('prefectures')->insert(array (
            0 => 
            array (
                'id' => 1,
                'prefecture_full_name' => '北海道',
                'prefecture_name' => '北海道',
                'region_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'prefecture_full_name' => '青森県',
                'prefecture_name' => '青森',
                'region_id' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'prefecture_full_name' => '秋田県',
                'prefecture_name' => '秋田',
                'region_id' => 2,
            ),
            3 => 
            array (
                'id' => 4,
                'prefecture_full_name' => '岩手県',
                'prefecture_name' => '岩手',
                'region_id' => 2,
            ),
            4 => 
            array (
                'id' => 5,
                'prefecture_full_name' => '宮城県',
                'prefecture_name' => '宮城',
                'region_id' => 3,
            ),
            5 => 
            array (
                'id' => 6,
                'prefecture_full_name' => '山形県',
                'prefecture_name' => '山形',
                'region_id' => 3,
            ),
            6 => 
            array (
                'id' => 7,
                'prefecture_full_name' => '福島県',
                'prefecture_name' => '福島',
                'region_id' => 3,
            ),
            7 => 
            array (
                'id' => 8,
                'prefecture_full_name' => '茨城県',
                'prefecture_name' => '茨城',
                'region_id' => 4,
            ),
            8 => 
            array (
                'id' => 9,
                'prefecture_full_name' => '栃木県',
                'prefecture_name' => '栃木',
                'region_id' => 4,
            ),
            9 => 
            array (
                'id' => 10,
                'prefecture_full_name' => '群馬県',
                'prefecture_name' => '群馬',
                'region_id' => 4,
            ),
            10 => 
            array (
                'id' => 11,
                'prefecture_full_name' => '埼玉県',
                'prefecture_name' => '埼玉',
                'region_id' => 4,
            ),
            11 => 
            array (
                'id' => 12,
                'prefecture_full_name' => '千葉県',
                'prefecture_name' => '千葉',
                'region_id' => 4,
            ),
            12 => 
            array (
                'id' => 13,
                'prefecture_full_name' => '神奈川県',
                'prefecture_name' => '神奈川',
                'region_id' => 4,
            ),
            13 => 
            array (
                'id' => 14,
                'prefecture_full_name' => '東京都',
                'prefecture_name' => '東京',
                'region_id' => 4,
            ),
            14 => 
            array (
                'id' => 15,
                'prefecture_full_name' => '山梨県',
                'prefecture_name' => '山梨',
                'region_id' => 4,
            ),
            15 => 
            array (
                'id' => 16,
                'prefecture_full_name' => '新潟県',
                'prefecture_name' => '新潟',
                'region_id' => 5,
            ),
            16 => 
            array (
                'id' => 17,
                'prefecture_full_name' => '長野県',
                'prefecture_name' => '長野',
                'region_id' => 5,
            ),
            17 => 
            array (
                'id' => 18,
                'prefecture_full_name' => '富山県',
                'prefecture_name' => '富山',
                'region_id' => 6,
            ),
            18 => 
            array (
                'id' => 19,
                'prefecture_full_name' => '石川県',
                'prefecture_name' => '石川',
                'region_id' => 7,
            ),
            19 => 
            array (
                'id' => 20,
                'prefecture_full_name' => '福井県',
                'prefecture_name' => '福井',
                'region_id' => 7,
            ),
            20 => 
            array (
                'id' => 21,
                'prefecture_full_name' => '静岡県',
                'prefecture_name' => '静岡',
                'region_id' => 8,
            ),
            21 => 
            array (
                'id' => 22,
                'prefecture_full_name' => '愛知県',
                'prefecture_name' => '愛知',
                'region_id' => 8,
            ),
            22 => 
            array (
                'id' => 23,
                'prefecture_full_name' => '三重県',
                'prefecture_name' => '三重',
                'region_id' => 8,
            ),
            23 => 
            array (
                'id' => 24,
                'prefecture_full_name' => '岐阜県',
                'prefecture_name' => '岐阜',
                'region_id' => 8,
            ),
            24 => 
            array (
                'id' => 25,
                'prefecture_full_name' => '大阪府',
                'prefecture_name' => '大阪',
                'region_id' => 9,
            ),
            25 => 
            array (
                'id' => 26,
                'prefecture_full_name' => '京都府',
                'prefecture_name' => '京都',
                'region_id' => 9,
            ),
            26 => 
            array (
                'id' => 27,
                'prefecture_full_name' => '滋賀県',
                'prefecture_name' => '滋賀',
                'region_id' => 9,
            ),
            27 => 
            array (
                'id' => 28,
                'prefecture_full_name' => '奈良県',
                'prefecture_name' => '奈良',
                'region_id' => 9,
            ),
            28 => 
            array (
                'id' => 29,
                'prefecture_full_name' => '和歌山県',
                'prefecture_name' => '和歌山',
                'region_id' => 9,
            ),
            29 => 
            array (
                'id' => 30,
                'prefecture_full_name' => '兵庫県',
                'prefecture_name' => '兵庫',
                'region_id' => 9,
            ),
            30 => 
            array (
                'id' => 31,
                'prefecture_full_name' => '岡山県',
                'prefecture_name' => '岡山',
                'region_id' => 10,
            ),
            31 => 
            array (
                'id' => 32,
                'prefecture_full_name' => '広島県',
                'prefecture_name' => '広島',
                'region_id' => 10,
            ),
            32 => 
            array (
                'id' => 33,
                'prefecture_full_name' => '山口県',
                'prefecture_name' => '山口',
                'region_id' => 10,
            ),
            33 => 
            array (
                'id' => 34,
                'prefecture_full_name' => '鳥取県',
                'prefecture_name' => '鳥取',
                'region_id' => 10,
            ),
            34 => 
            array (
                'id' => 35,
                'prefecture_full_name' => '島根県',
                'prefecture_name' => '島根',
                'region_id' => 10,
            ),
            35 => 
            array (
                'id' => 36,
                'prefecture_full_name' => '香川県',
                'prefecture_name' => '香川',
                'region_id' => 11,
            ),
            36 => 
            array (
                'id' => 37,
                'prefecture_full_name' => '徳島県',
                'prefecture_name' => '徳島',
                'region_id' => 11,
            ),
            37 => 
            array (
                'id' => 38,
                'prefecture_full_name' => '愛媛県',
                'prefecture_name' => '愛媛',
                'region_id' => 11,
            ),
            38 => 
            array (
                'id' => 39,
                'prefecture_full_name' => '高知県',
                'prefecture_name' => '高知',
                'region_id' => 11,
            ),
            39 => 
            array (
                'id' => 40,
                'prefecture_full_name' => '福岡県',
                'prefecture_name' => '福岡',
                'region_id' => 12,
            ),
            40 => 
            array (
                'id' => 41,
                'prefecture_full_name' => '佐賀県',
                'prefecture_name' => '佐賀',
                'region_id' => 12,
            ),
            41 => 
            array (
                'id' => 42,
                'prefecture_full_name' => '長崎県',
                'prefecture_name' => '長崎',
                'region_id' => 12,
            ),
            42 => 
            array (
                'id' => 43,
                'prefecture_full_name' => '熊本県',
                'prefecture_name' => '熊本',
                'region_id' => 12,
            ),
            43 => 
            array (
                'id' => 44,
                'prefecture_full_name' => '大分県',
                'prefecture_name' => '大分',
                'region_id' => 12,
            ),
            44 => 
            array (
                'id' => 45,
                'prefecture_full_name' => '宮崎県',
                'prefecture_name' => '宮崎',
                'region_id' => 12,
            ),
            45 => 
            array (
                'id' => 46,
                'prefecture_full_name' => '鹿児島県',
                'prefecture_name' => '鹿児島',
                'region_id' => 12,
            ),
            46 => 
            array (
                'id' => 47,
                'prefecture_full_name' => '沖縄県',
                'prefecture_name' => '沖縄',
                'region_id' => 13,
            ),
        ));
        
        
    }
}