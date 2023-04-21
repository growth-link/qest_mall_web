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
                'region_id' => 1,
                'prefecture_name' => '北海道',
                'prefecture_full_name' => '北海道',
            ),
            1 => 
            array (
                'id' => 2,
                'region_id' => 2,
                'prefecture_name' => '青森',
                'prefecture_full_name' => '青森県',
            ),
            2 => 
            array (
                'id' => 3,
                'region_id' => 2,
                'prefecture_name' => '秋田',
                'prefecture_full_name' => '秋田県',
            ),
            3 => 
            array (
                'id' => 4,
                'region_id' => 2,
                'prefecture_name' => '岩手',
                'prefecture_full_name' => '岩手県',
            ),
            4 => 
            array (
                'id' => 5,
                'region_id' => 3,
                'prefecture_name' => '宮城',
                'prefecture_full_name' => '宮城県',
            ),
            5 => 
            array (
                'id' => 6,
                'region_id' => 3,
                'prefecture_name' => '山形',
                'prefecture_full_name' => '山形県',
            ),
            6 => 
            array (
                'id' => 7,
                'region_id' => 3,
                'prefecture_name' => '福島',
                'prefecture_full_name' => '福島県',
            ),
            7 => 
            array (
                'id' => 8,
                'region_id' => 4,
                'prefecture_name' => '茨城',
                'prefecture_full_name' => '茨城県',
            ),
            8 => 
            array (
                'id' => 9,
                'region_id' => 4,
                'prefecture_name' => '栃木',
                'prefecture_full_name' => '栃木県',
            ),
            9 => 
            array (
                'id' => 10,
                'region_id' => 4,
                'prefecture_name' => '群馬',
                'prefecture_full_name' => '群馬県',
            ),
            10 => 
            array (
                'id' => 11,
                'region_id' => 4,
                'prefecture_name' => '埼玉',
                'prefecture_full_name' => '埼玉県',
            ),
            11 => 
            array (
                'id' => 12,
                'region_id' => 4,
                'prefecture_name' => '千葉',
                'prefecture_full_name' => '千葉県',
            ),
            12 => 
            array (
                'id' => 13,
                'region_id' => 4,
                'prefecture_name' => '神奈川',
                'prefecture_full_name' => '神奈川県',
            ),
            13 => 
            array (
                'id' => 14,
                'region_id' => 4,
                'prefecture_name' => '東京',
                'prefecture_full_name' => '東京都',
            ),
            14 => 
            array (
                'id' => 15,
                'region_id' => 4,
                'prefecture_name' => '山梨',
                'prefecture_full_name' => '山梨県',
            ),
            15 => 
            array (
                'id' => 16,
                'region_id' => 5,
                'prefecture_name' => '新潟',
                'prefecture_full_name' => '新潟県',
            ),
            16 => 
            array (
                'id' => 17,
                'region_id' => 5,
                'prefecture_name' => '長野',
                'prefecture_full_name' => '長野県',
            ),
            17 => 
            array (
                'id' => 18,
                'region_id' => 6,
                'prefecture_name' => '富山',
                'prefecture_full_name' => '富山県',
            ),
            18 => 
            array (
                'id' => 19,
                'region_id' => 7,
                'prefecture_name' => '石川',
                'prefecture_full_name' => '石川県',
            ),
            19 => 
            array (
                'id' => 20,
                'region_id' => 7,
                'prefecture_name' => '福井',
                'prefecture_full_name' => '福井県',
            ),
            20 => 
            array (
                'id' => 21,
                'region_id' => 8,
                'prefecture_name' => '静岡',
                'prefecture_full_name' => '静岡県',
            ),
            21 => 
            array (
                'id' => 22,
                'region_id' => 8,
                'prefecture_name' => '愛知',
                'prefecture_full_name' => '愛知県',
            ),
            22 => 
            array (
                'id' => 23,
                'region_id' => 8,
                'prefecture_name' => '三重',
                'prefecture_full_name' => '三重県',
            ),
            23 => 
            array (
                'id' => 24,
                'region_id' => 8,
                'prefecture_name' => '岐阜',
                'prefecture_full_name' => '岐阜県',
            ),
            24 => 
            array (
                'id' => 25,
                'region_id' => 9,
                'prefecture_name' => '大阪',
                'prefecture_full_name' => '大阪府',
            ),
            25 => 
            array (
                'id' => 26,
                'region_id' => 9,
                'prefecture_name' => '京都',
                'prefecture_full_name' => '京都府',
            ),
            26 => 
            array (
                'id' => 27,
                'region_id' => 9,
                'prefecture_name' => '滋賀',
                'prefecture_full_name' => '滋賀県',
            ),
            27 => 
            array (
                'id' => 28,
                'region_id' => 9,
                'prefecture_name' => '奈良',
                'prefecture_full_name' => '奈良県',
            ),
            28 => 
            array (
                'id' => 29,
                'region_id' => 9,
                'prefecture_name' => '和歌山',
                'prefecture_full_name' => '和歌山県',
            ),
            29 => 
            array (
                'id' => 30,
                'region_id' => 9,
                'prefecture_name' => '兵庫',
                'prefecture_full_name' => '兵庫県',
            ),
            30 => 
            array (
                'id' => 31,
                'region_id' => 10,
                'prefecture_name' => '岡山',
                'prefecture_full_name' => '岡山県',
            ),
            31 => 
            array (
                'id' => 32,
                'region_id' => 10,
                'prefecture_name' => '広島',
                'prefecture_full_name' => '広島県',
            ),
            32 => 
            array (
                'id' => 33,
                'region_id' => 10,
                'prefecture_name' => '山口',
                'prefecture_full_name' => '山口県',
            ),
            33 => 
            array (
                'id' => 34,
                'region_id' => 10,
                'prefecture_name' => '鳥取',
                'prefecture_full_name' => '鳥取県',
            ),
            34 => 
            array (
                'id' => 35,
                'region_id' => 10,
                'prefecture_name' => '島根',
                'prefecture_full_name' => '島根県',
            ),
            35 => 
            array (
                'id' => 36,
                'region_id' => 11,
                'prefecture_name' => '香川',
                'prefecture_full_name' => '香川県',
            ),
            36 => 
            array (
                'id' => 37,
                'region_id' => 11,
                'prefecture_name' => '徳島',
                'prefecture_full_name' => '徳島県',
            ),
            37 => 
            array (
                'id' => 38,
                'region_id' => 11,
                'prefecture_name' => '愛媛',
                'prefecture_full_name' => '愛媛県',
            ),
            38 => 
            array (
                'id' => 39,
                'region_id' => 11,
                'prefecture_name' => '高知',
                'prefecture_full_name' => '高知県',
            ),
            39 => 
            array (
                'id' => 40,
                'region_id' => 12,
                'prefecture_name' => '福岡',
                'prefecture_full_name' => '福岡県',
            ),
            40 => 
            array (
                'id' => 41,
                'region_id' => 12,
                'prefecture_name' => '佐賀',
                'prefecture_full_name' => '佐賀県',
            ),
            41 => 
            array (
                'id' => 42,
                'region_id' => 12,
                'prefecture_name' => '長崎',
                'prefecture_full_name' => '長崎県',
            ),
            42 => 
            array (
                'id' => 43,
                'region_id' => 12,
                'prefecture_name' => '熊本',
                'prefecture_full_name' => '熊本県',
            ),
            43 => 
            array (
                'id' => 44,
                'region_id' => 12,
                'prefecture_name' => '大分',
                'prefecture_full_name' => '大分県',
            ),
            44 => 
            array (
                'id' => 45,
                'region_id' => 12,
                'prefecture_name' => '宮崎',
                'prefecture_full_name' => '宮崎県',
            ),
            45 => 
            array (
                'id' => 46,
                'region_id' => 12,
                'prefecture_name' => '鹿児島',
                'prefecture_full_name' => '鹿児島県',
            ),
            46 => 
            array (
                'id' => 47,
                'region_id' => 13,
                'prefecture_name' => '沖縄',
                'prefecture_full_name' => '沖縄県',
            ),
        ));
        
        
    }
}