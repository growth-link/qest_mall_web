<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'category_name' => 'ファッション',
                'fashion_minor_category_flag' => 0,
                'id' => 1,
                'image_id' => NULL,
                'parent_id' => NULL,
            ),
            1 => 
            array (
                'category_name' => '生活雑貨・ホビー',
                'fashion_minor_category_flag' => 0,
                'id' => 2,
                'image_id' => NULL,
                'parent_id' => NULL,
            ),
            2 => 
            array (
                'category_name' => 'インテリア',
                'fashion_minor_category_flag' => 0,
                'id' => 3,
                'image_id' => NULL,
                'parent_id' => NULL,
            ),
            3 => 
            array (
                'category_name' => 'フード・ドリンク',
                'fashion_minor_category_flag' => 0,
                'id' => 4,
                'image_id' => NULL,
                'parent_id' => NULL,
            ),
            4 => 
            array (
                'category_name' => '美容ケア',
                'fashion_minor_category_flag' => 0,
                'id' => 5,
                'image_id' => NULL,
                'parent_id' => NULL,
            ),
            5 => 
            array (
                'category_name' => 'メンズ',
                'fashion_minor_category_flag' => 0,
                'id' => 6,
                'image_id' => 1,
                'parent_id' => 1,
            ),
            6 => 
            array (
                'category_name' => 'レディース',
                'fashion_minor_category_flag' => 0,
                'id' => 7,
                'image_id' => 2,
                'parent_id' => 1,
            ),
            7 => 
            array (
                'category_name' => 'キッズ',
                'fashion_minor_category_flag' => 0,
                'id' => 8,
                'image_id' => 3,
                'parent_id' => 1,
            ),
            8 => 
            array (
                'category_name' => 'テーブルウェア',
                'fashion_minor_category_flag' => 0,
                'id' => 9,
                'image_id' => 4,
                'parent_id' => 2,
            ),
            9 => 
            array (
                'category_name' => 'キッチン',
                'fashion_minor_category_flag' => 0,
                'id' => 10,
                'image_id' => 5,
                'parent_id' => 2,
            ),
            10 => 
            array (
                'category_name' => 'インテリア雑貨',
                'fashion_minor_category_flag' => 0,
                'id' => 11,
                'image_id' => 6,
                'parent_id' => 2,
            ),
            11 => 
            array (
                'category_name' => 'バス・ハウスキーピング',
                'fashion_minor_category_flag' => 0,
                'id' => 12,
                'image_id' => 7,
                'parent_id' => 2,
            ),
            12 => 
            array (
                'category_name' => 'PC・スマホグッズ/家電',
                'fashion_minor_category_flag' => 0,
                'id' => 13,
                'image_id' => 8,
                'parent_id' => 2,
            ),
            13 => 
            array (
                'category_name' => '文房具',
                'fashion_minor_category_flag' => 0,
                'id' => 14,
                'image_id' => 9,
                'parent_id' => 2,
            ),
            14 => 
            array (
                'category_name' => 'ペット',
                'fashion_minor_category_flag' => 0,
                'id' => 15,
                'image_id' => 10,
                'parent_id' => 2,
            ),
            15 => 
            array (
                'category_name' => 'ベビー・キッズ',
                'fashion_minor_category_flag' => 0,
                'id' => 16,
                'image_id' => 11,
                'parent_id' => 2,
            ),
            16 => 
            array (
                'category_name' => 'ホビー',
                'fashion_minor_category_flag' => 0,
                'id' => 17,
                'image_id' => 12,
                'parent_id' => 2,
            ),
            17 => 
            array (
                'category_name' => 'その他生活雑貨',
                'fashion_minor_category_flag' => 0,
                'id' => 18,
                'image_id' => 33,
                'parent_id' => 2,
            ),
            18 => 
            array (
                'category_name' => '照明',
                'fashion_minor_category_flag' => 0,
                'id' => 19,
                'image_id' => 13,
                'parent_id' => 3,
            ),
            19 => 
            array (
                'category_name' => '家具',
                'fashion_minor_category_flag' => 0,
                'id' => 20,
                'image_id' => 14,
                'parent_id' => 3,
            ),
            20 => 
            array (
                'category_name' => 'ファブリック',
                'fashion_minor_category_flag' => 0,
                'id' => 21,
                'image_id' => 15,
                'parent_id' => 3,
            ),
            21 => 
            array (
                'category_name' => 'ガーデン',
                'fashion_minor_category_flag' => 0,
                'id' => 22,
                'image_id' => 16,
                'parent_id' => 3,
            ),
            22 => 
            array (
                'category_name' => 'その他インテリア',
                'fashion_minor_category_flag' => 0,
                'id' => 23,
                'image_id' => 33,
                'parent_id' => 3,
            ),
            23 => 
            array (
                'category_name' => 'ドリンク',
                'fashion_minor_category_flag' => 0,
                'id' => 24,
                'image_id' => 17,
                'parent_id' => 4,
            ),
            24 => 
            array (
                'category_name' => 'スイーツ・お菓子',
                'fashion_minor_category_flag' => 0,
                'id' => 25,
                'image_id' => 18,
                'parent_id' => 4,
            ),
            25 => 
            array (
                'category_name' => '麺・パスタ',
                'fashion_minor_category_flag' => 0,
                'id' => 26,
                'image_id' => 19,
                'parent_id' => 4,
            ),
            26 => 
            array (
                'category_name' => '米・雑穀',
                'fashion_minor_category_flag' => 0,
                'id' => 27,
                'image_id' => 20,
                'parent_id' => 4,
            ),
            27 => 
            array (
                'category_name' => 'パン・シリアル',
                'fashion_minor_category_flag' => 0,
                'id' => 28,
                'image_id' => 21,
                'parent_id' => 4,
            ),
            28 => 
            array (
                'category_name' => 'シロップ・ジャム',
                'fashion_minor_category_flag' => 0,
                'id' => 29,
                'image_id' => 22,
                'parent_id' => 4,
            ),
            29 => 
            array (
                'category_name' => '健康補助食品',
                'fashion_minor_category_flag' => 0,
                'id' => 30,
                'image_id' => 23,
                'parent_id' => 4,
            ),
            30 => 
            array (
                'category_name' => '調味料・食用油',
                'fashion_minor_category_flag' => 0,
                'id' => 31,
                'image_id' => 24,
                'parent_id' => 4,
            ),
            31 => 
            array (
                'category_name' => 'その他フード・ドリンク',
                'fashion_minor_category_flag' => 0,
                'id' => 32,
                'image_id' => 33,
                'parent_id' => 4,
            ),
            32 => 
            array (
                'category_name' => 'フェイス・ボディソープ',
                'fashion_minor_category_flag' => 0,
                'id' => 33,
                'image_id' => 25,
                'parent_id' => 5,
            ),
            33 => 
            array (
                'category_name' => 'スキンケア',
                'fashion_minor_category_flag' => 0,
                'id' => 34,
                'image_id' => 26,
                'parent_id' => 5,
            ),
            34 => 
            array (
                'category_name' => 'メイク・ネイル',
                'fashion_minor_category_flag' => 0,
                'id' => 35,
                'image_id' => 27,
                'parent_id' => 5,
            ),
            35 => 
            array (
                'category_name' => 'ボディケア',
                'fashion_minor_category_flag' => 0,
                'id' => 36,
                'image_id' => 28,
                'parent_id' => 5,
            ),
            36 => 
            array (
                'category_name' => 'へアケア',
                'fashion_minor_category_flag' => 0,
                'id' => 37,
                'image_id' => 29,
                'parent_id' => 5,
            ),
            37 => 
            array (
                'category_name' => 'バスケア・リラックス',
                'fashion_minor_category_flag' => 0,
                'id' => 38,
                'image_id' => 30,
                'parent_id' => 5,
            ),
            38 => 
            array (
                'category_name' => '香水',
                'fashion_minor_category_flag' => 0,
                'id' => 39,
                'image_id' => 31,
                'parent_id' => 5,
            ),
            39 => 
            array (
                'category_name' => 'オーラルケア',
                'fashion_minor_category_flag' => 0,
                'id' => 40,
                'image_id' => 32,
                'parent_id' => 5,
            ),
            40 => 
            array (
                'category_name' => 'その他美容・ケア',
                'fashion_minor_category_flag' => 0,
                'id' => 41,
                'image_id' => 33,
                'parent_id' => 5,
            ),
            41 => 
            array (
                'category_name' => 'トップス',
                'fashion_minor_category_flag' => 1,
                'id' => 42,
                'image_id' => NULL,
                'parent_id' => 6,
            ),
            42 => 
            array (
                'category_name' => 'ジャケット・アウター',
                'fashion_minor_category_flag' => 1,
                'id' => 43,
                'image_id' => NULL,
                'parent_id' => 6,
            ),
            43 => 
            array (
                'category_name' => 'パンツ',
                'fashion_minor_category_flag' => 1,
                'id' => 44,
                'image_id' => NULL,
                'parent_id' => 6,
            ),
            44 => 
            array (
                'category_name' => 'ルームウェア',
                'fashion_minor_category_flag' => 1,
                'id' => 45,
                'image_id' => NULL,
                'parent_id' => 6,
            ),
            45 => 
            array (
                'category_name' => 'バッグ',
                'fashion_minor_category_flag' => 1,
                'id' => 46,
                'image_id' => NULL,
                'parent_id' => 6,
            ),
            46 => 
            array (
                'category_name' => 'シューズ',
                'fashion_minor_category_flag' => 1,
                'id' => 47,
                'image_id' => NULL,
                'parent_id' => 6,
            ),
            47 => 
            array (
                'category_name' => '帽子',
                'fashion_minor_category_flag' => 1,
                'id' => 48,
                'image_id' => NULL,
                'parent_id' => 6,
            ),
            48 => 
            array (
                'category_name' => 'ファッション雑貨',
                'fashion_minor_category_flag' => 1,
                'id' => 49,
                'image_id' => NULL,
                'parent_id' => 6,
            ),
            49 => 
            array (
                'category_name' => 'アクセサリー',
                'fashion_minor_category_flag' => 1,
                'id' => 50,
                'image_id' => NULL,
                'parent_id' => 6,
            ),
            50 => 
            array (
                'category_name' => 'レッグウェア',
                'fashion_minor_category_flag' => 1,
                'id' => 51,
                'image_id' => NULL,
                'parent_id' => 6,
            ),
            51 => 
            array (
                'category_name' => 'アンダーウェア',
                'fashion_minor_category_flag' => 1,
                'id' => 52,
                'image_id' => NULL,
                'parent_id' => 6,
            ),
            52 => 
            array (
                'category_name' => 'その他ファッション',
                'fashion_minor_category_flag' => 1,
                'id' => 53,
                'image_id' => NULL,
                'parent_id' => 6,
            ),
            53 => 
            array (
                'category_name' => 'トップス',
                'fashion_minor_category_flag' => 1,
                'id' => 54,
                'image_id' => NULL,
                'parent_id' => 7,
            ),
            54 => 
            array (
                'category_name' => 'ジャケット・アウター',
                'fashion_minor_category_flag' => 1,
                'id' => 55,
                'image_id' => NULL,
                'parent_id' => 7,
            ),
            55 => 
            array (
                'category_name' => 'パンツ',
                'fashion_minor_category_flag' => 1,
                'id' => 56,
                'image_id' => NULL,
                'parent_id' => 7,
            ),
            56 => 
            array (
                'category_name' => 'ワンピース',
                'fashion_minor_category_flag' => 1,
                'id' => 57,
                'image_id' => NULL,
                'parent_id' => 7,
            ),
            57 => 
            array (
                'category_name' => 'スカート',
                'fashion_minor_category_flag' => 1,
                'id' => 58,
                'image_id' => NULL,
                'parent_id' => 7,
            ),
            58 => 
            array (
                'category_name' => 'ルームウェア',
                'fashion_minor_category_flag' => 1,
                'id' => 59,
                'image_id' => NULL,
                'parent_id' => 7,
            ),
            59 => 
            array (
                'category_name' => 'バッグ',
                'fashion_minor_category_flag' => 1,
                'id' => 60,
                'image_id' => NULL,
                'parent_id' => 7,
            ),
            60 => 
            array (
                'category_name' => 'シューズ',
                'fashion_minor_category_flag' => 1,
                'id' => 61,
                'image_id' => NULL,
                'parent_id' => 7,
            ),
            61 => 
            array (
                'category_name' => '帽子',
                'fashion_minor_category_flag' => 1,
                'id' => 62,
                'image_id' => NULL,
                'parent_id' => 7,
            ),
            62 => 
            array (
                'category_name' => 'ファッション雑貨',
                'fashion_minor_category_flag' => 1,
                'id' => 63,
                'image_id' => NULL,
                'parent_id' => 7,
            ),
            63 => 
            array (
                'category_name' => 'アクセサリー',
                'fashion_minor_category_flag' => 1,
                'id' => 64,
                'image_id' => NULL,
                'parent_id' => 7,
            ),
            64 => 
            array (
                'category_name' => 'レッグウェア',
                'fashion_minor_category_flag' => 1,
                'id' => 65,
                'image_id' => NULL,
                'parent_id' => 7,
            ),
            65 => 
            array (
                'category_name' => 'アンダーウェア',
                'fashion_minor_category_flag' => 1,
                'id' => 66,
                'image_id' => NULL,
                'parent_id' => 7,
            ),
            66 => 
            array (
                'category_name' => 'その他ファッション',
                'fashion_minor_category_flag' => 1,
                'id' => 67,
                'image_id' => NULL,
                'parent_id' => 7,
            ),
            67 => 
            array (
                'category_name' => 'キッズ・ベビーファッション',
                'fashion_minor_category_flag' => 1,
                'id' => 68,
                'image_id' => NULL,
                'parent_id' => 8,
            ),
            68 => 
            array (
                'category_name' => 'プレート・お皿',
                'fashion_minor_category_flag' => 0,
                'id' => 69,
                'image_id' => NULL,
                'parent_id' => 9,
            ),
            69 => 
            array (
                'category_name' => '鉢・ボウル',
                'fashion_minor_category_flag' => 0,
                'id' => 70,
                'image_id' => NULL,
                'parent_id' => 9,
            ),
            70 => 
            array (
                'category_name' => '茶碗・お椀',
                'fashion_minor_category_flag' => 0,
                'id' => 71,
                'image_id' => NULL,
                'parent_id' => 9,
            ),
            71 => 
            array (
                'category_name' => '湯呑・蕎麦猪口',
                'fashion_minor_category_flag' => 0,
                'id' => 72,
                'image_id' => NULL,
                'parent_id' => 9,
            ),
            72 => 
            array (
                'category_name' => 'マグ・カップ＆ソーサ―',
                'fashion_minor_category_flag' => 0,
                'id' => 73,
                'image_id' => NULL,
                'parent_id' => 9,
            ),
            73 => 
            array (
                'category_name' => 'グラス・タンブラー',
                'fashion_minor_category_flag' => 0,
                'id' => 74,
                'image_id' => NULL,
                'parent_id' => 9,
            ),
            74 => 
            array (
                'category_name' => 'ピッチャー・カラフェ',
                'fashion_minor_category_flag' => 0,
                'id' => 75,
                'image_id' => NULL,
                'parent_id' => 9,
            ),
            75 => 
            array (
                'category_name' => 'カトラリー・箸',
                'fashion_minor_category_flag' => 0,
                'id' => 76,
                'image_id' => NULL,
                'parent_id' => 9,
            ),
            76 => 
            array (
                'category_name' => 'コースター・鍋敷き',
                'fashion_minor_category_flag' => 0,
                'id' => 77,
                'image_id' => NULL,
                'parent_id' => 9,
            ),
            77 => 
            array (
                'category_name' => 'トレー・お盆',
                'fashion_minor_category_flag' => 0,
                'id' => 78,
                'image_id' => NULL,
                'parent_id' => 9,
            ),
            78 => 
            array (
                'category_name' => 'その他テーブルウェア',
                'fashion_minor_category_flag' => 0,
                'id' => 79,
                'image_id' => NULL,
                'parent_id' => 9,
            ),
            79 => 
            array (
                'category_name' => '鍋・フライパン',
                'fashion_minor_category_flag' => 0,
                'id' => 80,
                'image_id' => NULL,
                'parent_id' => 10,
            ),
            80 => 
            array (
                'category_name' => 'キッチンツール',
                'fashion_minor_category_flag' => 0,
                'id' => 81,
                'image_id' => NULL,
                'parent_id' => 10,
            ),
            81 => 
            array (
                'category_name' => 'ナイフ・包丁',
                'fashion_minor_category_flag' => 0,
                'id' => 82,
                'image_id' => NULL,
                'parent_id' => 10,
            ),
            82 => 
            array (
                'category_name' => 'カッティングボード・まな板',
                'fashion_minor_category_flag' => 0,
                'id' => 83,
                'image_id' => NULL,
                'parent_id' => 10,
            ),
            83 => 
            array (
                'category_name' => 'ケトル・薬缶',
                'fashion_minor_category_flag' => 0,
                'id' => 84,
                'image_id' => NULL,
                'parent_id' => 10,
            ),
            84 => 
            array (
                'category_name' => 'ティーポット・お茶グッズ',
                'fashion_minor_category_flag' => 0,
                'id' => 85,
                'image_id' => NULL,
                'parent_id' => 10,
            ),
            85 => 
            array (
                'category_name' => 'コーヒーメーカー・珈琲グッズ',
                'fashion_minor_category_flag' => 0,
                'id' => 86,
                'image_id' => NULL,
                'parent_id' => 10,
            ),
            86 => 
            array (
                'category_name' => '保存容器',
                'fashion_minor_category_flag' => 0,
                'id' => 87,
                'image_id' => NULL,
                'parent_id' => 10,
            ),
            87 => 
            array (
                'category_name' => 'キッチンツール収納',
                'fashion_minor_category_flag' => 0,
                'id' => 88,
                'image_id' => NULL,
                'parent_id' => 10,
            ),
            88 => 
            array (
                'category_name' => 'お弁当箱・お弁当グッズ',
                'fashion_minor_category_flag' => 0,
                'id' => 89,
                'image_id' => NULL,
                'parent_id' => 10,
            ),
            89 => 
            array (
                'category_name' => 'ボトル・水筒',
                'fashion_minor_category_flag' => 0,
                'id' => 90,
                'image_id' => NULL,
                'parent_id' => 10,
            ),
            90 => 
            array (
                'category_name' => 'キッチンファブリック',
                'fashion_minor_category_flag' => 0,
                'id' => 91,
                'image_id' => NULL,
                'parent_id' => 10,
            ),
            91 => 
            array (
                'category_name' => 'その他キッチン',
                'fashion_minor_category_flag' => 0,
                'id' => 92,
                'image_id' => NULL,
                'parent_id' => 10,
            ),
            92 => 
            array (
                'category_name' => 'フラワーベース',
                'fashion_minor_category_flag' => 0,
                'id' => 93,
                'image_id' => NULL,
                'parent_id' => 11,
            ),
            93 => 
            array (
                'category_name' => 'オブジェ・モービル',
                'fashion_minor_category_flag' => 0,
                'id' => 94,
                'image_id' => NULL,
                'parent_id' => 11,
            ),
            94 => 
            array (
                'category_name' => 'キャンドル・キャンドルスタンド',
                'fashion_minor_category_flag' => 0,
                'id' => 95,
                'image_id' => NULL,
                'parent_id' => 11,
            ),
            95 => 
            array (
                'category_name' => 'アロマ・ディフューザー',
                'fashion_minor_category_flag' => 0,
                'id' => 96,
                'image_id' => NULL,
                'parent_id' => 11,
            ),
            96 => 
            array (
                'category_name' => 'ミラー・手鏡',
                'fashion_minor_category_flag' => 0,
                'id' => 97,
                'image_id' => NULL,
                'parent_id' => 11,
            ),
            97 => 
            array (
                'category_name' => 'かご・収納ボックス',
                'fashion_minor_category_flag' => 0,
                'id' => 98,
                'image_id' => NULL,
                'parent_id' => 11,
            ),
            98 => 
            array (
                'category_name' => 'デスク収納・小物置き',
                'fashion_minor_category_flag' => 0,
                'id' => 99,
                'image_id' => NULL,
                'parent_id' => 11,
            ),
            99 => 
            array (
                'category_name' => '時計',
                'fashion_minor_category_flag' => 0,
                'id' => 100,
                'image_id' => NULL,
                'parent_id' => 11,
            ),
            100 => 
            array (
                'category_name' => '傘立て・ドアストッパー',
                'fashion_minor_category_flag' => 0,
                'id' => 101,
                'image_id' => NULL,
                'parent_id' => 11,
            ),
            101 => 
            array (
                'category_name' => 'ゴミ箱',
                'fashion_minor_category_flag' => 0,
                'id' => 102,
                'image_id' => NULL,
                'parent_id' => 11,
            ),
            102 => 
            array (
                'category_name' => 'ポスター・フレーム',
                'fashion_minor_category_flag' => 0,
                'id' => 103,
                'image_id' => NULL,
                'parent_id' => 11,
            ),
            103 => 
            array (
                'category_name' => 'その他インテリア雑貨',
                'fashion_minor_category_flag' => 0,
                'id' => 104,
                'image_id' => NULL,
                'parent_id' => 11,
            ),
            104 => 
            array (
                'category_name' => 'ランドリーグッズ',
                'fashion_minor_category_flag' => 0,
                'id' => 105,
                'image_id' => NULL,
                'parent_id' => 12,
            ),
            105 => 
            array (
                'category_name' => 'バスグッズ',
                'fashion_minor_category_flag' => 0,
                'id' => 106,
                'image_id' => NULL,
                'parent_id' => 12,
            ),
            106 => 
            array (
                'category_name' => 'タオル・バスマット',
                'fashion_minor_category_flag' => 0,
                'id' => 107,
                'image_id' => NULL,
                'parent_id' => 12,
            ),
            107 => 
            array (
                'category_name' => '掃除用具・ブラシ',
                'fashion_minor_category_flag' => 0,
                'id' => 108,
                'image_id' => NULL,
                'parent_id' => 12,
            ),
            108 => 
            array (
                'category_name' => 'その他バス・ハウスキーピング',
                'fashion_minor_category_flag' => 0,
                'id' => 109,
                'image_id' => NULL,
                'parent_id' => 12,
            ),
            109 => 
            array (
                'category_name' => 'スマホケース/カバー',
                'fashion_minor_category_flag' => 0,
                'id' => 110,
                'image_id' => NULL,
                'parent_id' => 13,
            ),
            110 => 
            array (
                'category_name' => 'スマホグッズ',
                'fashion_minor_category_flag' => 0,
                'id' => 111,
                'image_id' => NULL,
                'parent_id' => 13,
            ),
            111 => 
            array (
                'category_name' => 'PC・タブレットケース',
                'fashion_minor_category_flag' => 0,
                'id' => 112,
                'image_id' => NULL,
                'parent_id' => 13,
            ),
            112 => 
            array (
                'category_name' => 'PCグッズ',
                'fashion_minor_category_flag' => 0,
                'id' => 113,
                'image_id' => NULL,
                'parent_id' => 13,
            ),
            113 => 
            array (
                'category_name' => '生活家電',
                'fashion_minor_category_flag' => 0,
                'id' => 114,
                'image_id' => NULL,
                'parent_id' => 13,
            ),
            114 => 
            array (
                'category_name' => 'キッチン家電',
                'fashion_minor_category_flag' => 0,
                'id' => 115,
                'image_id' => NULL,
                'parent_id' => 13,
            ),
            115 => 
            array (
                'category_name' => 'スピーカー',
                'fashion_minor_category_flag' => 0,
                'id' => 116,
                'image_id' => NULL,
                'parent_id' => 13,
            ),
            116 => 
            array (
                'category_name' => 'ヘッドフォン/イヤホン',
                'fashion_minor_category_flag' => 0,
                'id' => 117,
                'image_id' => NULL,
                'parent_id' => 13,
            ),
            117 => 
            array (
                'category_name' => 'ペン・万年筆',
                'fashion_minor_category_flag' => 0,
                'id' => 118,
                'image_id' => NULL,
                'parent_id' => 14,
            ),
            118 => 
            array (
                'category_name' => '手帳・ノート・メモ',
                'fashion_minor_category_flag' => 0,
                'id' => 119,
                'image_id' => NULL,
                'parent_id' => 14,
            ),
            119 => 
            array (
                'category_name' => 'レターセット・封筒',
                'fashion_minor_category_flag' => 0,
                'id' => 120,
                'image_id' => NULL,
                'parent_id' => 14,
            ),
            120 => 
            array (
                'category_name' => 'カード・はがき',
                'fashion_minor_category_flag' => 0,
                'id' => 121,
                'image_id' => NULL,
                'parent_id' => 14,
            ),
            121 => 
            array (
                'category_name' => 'カレンダー',
                'fashion_minor_category_flag' => 0,
                'id' => 122,
                'image_id' => NULL,
                'parent_id' => 14,
            ),
            122 => 
            array (
                'category_name' => 'スタンプ・ハンコ',
                'fashion_minor_category_flag' => 0,
                'id' => 123,
                'image_id' => NULL,
                'parent_id' => 14,
            ),
            123 => 
            array (
                'category_name' => 'テープ・シール',
                'fashion_minor_category_flag' => 0,
                'id' => 124,
                'image_id' => NULL,
                'parent_id' => 14,
            ),
            124 => 
            array (
                'category_name' => 'はさみ・カッター',
                'fashion_minor_category_flag' => 0,
                'id' => 125,
                'image_id' => NULL,
                'parent_id' => 14,
            ),
            125 => 
            array (
                'category_name' => 'ラッピンググッズ',
                'fashion_minor_category_flag' => 0,
                'id' => 126,
                'image_id' => NULL,
                'parent_id' => 14,
            ),
            126 => 
            array (
                'category_name' => 'その他文房具',
                'fashion_minor_category_flag' => 0,
                'id' => 127,
                'image_id' => NULL,
                'parent_id' => 14,
            ),
            127 => 
            array (
                'category_name' => 'ペットグッズ',
                'fashion_minor_category_flag' => 0,
                'id' => 128,
                'image_id' => NULL,
                'parent_id' => 15,
            ),
            128 => 
            array (
                'category_name' => 'おもちゃ・絵本',
                'fashion_minor_category_flag' => 0,
                'id' => 129,
                'image_id' => NULL,
                'parent_id' => 16,
            ),
            129 => 
            array (
                'category_name' => 'ベビー雑貨',
                'fashion_minor_category_flag' => 0,
                'id' => 130,
                'image_id' => NULL,
                'parent_id' => 16,
            ),
            130 => 
            array (
                'category_name' => 'キッズ雑貨',
                'fashion_minor_category_flag' => 0,
                'id' => 131,
                'image_id' => NULL,
                'parent_id' => 16,
            ),
            131 => 
            array (
                'category_name' => 'お食事グッズ',
                'fashion_minor_category_flag' => 0,
                'id' => 132,
                'image_id' => NULL,
                'parent_id' => 16,
            ),
            132 => 
            array (
                'category_name' => 'その他ベビー・キッズ',
                'fashion_minor_category_flag' => 0,
                'id' => 133,
                'image_id' => NULL,
                'parent_id' => 16,
            ),
            133 => 
            array (
                'category_name' => 'カメラ・カメラグッズ',
                'fashion_minor_category_flag' => 0,
                'id' => 134,
                'image_id' => NULL,
                'parent_id' => 17,
            ),
            134 => 
            array (
                'category_name' => 'トラベルグッズ',
                'fashion_minor_category_flag' => 0,
                'id' => 135,
                'image_id' => NULL,
                'parent_id' => 17,
            ),
            135 => 
            array (
                'category_name' => 'サウナグッズ',
                'fashion_minor_category_flag' => 0,
                'id' => 136,
                'image_id' => NULL,
                'parent_id' => 17,
            ),
            136 => 
            array (
                'category_name' => 'スポーツ・アウトドアグッズ',
                'fashion_minor_category_flag' => 0,
                'id' => 137,
                'image_id' => NULL,
                'parent_id' => 17,
            ),
            137 => 
            array (
                'category_name' => '音楽・本・雑誌',
                'fashion_minor_category_flag' => 0,
                'id' => 138,
                'image_id' => NULL,
                'parent_id' => 17,
            ),
            138 => 
            array (
                'category_name' => '手芸グッズ',
                'fashion_minor_category_flag' => 0,
                'id' => 139,
                'image_id' => NULL,
                'parent_id' => 17,
            ),
            139 => 
            array (
                'category_name' => 'その他ホビー',
                'fashion_minor_category_flag' => 0,
                'id' => 140,
                'image_id' => NULL,
                'parent_id' => 17,
            ),
            140 => 
            array (
                'category_name' => 'その他生活雑貨',
                'fashion_minor_category_flag' => 0,
                'id' => 141,
                'image_id' => NULL,
                'parent_id' => 18,
            ),
            141 => 
            array (
                'category_name' => 'ペンダントライト',
                'fashion_minor_category_flag' => 0,
                'id' => 142,
                'image_id' => NULL,
                'parent_id' => 19,
            ),
            142 => 
            array (
                'category_name' => 'フロアランプ・スタンドライト',
                'fashion_minor_category_flag' => 0,
                'id' => 143,
                'image_id' => NULL,
                'parent_id' => 19,
            ),
            143 => 
            array (
                'category_name' => 'デスクライト・クリップライト',
                'fashion_minor_category_flag' => 0,
                'id' => 144,
                'image_id' => NULL,
                'parent_id' => 19,
            ),
            144 => 
            array (
                'category_name' => 'その他照明',
                'fashion_minor_category_flag' => 0,
                'id' => 145,
                'image_id' => NULL,
                'parent_id' => 19,
            ),
            145 => 
            array (
                'category_name' => 'テーブル',
                'fashion_minor_category_flag' => 0,
                'id' => 146,
                'image_id' => NULL,
                'parent_id' => 20,
            ),
            146 => 
            array (
                'category_name' => '椅子・スツール',
                'fashion_minor_category_flag' => 0,
                'id' => 147,
                'image_id' => NULL,
                'parent_id' => 20,
            ),
            147 => 
            array (
                'category_name' => 'フック・壁掛け',
                'fashion_minor_category_flag' => 0,
                'id' => 148,
                'image_id' => NULL,
                'parent_id' => 20,
            ),
            148 => 
            array (
                'category_name' => 'ラック・収納家具',
                'fashion_minor_category_flag' => 0,
                'id' => 149,
                'image_id' => NULL,
                'parent_id' => 20,
            ),
            149 => 
            array (
                'category_name' => 'その他家具',
                'fashion_minor_category_flag' => 0,
                'id' => 150,
                'image_id' => NULL,
                'parent_id' => 20,
            ),
            150 => 
            array (
                'category_name' => 'カーテン',
                'fashion_minor_category_flag' => 0,
                'id' => 151,
                'image_id' => NULL,
                'parent_id' => 21,
            ),
            151 => 
            array (
                'category_name' => 'クッション',
                'fashion_minor_category_flag' => 0,
                'id' => 152,
                'image_id' => NULL,
                'parent_id' => 21,
            ),
            152 => 
            array (
                'category_name' => 'ブランケット',
                'fashion_minor_category_flag' => 0,
                'id' => 153,
                'image_id' => NULL,
                'parent_id' => 21,
            ),
            153 => 
            array (
                'category_name' => 'ラグ',
                'fashion_minor_category_flag' => 0,
                'id' => 154,
                'image_id' => NULL,
                'parent_id' => 21,
            ),
            154 => 
            array (
                'category_name' => '生地',
                'fashion_minor_category_flag' => 0,
                'id' => 155,
                'image_id' => NULL,
                'parent_id' => 21,
            ),
            155 => 
            array (
                'category_name' => 'その他ファブリック',
                'fashion_minor_category_flag' => 0,
                'id' => 156,
                'image_id' => NULL,
                'parent_id' => 21,
            ),
            156 => 
            array (
                'category_name' => '生花・ドライフラワー',
                'fashion_minor_category_flag' => 0,
                'id' => 157,
                'image_id' => NULL,
                'parent_id' => 22,
            ),
            157 => 
            array (
                'category_name' => '鉢・鉢カバー',
                'fashion_minor_category_flag' => 0,
                'id' => 158,
                'image_id' => NULL,
                'parent_id' => 22,
            ),
            158 => 
            array (
                'category_name' => 'じょうろ',
                'fashion_minor_category_flag' => 0,
                'id' => 159,
                'image_id' => NULL,
                'parent_id' => 22,
            ),
            159 => 
            array (
                'category_name' => 'ガーデン雑貨',
                'fashion_minor_category_flag' => 0,
                'id' => 160,
                'image_id' => NULL,
                'parent_id' => 22,
            ),
            160 => 
            array (
                'category_name' => 'その他ガーデン',
                'fashion_minor_category_flag' => 0,
                'id' => 161,
                'image_id' => NULL,
                'parent_id' => 22,
            ),
            161 => 
            array (
                'category_name' => 'その他インテリア',
                'fashion_minor_category_flag' => 0,
                'id' => 162,
                'image_id' => NULL,
                'parent_id' => 23,
            ),
            162 => 
            array (
                'category_name' => '珈琲',
                'fashion_minor_category_flag' => 0,
                'id' => 163,
                'image_id' => NULL,
                'parent_id' => 24,
            ),
            163 => 
            array (
                'category_name' => '紅茶',
                'fashion_minor_category_flag' => 0,
                'id' => 164,
                'image_id' => NULL,
                'parent_id' => 24,
            ),
            164 => 
            array (
                'category_name' => 'お茶',
                'fashion_minor_category_flag' => 0,
                'id' => 165,
                'image_id' => NULL,
                'parent_id' => 24,
            ),
            165 => 
            array (
                'category_name' => 'ジュース',
                'fashion_minor_category_flag' => 0,
                'id' => 166,
                'image_id' => NULL,
                'parent_id' => 24,
            ),
            166 => 
            array (
                'category_name' => 'その他ドリンク',
                'fashion_minor_category_flag' => 0,
                'id' => 167,
                'image_id' => NULL,
                'parent_id' => 24,
            ),
            167 => 
            array (
                'category_name' => '焼き菓子・クッキー',
                'fashion_minor_category_flag' => 0,
                'id' => 168,
                'image_id' => NULL,
                'parent_id' => 25,
            ),
            168 => 
            array (
                'category_name' => 'チョコレート',
                'fashion_minor_category_flag' => 0,
                'id' => 169,
                'image_id' => NULL,
                'parent_id' => 25,
            ),
            169 => 
            array (
                'category_name' => '米菓子',
                'fashion_minor_category_flag' => 0,
                'id' => 170,
                'image_id' => NULL,
                'parent_id' => 25,
            ),
            170 => 
            array (
                'category_name' => '飴・キャンディ',
                'fashion_minor_category_flag' => 0,
                'id' => 171,
                'image_id' => NULL,
                'parent_id' => 25,
            ),
            171 => 
            array (
                'category_name' => '和菓子',
                'fashion_minor_category_flag' => 0,
                'id' => 172,
                'image_id' => NULL,
                'parent_id' => 25,
            ),
            172 => 
            array (
                'category_name' => 'スナック菓子・チップス',
                'fashion_minor_category_flag' => 0,
                'id' => 173,
                'image_id' => NULL,
                'parent_id' => 25,
            ),
            173 => 
            array (
                'category_name' => 'その他スイーツ・お菓子',
                'fashion_minor_category_flag' => 0,
                'id' => 174,
                'image_id' => NULL,
                'parent_id' => 25,
            ),
            174 => 
            array (
                'category_name' => 'うどん・そば',
                'fashion_minor_category_flag' => 0,
                'id' => 175,
                'image_id' => NULL,
                'parent_id' => 26,
            ),
            175 => 
            array (
                'category_name' => 'パスタ',
                'fashion_minor_category_flag' => 0,
                'id' => 176,
                'image_id' => NULL,
                'parent_id' => 26,
            ),
            176 => 
            array (
                'category_name' => 'その他麺・パスタ',
                'fashion_minor_category_flag' => 0,
                'id' => 177,
                'image_id' => NULL,
                'parent_id' => 26,
            ),
            177 => 
            array (
                'category_name' => '米',
                'fashion_minor_category_flag' => 0,
                'id' => 178,
                'image_id' => NULL,
                'parent_id' => 27,
            ),
            178 => 
            array (
                'category_name' => '雑穀',
                'fashion_minor_category_flag' => 0,
                'id' => 179,
                'image_id' => NULL,
                'parent_id' => 27,
            ),
            179 => 
            array (
                'category_name' => 'パン・シリアル',
                'fashion_minor_category_flag' => 0,
                'id' => 180,
                'image_id' => NULL,
                'parent_id' => 28,
            ),
            180 => 
            array (
                'category_name' => 'オートミール',
                'fashion_minor_category_flag' => 0,
                'id' => 181,
                'image_id' => NULL,
                'parent_id' => 28,
            ),
            181 => 
            array (
                'category_name' => 'シロップ',
                'fashion_minor_category_flag' => 0,
                'id' => 182,
                'image_id' => NULL,
                'parent_id' => 29,
            ),
            182 => 
            array (
                'category_name' => 'ジャム',
                'fashion_minor_category_flag' => 0,
                'id' => 183,
                'image_id' => NULL,
                'parent_id' => 29,
            ),
            183 => 
            array (
                'category_name' => 'ハチミツ',
                'fashion_minor_category_flag' => 0,
                'id' => 184,
                'image_id' => NULL,
                'parent_id' => 29,
            ),
            184 => 
            array (
                'category_name' => 'その他シロップ・ジャム',
                'fashion_minor_category_flag' => 0,
                'id' => 185,
                'image_id' => NULL,
                'parent_id' => 29,
            ),
            185 => 
            array (
                'category_name' => '健康補助食品',
                'fashion_minor_category_flag' => 0,
                'id' => 186,
                'image_id' => NULL,
                'parent_id' => 30,
            ),
            186 => 
            array (
                'category_name' => 'スーパーフード',
                'fashion_minor_category_flag' => 0,
                'id' => 187,
                'image_id' => NULL,
                'parent_id' => 30,
            ),
            187 => 
            array (
                'category_name' => 'その他健康補助食品',
                'fashion_minor_category_flag' => 0,
                'id' => 188,
                'image_id' => NULL,
                'parent_id' => 30,
            ),
            188 => 
            array (
                'category_name' => '調味料',
                'fashion_minor_category_flag' => 0,
                'id' => 189,
                'image_id' => NULL,
                'parent_id' => 31,
            ),
            189 => 
            array (
                'category_name' => '食用油・バター',
                'fashion_minor_category_flag' => 0,
                'id' => 190,
                'image_id' => NULL,
                'parent_id' => 31,
            ),
            190 => 
            array (
                'category_name' => 'その他フード・ドリンク',
                'fashion_minor_category_flag' => 0,
                'id' => 191,
                'image_id' => NULL,
                'parent_id' => 32,
            ),
            191 => 
            array (
                'category_name' => '洗顔料',
                'fashion_minor_category_flag' => 0,
                'id' => 192,
                'image_id' => NULL,
                'parent_id' => 33,
            ),
            192 => 
            array (
                'category_name' => 'ボディソープ',
                'fashion_minor_category_flag' => 0,
                'id' => 193,
                'image_id' => NULL,
                'parent_id' => 33,
            ),
            193 => 
            array (
                'category_name' => 'ハンドソープ',
                'fashion_minor_category_flag' => 0,
                'id' => 194,
                'image_id' => NULL,
                'parent_id' => 33,
            ),
            194 => 
            array (
                'category_name' => '石鹸',
                'fashion_minor_category_flag' => 0,
                'id' => 195,
                'image_id' => NULL,
                'parent_id' => 33,
            ),
            195 => 
            array (
                'category_name' => 'その他フェイス・ボディソープ',
                'fashion_minor_category_flag' => 0,
                'id' => 196,
                'image_id' => NULL,
                'parent_id' => 33,
            ),
            196 => 
            array (
                'category_name' => '化粧水',
                'fashion_minor_category_flag' => 0,
                'id' => 197,
                'image_id' => NULL,
                'parent_id' => 34,
            ),
            197 => 
            array (
                'category_name' => '乳液',
                'fashion_minor_category_flag' => 0,
                'id' => 198,
                'image_id' => NULL,
                'parent_id' => 34,
            ),
            198 => 
            array (
                'category_name' => 'クリーム・美容液',
                'fashion_minor_category_flag' => 0,
                'id' => 199,
                'image_id' => NULL,
                'parent_id' => 34,
            ),
            199 => 
            array (
                'category_name' => 'パック',
                'fashion_minor_category_flag' => 0,
                'id' => 200,
                'image_id' => NULL,
                'parent_id' => 34,
            ),
            200 => 
            array (
                'category_name' => 'リップケア',
                'fashion_minor_category_flag' => 0,
                'id' => 201,
                'image_id' => NULL,
                'parent_id' => 34,
            ),
            201 => 
            array (
                'category_name' => 'その他スキンケア',
                'fashion_minor_category_flag' => 0,
                'id' => 202,
                'image_id' => NULL,
                'parent_id' => 34,
            ),
            202 => 
            array (
                'category_name' => 'ベースメイク',
                'fashion_minor_category_flag' => 0,
                'id' => 203,
                'image_id' => NULL,
                'parent_id' => 35,
            ),
            203 => 
            array (
                'category_name' => 'メイクアップ',
                'fashion_minor_category_flag' => 0,
                'id' => 204,
                'image_id' => NULL,
                'parent_id' => 35,
            ),
            204 => 
            array (
                'category_name' => 'ネイル',
                'fashion_minor_category_flag' => 0,
                'id' => 205,
                'image_id' => NULL,
                'parent_id' => 35,
            ),
            205 => 
            array (
                'category_name' => 'その他メイク・ネイル',
                'fashion_minor_category_flag' => 0,
                'id' => 206,
                'image_id' => NULL,
                'parent_id' => 35,
            ),
            206 => 
            array (
                'category_name' => 'ボディクリーム',
                'fashion_minor_category_flag' => 0,
                'id' => 207,
                'image_id' => NULL,
                'parent_id' => 36,
            ),
            207 => 
            array (
                'category_name' => 'ハンドクリーム',
                'fashion_minor_category_flag' => 0,
                'id' => 208,
                'image_id' => NULL,
                'parent_id' => 36,
            ),
            208 => 
            array (
                'category_name' => 'その他ボディケア',
                'fashion_minor_category_flag' => 0,
                'id' => 209,
                'image_id' => NULL,
                'parent_id' => 36,
            ),
            209 => 
            array (
                'category_name' => 'シャンプ―・コンディショナー',
                'fashion_minor_category_flag' => 0,
                'id' => 210,
                'image_id' => NULL,
                'parent_id' => 37,
            ),
            210 => 
            array (
                'category_name' => 'ヘアケア・トリートメント',
                'fashion_minor_category_flag' => 0,
                'id' => 211,
                'image_id' => NULL,
                'parent_id' => 37,
            ),
            211 => 
            array (
                'category_name' => 'スタイリング',
                'fashion_minor_category_flag' => 0,
                'id' => 212,
                'image_id' => NULL,
                'parent_id' => 37,
            ),
            212 => 
            array (
                'category_name' => 'ヘアブラシ',
                'fashion_minor_category_flag' => 0,
                'id' => 213,
                'image_id' => NULL,
                'parent_id' => 37,
            ),
            213 => 
            array (
                'category_name' => 'その他へアケア',
                'fashion_minor_category_flag' => 0,
                'id' => 214,
                'image_id' => NULL,
                'parent_id' => 37,
            ),
            214 => 
            array (
                'category_name' => '入浴剤',
                'fashion_minor_category_flag' => 0,
                'id' => 215,
                'image_id' => NULL,
                'parent_id' => 38,
            ),
            215 => 
            array (
                'category_name' => 'バスケア',
                'fashion_minor_category_flag' => 0,
                'id' => 216,
                'image_id' => NULL,
                'parent_id' => 38,
            ),
            216 => 
            array (
                'category_name' => 'その他バスケア・リラックス',
                'fashion_minor_category_flag' => 0,
                'id' => 217,
                'image_id' => NULL,
                'parent_id' => 38,
            ),
            217 => 
            array (
                'category_name' => '香水',
                'fashion_minor_category_flag' => 0,
                'id' => 218,
                'image_id' => NULL,
                'parent_id' => 39,
            ),
            218 => 
            array (
                'category_name' => 'その他香水',
                'fashion_minor_category_flag' => 0,
                'id' => 219,
                'image_id' => NULL,
                'parent_id' => 39,
            ),
            219 => 
            array (
                'category_name' => '歯ブラシ・歯磨き粉',
                'fashion_minor_category_flag' => 0,
                'id' => 220,
                'image_id' => NULL,
                'parent_id' => 40,
            ),
            220 => 
            array (
                'category_name' => 'その他オーラルケア',
                'fashion_minor_category_flag' => 0,
                'id' => 221,
                'image_id' => NULL,
                'parent_id' => 40,
            ),
            221 => 
            array (
                'category_name' => 'その他美容・ケア',
                'fashion_minor_category_flag' => 0,
                'id' => 222,
                'image_id' => NULL,
                'parent_id' => 41,
            ),
            222 => 
            array (
                'category_name' => 'Tシャツ・カットソー',
                'fashion_minor_category_flag' => 0,
                'id' => 223,
                'image_id' => NULL,
                'parent_id' => 42,
            ),
            223 => 
            array (
                'category_name' => 'シャツ・ブラウス',
                'fashion_minor_category_flag' => 0,
                'id' => 224,
                'image_id' => NULL,
                'parent_id' => 42,
            ),
            224 => 
            array (
                'category_name' => 'ポロシャツ',
                'fashion_minor_category_flag' => 0,
                'id' => 225,
                'image_id' => NULL,
                'parent_id' => 42,
            ),
            225 => 
            array (
                'category_name' => 'ニット・セーター',
                'fashion_minor_category_flag' => 0,
                'id' => 226,
                'image_id' => NULL,
                'parent_id' => 42,
            ),
            226 => 
            array (
                'category_name' => 'カーディガン',
                'fashion_minor_category_flag' => 0,
                'id' => 227,
                'image_id' => NULL,
                'parent_id' => 42,
            ),
            227 => 
            array (
                'category_name' => 'パーカー・スウェット',
                'fashion_minor_category_flag' => 0,
                'id' => 228,
                'image_id' => NULL,
                'parent_id' => 42,
            ),
            228 => 
            array (
                'category_name' => 'ベスト',
                'fashion_minor_category_flag' => 0,
                'id' => 229,
                'image_id' => NULL,
                'parent_id' => 42,
            ),
            229 => 
            array (
                'category_name' => 'タンクトップ・キャミソール',
                'fashion_minor_category_flag' => 0,
                'id' => 230,
                'image_id' => NULL,
                'parent_id' => 42,
            ),
            230 => 
            array (
                'category_name' => 'その他トップス',
                'fashion_minor_category_flag' => 0,
                'id' => 231,
                'image_id' => NULL,
                'parent_id' => 42,
            ),
            231 => 
            array (
                'category_name' => 'デニムジャケット',
                'fashion_minor_category_flag' => 0,
                'id' => 232,
                'image_id' => NULL,
                'parent_id' => 43,
            ),
            232 => 
            array (
                'category_name' => 'テーラードジャケット',
                'fashion_minor_category_flag' => 0,
                'id' => 233,
                'image_id' => NULL,
                'parent_id' => 43,
            ),
            233 => 
            array (
                'category_name' => 'ノーカラージャケット',
                'fashion_minor_category_flag' => 0,
                'id' => 234,
                'image_id' => NULL,
                'parent_id' => 43,
            ),
            234 => 
            array (
                'category_name' => 'MA-1',
                'fashion_minor_category_flag' => 0,
                'id' => 235,
                'image_id' => NULL,
                'parent_id' => 43,
            ),
            235 => 
            array (
                'category_name' => 'ミリタリージャケット',
                'fashion_minor_category_flag' => 0,
                'id' => 236,
                'image_id' => NULL,
                'parent_id' => 43,
            ),
            236 => 
            array (
                'category_name' => 'ブルゾン',
                'fashion_minor_category_flag' => 0,
                'id' => 237,
                'image_id' => NULL,
                'parent_id' => 43,
            ),
            237 => 
            array (
                'category_name' => 'スタジャン',
                'fashion_minor_category_flag' => 0,
                'id' => 238,
                'image_id' => NULL,
                'parent_id' => 43,
            ),
            238 => 
            array (
                'category_name' => 'ムートンコート',
                'fashion_minor_category_flag' => 0,
                'id' => 239,
                'image_id' => NULL,
                'parent_id' => 43,
            ),
            239 => 
            array (
                'category_name' => 'ライダースジャケット',
                'fashion_minor_category_flag' => 0,
                'id' => 240,
                'image_id' => NULL,
                'parent_id' => 43,
            ),
            240 => 
            array (
                'category_name' => 'ダウンジャケット・ダウンベスト',
                'fashion_minor_category_flag' => 0,
                'id' => 241,
                'image_id' => NULL,
                'parent_id' => 43,
            ),
            241 => 
            array (
                'category_name' => 'チェスターコート',
                'fashion_minor_category_flag' => 0,
                'id' => 242,
                'image_id' => NULL,
                'parent_id' => 43,
            ),
            242 => 
            array (
                'category_name' => 'トレンチ・ステンカラーコート',
                'fashion_minor_category_flag' => 0,
                'id' => 243,
                'image_id' => NULL,
                'parent_id' => 43,
            ),
            243 => 
            array (
                'category_name' => 'ノーカラーコート',
                'fashion_minor_category_flag' => 0,
                'id' => 244,
                'image_id' => NULL,
                'parent_id' => 43,
            ),
            244 => 
            array (
                'category_name' => 'ダッフルコート',
                'fashion_minor_category_flag' => 0,
                'id' => 245,
                'image_id' => NULL,
                'parent_id' => 43,
            ),
            245 => 
            array (
                'category_name' => 'モッズ・ミリタリーコート',
                'fashion_minor_category_flag' => 0,
                'id' => 246,
                'image_id' => NULL,
                'parent_id' => 43,
            ),
            246 => 
            array (
                'category_name' => 'ピーコート',
                'fashion_minor_category_flag' => 0,
                'id' => 247,
                'image_id' => NULL,
                'parent_id' => 43,
            ),
            247 => 
            array (
                'category_name' => 'マウンテンパーカー',
                'fashion_minor_category_flag' => 0,
                'id' => 248,
                'image_id' => NULL,
                'parent_id' => 43,
            ),
            248 => 
            array (
                'category_name' => 'ナイロンジャケット',
                'fashion_minor_category_flag' => 0,
                'id' => 249,
                'image_id' => NULL,
                'parent_id' => 43,
            ),
            249 => 
            array (
                'category_name' => 'セットアップ',
                'fashion_minor_category_flag' => 0,
                'id' => 250,
                'image_id' => NULL,
                'parent_id' => 43,
            ),
            250 => 
            array (
                'category_name' => 'その他ジャケット・アウター',
                'fashion_minor_category_flag' => 0,
                'id' => 251,
                'image_id' => NULL,
                'parent_id' => 43,
            ),
            251 => 
            array (
                'category_name' => 'デニムパンツ',
                'fashion_minor_category_flag' => 0,
                'id' => 252,
                'image_id' => NULL,
                'parent_id' => 44,
            ),
            252 => 
            array (
                'category_name' => 'チノパンツ',
                'fashion_minor_category_flag' => 0,
                'id' => 253,
                'image_id' => NULL,
                'parent_id' => 44,
            ),
            253 => 
            array (
                'category_name' => 'スウェットパンツ',
                'fashion_minor_category_flag' => 0,
                'id' => 254,
                'image_id' => NULL,
                'parent_id' => 44,
            ),
            254 => 
            array (
                'category_name' => 'スラックス',
                'fashion_minor_category_flag' => 0,
                'id' => 255,
                'image_id' => NULL,
                'parent_id' => 44,
            ),
            255 => 
            array (
                'category_name' => 'オールインワン・サロペット',
                'fashion_minor_category_flag' => 0,
                'id' => 256,
                'image_id' => NULL,
                'parent_id' => 44,
            ),
            256 => 
            array (
                'category_name' => 'その他パンツ',
                'fashion_minor_category_flag' => 0,
                'id' => 257,
                'image_id' => NULL,
                'parent_id' => 44,
            ),
            257 => 
            array (
                'category_name' => 'ルームウェア',
                'fashion_minor_category_flag' => 0,
                'id' => 258,
                'image_id' => NULL,
                'parent_id' => 45,
            ),
            258 => 
            array (
                'category_name' => 'ルームシューズ',
                'fashion_minor_category_flag' => 0,
                'id' => 259,
                'image_id' => NULL,
                'parent_id' => 45,
            ),
            259 => 
            array (
                'category_name' => 'その他ルームウェア',
                'fashion_minor_category_flag' => 0,
                'id' => 260,
                'image_id' => NULL,
                'parent_id' => 45,
            ),
            260 => 
            array (
                'category_name' => 'トートバッグ',
                'fashion_minor_category_flag' => 0,
                'id' => 261,
                'image_id' => NULL,
                'parent_id' => 46,
            ),
            261 => 
            array (
                'category_name' => 'ショルダーバッグ',
                'fashion_minor_category_flag' => 0,
                'id' => 262,
                'image_id' => NULL,
                'parent_id' => 46,
            ),
            262 => 
            array (
                'category_name' => 'ボディバッグ',
                'fashion_minor_category_flag' => 0,
                'id' => 263,
                'image_id' => NULL,
                'parent_id' => 46,
            ),
            263 => 
            array (
                'category_name' => 'ハンドバッグ',
                'fashion_minor_category_flag' => 0,
                'id' => 264,
                'image_id' => NULL,
                'parent_id' => 46,
            ),
            264 => 
            array (
                'category_name' => 'クラッチバッグ',
                'fashion_minor_category_flag' => 0,
                'id' => 265,
                'image_id' => NULL,
                'parent_id' => 46,
            ),
            265 => 
            array (
                'category_name' => 'リュックサック・バックパック',
                'fashion_minor_category_flag' => 0,
                'id' => 266,
                'image_id' => NULL,
                'parent_id' => 46,
            ),
            266 => 
            array (
                'category_name' => 'かごバッグ',
                'fashion_minor_category_flag' => 0,
                'id' => 267,
                'image_id' => NULL,
                'parent_id' => 46,
            ),
            267 => 
            array (
                'category_name' => 'エコバッグ',
                'fashion_minor_category_flag' => 0,
                'id' => 268,
                'image_id' => NULL,
                'parent_id' => 46,
            ),
            268 => 
            array (
                'category_name' => 'その他バッグ',
                'fashion_minor_category_flag' => 0,
                'id' => 269,
                'image_id' => NULL,
                'parent_id' => 46,
            ),
            269 => 
            array (
                'category_name' => 'スニーカー',
                'fashion_minor_category_flag' => 0,
                'id' => 270,
                'image_id' => NULL,
                'parent_id' => 47,
            ),
            270 => 
            array (
                'category_name' => 'スリッポン',
                'fashion_minor_category_flag' => 0,
                'id' => 271,
                'image_id' => NULL,
                'parent_id' => 47,
            ),
            271 => 
            array (
                'category_name' => 'サンダル',
                'fashion_minor_category_flag' => 0,
                'id' => 272,
                'image_id' => NULL,
                'parent_id' => 47,
            ),
            272 => 
            array (
                'category_name' => 'パンプス',
                'fashion_minor_category_flag' => 0,
                'id' => 273,
                'image_id' => NULL,
                'parent_id' => 47,
            ),
            273 => 
            array (
                'category_name' => 'ブーツ',
                'fashion_minor_category_flag' => 0,
                'id' => 274,
                'image_id' => NULL,
                'parent_id' => 47,
            ),
            274 => 
            array (
                'category_name' => 'ドレスシューズ',
                'fashion_minor_category_flag' => 0,
                'id' => 275,
                'image_id' => NULL,
                'parent_id' => 47,
            ),
            275 => 
            array (
                'category_name' => 'ローファー',
                'fashion_minor_category_flag' => 0,
                'id' => 276,
                'image_id' => NULL,
                'parent_id' => 47,
            ),
            276 => 
            array (
                'category_name' => 'バレエシューズ',
                'fashion_minor_category_flag' => 0,
                'id' => 277,
                'image_id' => NULL,
                'parent_id' => 47,
            ),
            277 => 
            array (
                'category_name' => 'モカシン/デッキシューズ',
                'fashion_minor_category_flag' => 0,
                'id' => 278,
                'image_id' => NULL,
                'parent_id' => 47,
            ),
            278 => 
            array (
                'category_name' => 'レインシューズ',
                'fashion_minor_category_flag' => 0,
                'id' => 279,
                'image_id' => NULL,
                'parent_id' => 47,
            ),
            279 => 
            array (
                'category_name' => 'その他シューズ',
                'fashion_minor_category_flag' => 0,
                'id' => 280,
                'image_id' => NULL,
                'parent_id' => 47,
            ),
            280 => 
            array (
                'category_name' => 'シューズ小物/雑貨',
                'fashion_minor_category_flag' => 0,
                'id' => 281,
                'image_id' => NULL,
                'parent_id' => 47,
            ),
            281 => 
            array (
                'category_name' => 'ニット帽',
                'fashion_minor_category_flag' => 0,
                'id' => 282,
                'image_id' => NULL,
                'parent_id' => 48,
            ),
            282 => 
            array (
                'category_name' => 'キャップ',
                'fashion_minor_category_flag' => 0,
                'id' => 283,
                'image_id' => NULL,
                'parent_id' => 48,
            ),
            283 => 
            array (
                'category_name' => 'ハット',
                'fashion_minor_category_flag' => 0,
                'id' => 284,
                'image_id' => NULL,
                'parent_id' => 48,
            ),
            284 => 
            array (
                'category_name' => 'キャスケット',
                'fashion_minor_category_flag' => 0,
                'id' => 285,
                'image_id' => NULL,
                'parent_id' => 48,
            ),
            285 => 
            array (
                'category_name' => 'ベレー帽',
                'fashion_minor_category_flag' => 0,
                'id' => 286,
                'image_id' => NULL,
                'parent_id' => 48,
            ),
            286 => 
            array (
                'category_name' => 'その他キャップ・ハット',
                'fashion_minor_category_flag' => 0,
                'id' => 287,
                'image_id' => NULL,
                'parent_id' => 48,
            ),
            287 => 
            array (
                'category_name' => 'ストール・マフラー',
                'fashion_minor_category_flag' => 0,
                'id' => 288,
                'image_id' => NULL,
                'parent_id' => 49,
            ),
            288 => 
            array (
                'category_name' => 'ベルト',
                'fashion_minor_category_flag' => 0,
                'id' => 289,
                'image_id' => NULL,
                'parent_id' => 49,
            ),
            289 => 
            array (
                'category_name' => '手袋',
                'fashion_minor_category_flag' => 0,
                'id' => 290,
                'image_id' => NULL,
                'parent_id' => 49,
            ),
            290 => 
            array (
                'category_name' => '腕時計',
                'fashion_minor_category_flag' => 0,
                'id' => 291,
                'image_id' => NULL,
                'parent_id' => 49,
            ),
            291 => 
            array (
                'category_name' => '眼鏡・サングラス',
                'fashion_minor_category_flag' => 0,
                'id' => 292,
                'image_id' => NULL,
                'parent_id' => 49,
            ),
            292 => 
            array (
                'category_name' => '傘・レイングッズ',
                'fashion_minor_category_flag' => 0,
                'id' => 293,
                'image_id' => NULL,
                'parent_id' => 49,
            ),
            293 => 
            array (
                'category_name' => '財布・コインケース',
                'fashion_minor_category_flag' => 0,
                'id' => 294,
                'image_id' => NULL,
                'parent_id' => 49,
            ),
            294 => 
            array (
                'category_name' => 'カードケース・名刺入れ',
                'fashion_minor_category_flag' => 0,
                'id' => 295,
                'image_id' => NULL,
                'parent_id' => 49,
            ),
            295 => 
            array (
                'category_name' => 'キーケース・ホルダー',
                'fashion_minor_category_flag' => 0,
                'id' => 296,
                'image_id' => NULL,
                'parent_id' => 49,
            ),
            296 => 
            array (
                'category_name' => 'ポーチ',
                'fashion_minor_category_flag' => 0,
                'id' => 297,
                'image_id' => NULL,
                'parent_id' => 49,
            ),
            297 => 
            array (
                'category_name' => 'ハンカチ',
                'fashion_minor_category_flag' => 0,
                'id' => 298,
                'image_id' => NULL,
                'parent_id' => 49,
            ),
            298 => 
            array (
                'category_name' => 'その他ファション雑貨',
                'fashion_minor_category_flag' => 0,
                'id' => 299,
                'image_id' => NULL,
                'parent_id' => 49,
            ),
            299 => 
            array (
                'category_name' => 'ネックレス',
                'fashion_minor_category_flag' => 0,
                'id' => 300,
                'image_id' => NULL,
                'parent_id' => 50,
            ),
            300 => 
            array (
                'category_name' => '指輪',
                'fashion_minor_category_flag' => 0,
                'id' => 301,
                'image_id' => NULL,
                'parent_id' => 50,
            ),
            301 => 
            array (
                'category_name' => 'ピアス・イヤリング',
                'fashion_minor_category_flag' => 0,
                'id' => 302,
                'image_id' => NULL,
                'parent_id' => 50,
            ),
            302 => 
            array (
                'category_name' => 'ブローチ・コサージュ',
                'fashion_minor_category_flag' => 0,
                'id' => 303,
                'image_id' => NULL,
                'parent_id' => 50,
            ),
            303 => 
            array (
                'category_name' => 'ブレスレット',
                'fashion_minor_category_flag' => 0,
                'id' => 304,
                'image_id' => NULL,
                'parent_id' => 50,
            ),
            304 => 
            array (
                'category_name' => 'ヘアアクセサリー',
                'fashion_minor_category_flag' => 0,
                'id' => 305,
                'image_id' => NULL,
                'parent_id' => 50,
            ),
            305 => 
            array (
                'category_name' => 'その他アクセサリー',
                'fashion_minor_category_flag' => 0,
                'id' => 306,
                'image_id' => NULL,
                'parent_id' => 50,
            ),
            306 => 
            array (
                'category_name' => 'ソックス/靴下',
                'fashion_minor_category_flag' => 0,
                'id' => 307,
                'image_id' => NULL,
                'parent_id' => 51,
            ),
            307 => 
            array (
                'category_name' => 'タイツ/ストッキング',
                'fashion_minor_category_flag' => 0,
                'id' => 308,
                'image_id' => NULL,
                'parent_id' => 51,
            ),
            308 => 
            array (
                'category_name' => 'レギンス/スパッツ',
                'fashion_minor_category_flag' => 0,
                'id' => 309,
                'image_id' => NULL,
                'parent_id' => 51,
            ),
            309 => 
            array (
                'category_name' => 'レッグウォーマー',
                'fashion_minor_category_flag' => 0,
                'id' => 310,
                'image_id' => NULL,
                'parent_id' => 51,
            ),
            310 => 
            array (
                'category_name' => 'その他レッグウェア',
                'fashion_minor_category_flag' => 0,
                'id' => 311,
                'image_id' => NULL,
                'parent_id' => 51,
            ),
            311 => 
            array (
                'category_name' => 'ボクサーパンツ',
                'fashion_minor_category_flag' => 0,
                'id' => 312,
                'image_id' => NULL,
                'parent_id' => 52,
            ),
            312 => 
            array (
                'category_name' => 'トランクス/ブリーフ',
                'fashion_minor_category_flag' => 0,
                'id' => 313,
                'image_id' => NULL,
                'parent_id' => 52,
            ),
            313 => 
            array (
                'category_name' => 'インナーウェア/肌着',
                'fashion_minor_category_flag' => 0,
                'id' => 314,
                'image_id' => NULL,
                'parent_id' => 52,
            ),
            314 => 
            array (
                'category_name' => 'その他アンダーウェア',
                'fashion_minor_category_flag' => 0,
                'id' => 315,
                'image_id' => NULL,
                'parent_id' => 52,
            ),
            315 => 
            array (
                'category_name' => 'その他ファッション',
                'fashion_minor_category_flag' => 0,
                'id' => 316,
                'image_id' => NULL,
                'parent_id' => 53,
            ),
            316 => 
            array (
                'category_name' => 'Tシャツ・カットソー',
                'fashion_minor_category_flag' => 0,
                'id' => 317,
                'image_id' => NULL,
                'parent_id' => 54,
            ),
            317 => 
            array (
                'category_name' => 'シャツ・ブラウス',
                'fashion_minor_category_flag' => 0,
                'id' => 318,
                'image_id' => NULL,
                'parent_id' => 54,
            ),
            318 => 
            array (
                'category_name' => 'ポロシャツ',
                'fashion_minor_category_flag' => 0,
                'id' => 319,
                'image_id' => NULL,
                'parent_id' => 54,
            ),
            319 => 
            array (
                'category_name' => 'ニット・セーター',
                'fashion_minor_category_flag' => 0,
                'id' => 320,
                'image_id' => NULL,
                'parent_id' => 54,
            ),
            320 => 
            array (
                'category_name' => 'カーディガン',
                'fashion_minor_category_flag' => 0,
                'id' => 321,
                'image_id' => NULL,
                'parent_id' => 54,
            ),
            321 => 
            array (
                'category_name' => 'パーカー・スウェット',
                'fashion_minor_category_flag' => 0,
                'id' => 322,
                'image_id' => NULL,
                'parent_id' => 54,
            ),
            322 => 
            array (
                'category_name' => 'ベスト',
                'fashion_minor_category_flag' => 0,
                'id' => 323,
                'image_id' => NULL,
                'parent_id' => 54,
            ),
            323 => 
            array (
                'category_name' => 'タンクトップ・キャミソール',
                'fashion_minor_category_flag' => 0,
                'id' => 324,
                'image_id' => NULL,
                'parent_id' => 54,
            ),
            324 => 
            array (
                'category_name' => 'その他トップス',
                'fashion_minor_category_flag' => 0,
                'id' => 325,
                'image_id' => NULL,
                'parent_id' => 54,
            ),
            325 => 
            array (
                'category_name' => 'デニムジャケット',
                'fashion_minor_category_flag' => 0,
                'id' => 326,
                'image_id' => NULL,
                'parent_id' => 55,
            ),
            326 => 
            array (
                'category_name' => 'テーラードジャケット',
                'fashion_minor_category_flag' => 0,
                'id' => 327,
                'image_id' => NULL,
                'parent_id' => 55,
            ),
            327 => 
            array (
                'category_name' => 'ノーカラージャケット',
                'fashion_minor_category_flag' => 0,
                'id' => 328,
                'image_id' => NULL,
                'parent_id' => 55,
            ),
            328 => 
            array (
                'category_name' => 'MA-1',
                'fashion_minor_category_flag' => 0,
                'id' => 329,
                'image_id' => NULL,
                'parent_id' => 55,
            ),
            329 => 
            array (
                'category_name' => 'ミリタリージャケット',
                'fashion_minor_category_flag' => 0,
                'id' => 330,
                'image_id' => NULL,
                'parent_id' => 55,
            ),
            330 => 
            array (
                'category_name' => 'ブルゾン',
                'fashion_minor_category_flag' => 0,
                'id' => 331,
                'image_id' => NULL,
                'parent_id' => 55,
            ),
            331 => 
            array (
                'category_name' => 'スタジャン',
                'fashion_minor_category_flag' => 0,
                'id' => 332,
                'image_id' => NULL,
                'parent_id' => 55,
            ),
            332 => 
            array (
                'category_name' => 'ムートンコート',
                'fashion_minor_category_flag' => 0,
                'id' => 333,
                'image_id' => NULL,
                'parent_id' => 55,
            ),
            333 => 
            array (
                'category_name' => 'ライダースジャケット',
                'fashion_minor_category_flag' => 0,
                'id' => 334,
                'image_id' => NULL,
                'parent_id' => 55,
            ),
            334 => 
            array (
                'category_name' => 'ダウンジャケット・ダウンベスト',
                'fashion_minor_category_flag' => 0,
                'id' => 335,
                'image_id' => NULL,
                'parent_id' => 55,
            ),
            335 => 
            array (
                'category_name' => 'チェスターコート',
                'fashion_minor_category_flag' => 0,
                'id' => 336,
                'image_id' => NULL,
                'parent_id' => 55,
            ),
            336 => 
            array (
                'category_name' => 'トレンチ・ステンカラーコート',
                'fashion_minor_category_flag' => 0,
                'id' => 337,
                'image_id' => NULL,
                'parent_id' => 55,
            ),
            337 => 
            array (
                'category_name' => 'ノーカラーコート',
                'fashion_minor_category_flag' => 0,
                'id' => 338,
                'image_id' => NULL,
                'parent_id' => 55,
            ),
            338 => 
            array (
                'category_name' => 'モッズ・ミリタリーコート',
                'fashion_minor_category_flag' => 0,
                'id' => 340,
                'image_id' => NULL,
                'parent_id' => 55,
            ),
            339 => 
            array (
                'category_name' => 'ピーコート',
                'fashion_minor_category_flag' => 0,
                'id' => 341,
                'image_id' => NULL,
                'parent_id' => 55,
            ),
            340 => 
            array (
                'category_name' => 'マウンテンパーカー',
                'fashion_minor_category_flag' => 0,
                'id' => 342,
                'image_id' => NULL,
                'parent_id' => 55,
            ),
            341 => 
            array (
                'category_name' => 'ナイロンジャケット',
                'fashion_minor_category_flag' => 0,
                'id' => 343,
                'image_id' => NULL,
                'parent_id' => 55,
            ),
            342 => 
            array (
                'category_name' => 'セットアップ',
                'fashion_minor_category_flag' => 0,
                'id' => 344,
                'image_id' => NULL,
                'parent_id' => 55,
            ),
            343 => 
            array (
                'category_name' => 'その他ジャケット・アウター',
                'fashion_minor_category_flag' => 0,
                'id' => 345,
                'image_id' => NULL,
                'parent_id' => 55,
            ),
            344 => 
            array (
                'category_name' => 'デニムパンツ',
                'fashion_minor_category_flag' => 0,
                'id' => 346,
                'image_id' => NULL,
                'parent_id' => 56,
            ),
            345 => 
            array (
                'category_name' => 'チノパンツ',
                'fashion_minor_category_flag' => 0,
                'id' => 347,
                'image_id' => NULL,
                'parent_id' => 56,
            ),
            346 => 
            array (
                'category_name' => 'スウェットパンツ',
                'fashion_minor_category_flag' => 0,
                'id' => 348,
                'image_id' => NULL,
                'parent_id' => 56,
            ),
            347 => 
            array (
                'category_name' => 'スラックス',
                'fashion_minor_category_flag' => 0,
                'id' => 349,
                'image_id' => NULL,
                'parent_id' => 56,
            ),
            348 => 
            array (
                'category_name' => 'オールインワン・サロペット',
                'fashion_minor_category_flag' => 0,
                'id' => 350,
                'image_id' => NULL,
                'parent_id' => 56,
            ),
            349 => 
            array (
                'category_name' => 'その他パンツ',
                'fashion_minor_category_flag' => 0,
                'id' => 351,
                'image_id' => NULL,
                'parent_id' => 56,
            ),
            350 => 
            array (
                'category_name' => 'ワンピース',
                'fashion_minor_category_flag' => 0,
                'id' => 352,
                'image_id' => NULL,
                'parent_id' => 57,
            ),
            351 => 
            array (
                'category_name' => 'シャツワンピース',
                'fashion_minor_category_flag' => 0,
                'id' => 353,
                'image_id' => NULL,
                'parent_id' => 57,
            ),
            352 => 
            array (
                'category_name' => 'チュニック',
                'fashion_minor_category_flag' => 0,
                'id' => 354,
                'image_id' => NULL,
                'parent_id' => 57,
            ),
            353 => 
            array (
                'category_name' => 'ドレス',
                'fashion_minor_category_flag' => 0,
                'id' => 355,
                'image_id' => NULL,
                'parent_id' => 57,
            ),
            354 => 
            array (
                'category_name' => 'その他ワンピース',
                'fashion_minor_category_flag' => 0,
                'id' => 356,
                'image_id' => NULL,
                'parent_id' => 57,
            ),
            355 => 
            array (
                'category_name' => 'スカート',
                'fashion_minor_category_flag' => 0,
                'id' => 357,
                'image_id' => NULL,
                'parent_id' => 58,
            ),
            356 => 
            array (
                'category_name' => 'デニムスカート',
                'fashion_minor_category_flag' => 0,
                'id' => 358,
                'image_id' => NULL,
                'parent_id' => 58,
            ),
            357 => 
            array (
                'category_name' => 'ルームウェア',
                'fashion_minor_category_flag' => 0,
                'id' => 359,
                'image_id' => NULL,
                'parent_id' => 59,
            ),
            358 => 
            array (
                'category_name' => 'ルームシューズ',
                'fashion_minor_category_flag' => 0,
                'id' => 360,
                'image_id' => NULL,
                'parent_id' => 59,
            ),
            359 => 
            array (
                'category_name' => 'その他ルームウェア',
                'fashion_minor_category_flag' => 0,
                'id' => 361,
                'image_id' => NULL,
                'parent_id' => 59,
            ),
            360 => 
            array (
                'category_name' => 'トートバッグ',
                'fashion_minor_category_flag' => 0,
                'id' => 362,
                'image_id' => NULL,
                'parent_id' => 60,
            ),
            361 => 
            array (
                'category_name' => 'ショルダーバッグ',
                'fashion_minor_category_flag' => 0,
                'id' => 363,
                'image_id' => NULL,
                'parent_id' => 60,
            ),
            362 => 
            array (
                'category_name' => 'ボディバッグ',
                'fashion_minor_category_flag' => 0,
                'id' => 364,
                'image_id' => NULL,
                'parent_id' => 60,
            ),
            363 => 
            array (
                'category_name' => 'ハンドバッグ',
                'fashion_minor_category_flag' => 0,
                'id' => 365,
                'image_id' => NULL,
                'parent_id' => 60,
            ),
            364 => 
            array (
                'category_name' => 'クラッチバッグ',
                'fashion_minor_category_flag' => 0,
                'id' => 366,
                'image_id' => NULL,
                'parent_id' => 60,
            ),
            365 => 
            array (
                'category_name' => 'リュックサック・バックパック',
                'fashion_minor_category_flag' => 0,
                'id' => 367,
                'image_id' => NULL,
                'parent_id' => 60,
            ),
            366 => 
            array (
                'category_name' => 'かごバッグ',
                'fashion_minor_category_flag' => 0,
                'id' => 368,
                'image_id' => NULL,
                'parent_id' => 60,
            ),
            367 => 
            array (
                'category_name' => 'エコバッグ',
                'fashion_minor_category_flag' => 0,
                'id' => 369,
                'image_id' => NULL,
                'parent_id' => 60,
            ),
            368 => 
            array (
                'category_name' => 'その他バッグ',
                'fashion_minor_category_flag' => 0,
                'id' => 370,
                'image_id' => NULL,
                'parent_id' => 60,
            ),
            369 => 
            array (
                'category_name' => 'スニーカー',
                'fashion_minor_category_flag' => 0,
                'id' => 371,
                'image_id' => NULL,
                'parent_id' => 61,
            ),
            370 => 
            array (
                'category_name' => 'スリッポン',
                'fashion_minor_category_flag' => 0,
                'id' => 372,
                'image_id' => NULL,
                'parent_id' => 61,
            ),
            371 => 
            array (
                'category_name' => 'サンダル',
                'fashion_minor_category_flag' => 0,
                'id' => 373,
                'image_id' => NULL,
                'parent_id' => 61,
            ),
            372 => 
            array (
                'category_name' => 'パンプス',
                'fashion_minor_category_flag' => 0,
                'id' => 374,
                'image_id' => NULL,
                'parent_id' => 61,
            ),
            373 => 
            array (
                'category_name' => 'ブーツ',
                'fashion_minor_category_flag' => 0,
                'id' => 375,
                'image_id' => NULL,
                'parent_id' => 61,
            ),
            374 => 
            array (
                'category_name' => 'ドレスシューズ',
                'fashion_minor_category_flag' => 0,
                'id' => 376,
                'image_id' => NULL,
                'parent_id' => 61,
            ),
            375 => 
            array (
                'category_name' => 'ローファー',
                'fashion_minor_category_flag' => 0,
                'id' => 377,
                'image_id' => NULL,
                'parent_id' => 61,
            ),
            376 => 
            array (
                'category_name' => 'バレエシューズ',
                'fashion_minor_category_flag' => 0,
                'id' => 378,
                'image_id' => NULL,
                'parent_id' => 61,
            ),
            377 => 
            array (
                'category_name' => 'モカシン/デッキシューズ',
                'fashion_minor_category_flag' => 0,
                'id' => 379,
                'image_id' => NULL,
                'parent_id' => 61,
            ),
            378 => 
            array (
                'category_name' => 'レインシューズ',
                'fashion_minor_category_flag' => 0,
                'id' => 380,
                'image_id' => NULL,
                'parent_id' => 61,
            ),
            379 => 
            array (
                'category_name' => 'その他シューズ',
                'fashion_minor_category_flag' => 0,
                'id' => 381,
                'image_id' => NULL,
                'parent_id' => 61,
            ),
            380 => 
            array (
                'category_name' => 'シューズ小物/雑貨',
                'fashion_minor_category_flag' => 0,
                'id' => 382,
                'image_id' => NULL,
                'parent_id' => 61,
            ),
            381 => 
            array (
                'category_name' => 'ニット帽',
                'fashion_minor_category_flag' => 0,
                'id' => 383,
                'image_id' => NULL,
                'parent_id' => 62,
            ),
            382 => 
            array (
                'category_name' => 'キャップ',
                'fashion_minor_category_flag' => 0,
                'id' => 384,
                'image_id' => NULL,
                'parent_id' => 62,
            ),
            383 => 
            array (
                'category_name' => 'ハット',
                'fashion_minor_category_flag' => 0,
                'id' => 385,
                'image_id' => NULL,
                'parent_id' => 62,
            ),
            384 => 
            array (
                'category_name' => 'キャスケット',
                'fashion_minor_category_flag' => 0,
                'id' => 386,
                'image_id' => NULL,
                'parent_id' => 62,
            ),
            385 => 
            array (
                'category_name' => 'ベレー帽',
                'fashion_minor_category_flag' => 0,
                'id' => 387,
                'image_id' => NULL,
                'parent_id' => 62,
            ),
            386 => 
            array (
                'category_name' => 'その他キャップ・ハット',
                'fashion_minor_category_flag' => 0,
                'id' => 388,
                'image_id' => NULL,
                'parent_id' => 62,
            ),
            387 => 
            array (
                'category_name' => 'ストール・マフラー',
                'fashion_minor_category_flag' => 0,
                'id' => 389,
                'image_id' => NULL,
                'parent_id' => 63,
            ),
            388 => 
            array (
                'category_name' => 'ベルト',
                'fashion_minor_category_flag' => 0,
                'id' => 390,
                'image_id' => NULL,
                'parent_id' => 63,
            ),
            389 => 
            array (
                'category_name' => '手袋',
                'fashion_minor_category_flag' => 0,
                'id' => 391,
                'image_id' => NULL,
                'parent_id' => 63,
            ),
            390 => 
            array (
                'category_name' => '腕時計',
                'fashion_minor_category_flag' => 0,
                'id' => 392,
                'image_id' => NULL,
                'parent_id' => 63,
            ),
            391 => 
            array (
                'category_name' => '眼鏡・サングラス',
                'fashion_minor_category_flag' => 0,
                'id' => 393,
                'image_id' => NULL,
                'parent_id' => 63,
            ),
            392 => 
            array (
                'category_name' => '傘・レイングッズ',
                'fashion_minor_category_flag' => 0,
                'id' => 394,
                'image_id' => NULL,
                'parent_id' => 63,
            ),
            393 => 
            array (
                'category_name' => '財布・コインケース',
                'fashion_minor_category_flag' => 0,
                'id' => 395,
                'image_id' => NULL,
                'parent_id' => 63,
            ),
            394 => 
            array (
                'category_name' => 'カードケース・名刺入れ',
                'fashion_minor_category_flag' => 0,
                'id' => 396,
                'image_id' => NULL,
                'parent_id' => 63,
            ),
            395 => 
            array (
                'category_name' => 'キーケース・ホルダー',
                'fashion_minor_category_flag' => 0,
                'id' => 397,
                'image_id' => NULL,
                'parent_id' => 63,
            ),
            396 => 
            array (
                'category_name' => 'ポーチ',
                'fashion_minor_category_flag' => 0,
                'id' => 398,
                'image_id' => NULL,
                'parent_id' => 63,
            ),
            397 => 
            array (
                'category_name' => 'ハンカチ',
                'fashion_minor_category_flag' => 0,
                'id' => 399,
                'image_id' => NULL,
                'parent_id' => 63,
            ),
            398 => 
            array (
                'category_name' => 'その他ファション雑貨',
                'fashion_minor_category_flag' => 0,
                'id' => 400,
                'image_id' => NULL,
                'parent_id' => 63,
            ),
            399 => 
            array (
                'category_name' => 'ネックレス',
                'fashion_minor_category_flag' => 0,
                'id' => 401,
                'image_id' => NULL,
                'parent_id' => 64,
            ),
            400 => 
            array (
                'category_name' => '指輪',
                'fashion_minor_category_flag' => 0,
                'id' => 402,
                'image_id' => NULL,
                'parent_id' => 64,
            ),
            401 => 
            array (
                'category_name' => 'ピアス・イヤリング',
                'fashion_minor_category_flag' => 0,
                'id' => 403,
                'image_id' => NULL,
                'parent_id' => 64,
            ),
            402 => 
            array (
                'category_name' => 'ブローチ・コサージュ',
                'fashion_minor_category_flag' => 0,
                'id' => 404,
                'image_id' => NULL,
                'parent_id' => 64,
            ),
            403 => 
            array (
                'category_name' => 'ブレスレット',
                'fashion_minor_category_flag' => 0,
                'id' => 405,
                'image_id' => NULL,
                'parent_id' => 64,
            ),
            404 => 
            array (
                'category_name' => 'ヘアアクセサリー',
                'fashion_minor_category_flag' => 0,
                'id' => 406,
                'image_id' => NULL,
                'parent_id' => 64,
            ),
            405 => 
            array (
                'category_name' => 'その他アクセサリー',
                'fashion_minor_category_flag' => 0,
                'id' => 407,
                'image_id' => NULL,
                'parent_id' => 64,
            ),
            406 => 
            array (
                'category_name' => 'ソックス/靴下',
                'fashion_minor_category_flag' => 0,
                'id' => 408,
                'image_id' => NULL,
                'parent_id' => 65,
            ),
            407 => 
            array (
                'category_name' => 'タイツ/ストッキング',
                'fashion_minor_category_flag' => 0,
                'id' => 409,
                'image_id' => NULL,
                'parent_id' => 65,
            ),
            408 => 
            array (
                'category_name' => 'レギンス/スパッツ',
                'fashion_minor_category_flag' => 0,
                'id' => 410,
                'image_id' => NULL,
                'parent_id' => 65,
            ),
            409 => 
            array (
                'category_name' => 'レッグウォーマー',
                'fashion_minor_category_flag' => 0,
                'id' => 411,
                'image_id' => NULL,
                'parent_id' => 65,
            ),
            410 => 
            array (
                'category_name' => 'その他レッグウェア',
                'fashion_minor_category_flag' => 0,
                'id' => 412,
                'image_id' => NULL,
                'parent_id' => 65,
            ),
            411 => 
            array (
                'category_name' => 'ブラジャー',
                'fashion_minor_category_flag' => 0,
                'id' => 413,
                'image_id' => NULL,
                'parent_id' => 66,
            ),
            412 => 
            array (
                'category_name' => 'ショーツ',
                'fashion_minor_category_flag' => 0,
                'id' => 414,
                'image_id' => NULL,
                'parent_id' => 66,
            ),
            413 => 
            array (
                'category_name' => 'ブラ&ショーツ',
                'fashion_minor_category_flag' => 0,
                'id' => 415,
                'image_id' => NULL,
                'parent_id' => 66,
            ),
            414 => 
            array (
                'category_name' => 'インナーウェア/肌着',
                'fashion_minor_category_flag' => 0,
                'id' => 416,
                'image_id' => NULL,
                'parent_id' => 66,
            ),
            415 => 
            array (
                'category_name' => 'インナーウェア/肌着',
                'fashion_minor_category_flag' => 0,
                'id' => 417,
                'image_id' => NULL,
                'parent_id' => 66,
            ),
            416 => 
            array (
                'category_name' => 'その他ファッション',
                'fashion_minor_category_flag' => 0,
                'id' => 418,
                'image_id' => NULL,
                'parent_id' => 67,
            ),
            417 => 
            array (
                'category_name' => 'キッズファッション',
                'fashion_minor_category_flag' => 0,
                'id' => 419,
                'image_id' => NULL,
                'parent_id' => 68,
            ),
            418 => 
            array (
                'category_name' => 'ベビーファッション',
                'fashion_minor_category_flag' => 0,
                'id' => 420,
                'image_id' => NULL,
                'parent_id' => 68,
            ),
        ));
        
        
    }
}