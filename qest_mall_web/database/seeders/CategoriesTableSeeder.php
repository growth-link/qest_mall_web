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
                'id' => 1,
                'parent_id' => NULL,
                'category_name' => 'ファッション',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => NULL,
                'category_name' => '生活雑貨・ホビー',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'parent_id' => NULL,
                'category_name' => 'インテリア',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            3 => 
            array (
                'id' => 4,
                'parent_id' => NULL,
                'category_name' => 'フード・ドリンク',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            4 => 
            array (
                'id' => 5,
                'parent_id' => NULL,
                'category_name' => '美容ケア',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            5 => 
            array (
                'id' => 6,
                'parent_id' => 1,
                'category_name' => 'メンズ',
                'image_id' => 1,
                'fashion_minor_category_flag' => 0,
            ),
            6 => 
            array (
                'id' => 7,
                'parent_id' => 1,
                'category_name' => 'レディース',
                'image_id' => 2,
                'fashion_minor_category_flag' => 0,
            ),
            7 => 
            array (
                'id' => 8,
                'parent_id' => 1,
                'category_name' => 'キッズ',
                'image_id' => 3,
                'fashion_minor_category_flag' => 0,
            ),
            8 => 
            array (
                'id' => 9,
                'parent_id' => 2,
                'category_name' => 'テーブルウェア',
                'image_id' => 4,
                'fashion_minor_category_flag' => 0,
            ),
            9 => 
            array (
                'id' => 10,
                'parent_id' => 2,
                'category_name' => 'キッチン',
                'image_id' => 5,
                'fashion_minor_category_flag' => 0,
            ),
            10 => 
            array (
                'id' => 11,
                'parent_id' => 2,
                'category_name' => 'インテリア雑貨',
                'image_id' => 6,
                'fashion_minor_category_flag' => 0,
            ),
            11 => 
            array (
                'id' => 12,
                'parent_id' => 2,
                'category_name' => 'バス・ハウスキーピング',
                'image_id' => 7,
                'fashion_minor_category_flag' => 0,
            ),
            12 => 
            array (
                'id' => 13,
                'parent_id' => 2,
                'category_name' => 'PC・スマホグッズ/家電',
                'image_id' => 8,
                'fashion_minor_category_flag' => 0,
            ),
            13 => 
            array (
                'id' => 14,
                'parent_id' => 2,
                'category_name' => '文房具',
                'image_id' => 9,
                'fashion_minor_category_flag' => 0,
            ),
            14 => 
            array (
                'id' => 15,
                'parent_id' => 2,
                'category_name' => 'ペット',
                'image_id' => 10,
                'fashion_minor_category_flag' => 0,
            ),
            15 => 
            array (
                'id' => 16,
                'parent_id' => 2,
                'category_name' => 'ベビー・キッズ',
                'image_id' => 11,
                'fashion_minor_category_flag' => 0,
            ),
            16 => 
            array (
                'id' => 17,
                'parent_id' => 2,
                'category_name' => 'ホビー',
                'image_id' => 12,
                'fashion_minor_category_flag' => 0,
            ),
            17 => 
            array (
                'id' => 18,
                'parent_id' => 2,
                'category_name' => 'その他生活雑貨',
                'image_id' => 33,
                'fashion_minor_category_flag' => 0,
            ),
            18 => 
            array (
                'id' => 19,
                'parent_id' => 3,
                'category_name' => '照明',
                'image_id' => 13,
                'fashion_minor_category_flag' => 0,
            ),
            19 => 
            array (
                'id' => 20,
                'parent_id' => 3,
                'category_name' => '家具',
                'image_id' => 14,
                'fashion_minor_category_flag' => 0,
            ),
            20 => 
            array (
                'id' => 21,
                'parent_id' => 3,
                'category_name' => 'ファブリック',
                'image_id' => 15,
                'fashion_minor_category_flag' => 0,
            ),
            21 => 
            array (
                'id' => 22,
                'parent_id' => 3,
                'category_name' => 'ガーデン',
                'image_id' => 16,
                'fashion_minor_category_flag' => 0,
            ),
            22 => 
            array (
                'id' => 23,
                'parent_id' => 3,
                'category_name' => 'その他インテリア',
                'image_id' => 33,
                'fashion_minor_category_flag' => 0,
            ),
            23 => 
            array (
                'id' => 24,
                'parent_id' => 4,
                'category_name' => 'ドリンク',
                'image_id' => 17,
                'fashion_minor_category_flag' => 0,
            ),
            24 => 
            array (
                'id' => 25,
                'parent_id' => 4,
                'category_name' => 'スイーツ・お菓子',
                'image_id' => 18,
                'fashion_minor_category_flag' => 0,
            ),
            25 => 
            array (
                'id' => 26,
                'parent_id' => 4,
                'category_name' => '麺・パスタ',
                'image_id' => 19,
                'fashion_minor_category_flag' => 0,
            ),
            26 => 
            array (
                'id' => 27,
                'parent_id' => 4,
                'category_name' => '米・雑穀',
                'image_id' => 20,
                'fashion_minor_category_flag' => 0,
            ),
            27 => 
            array (
                'id' => 28,
                'parent_id' => 4,
                'category_name' => 'パン・シリアル',
                'image_id' => 21,
                'fashion_minor_category_flag' => 0,
            ),
            28 => 
            array (
                'id' => 29,
                'parent_id' => 4,
                'category_name' => 'シロップ・ジャム',
                'image_id' => 22,
                'fashion_minor_category_flag' => 0,
            ),
            29 => 
            array (
                'id' => 30,
                'parent_id' => 4,
                'category_name' => '健康補助食品',
                'image_id' => 23,
                'fashion_minor_category_flag' => 0,
            ),
            30 => 
            array (
                'id' => 31,
                'parent_id' => 4,
                'category_name' => '調味料・食用油',
                'image_id' => 24,
                'fashion_minor_category_flag' => 0,
            ),
            31 => 
            array (
                'id' => 32,
                'parent_id' => 4,
                'category_name' => 'その他フード・ドリンク',
                'image_id' => 33,
                'fashion_minor_category_flag' => 0,
            ),
            32 => 
            array (
                'id' => 33,
                'parent_id' => 5,
                'category_name' => 'フェイス・ボディソープ',
                'image_id' => 25,
                'fashion_minor_category_flag' => 0,
            ),
            33 => 
            array (
                'id' => 34,
                'parent_id' => 5,
                'category_name' => 'スキンケア',
                'image_id' => 26,
                'fashion_minor_category_flag' => 0,
            ),
            34 => 
            array (
                'id' => 35,
                'parent_id' => 5,
                'category_name' => 'メイク・ネイル',
                'image_id' => 27,
                'fashion_minor_category_flag' => 0,
            ),
            35 => 
            array (
                'id' => 36,
                'parent_id' => 5,
                'category_name' => 'ボディケア',
                'image_id' => 28,
                'fashion_minor_category_flag' => 0,
            ),
            36 => 
            array (
                'id' => 37,
                'parent_id' => 5,
                'category_name' => 'へアケア',
                'image_id' => 29,
                'fashion_minor_category_flag' => 0,
            ),
            37 => 
            array (
                'id' => 38,
                'parent_id' => 5,
                'category_name' => 'バスケア・リラックス',
                'image_id' => 30,
                'fashion_minor_category_flag' => 0,
            ),
            38 => 
            array (
                'id' => 39,
                'parent_id' => 5,
                'category_name' => '香水',
                'image_id' => 31,
                'fashion_minor_category_flag' => 0,
            ),
            39 => 
            array (
                'id' => 40,
                'parent_id' => 5,
                'category_name' => 'オーラルケア',
                'image_id' => 32,
                'fashion_minor_category_flag' => 0,
            ),
            40 => 
            array (
                'id' => 41,
                'parent_id' => 5,
                'category_name' => 'その他美容・ケア',
                'image_id' => 33,
                'fashion_minor_category_flag' => 0,
            ),
            41 => 
            array (
                'id' => 42,
                'parent_id' => 6,
                'category_name' => 'トップス',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 1,
            ),
            42 => 
            array (
                'id' => 43,
                'parent_id' => 6,
                'category_name' => 'ジャケット・アウター',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 1,
            ),
            43 => 
            array (
                'id' => 44,
                'parent_id' => 6,
                'category_name' => 'パンツ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 1,
            ),
            44 => 
            array (
                'id' => 45,
                'parent_id' => 6,
                'category_name' => 'ルームウェア',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 1,
            ),
            45 => 
            array (
                'id' => 46,
                'parent_id' => 6,
                'category_name' => 'バッグ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 1,
            ),
            46 => 
            array (
                'id' => 47,
                'parent_id' => 6,
                'category_name' => 'シューズ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 1,
            ),
            47 => 
            array (
                'id' => 48,
                'parent_id' => 6,
                'category_name' => '帽子',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 1,
            ),
            48 => 
            array (
                'id' => 49,
                'parent_id' => 6,
                'category_name' => 'ファッション雑貨',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 1,
            ),
            49 => 
            array (
                'id' => 50,
                'parent_id' => 6,
                'category_name' => 'アクセサリー',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 1,
            ),
            50 => 
            array (
                'id' => 51,
                'parent_id' => 6,
                'category_name' => 'レッグウェア',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 1,
            ),
            51 => 
            array (
                'id' => 52,
                'parent_id' => 6,
                'category_name' => 'アンダーウェア',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 1,
            ),
            52 => 
            array (
                'id' => 53,
                'parent_id' => 6,
                'category_name' => 'その他ファッション',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 1,
            ),
            53 => 
            array (
                'id' => 54,
                'parent_id' => 7,
                'category_name' => 'トップス',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 1,
            ),
            54 => 
            array (
                'id' => 55,
                'parent_id' => 7,
                'category_name' => 'ジャケット・アウター',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 1,
            ),
            55 => 
            array (
                'id' => 56,
                'parent_id' => 7,
                'category_name' => 'パンツ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 1,
            ),
            56 => 
            array (
                'id' => 57,
                'parent_id' => 7,
                'category_name' => 'ワンピース',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 1,
            ),
            57 => 
            array (
                'id' => 58,
                'parent_id' => 7,
                'category_name' => 'スカート',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 1,
            ),
            58 => 
            array (
                'id' => 59,
                'parent_id' => 7,
                'category_name' => 'ルームウェア',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 1,
            ),
            59 => 
            array (
                'id' => 60,
                'parent_id' => 7,
                'category_name' => 'バッグ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 1,
            ),
            60 => 
            array (
                'id' => 61,
                'parent_id' => 7,
                'category_name' => 'シューズ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 1,
            ),
            61 => 
            array (
                'id' => 62,
                'parent_id' => 7,
                'category_name' => '帽子',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 1,
            ),
            62 => 
            array (
                'id' => 63,
                'parent_id' => 7,
                'category_name' => 'ファッション雑貨',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 1,
            ),
            63 => 
            array (
                'id' => 64,
                'parent_id' => 7,
                'category_name' => 'アクセサリー',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 1,
            ),
            64 => 
            array (
                'id' => 65,
                'parent_id' => 7,
                'category_name' => 'レッグウェア',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 1,
            ),
            65 => 
            array (
                'id' => 66,
                'parent_id' => 7,
                'category_name' => 'アンダーウェア',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 1,
            ),
            66 => 
            array (
                'id' => 67,
                'parent_id' => 7,
                'category_name' => 'その他ファッション',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 1,
            ),
            67 => 
            array (
                'id' => 68,
                'parent_id' => 8,
                'category_name' => 'キッズ・ベビーファッション',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 1,
            ),
            68 => 
            array (
                'id' => 69,
                'parent_id' => 9,
                'category_name' => 'プレート・お皿',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            69 => 
            array (
                'id' => 70,
                'parent_id' => 9,
                'category_name' => '鉢・ボウル',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            70 => 
            array (
                'id' => 71,
                'parent_id' => 9,
                'category_name' => '茶碗・お椀',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            71 => 
            array (
                'id' => 72,
                'parent_id' => 9,
                'category_name' => '湯呑・蕎麦猪口',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            72 => 
            array (
                'id' => 73,
                'parent_id' => 9,
                'category_name' => 'マグ・カップ＆ソーサ―',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            73 => 
            array (
                'id' => 74,
                'parent_id' => 9,
                'category_name' => 'グラス・タンブラー',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            74 => 
            array (
                'id' => 75,
                'parent_id' => 9,
                'category_name' => 'ピッチャー・カラフェ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            75 => 
            array (
                'id' => 76,
                'parent_id' => 9,
                'category_name' => 'カトラリー・箸',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            76 => 
            array (
                'id' => 77,
                'parent_id' => 9,
                'category_name' => 'コースター・鍋敷き',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            77 => 
            array (
                'id' => 78,
                'parent_id' => 9,
                'category_name' => 'トレー・お盆',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            78 => 
            array (
                'id' => 79,
                'parent_id' => 9,
                'category_name' => 'その他テーブルウェア',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            79 => 
            array (
                'id' => 80,
                'parent_id' => 10,
                'category_name' => '鍋・フライパン',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            80 => 
            array (
                'id' => 81,
                'parent_id' => 10,
                'category_name' => 'キッチンツール',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            81 => 
            array (
                'id' => 82,
                'parent_id' => 10,
                'category_name' => 'ナイフ・包丁',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            82 => 
            array (
                'id' => 83,
                'parent_id' => 10,
                'category_name' => 'カッティングボード・まな板',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            83 => 
            array (
                'id' => 84,
                'parent_id' => 10,
                'category_name' => 'ケトル・薬缶',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            84 => 
            array (
                'id' => 85,
                'parent_id' => 10,
                'category_name' => 'ティーポット・お茶グッズ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            85 => 
            array (
                'id' => 86,
                'parent_id' => 10,
                'category_name' => 'コーヒーメーカー・珈琲グッズ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            86 => 
            array (
                'id' => 87,
                'parent_id' => 10,
                'category_name' => '保存容器',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            87 => 
            array (
                'id' => 88,
                'parent_id' => 10,
                'category_name' => 'キッチンツール収納',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            88 => 
            array (
                'id' => 89,
                'parent_id' => 10,
                'category_name' => 'お弁当箱・お弁当グッズ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            89 => 
            array (
                'id' => 90,
                'parent_id' => 10,
                'category_name' => 'ボトル・水筒',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            90 => 
            array (
                'id' => 91,
                'parent_id' => 10,
                'category_name' => 'キッチンファブリック',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            91 => 
            array (
                'id' => 92,
                'parent_id' => 10,
                'category_name' => 'その他キッチン',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            92 => 
            array (
                'id' => 93,
                'parent_id' => 11,
                'category_name' => 'フラワーベース',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            93 => 
            array (
                'id' => 94,
                'parent_id' => 11,
                'category_name' => 'オブジェ・モービル',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            94 => 
            array (
                'id' => 95,
                'parent_id' => 11,
                'category_name' => 'キャンドル・キャンドルスタンド',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            95 => 
            array (
                'id' => 96,
                'parent_id' => 11,
                'category_name' => 'アロマ・ディフューザー',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            96 => 
            array (
                'id' => 97,
                'parent_id' => 11,
                'category_name' => 'ミラー・手鏡',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            97 => 
            array (
                'id' => 98,
                'parent_id' => 11,
                'category_name' => 'かご・収納ボックス',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            98 => 
            array (
                'id' => 99,
                'parent_id' => 11,
                'category_name' => 'デスク収納・小物置き',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            99 => 
            array (
                'id' => 100,
                'parent_id' => 11,
                'category_name' => '時計',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            100 => 
            array (
                'id' => 101,
                'parent_id' => 11,
                'category_name' => '傘立て・ドアストッパー',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            101 => 
            array (
                'id' => 102,
                'parent_id' => 11,
                'category_name' => 'ゴミ箱',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            102 => 
            array (
                'id' => 103,
                'parent_id' => 11,
                'category_name' => 'ポスター・フレーム',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            103 => 
            array (
                'id' => 104,
                'parent_id' => 11,
                'category_name' => 'その他インテリア雑貨',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            104 => 
            array (
                'id' => 105,
                'parent_id' => 12,
                'category_name' => 'ランドリーグッズ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            105 => 
            array (
                'id' => 106,
                'parent_id' => 12,
                'category_name' => 'バスグッズ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            106 => 
            array (
                'id' => 107,
                'parent_id' => 12,
                'category_name' => 'タオル・バスマット',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            107 => 
            array (
                'id' => 108,
                'parent_id' => 12,
                'category_name' => '掃除用具・ブラシ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            108 => 
            array (
                'id' => 109,
                'parent_id' => 12,
                'category_name' => 'その他バス・ハウスキーピング',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            109 => 
            array (
                'id' => 110,
                'parent_id' => 13,
                'category_name' => 'スマホケース/カバー',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            110 => 
            array (
                'id' => 111,
                'parent_id' => 13,
                'category_name' => 'スマホグッズ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            111 => 
            array (
                'id' => 112,
                'parent_id' => 13,
                'category_name' => 'PC・タブレットケース',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            112 => 
            array (
                'id' => 113,
                'parent_id' => 13,
                'category_name' => 'PCグッズ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            113 => 
            array (
                'id' => 114,
                'parent_id' => 13,
                'category_name' => '生活家電',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            114 => 
            array (
                'id' => 115,
                'parent_id' => 13,
                'category_name' => 'キッチン家電',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            115 => 
            array (
                'id' => 116,
                'parent_id' => 13,
                'category_name' => 'スピーカー',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            116 => 
            array (
                'id' => 117,
                'parent_id' => 13,
                'category_name' => 'ヘッドフォン/イヤホン',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            117 => 
            array (
                'id' => 118,
                'parent_id' => 14,
                'category_name' => 'ペン・万年筆',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            118 => 
            array (
                'id' => 119,
                'parent_id' => 14,
                'category_name' => '手帳・ノート・メモ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            119 => 
            array (
                'id' => 120,
                'parent_id' => 14,
                'category_name' => 'レターセット・封筒',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            120 => 
            array (
                'id' => 121,
                'parent_id' => 14,
                'category_name' => 'カード・はがき',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            121 => 
            array (
                'id' => 122,
                'parent_id' => 14,
                'category_name' => 'カレンダー',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            122 => 
            array (
                'id' => 123,
                'parent_id' => 14,
                'category_name' => 'スタンプ・ハンコ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            123 => 
            array (
                'id' => 124,
                'parent_id' => 14,
                'category_name' => 'テープ・シール',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            124 => 
            array (
                'id' => 125,
                'parent_id' => 14,
                'category_name' => 'はさみ・カッター',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            125 => 
            array (
                'id' => 126,
                'parent_id' => 14,
                'category_name' => 'ラッピンググッズ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            126 => 
            array (
                'id' => 127,
                'parent_id' => 14,
                'category_name' => 'その他文房具',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            127 => 
            array (
                'id' => 128,
                'parent_id' => 15,
                'category_name' => 'ペットグッズ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            128 => 
            array (
                'id' => 129,
                'parent_id' => 16,
                'category_name' => 'おもちゃ・絵本',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            129 => 
            array (
                'id' => 130,
                'parent_id' => 16,
                'category_name' => 'ベビー雑貨',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            130 => 
            array (
                'id' => 131,
                'parent_id' => 16,
                'category_name' => 'キッズ雑貨',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            131 => 
            array (
                'id' => 132,
                'parent_id' => 16,
                'category_name' => 'お食事グッズ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            132 => 
            array (
                'id' => 133,
                'parent_id' => 16,
                'category_name' => 'その他ベビー・キッズ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            133 => 
            array (
                'id' => 134,
                'parent_id' => 17,
                'category_name' => 'カメラ・カメラグッズ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            134 => 
            array (
                'id' => 135,
                'parent_id' => 17,
                'category_name' => 'トラベルグッズ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            135 => 
            array (
                'id' => 136,
                'parent_id' => 17,
                'category_name' => 'サウナグッズ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            136 => 
            array (
                'id' => 137,
                'parent_id' => 17,
                'category_name' => 'スポーツ・アウトドアグッズ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            137 => 
            array (
                'id' => 138,
                'parent_id' => 17,
                'category_name' => '音楽・本・雑誌',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            138 => 
            array (
                'id' => 139,
                'parent_id' => 17,
                'category_name' => '手芸グッズ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            139 => 
            array (
                'id' => 140,
                'parent_id' => 17,
                'category_name' => 'その他ホビー',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            140 => 
            array (
                'id' => 141,
                'parent_id' => 18,
                'category_name' => 'その他生活雑貨',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            141 => 
            array (
                'id' => 142,
                'parent_id' => 19,
                'category_name' => 'ペンダントライト',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            142 => 
            array (
                'id' => 143,
                'parent_id' => 19,
                'category_name' => 'フロアランプ・スタンドライト',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            143 => 
            array (
                'id' => 144,
                'parent_id' => 19,
                'category_name' => 'デスクライト・クリップライト',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            144 => 
            array (
                'id' => 145,
                'parent_id' => 19,
                'category_name' => 'その他照明',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            145 => 
            array (
                'id' => 146,
                'parent_id' => 20,
                'category_name' => 'テーブル',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            146 => 
            array (
                'id' => 147,
                'parent_id' => 20,
                'category_name' => '椅子・スツール',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            147 => 
            array (
                'id' => 148,
                'parent_id' => 20,
                'category_name' => 'フック・壁掛け',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            148 => 
            array (
                'id' => 149,
                'parent_id' => 20,
                'category_name' => 'ラック・収納家具',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            149 => 
            array (
                'id' => 150,
                'parent_id' => 20,
                'category_name' => 'その他家具',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            150 => 
            array (
                'id' => 151,
                'parent_id' => 21,
                'category_name' => 'カーテン',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            151 => 
            array (
                'id' => 152,
                'parent_id' => 21,
                'category_name' => 'クッション',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            152 => 
            array (
                'id' => 153,
                'parent_id' => 21,
                'category_name' => 'ブランケット',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            153 => 
            array (
                'id' => 154,
                'parent_id' => 21,
                'category_name' => 'ラグ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            154 => 
            array (
                'id' => 155,
                'parent_id' => 21,
                'category_name' => '生地',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            155 => 
            array (
                'id' => 156,
                'parent_id' => 21,
                'category_name' => 'その他ファブリック',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            156 => 
            array (
                'id' => 157,
                'parent_id' => 22,
                'category_name' => '生花・ドライフラワー',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            157 => 
            array (
                'id' => 158,
                'parent_id' => 22,
                'category_name' => '鉢・鉢カバー',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            158 => 
            array (
                'id' => 159,
                'parent_id' => 22,
                'category_name' => 'じょうろ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            159 => 
            array (
                'id' => 160,
                'parent_id' => 22,
                'category_name' => 'ガーデン雑貨',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            160 => 
            array (
                'id' => 161,
                'parent_id' => 22,
                'category_name' => 'その他ガーデン',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            161 => 
            array (
                'id' => 162,
                'parent_id' => 23,
                'category_name' => 'その他インテリア',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            162 => 
            array (
                'id' => 163,
                'parent_id' => 24,
                'category_name' => '珈琲',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            163 => 
            array (
                'id' => 164,
                'parent_id' => 24,
                'category_name' => '紅茶',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            164 => 
            array (
                'id' => 165,
                'parent_id' => 24,
                'category_name' => 'お茶',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            165 => 
            array (
                'id' => 166,
                'parent_id' => 24,
                'category_name' => 'ジュース',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            166 => 
            array (
                'id' => 167,
                'parent_id' => 24,
                'category_name' => 'その他ドリンク',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            167 => 
            array (
                'id' => 168,
                'parent_id' => 25,
                'category_name' => '焼き菓子・クッキー',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            168 => 
            array (
                'id' => 169,
                'parent_id' => 25,
                'category_name' => 'チョコレート',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            169 => 
            array (
                'id' => 170,
                'parent_id' => 25,
                'category_name' => '米菓子',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            170 => 
            array (
                'id' => 171,
                'parent_id' => 25,
                'category_name' => '飴・キャンディ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            171 => 
            array (
                'id' => 172,
                'parent_id' => 25,
                'category_name' => '和菓子',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            172 => 
            array (
                'id' => 173,
                'parent_id' => 25,
                'category_name' => 'スナック菓子・チップス',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            173 => 
            array (
                'id' => 174,
                'parent_id' => 25,
                'category_name' => 'その他スイーツ・お菓子',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            174 => 
            array (
                'id' => 175,
                'parent_id' => 26,
                'category_name' => 'うどん・そば',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            175 => 
            array (
                'id' => 176,
                'parent_id' => 26,
                'category_name' => 'パスタ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            176 => 
            array (
                'id' => 177,
                'parent_id' => 26,
                'category_name' => 'その他麺・パスタ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            177 => 
            array (
                'id' => 178,
                'parent_id' => 27,
                'category_name' => '米',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            178 => 
            array (
                'id' => 179,
                'parent_id' => 27,
                'category_name' => '雑穀',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            179 => 
            array (
                'id' => 180,
                'parent_id' => 28,
                'category_name' => 'パン・シリアル',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            180 => 
            array (
                'id' => 181,
                'parent_id' => 28,
                'category_name' => 'オートミール',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            181 => 
            array (
                'id' => 182,
                'parent_id' => 29,
                'category_name' => 'シロップ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            182 => 
            array (
                'id' => 183,
                'parent_id' => 29,
                'category_name' => 'ジャム',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            183 => 
            array (
                'id' => 184,
                'parent_id' => 29,
                'category_name' => 'ハチミツ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            184 => 
            array (
                'id' => 185,
                'parent_id' => 29,
                'category_name' => 'その他シロップ・ジャム',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            185 => 
            array (
                'id' => 186,
                'parent_id' => 30,
                'category_name' => '健康補助食品',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            186 => 
            array (
                'id' => 187,
                'parent_id' => 30,
                'category_name' => 'スーパーフード',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            187 => 
            array (
                'id' => 188,
                'parent_id' => 30,
                'category_name' => 'その他健康補助食品',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            188 => 
            array (
                'id' => 189,
                'parent_id' => 31,
                'category_name' => '調味料',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            189 => 
            array (
                'id' => 190,
                'parent_id' => 31,
                'category_name' => '食用油・バター',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            190 => 
            array (
                'id' => 191,
                'parent_id' => 32,
                'category_name' => 'その他フード・ドリンク',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            191 => 
            array (
                'id' => 192,
                'parent_id' => 33,
                'category_name' => '洗顔料',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            192 => 
            array (
                'id' => 193,
                'parent_id' => 33,
                'category_name' => 'ボディソープ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            193 => 
            array (
                'id' => 194,
                'parent_id' => 33,
                'category_name' => 'ハンドソープ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            194 => 
            array (
                'id' => 195,
                'parent_id' => 33,
                'category_name' => '石鹸',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            195 => 
            array (
                'id' => 196,
                'parent_id' => 33,
                'category_name' => 'その他フェイス・ボディソープ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            196 => 
            array (
                'id' => 197,
                'parent_id' => 34,
                'category_name' => '化粧水',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            197 => 
            array (
                'id' => 198,
                'parent_id' => 34,
                'category_name' => '乳液',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            198 => 
            array (
                'id' => 199,
                'parent_id' => 34,
                'category_name' => 'クリーム・美容液',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            199 => 
            array (
                'id' => 200,
                'parent_id' => 34,
                'category_name' => 'パック',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            200 => 
            array (
                'id' => 201,
                'parent_id' => 34,
                'category_name' => 'リップケア',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            201 => 
            array (
                'id' => 202,
                'parent_id' => 34,
                'category_name' => 'その他スキンケア',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            202 => 
            array (
                'id' => 203,
                'parent_id' => 35,
                'category_name' => 'ベースメイク',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            203 => 
            array (
                'id' => 204,
                'parent_id' => 35,
                'category_name' => 'メイクアップ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            204 => 
            array (
                'id' => 205,
                'parent_id' => 35,
                'category_name' => 'ネイル',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            205 => 
            array (
                'id' => 206,
                'parent_id' => 35,
                'category_name' => 'その他メイク・ネイル',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            206 => 
            array (
                'id' => 207,
                'parent_id' => 36,
                'category_name' => 'ボディクリーム',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            207 => 
            array (
                'id' => 208,
                'parent_id' => 36,
                'category_name' => 'ハンドクリーム',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            208 => 
            array (
                'id' => 209,
                'parent_id' => 36,
                'category_name' => 'その他ボディケア',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            209 => 
            array (
                'id' => 210,
                'parent_id' => 37,
                'category_name' => 'シャンプ―・コンディショナー',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            210 => 
            array (
                'id' => 211,
                'parent_id' => 37,
                'category_name' => 'ヘアケア・トリートメント',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            211 => 
            array (
                'id' => 212,
                'parent_id' => 37,
                'category_name' => 'スタイリング',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            212 => 
            array (
                'id' => 213,
                'parent_id' => 37,
                'category_name' => 'ヘアブラシ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            213 => 
            array (
                'id' => 214,
                'parent_id' => 37,
                'category_name' => 'その他へアケア',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            214 => 
            array (
                'id' => 215,
                'parent_id' => 38,
                'category_name' => '入浴剤',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            215 => 
            array (
                'id' => 216,
                'parent_id' => 38,
                'category_name' => 'バスケア',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            216 => 
            array (
                'id' => 217,
                'parent_id' => 38,
                'category_name' => 'その他バスケア・リラックス',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            217 => 
            array (
                'id' => 218,
                'parent_id' => 39,
                'category_name' => '香水',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            218 => 
            array (
                'id' => 219,
                'parent_id' => 39,
                'category_name' => 'その他香水',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            219 => 
            array (
                'id' => 220,
                'parent_id' => 40,
                'category_name' => '歯ブラシ・歯磨き粉',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            220 => 
            array (
                'id' => 221,
                'parent_id' => 40,
                'category_name' => 'その他オーラルケア',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            221 => 
            array (
                'id' => 222,
                'parent_id' => 41,
                'category_name' => 'その他美容・ケア',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            222 => 
            array (
                'id' => 223,
                'parent_id' => 42,
                'category_name' => 'Tシャツ・カットソー',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            223 => 
            array (
                'id' => 224,
                'parent_id' => 42,
                'category_name' => 'シャツ・ブラウス',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            224 => 
            array (
                'id' => 225,
                'parent_id' => 42,
                'category_name' => 'ポロシャツ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            225 => 
            array (
                'id' => 226,
                'parent_id' => 42,
                'category_name' => 'ニット・セーター',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            226 => 
            array (
                'id' => 227,
                'parent_id' => 42,
                'category_name' => 'カーディガン',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            227 => 
            array (
                'id' => 228,
                'parent_id' => 42,
                'category_name' => 'パーカー・スウェット',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            228 => 
            array (
                'id' => 229,
                'parent_id' => 42,
                'category_name' => 'ベスト',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            229 => 
            array (
                'id' => 230,
                'parent_id' => 42,
                'category_name' => 'タンクトップ・キャミソール',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            230 => 
            array (
                'id' => 231,
                'parent_id' => 42,
                'category_name' => 'その他トップス',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            231 => 
            array (
                'id' => 232,
                'parent_id' => 43,
                'category_name' => 'デニムジャケット',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            232 => 
            array (
                'id' => 233,
                'parent_id' => 43,
                'category_name' => 'テーラードジャケット',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            233 => 
            array (
                'id' => 234,
                'parent_id' => 43,
                'category_name' => 'ノーカラージャケット',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            234 => 
            array (
                'id' => 235,
                'parent_id' => 43,
                'category_name' => 'MA-1',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            235 => 
            array (
                'id' => 236,
                'parent_id' => 43,
                'category_name' => 'ミリタリージャケット',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            236 => 
            array (
                'id' => 237,
                'parent_id' => 43,
                'category_name' => 'ブルゾン',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            237 => 
            array (
                'id' => 238,
                'parent_id' => 43,
                'category_name' => 'スタジャン',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            238 => 
            array (
                'id' => 239,
                'parent_id' => 43,
                'category_name' => 'ムートンコート',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            239 => 
            array (
                'id' => 240,
                'parent_id' => 43,
                'category_name' => 'ライダースジャケット',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            240 => 
            array (
                'id' => 241,
                'parent_id' => 43,
                'category_name' => 'ダウンジャケット・ダウンベスト',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            241 => 
            array (
                'id' => 242,
                'parent_id' => 43,
                'category_name' => 'チェスターコート',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            242 => 
            array (
                'id' => 243,
                'parent_id' => 43,
                'category_name' => 'トレンチ・ステンカラーコート',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            243 => 
            array (
                'id' => 244,
                'parent_id' => 43,
                'category_name' => 'ノーカラーコート',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            244 => 
            array (
                'id' => 245,
                'parent_id' => 43,
                'category_name' => 'ダッフルコート',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            245 => 
            array (
                'id' => 246,
                'parent_id' => 43,
                'category_name' => 'モッズ・ミリタリーコート',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            246 => 
            array (
                'id' => 247,
                'parent_id' => 43,
                'category_name' => 'ピーコート',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            247 => 
            array (
                'id' => 248,
                'parent_id' => 43,
                'category_name' => 'マウンテンパーカー',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            248 => 
            array (
                'id' => 249,
                'parent_id' => 43,
                'category_name' => 'ナイロンジャケット',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            249 => 
            array (
                'id' => 250,
                'parent_id' => 43,
                'category_name' => 'セットアップ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            250 => 
            array (
                'id' => 251,
                'parent_id' => 43,
                'category_name' => 'その他ジャケット・アウター',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            251 => 
            array (
                'id' => 252,
                'parent_id' => 44,
                'category_name' => 'デニムパンツ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            252 => 
            array (
                'id' => 253,
                'parent_id' => 44,
                'category_name' => 'チノパンツ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            253 => 
            array (
                'id' => 254,
                'parent_id' => 44,
                'category_name' => 'スウェットパンツ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            254 => 
            array (
                'id' => 255,
                'parent_id' => 44,
                'category_name' => 'スラックス',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            255 => 
            array (
                'id' => 256,
                'parent_id' => 44,
                'category_name' => 'オールインワン・サロペット',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            256 => 
            array (
                'id' => 257,
                'parent_id' => 44,
                'category_name' => 'その他パンツ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            257 => 
            array (
                'id' => 258,
                'parent_id' => 45,
                'category_name' => 'ルームウェア',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            258 => 
            array (
                'id' => 259,
                'parent_id' => 45,
                'category_name' => 'ルームシューズ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            259 => 
            array (
                'id' => 260,
                'parent_id' => 45,
                'category_name' => 'その他ルームウェア',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            260 => 
            array (
                'id' => 261,
                'parent_id' => 46,
                'category_name' => 'トートバッグ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            261 => 
            array (
                'id' => 262,
                'parent_id' => 46,
                'category_name' => 'ショルダーバッグ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            262 => 
            array (
                'id' => 263,
                'parent_id' => 46,
                'category_name' => 'ボディバッグ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            263 => 
            array (
                'id' => 264,
                'parent_id' => 46,
                'category_name' => 'ハンドバッグ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            264 => 
            array (
                'id' => 265,
                'parent_id' => 46,
                'category_name' => 'クラッチバッグ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            265 => 
            array (
                'id' => 266,
                'parent_id' => 46,
                'category_name' => 'リュックサック・バックパック',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            266 => 
            array (
                'id' => 267,
                'parent_id' => 46,
                'category_name' => 'かごバッグ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            267 => 
            array (
                'id' => 268,
                'parent_id' => 46,
                'category_name' => 'エコバッグ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            268 => 
            array (
                'id' => 269,
                'parent_id' => 46,
                'category_name' => 'その他バッグ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            269 => 
            array (
                'id' => 270,
                'parent_id' => 47,
                'category_name' => 'スニーカー',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            270 => 
            array (
                'id' => 271,
                'parent_id' => 47,
                'category_name' => 'スリッポン',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            271 => 
            array (
                'id' => 272,
                'parent_id' => 47,
                'category_name' => 'サンダル',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            272 => 
            array (
                'id' => 273,
                'parent_id' => 47,
                'category_name' => 'パンプス',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            273 => 
            array (
                'id' => 274,
                'parent_id' => 47,
                'category_name' => 'ブーツ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            274 => 
            array (
                'id' => 275,
                'parent_id' => 47,
                'category_name' => 'ドレスシューズ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            275 => 
            array (
                'id' => 276,
                'parent_id' => 47,
                'category_name' => 'ローファー',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            276 => 
            array (
                'id' => 277,
                'parent_id' => 47,
                'category_name' => 'バレエシューズ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            277 => 
            array (
                'id' => 278,
                'parent_id' => 47,
                'category_name' => 'モカシン/デッキシューズ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            278 => 
            array (
                'id' => 279,
                'parent_id' => 47,
                'category_name' => 'レインシューズ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            279 => 
            array (
                'id' => 280,
                'parent_id' => 47,
                'category_name' => 'その他シューズ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            280 => 
            array (
                'id' => 281,
                'parent_id' => 47,
                'category_name' => 'シューズ小物/雑貨',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            281 => 
            array (
                'id' => 282,
                'parent_id' => 48,
                'category_name' => 'ニット帽',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            282 => 
            array (
                'id' => 283,
                'parent_id' => 48,
                'category_name' => 'キャップ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            283 => 
            array (
                'id' => 284,
                'parent_id' => 48,
                'category_name' => 'ハット',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            284 => 
            array (
                'id' => 285,
                'parent_id' => 48,
                'category_name' => 'キャスケット',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            285 => 
            array (
                'id' => 286,
                'parent_id' => 48,
                'category_name' => 'ベレー帽',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            286 => 
            array (
                'id' => 287,
                'parent_id' => 48,
                'category_name' => 'その他キャップ・ハット',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            287 => 
            array (
                'id' => 288,
                'parent_id' => 49,
                'category_name' => 'ストール・マフラー',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            288 => 
            array (
                'id' => 289,
                'parent_id' => 49,
                'category_name' => 'ベルト',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            289 => 
            array (
                'id' => 290,
                'parent_id' => 49,
                'category_name' => '手袋',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            290 => 
            array (
                'id' => 291,
                'parent_id' => 49,
                'category_name' => '腕時計',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            291 => 
            array (
                'id' => 292,
                'parent_id' => 49,
                'category_name' => '眼鏡・サングラス',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            292 => 
            array (
                'id' => 293,
                'parent_id' => 49,
                'category_name' => '傘・レイングッズ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            293 => 
            array (
                'id' => 294,
                'parent_id' => 49,
                'category_name' => '財布・コインケース',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            294 => 
            array (
                'id' => 295,
                'parent_id' => 49,
                'category_name' => 'カードケース・名刺入れ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            295 => 
            array (
                'id' => 296,
                'parent_id' => 49,
                'category_name' => 'キーケース・ホルダー',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            296 => 
            array (
                'id' => 297,
                'parent_id' => 49,
                'category_name' => 'ポーチ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            297 => 
            array (
                'id' => 298,
                'parent_id' => 49,
                'category_name' => 'ハンカチ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            298 => 
            array (
                'id' => 299,
                'parent_id' => 49,
                'category_name' => 'その他ファション雑貨',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            299 => 
            array (
                'id' => 300,
                'parent_id' => 50,
                'category_name' => 'ネックレス',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            300 => 
            array (
                'id' => 301,
                'parent_id' => 50,
                'category_name' => '指輪',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            301 => 
            array (
                'id' => 302,
                'parent_id' => 50,
                'category_name' => 'ピアス・イヤリング',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            302 => 
            array (
                'id' => 303,
                'parent_id' => 50,
                'category_name' => 'ブローチ・コサージュ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            303 => 
            array (
                'id' => 304,
                'parent_id' => 50,
                'category_name' => 'ブレスレット',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            304 => 
            array (
                'id' => 305,
                'parent_id' => 50,
                'category_name' => 'ヘアアクセサリー',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            305 => 
            array (
                'id' => 306,
                'parent_id' => 50,
                'category_name' => 'その他アクセサリー',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            306 => 
            array (
                'id' => 307,
                'parent_id' => 51,
                'category_name' => 'ソックス/靴下',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            307 => 
            array (
                'id' => 308,
                'parent_id' => 51,
                'category_name' => 'タイツ/ストッキング',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            308 => 
            array (
                'id' => 309,
                'parent_id' => 51,
                'category_name' => 'レギンス/スパッツ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            309 => 
            array (
                'id' => 310,
                'parent_id' => 51,
                'category_name' => 'レッグウォーマー',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            310 => 
            array (
                'id' => 311,
                'parent_id' => 51,
                'category_name' => 'その他レッグウェア',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            311 => 
            array (
                'id' => 312,
                'parent_id' => 52,
                'category_name' => 'ボクサーパンツ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            312 => 
            array (
                'id' => 313,
                'parent_id' => 52,
                'category_name' => 'トランクス/ブリーフ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            313 => 
            array (
                'id' => 314,
                'parent_id' => 52,
                'category_name' => 'インナーウェア/肌着',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            314 => 
            array (
                'id' => 315,
                'parent_id' => 52,
                'category_name' => 'その他アンダーウェア',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            315 => 
            array (
                'id' => 316,
                'parent_id' => 53,
                'category_name' => 'その他ファッション',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            316 => 
            array (
                'id' => 317,
                'parent_id' => 54,
                'category_name' => 'Tシャツ・カットソー',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            317 => 
            array (
                'id' => 318,
                'parent_id' => 54,
                'category_name' => 'シャツ・ブラウス',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            318 => 
            array (
                'id' => 319,
                'parent_id' => 54,
                'category_name' => 'ポロシャツ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            319 => 
            array (
                'id' => 320,
                'parent_id' => 54,
                'category_name' => 'ニット・セーター',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            320 => 
            array (
                'id' => 321,
                'parent_id' => 54,
                'category_name' => 'カーディガン',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            321 => 
            array (
                'id' => 322,
                'parent_id' => 54,
                'category_name' => 'パーカー・スウェット',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            322 => 
            array (
                'id' => 323,
                'parent_id' => 54,
                'category_name' => 'ベスト',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            323 => 
            array (
                'id' => 324,
                'parent_id' => 54,
                'category_name' => 'タンクトップ・キャミソール',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            324 => 
            array (
                'id' => 325,
                'parent_id' => 54,
                'category_name' => 'その他トップス',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            325 => 
            array (
                'id' => 326,
                'parent_id' => 55,
                'category_name' => 'デニムジャケット',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            326 => 
            array (
                'id' => 327,
                'parent_id' => 55,
                'category_name' => 'テーラードジャケット',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            327 => 
            array (
                'id' => 328,
                'parent_id' => 55,
                'category_name' => 'ノーカラージャケット',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            328 => 
            array (
                'id' => 329,
                'parent_id' => 55,
                'category_name' => 'MA-1',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            329 => 
            array (
                'id' => 330,
                'parent_id' => 55,
                'category_name' => 'ミリタリージャケット',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            330 => 
            array (
                'id' => 331,
                'parent_id' => 55,
                'category_name' => 'ブルゾン',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            331 => 
            array (
                'id' => 332,
                'parent_id' => 55,
                'category_name' => 'スタジャン',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            332 => 
            array (
                'id' => 333,
                'parent_id' => 55,
                'category_name' => 'ムートンコート',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            333 => 
            array (
                'id' => 334,
                'parent_id' => 55,
                'category_name' => 'ライダースジャケット',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            334 => 
            array (
                'id' => 335,
                'parent_id' => 55,
                'category_name' => 'ダウンジャケット・ダウンベスト',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            335 => 
            array (
                'id' => 336,
                'parent_id' => 55,
                'category_name' => 'チェスターコート',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            336 => 
            array (
                'id' => 337,
                'parent_id' => 55,
                'category_name' => 'トレンチ・ステンカラーコート',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            337 => 
            array (
                'id' => 338,
                'parent_id' => 55,
                'category_name' => 'ノーカラーコート',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            338 => 
            array (
                'id' => 340,
                'parent_id' => 55,
                'category_name' => 'モッズ・ミリタリーコート',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            339 => 
            array (
                'id' => 341,
                'parent_id' => 55,
                'category_name' => 'ピーコート',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            340 => 
            array (
                'id' => 342,
                'parent_id' => 55,
                'category_name' => 'マウンテンパーカー',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            341 => 
            array (
                'id' => 343,
                'parent_id' => 55,
                'category_name' => 'ナイロンジャケット',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            342 => 
            array (
                'id' => 344,
                'parent_id' => 55,
                'category_name' => 'セットアップ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            343 => 
            array (
                'id' => 345,
                'parent_id' => 55,
                'category_name' => 'その他ジャケット・アウター',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            344 => 
            array (
                'id' => 346,
                'parent_id' => 56,
                'category_name' => 'デニムパンツ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            345 => 
            array (
                'id' => 347,
                'parent_id' => 56,
                'category_name' => 'チノパンツ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            346 => 
            array (
                'id' => 348,
                'parent_id' => 56,
                'category_name' => 'スウェットパンツ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            347 => 
            array (
                'id' => 349,
                'parent_id' => 56,
                'category_name' => 'スラックス',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            348 => 
            array (
                'id' => 350,
                'parent_id' => 56,
                'category_name' => 'オールインワン・サロペット',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            349 => 
            array (
                'id' => 351,
                'parent_id' => 56,
                'category_name' => 'その他パンツ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            350 => 
            array (
                'id' => 352,
                'parent_id' => 57,
                'category_name' => 'ワンピース',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            351 => 
            array (
                'id' => 353,
                'parent_id' => 57,
                'category_name' => 'シャツワンピース',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            352 => 
            array (
                'id' => 354,
                'parent_id' => 57,
                'category_name' => 'チュニック',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            353 => 
            array (
                'id' => 355,
                'parent_id' => 57,
                'category_name' => 'ドレス',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            354 => 
            array (
                'id' => 356,
                'parent_id' => 57,
                'category_name' => 'その他ワンピース',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            355 => 
            array (
                'id' => 357,
                'parent_id' => 58,
                'category_name' => 'スカート',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            356 => 
            array (
                'id' => 358,
                'parent_id' => 58,
                'category_name' => 'デニムスカート',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            357 => 
            array (
                'id' => 359,
                'parent_id' => 59,
                'category_name' => 'ルームウェア',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            358 => 
            array (
                'id' => 360,
                'parent_id' => 59,
                'category_name' => 'ルームシューズ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            359 => 
            array (
                'id' => 361,
                'parent_id' => 59,
                'category_name' => 'その他ルームウェア',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            360 => 
            array (
                'id' => 362,
                'parent_id' => 60,
                'category_name' => 'トートバッグ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            361 => 
            array (
                'id' => 363,
                'parent_id' => 60,
                'category_name' => 'ショルダーバッグ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            362 => 
            array (
                'id' => 364,
                'parent_id' => 60,
                'category_name' => 'ボディバッグ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            363 => 
            array (
                'id' => 365,
                'parent_id' => 60,
                'category_name' => 'ハンドバッグ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            364 => 
            array (
                'id' => 366,
                'parent_id' => 60,
                'category_name' => 'クラッチバッグ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            365 => 
            array (
                'id' => 367,
                'parent_id' => 60,
                'category_name' => 'リュックサック・バックパック',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            366 => 
            array (
                'id' => 368,
                'parent_id' => 60,
                'category_name' => 'かごバッグ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            367 => 
            array (
                'id' => 369,
                'parent_id' => 60,
                'category_name' => 'エコバッグ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            368 => 
            array (
                'id' => 370,
                'parent_id' => 60,
                'category_name' => 'その他バッグ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            369 => 
            array (
                'id' => 371,
                'parent_id' => 61,
                'category_name' => 'スニーカー',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            370 => 
            array (
                'id' => 372,
                'parent_id' => 61,
                'category_name' => 'スリッポン',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            371 => 
            array (
                'id' => 373,
                'parent_id' => 61,
                'category_name' => 'サンダル',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            372 => 
            array (
                'id' => 374,
                'parent_id' => 61,
                'category_name' => 'パンプス',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            373 => 
            array (
                'id' => 375,
                'parent_id' => 61,
                'category_name' => 'ブーツ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            374 => 
            array (
                'id' => 376,
                'parent_id' => 61,
                'category_name' => 'ドレスシューズ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            375 => 
            array (
                'id' => 377,
                'parent_id' => 61,
                'category_name' => 'ローファー',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            376 => 
            array (
                'id' => 378,
                'parent_id' => 61,
                'category_name' => 'バレエシューズ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            377 => 
            array (
                'id' => 379,
                'parent_id' => 61,
                'category_name' => 'モカシン/デッキシューズ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            378 => 
            array (
                'id' => 380,
                'parent_id' => 61,
                'category_name' => 'レインシューズ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            379 => 
            array (
                'id' => 381,
                'parent_id' => 61,
                'category_name' => 'その他シューズ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            380 => 
            array (
                'id' => 382,
                'parent_id' => 61,
                'category_name' => 'シューズ小物/雑貨',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            381 => 
            array (
                'id' => 383,
                'parent_id' => 62,
                'category_name' => 'ニット帽',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            382 => 
            array (
                'id' => 384,
                'parent_id' => 62,
                'category_name' => 'キャップ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            383 => 
            array (
                'id' => 385,
                'parent_id' => 62,
                'category_name' => 'ハット',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            384 => 
            array (
                'id' => 386,
                'parent_id' => 62,
                'category_name' => 'キャスケット',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            385 => 
            array (
                'id' => 387,
                'parent_id' => 62,
                'category_name' => 'ベレー帽',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            386 => 
            array (
                'id' => 388,
                'parent_id' => 62,
                'category_name' => 'その他キャップ・ハット',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            387 => 
            array (
                'id' => 389,
                'parent_id' => 63,
                'category_name' => 'ストール・マフラー',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            388 => 
            array (
                'id' => 390,
                'parent_id' => 63,
                'category_name' => 'ベルト',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            389 => 
            array (
                'id' => 391,
                'parent_id' => 63,
                'category_name' => '手袋',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            390 => 
            array (
                'id' => 392,
                'parent_id' => 63,
                'category_name' => '腕時計',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            391 => 
            array (
                'id' => 393,
                'parent_id' => 63,
                'category_name' => '眼鏡・サングラス',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            392 => 
            array (
                'id' => 394,
                'parent_id' => 63,
                'category_name' => '傘・レイングッズ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            393 => 
            array (
                'id' => 395,
                'parent_id' => 63,
                'category_name' => '財布・コインケース',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            394 => 
            array (
                'id' => 396,
                'parent_id' => 63,
                'category_name' => 'カードケース・名刺入れ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            395 => 
            array (
                'id' => 397,
                'parent_id' => 63,
                'category_name' => 'キーケース・ホルダー',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            396 => 
            array (
                'id' => 398,
                'parent_id' => 63,
                'category_name' => 'ポーチ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            397 => 
            array (
                'id' => 399,
                'parent_id' => 63,
                'category_name' => 'ハンカチ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            398 => 
            array (
                'id' => 400,
                'parent_id' => 63,
                'category_name' => 'その他ファション雑貨',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            399 => 
            array (
                'id' => 401,
                'parent_id' => 64,
                'category_name' => 'ネックレス',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            400 => 
            array (
                'id' => 402,
                'parent_id' => 64,
                'category_name' => '指輪',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            401 => 
            array (
                'id' => 403,
                'parent_id' => 64,
                'category_name' => 'ピアス・イヤリング',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            402 => 
            array (
                'id' => 404,
                'parent_id' => 64,
                'category_name' => 'ブローチ・コサージュ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            403 => 
            array (
                'id' => 405,
                'parent_id' => 64,
                'category_name' => 'ブレスレット',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            404 => 
            array (
                'id' => 406,
                'parent_id' => 64,
                'category_name' => 'ヘアアクセサリー',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            405 => 
            array (
                'id' => 407,
                'parent_id' => 64,
                'category_name' => 'その他アクセサリー',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            406 => 
            array (
                'id' => 408,
                'parent_id' => 65,
                'category_name' => 'ソックス/靴下',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            407 => 
            array (
                'id' => 409,
                'parent_id' => 65,
                'category_name' => 'タイツ/ストッキング',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            408 => 
            array (
                'id' => 410,
                'parent_id' => 65,
                'category_name' => 'レギンス/スパッツ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            409 => 
            array (
                'id' => 411,
                'parent_id' => 65,
                'category_name' => 'レッグウォーマー',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            410 => 
            array (
                'id' => 412,
                'parent_id' => 65,
                'category_name' => 'その他レッグウェア',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            411 => 
            array (
                'id' => 413,
                'parent_id' => 66,
                'category_name' => 'ブラジャー',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            412 => 
            array (
                'id' => 414,
                'parent_id' => 66,
                'category_name' => 'ショーツ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            413 => 
            array (
                'id' => 415,
                'parent_id' => 66,
                'category_name' => 'ブラ&ショーツ',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            414 => 
            array (
                'id' => 416,
                'parent_id' => 66,
                'category_name' => 'インナーウェア/肌着',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            415 => 
            array (
                'id' => 417,
                'parent_id' => 66,
                'category_name' => 'インナーウェア/肌着',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            416 => 
            array (
                'id' => 418,
                'parent_id' => 67,
                'category_name' => 'その他ファッション',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            417 => 
            array (
                'id' => 419,
                'parent_id' => 68,
                'category_name' => 'キッズファッション',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
            418 => 
            array (
                'id' => 420,
                'parent_id' => 68,
                'category_name' => 'ベビーファッション',
                'image_id' => NULL,
                'fashion_minor_category_flag' => 0,
            ),
        ));
        
        
    }
}