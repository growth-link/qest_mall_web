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
                'category_id' => 1,
                'parent_id' => NULL,
                'category_name' => 'ファッション',
                'image_id' => NULL,
            ),
            1 => 
            array (
                'category_id' => 2,
                'parent_id' => NULL,
                'category_name' => '生活雑貨・ホビー',
                'image_id' => NULL,
            ),
            2 => 
            array (
                'category_id' => 3,
                'parent_id' => NULL,
                'category_name' => 'インテリア',
                'image_id' => NULL,
            ),
            3 => 
            array (
                'category_id' => 4,
                'parent_id' => NULL,
                'category_name' => 'フード・ドリンク',
                'image_id' => NULL,
            ),
            4 => 
            array (
                'category_id' => 5,
                'parent_id' => NULL,
                'category_name' => '美容ケア',
                'image_id' => NULL,
            ),
            5 => 
            array (
                'category_id' => 6,
                'parent_id' => 1,
                'category_name' => 'メンズ',
                'image_id' => 1,
            ),
            6 => 
            array (
                'category_id' => 7,
                'parent_id' => 1,
                'category_name' => 'レディース',
                'image_id' => 2,
            ),
            7 => 
            array (
                'category_id' => 8,
                'parent_id' => 1,
                'category_name' => 'キッズ',
                'image_id' => 3,
            ),
            8 => 
            array (
                'category_id' => 9,
                'parent_id' => 2,
                'category_name' => 'テーブルウェア',
                'image_id' => 4,
            ),
            9 => 
            array (
                'category_id' => 10,
                'parent_id' => 2,
                'category_name' => 'キッチン',
                'image_id' => 5,
            ),
            10 => 
            array (
                'category_id' => 11,
                'parent_id' => 2,
                'category_name' => 'インテリア雑貨',
                'image_id' => 6,
            ),
            11 => 
            array (
                'category_id' => 12,
                'parent_id' => 2,
                'category_name' => 'バス・ハウスキーピング',
                'image_id' => 7,
            ),
            12 => 
            array (
                'category_id' => 13,
                'parent_id' => 2,
                'category_name' => 'PC・スマホグッズ/家電',
                'image_id' => 8,
            ),
            13 => 
            array (
                'category_id' => 14,
                'parent_id' => 2,
                'category_name' => '文房具',
                'image_id' => 9,
            ),
            14 => 
            array (
                'category_id' => 15,
                'parent_id' => 2,
                'category_name' => 'ペット',
                'image_id' => 10,
            ),
            15 => 
            array (
                'category_id' => 16,
                'parent_id' => 2,
                'category_name' => 'ベビー・キッズ',
                'image_id' => 11,
            ),
            16 => 
            array (
                'category_id' => 17,
                'parent_id' => 2,
                'category_name' => 'ホビー',
                'image_id' => 12,
            ),
            17 => 
            array (
                'category_id' => 18,
                'parent_id' => 2,
                'category_name' => 'その他生活雑貨',
                'image_id' => 33,
            ),
            18 => 
            array (
                'category_id' => 19,
                'parent_id' => 3,
                'category_name' => '照明',
                'image_id' => 13,
            ),
            19 => 
            array (
                'category_id' => 20,
                'parent_id' => 3,
                'category_name' => '家具',
                'image_id' => 14,
            ),
            20 => 
            array (
                'category_id' => 21,
                'parent_id' => 3,
                'category_name' => 'ファブリック',
                'image_id' => 15,
            ),
            21 => 
            array (
                'category_id' => 22,
                'parent_id' => 3,
                'category_name' => 'ガーデン',
                'image_id' => 16,
            ),
            22 => 
            array (
                'category_id' => 23,
                'parent_id' => 3,
                'category_name' => 'その他インテリア',
                'image_id' => 33,
            ),
            23 => 
            array (
                'category_id' => 24,
                'parent_id' => 4,
                'category_name' => 'ドリンク',
                'image_id' => 17,
            ),
            24 => 
            array (
                'category_id' => 25,
                'parent_id' => 4,
                'category_name' => 'スイーツ・お菓子',
                'image_id' => 18,
            ),
            25 => 
            array (
                'category_id' => 26,
                'parent_id' => 4,
                'category_name' => '麺・パスタ',
                'image_id' => 19,
            ),
            26 => 
            array (
                'category_id' => 27,
                'parent_id' => 4,
                'category_name' => '米・雑穀',
                'image_id' => 20,
            ),
            27 => 
            array (
                'category_id' => 28,
                'parent_id' => 4,
                'category_name' => 'パン・シリアル',
                'image_id' => 21,
            ),
            28 => 
            array (
                'category_id' => 29,
                'parent_id' => 4,
                'category_name' => 'シロップ・ジャム',
                'image_id' => 22,
            ),
            29 => 
            array (
                'category_id' => 30,
                'parent_id' => 4,
                'category_name' => '健康補助食品',
                'image_id' => 23,
            ),
            30 => 
            array (
                'category_id' => 31,
                'parent_id' => 4,
                'category_name' => '調味料・食用油',
                'image_id' => 24,
            ),
            31 => 
            array (
                'category_id' => 32,
                'parent_id' => 4,
                'category_name' => 'その他フード・ドリンク',
                'image_id' => 33,
            ),
            32 => 
            array (
                'category_id' => 33,
                'parent_id' => 5,
                'category_name' => 'フェイス・ボディソープ',
                'image_id' => 25,
            ),
            33 => 
            array (
                'category_id' => 34,
                'parent_id' => 5,
                'category_name' => 'スキンケア',
                'image_id' => 26,
            ),
            34 => 
            array (
                'category_id' => 35,
                'parent_id' => 5,
                'category_name' => 'メイク・ネイル',
                'image_id' => 27,
            ),
            35 => 
            array (
                'category_id' => 36,
                'parent_id' => 5,
                'category_name' => 'ボディケア',
                'image_id' => 28,
            ),
            36 => 
            array (
                'category_id' => 37,
                'parent_id' => 5,
                'category_name' => 'へアケア',
                'image_id' => 29,
            ),
            37 => 
            array (
                'category_id' => 38,
                'parent_id' => 5,
                'category_name' => 'バスケア・リラックス',
                'image_id' => 30,
            ),
            38 => 
            array (
                'category_id' => 39,
                'parent_id' => 5,
                'category_name' => '香水',
                'image_id' => 31,
            ),
            39 => 
            array (
                'category_id' => 40,
                'parent_id' => 5,
                'category_name' => 'オーラルケア',
                'image_id' => 32,
            ),
            40 => 
            array (
                'category_id' => 41,
                'parent_id' => 5,
                'category_name' => 'その他美容・ケア',
                'image_id' => 33,
            ),
            41 => 
            array (
                'category_id' => 42,
                'parent_id' => 6,
                'category_name' => 'トップス',
                'image_id' => NULL,
            ),
            42 => 
            array (
                'category_id' => 43,
                'parent_id' => 6,
                'category_name' => 'ジャケット・アウター',
                'image_id' => NULL,
            ),
            43 => 
            array (
                'category_id' => 44,
                'parent_id' => 6,
                'category_name' => 'パンツ',
                'image_id' => NULL,
            ),
            44 => 
            array (
                'category_id' => 45,
                'parent_id' => 6,
                'category_name' => 'ルームウェア',
                'image_id' => NULL,
            ),
            45 => 
            array (
                'category_id' => 46,
                'parent_id' => 6,
                'category_name' => 'バッグ',
                'image_id' => NULL,
            ),
            46 => 
            array (
                'category_id' => 47,
                'parent_id' => 6,
                'category_name' => 'シューズ',
                'image_id' => NULL,
            ),
            47 => 
            array (
                'category_id' => 48,
                'parent_id' => 6,
                'category_name' => '帽子',
                'image_id' => NULL,
            ),
            48 => 
            array (
                'category_id' => 49,
                'parent_id' => 6,
                'category_name' => 'ファッション雑貨',
                'image_id' => NULL,
            ),
            49 => 
            array (
                'category_id' => 50,
                'parent_id' => 6,
                'category_name' => 'アクセサリー',
                'image_id' => NULL,
            ),
            50 => 
            array (
                'category_id' => 51,
                'parent_id' => 6,
                'category_name' => 'レッグウェア',
                'image_id' => NULL,
            ),
            51 => 
            array (
                'category_id' => 52,
                'parent_id' => 6,
                'category_name' => 'アンダーウェア',
                'image_id' => NULL,
            ),
            52 => 
            array (
                'category_id' => 53,
                'parent_id' => 6,
                'category_name' => 'その他ファッション',
                'image_id' => NULL,
            ),
            53 => 
            array (
                'category_id' => 54,
                'parent_id' => 7,
                'category_name' => 'トップス',
                'image_id' => NULL,
            ),
            54 => 
            array (
                'category_id' => 55,
                'parent_id' => 7,
                'category_name' => 'ジャケット・アウター',
                'image_id' => NULL,
            ),
            55 => 
            array (
                'category_id' => 56,
                'parent_id' => 7,
                'category_name' => 'パンツ',
                'image_id' => NULL,
            ),
            56 => 
            array (
                'category_id' => 57,
                'parent_id' => 7,
                'category_name' => 'ワンピース',
                'image_id' => NULL,
            ),
            57 => 
            array (
                'category_id' => 58,
                'parent_id' => 7,
                'category_name' => 'スカート',
                'image_id' => NULL,
            ),
            58 => 
            array (
                'category_id' => 59,
                'parent_id' => 7,
                'category_name' => 'ルームウェア',
                'image_id' => NULL,
            ),
            59 => 
            array (
                'category_id' => 60,
                'parent_id' => 7,
                'category_name' => 'バッグ',
                'image_id' => NULL,
            ),
            60 => 
            array (
                'category_id' => 61,
                'parent_id' => 7,
                'category_name' => 'シューズ',
                'image_id' => NULL,
            ),
            61 => 
            array (
                'category_id' => 62,
                'parent_id' => 7,
                'category_name' => '帽子',
                'image_id' => NULL,
            ),
            62 => 
            array (
                'category_id' => 63,
                'parent_id' => 7,
                'category_name' => 'ファッション雑貨',
                'image_id' => NULL,
            ),
            63 => 
            array (
                'category_id' => 64,
                'parent_id' => 7,
                'category_name' => 'アクセサリー',
                'image_id' => NULL,
            ),
            64 => 
            array (
                'category_id' => 65,
                'parent_id' => 7,
                'category_name' => 'レッグウェア',
                'image_id' => NULL,
            ),
            65 => 
            array (
                'category_id' => 66,
                'parent_id' => 7,
                'category_name' => 'アンダーウェア',
                'image_id' => NULL,
            ),
            66 => 
            array (
                'category_id' => 67,
                'parent_id' => 7,
                'category_name' => 'その他ファッション',
                'image_id' => NULL,
            ),
            67 => 
            array (
                'category_id' => 68,
                'parent_id' => 8,
                'category_name' => 'キッズ・ベビーファッション',
                'image_id' => NULL,
            ),
            68 => 
            array (
                'category_id' => 69,
                'parent_id' => 9,
                'category_name' => 'プレート・お皿',
                'image_id' => NULL,
            ),
            69 => 
            array (
                'category_id' => 70,
                'parent_id' => 9,
                'category_name' => '鉢・ボウル',
                'image_id' => NULL,
            ),
            70 => 
            array (
                'category_id' => 71,
                'parent_id' => 9,
                'category_name' => '茶碗・お椀',
                'image_id' => NULL,
            ),
            71 => 
            array (
                'category_id' => 72,
                'parent_id' => 9,
                'category_name' => '湯呑・蕎麦猪口',
                'image_id' => NULL,
            ),
            72 => 
            array (
                'category_id' => 73,
                'parent_id' => 9,
                'category_name' => 'マグ・カップ＆ソーサ―',
                'image_id' => NULL,
            ),
            73 => 
            array (
                'category_id' => 74,
                'parent_id' => 9,
                'category_name' => 'グラス・タンブラー',
                'image_id' => NULL,
            ),
            74 => 
            array (
                'category_id' => 75,
                'parent_id' => 9,
                'category_name' => 'ピッチャー・カラフェ',
                'image_id' => NULL,
            ),
            75 => 
            array (
                'category_id' => 76,
                'parent_id' => 9,
                'category_name' => 'カトラリー・箸',
                'image_id' => NULL,
            ),
            76 => 
            array (
                'category_id' => 77,
                'parent_id' => 9,
                'category_name' => 'コースター・鍋敷き',
                'image_id' => NULL,
            ),
            77 => 
            array (
                'category_id' => 78,
                'parent_id' => 9,
                'category_name' => 'トレー・お盆',
                'image_id' => NULL,
            ),
            78 => 
            array (
                'category_id' => 79,
                'parent_id' => 9,
                'category_name' => 'その他テーブルウェア',
                'image_id' => NULL,
            ),
            79 => 
            array (
                'category_id' => 80,
                'parent_id' => 10,
                'category_name' => '鍋・フライパン',
                'image_id' => NULL,
            ),
            80 => 
            array (
                'category_id' => 81,
                'parent_id' => 10,
                'category_name' => 'キッチンツール',
                'image_id' => NULL,
            ),
            81 => 
            array (
                'category_id' => 82,
                'parent_id' => 10,
                'category_name' => 'ナイフ・包丁',
                'image_id' => NULL,
            ),
            82 => 
            array (
                'category_id' => 83,
                'parent_id' => 10,
                'category_name' => 'カッティングボード・まな板',
                'image_id' => NULL,
            ),
            83 => 
            array (
                'category_id' => 84,
                'parent_id' => 10,
                'category_name' => 'ケトル・薬缶',
                'image_id' => NULL,
            ),
            84 => 
            array (
                'category_id' => 85,
                'parent_id' => 10,
                'category_name' => 'ティーポット・お茶グッズ',
                'image_id' => NULL,
            ),
            85 => 
            array (
                'category_id' => 86,
                'parent_id' => 10,
                'category_name' => 'コーヒーメーカー・珈琲グッズ',
                'image_id' => NULL,
            ),
            86 => 
            array (
                'category_id' => 87,
                'parent_id' => 10,
                'category_name' => '保存容器',
                'image_id' => NULL,
            ),
            87 => 
            array (
                'category_id' => 88,
                'parent_id' => 10,
                'category_name' => 'キッチンツール収納',
                'image_id' => NULL,
            ),
            88 => 
            array (
                'category_id' => 89,
                'parent_id' => 10,
                'category_name' => 'お弁当箱・お弁当グッズ',
                'image_id' => NULL,
            ),
            89 => 
            array (
                'category_id' => 90,
                'parent_id' => 10,
                'category_name' => 'ボトル・水筒',
                'image_id' => NULL,
            ),
            90 => 
            array (
                'category_id' => 91,
                'parent_id' => 10,
                'category_name' => 'キッチンファブリック',
                'image_id' => NULL,
            ),
            91 => 
            array (
                'category_id' => 92,
                'parent_id' => 10,
                'category_name' => 'その他キッチン',
                'image_id' => NULL,
            ),
            92 => 
            array (
                'category_id' => 93,
                'parent_id' => 11,
                'category_name' => 'フラワーベース',
                'image_id' => NULL,
            ),
            93 => 
            array (
                'category_id' => 94,
                'parent_id' => 11,
                'category_name' => 'オブジェ・モービル',
                'image_id' => NULL,
            ),
            94 => 
            array (
                'category_id' => 95,
                'parent_id' => 11,
                'category_name' => 'キャンドル・キャンドルスタンド',
                'image_id' => NULL,
            ),
            95 => 
            array (
                'category_id' => 96,
                'parent_id' => 11,
                'category_name' => 'アロマ・ディフューザー',
                'image_id' => NULL,
            ),
            96 => 
            array (
                'category_id' => 97,
                'parent_id' => 11,
                'category_name' => 'ミラー・手鏡',
                'image_id' => NULL,
            ),
            97 => 
            array (
                'category_id' => 98,
                'parent_id' => 11,
                'category_name' => 'かご・収納ボックス',
                'image_id' => NULL,
            ),
            98 => 
            array (
                'category_id' => 99,
                'parent_id' => 11,
                'category_name' => 'デスク収納・小物置き',
                'image_id' => NULL,
            ),
            99 => 
            array (
                'category_id' => 100,
                'parent_id' => 11,
                'category_name' => '時計',
                'image_id' => NULL,
            ),
            100 => 
            array (
                'category_id' => 101,
                'parent_id' => 11,
                'category_name' => '傘立て・ドアストッパー',
                'image_id' => NULL,
            ),
            101 => 
            array (
                'category_id' => 102,
                'parent_id' => 11,
                'category_name' => 'ゴミ箱',
                'image_id' => NULL,
            ),
            102 => 
            array (
                'category_id' => 103,
                'parent_id' => 11,
                'category_name' => 'ポスター・フレーム',
                'image_id' => NULL,
            ),
            103 => 
            array (
                'category_id' => 104,
                'parent_id' => 11,
                'category_name' => 'その他インテリア雑貨',
                'image_id' => NULL,
            ),
            104 => 
            array (
                'category_id' => 105,
                'parent_id' => 12,
                'category_name' => 'ランドリーグッズ',
                'image_id' => NULL,
            ),
            105 => 
            array (
                'category_id' => 106,
                'parent_id' => 12,
                'category_name' => 'バスグッズ',
                'image_id' => NULL,
            ),
            106 => 
            array (
                'category_id' => 107,
                'parent_id' => 12,
                'category_name' => 'タオル・バスマット',
                'image_id' => NULL,
            ),
            107 => 
            array (
                'category_id' => 108,
                'parent_id' => 12,
                'category_name' => '掃除用具・ブラシ',
                'image_id' => NULL,
            ),
            108 => 
            array (
                'category_id' => 109,
                'parent_id' => 12,
                'category_name' => 'その他バス・ハウスキーピング',
                'image_id' => NULL,
            ),
            109 => 
            array (
                'category_id' => 110,
                'parent_id' => 13,
                'category_name' => 'スマホケース/カバー',
                'image_id' => NULL,
            ),
            110 => 
            array (
                'category_id' => 111,
                'parent_id' => 13,
                'category_name' => 'スマホグッズ',
                'image_id' => NULL,
            ),
            111 => 
            array (
                'category_id' => 112,
                'parent_id' => 13,
                'category_name' => 'PC・タブレットケース',
                'image_id' => NULL,
            ),
            112 => 
            array (
                'category_id' => 113,
                'parent_id' => 13,
                'category_name' => 'PCグッズ',
                'image_id' => NULL,
            ),
            113 => 
            array (
                'category_id' => 114,
                'parent_id' => 13,
                'category_name' => '生活家電',
                'image_id' => NULL,
            ),
            114 => 
            array (
                'category_id' => 115,
                'parent_id' => 13,
                'category_name' => 'キッチン家電',
                'image_id' => NULL,
            ),
            115 => 
            array (
                'category_id' => 116,
                'parent_id' => 13,
                'category_name' => 'スピーカー',
                'image_id' => NULL,
            ),
            116 => 
            array (
                'category_id' => 117,
                'parent_id' => 13,
                'category_name' => 'ヘッドフォン/イヤホン',
                'image_id' => NULL,
            ),
            117 => 
            array (
                'category_id' => 118,
                'parent_id' => 14,
                'category_name' => 'ペン・万年筆',
                'image_id' => NULL,
            ),
            118 => 
            array (
                'category_id' => 119,
                'parent_id' => 14,
                'category_name' => '手帳・ノート・メモ',
                'image_id' => NULL,
            ),
            119 => 
            array (
                'category_id' => 120,
                'parent_id' => 14,
                'category_name' => 'レターセット・封筒',
                'image_id' => NULL,
            ),
            120 => 
            array (
                'category_id' => 121,
                'parent_id' => 14,
                'category_name' => 'カード・はがき',
                'image_id' => NULL,
            ),
            121 => 
            array (
                'category_id' => 122,
                'parent_id' => 14,
                'category_name' => 'カレンダー',
                'image_id' => NULL,
            ),
            122 => 
            array (
                'category_id' => 123,
                'parent_id' => 14,
                'category_name' => 'スタンプ・ハンコ',
                'image_id' => NULL,
            ),
            123 => 
            array (
                'category_id' => 124,
                'parent_id' => 14,
                'category_name' => 'テープ・シール',
                'image_id' => NULL,
            ),
            124 => 
            array (
                'category_id' => 125,
                'parent_id' => 14,
                'category_name' => 'はさみ・カッター',
                'image_id' => NULL,
            ),
            125 => 
            array (
                'category_id' => 126,
                'parent_id' => 14,
                'category_name' => 'ラッピンググッズ',
                'image_id' => NULL,
            ),
            126 => 
            array (
                'category_id' => 127,
                'parent_id' => 14,
                'category_name' => 'その他文房具',
                'image_id' => NULL,
            ),
            127 => 
            array (
                'category_id' => 128,
                'parent_id' => 15,
                'category_name' => 'ペットグッズ',
                'image_id' => NULL,
            ),
            128 => 
            array (
                'category_id' => 129,
                'parent_id' => 16,
                'category_name' => 'おもちゃ・絵本',
                'image_id' => NULL,
            ),
            129 => 
            array (
                'category_id' => 130,
                'parent_id' => 16,
                'category_name' => 'ベビー雑貨',
                'image_id' => NULL,
            ),
            130 => 
            array (
                'category_id' => 131,
                'parent_id' => 16,
                'category_name' => 'キッズ雑貨',
                'image_id' => NULL,
            ),
            131 => 
            array (
                'category_id' => 132,
                'parent_id' => 16,
                'category_name' => 'お食事グッズ',
                'image_id' => NULL,
            ),
            132 => 
            array (
                'category_id' => 133,
                'parent_id' => 16,
                'category_name' => 'その他ベビー・キッズ',
                'image_id' => NULL,
            ),
            133 => 
            array (
                'category_id' => 134,
                'parent_id' => 17,
                'category_name' => 'カメラ・カメラグッズ',
                'image_id' => NULL,
            ),
            134 => 
            array (
                'category_id' => 135,
                'parent_id' => 17,
                'category_name' => 'トラベルグッズ',
                'image_id' => NULL,
            ),
            135 => 
            array (
                'category_id' => 136,
                'parent_id' => 17,
                'category_name' => 'サウナグッズ',
                'image_id' => NULL,
            ),
            136 => 
            array (
                'category_id' => 137,
                'parent_id' => 17,
                'category_name' => 'スポーツ・アウトドアグッズ',
                'image_id' => NULL,
            ),
            137 => 
            array (
                'category_id' => 138,
                'parent_id' => 17,
                'category_name' => '音楽・本・雑誌',
                'image_id' => NULL,
            ),
            138 => 
            array (
                'category_id' => 139,
                'parent_id' => 17,
                'category_name' => '手芸グッズ',
                'image_id' => NULL,
            ),
            139 => 
            array (
                'category_id' => 140,
                'parent_id' => 17,
                'category_name' => 'その他ホビー',
                'image_id' => NULL,
            ),
            140 => 
            array (
                'category_id' => 141,
                'parent_id' => 18,
                'category_name' => 'その他生活雑貨',
                'image_id' => NULL,
            ),
            141 => 
            array (
                'category_id' => 142,
                'parent_id' => 19,
                'category_name' => 'ペンダントライト',
                'image_id' => NULL,
            ),
            142 => 
            array (
                'category_id' => 143,
                'parent_id' => 19,
                'category_name' => 'フロアランプ・スタンドライト',
                'image_id' => NULL,
            ),
            143 => 
            array (
                'category_id' => 144,
                'parent_id' => 19,
                'category_name' => 'デスクライト・クリップライト',
                'image_id' => NULL,
            ),
            144 => 
            array (
                'category_id' => 145,
                'parent_id' => 19,
                'category_name' => 'その他照明',
                'image_id' => NULL,
            ),
            145 => 
            array (
                'category_id' => 146,
                'parent_id' => 20,
                'category_name' => 'テーブル',
                'image_id' => NULL,
            ),
            146 => 
            array (
                'category_id' => 147,
                'parent_id' => 20,
                'category_name' => '椅子・スツール',
                'image_id' => NULL,
            ),
            147 => 
            array (
                'category_id' => 148,
                'parent_id' => 20,
                'category_name' => 'フック・壁掛け',
                'image_id' => NULL,
            ),
            148 => 
            array (
                'category_id' => 149,
                'parent_id' => 20,
                'category_name' => 'ラック・収納家具',
                'image_id' => NULL,
            ),
            149 => 
            array (
                'category_id' => 150,
                'parent_id' => 20,
                'category_name' => 'その他家具',
                'image_id' => NULL,
            ),
            150 => 
            array (
                'category_id' => 151,
                'parent_id' => 21,
                'category_name' => 'カーテン',
                'image_id' => NULL,
            ),
            151 => 
            array (
                'category_id' => 152,
                'parent_id' => 21,
                'category_name' => 'クッション',
                'image_id' => NULL,
            ),
            152 => 
            array (
                'category_id' => 153,
                'parent_id' => 21,
                'category_name' => 'ブランケット',
                'image_id' => NULL,
            ),
            153 => 
            array (
                'category_id' => 154,
                'parent_id' => 21,
                'category_name' => 'ラグ',
                'image_id' => NULL,
            ),
            154 => 
            array (
                'category_id' => 155,
                'parent_id' => 21,
                'category_name' => '生地',
                'image_id' => NULL,
            ),
            155 => 
            array (
                'category_id' => 156,
                'parent_id' => 21,
                'category_name' => 'その他ファブリック',
                'image_id' => NULL,
            ),
            156 => 
            array (
                'category_id' => 157,
                'parent_id' => 22,
                'category_name' => '生花・ドライフラワー',
                'image_id' => NULL,
            ),
            157 => 
            array (
                'category_id' => 158,
                'parent_id' => 22,
                'category_name' => '鉢・鉢カバー',
                'image_id' => NULL,
            ),
            158 => 
            array (
                'category_id' => 159,
                'parent_id' => 22,
                'category_name' => 'じょうろ',
                'image_id' => NULL,
            ),
            159 => 
            array (
                'category_id' => 160,
                'parent_id' => 22,
                'category_name' => 'ガーデン雑貨',
                'image_id' => NULL,
            ),
            160 => 
            array (
                'category_id' => 161,
                'parent_id' => 22,
                'category_name' => 'その他ガーデン',
                'image_id' => NULL,
            ),
            161 => 
            array (
                'category_id' => 162,
                'parent_id' => 23,
                'category_name' => 'その他インテリア',
                'image_id' => NULL,
            ),
            162 => 
            array (
                'category_id' => 163,
                'parent_id' => 24,
                'category_name' => '珈琲',
                'image_id' => NULL,
            ),
            163 => 
            array (
                'category_id' => 164,
                'parent_id' => 24,
                'category_name' => '紅茶',
                'image_id' => NULL,
            ),
            164 => 
            array (
                'category_id' => 165,
                'parent_id' => 24,
                'category_name' => 'お茶',
                'image_id' => NULL,
            ),
            165 => 
            array (
                'category_id' => 166,
                'parent_id' => 24,
                'category_name' => 'ジュース',
                'image_id' => NULL,
            ),
            166 => 
            array (
                'category_id' => 167,
                'parent_id' => 24,
                'category_name' => 'その他ドリンク',
                'image_id' => NULL,
            ),
            167 => 
            array (
                'category_id' => 168,
                'parent_id' => 25,
                'category_name' => '焼き菓子・クッキー',
                'image_id' => NULL,
            ),
            168 => 
            array (
                'category_id' => 169,
                'parent_id' => 25,
                'category_name' => 'チョコレート',
                'image_id' => NULL,
            ),
            169 => 
            array (
                'category_id' => 170,
                'parent_id' => 25,
                'category_name' => '米菓子',
                'image_id' => NULL,
            ),
            170 => 
            array (
                'category_id' => 171,
                'parent_id' => 25,
                'category_name' => '飴・キャンディ',
                'image_id' => NULL,
            ),
            171 => 
            array (
                'category_id' => 172,
                'parent_id' => 25,
                'category_name' => '和菓子',
                'image_id' => NULL,
            ),
            172 => 
            array (
                'category_id' => 173,
                'parent_id' => 25,
                'category_name' => 'スナック菓子・チップス',
                'image_id' => NULL,
            ),
            173 => 
            array (
                'category_id' => 174,
                'parent_id' => 25,
                'category_name' => 'その他スイーツ・お菓子',
                'image_id' => NULL,
            ),
            174 => 
            array (
                'category_id' => 175,
                'parent_id' => 26,
                'category_name' => 'うどん・そば',
                'image_id' => NULL,
            ),
            175 => 
            array (
                'category_id' => 176,
                'parent_id' => 26,
                'category_name' => 'パスタ',
                'image_id' => NULL,
            ),
            176 => 
            array (
                'category_id' => 177,
                'parent_id' => 26,
                'category_name' => 'その他麺・パスタ',
                'image_id' => NULL,
            ),
            177 => 
            array (
                'category_id' => 178,
                'parent_id' => 27,
                'category_name' => '米',
                'image_id' => NULL,
            ),
            178 => 
            array (
                'category_id' => 179,
                'parent_id' => 27,
                'category_name' => '雑穀',
                'image_id' => NULL,
            ),
            179 => 
            array (
                'category_id' => 180,
                'parent_id' => 28,
                'category_name' => 'パン・シリアル',
                'image_id' => NULL,
            ),
            180 => 
            array (
                'category_id' => 181,
                'parent_id' => 28,
                'category_name' => 'オートミール',
                'image_id' => NULL,
            ),
            181 => 
            array (
                'category_id' => 182,
                'parent_id' => 29,
                'category_name' => 'シロップ',
                'image_id' => NULL,
            ),
            182 => 
            array (
                'category_id' => 183,
                'parent_id' => 29,
                'category_name' => 'ジャム',
                'image_id' => NULL,
            ),
            183 => 
            array (
                'category_id' => 184,
                'parent_id' => 29,
                'category_name' => 'ハチミツ',
                'image_id' => NULL,
            ),
            184 => 
            array (
                'category_id' => 185,
                'parent_id' => 29,
                'category_name' => 'その他シロップ・ジャム',
                'image_id' => NULL,
            ),
            185 => 
            array (
                'category_id' => 186,
                'parent_id' => 30,
                'category_name' => '健康補助食品',
                'image_id' => NULL,
            ),
            186 => 
            array (
                'category_id' => 187,
                'parent_id' => 30,
                'category_name' => 'スーパーフード',
                'image_id' => NULL,
            ),
            187 => 
            array (
                'category_id' => 188,
                'parent_id' => 30,
                'category_name' => 'その他健康補助食品',
                'image_id' => NULL,
            ),
            188 => 
            array (
                'category_id' => 189,
                'parent_id' => 31,
                'category_name' => '調味料',
                'image_id' => NULL,
            ),
            189 => 
            array (
                'category_id' => 190,
                'parent_id' => 31,
                'category_name' => '食用油・バター',
                'image_id' => NULL,
            ),
            190 => 
            array (
                'category_id' => 191,
                'parent_id' => 32,
                'category_name' => 'その他フード・ドリンク',
                'image_id' => NULL,
            ),
            191 => 
            array (
                'category_id' => 192,
                'parent_id' => 33,
                'category_name' => '洗顔料',
                'image_id' => NULL,
            ),
            192 => 
            array (
                'category_id' => 193,
                'parent_id' => 33,
                'category_name' => 'ボディソープ',
                'image_id' => NULL,
            ),
            193 => 
            array (
                'category_id' => 194,
                'parent_id' => 33,
                'category_name' => 'ハンドソープ',
                'image_id' => NULL,
            ),
            194 => 
            array (
                'category_id' => 195,
                'parent_id' => 33,
                'category_name' => '石鹸',
                'image_id' => NULL,
            ),
            195 => 
            array (
                'category_id' => 196,
                'parent_id' => 33,
                'category_name' => 'その他フェイス・ボディソープ',
                'image_id' => NULL,
            ),
            196 => 
            array (
                'category_id' => 197,
                'parent_id' => 34,
                'category_name' => '化粧水',
                'image_id' => NULL,
            ),
            197 => 
            array (
                'category_id' => 198,
                'parent_id' => 34,
                'category_name' => '乳液',
                'image_id' => NULL,
            ),
            198 => 
            array (
                'category_id' => 199,
                'parent_id' => 34,
                'category_name' => 'クリーム・美容液',
                'image_id' => NULL,
            ),
            199 => 
            array (
                'category_id' => 200,
                'parent_id' => 34,
                'category_name' => 'パック',
                'image_id' => NULL,
            ),
            200 => 
            array (
                'category_id' => 201,
                'parent_id' => 34,
                'category_name' => 'リップケア',
                'image_id' => NULL,
            ),
            201 => 
            array (
                'category_id' => 202,
                'parent_id' => 34,
                'category_name' => 'その他スキンケア',
                'image_id' => NULL,
            ),
            202 => 
            array (
                'category_id' => 203,
                'parent_id' => 35,
                'category_name' => 'ベースメイク',
                'image_id' => NULL,
            ),
            203 => 
            array (
                'category_id' => 204,
                'parent_id' => 35,
                'category_name' => 'メイクアップ',
                'image_id' => NULL,
            ),
            204 => 
            array (
                'category_id' => 205,
                'parent_id' => 35,
                'category_name' => 'ネイル',
                'image_id' => NULL,
            ),
            205 => 
            array (
                'category_id' => 206,
                'parent_id' => 35,
                'category_name' => 'その他メイク・ネイル',
                'image_id' => NULL,
            ),
            206 => 
            array (
                'category_id' => 207,
                'parent_id' => 36,
                'category_name' => 'ボディクリーム',
                'image_id' => NULL,
            ),
            207 => 
            array (
                'category_id' => 208,
                'parent_id' => 36,
                'category_name' => 'ハンドクリーム',
                'image_id' => NULL,
            ),
            208 => 
            array (
                'category_id' => 209,
                'parent_id' => 36,
                'category_name' => 'その他ボディケア',
                'image_id' => NULL,
            ),
            209 => 
            array (
                'category_id' => 210,
                'parent_id' => 37,
                'category_name' => 'シャンプ―・コンディショナー',
                'image_id' => NULL,
            ),
            210 => 
            array (
                'category_id' => 211,
                'parent_id' => 37,
                'category_name' => 'ヘアケア・トリートメント',
                'image_id' => NULL,
            ),
            211 => 
            array (
                'category_id' => 212,
                'parent_id' => 37,
                'category_name' => 'スタイリング',
                'image_id' => NULL,
            ),
            212 => 
            array (
                'category_id' => 213,
                'parent_id' => 37,
                'category_name' => 'ヘアブラシ',
                'image_id' => NULL,
            ),
            213 => 
            array (
                'category_id' => 214,
                'parent_id' => 37,
                'category_name' => 'その他へアケア',
                'image_id' => NULL,
            ),
            214 => 
            array (
                'category_id' => 215,
                'parent_id' => 38,
                'category_name' => '入浴剤',
                'image_id' => NULL,
            ),
            215 => 
            array (
                'category_id' => 216,
                'parent_id' => 38,
                'category_name' => 'バスケア',
                'image_id' => NULL,
            ),
            216 => 
            array (
                'category_id' => 217,
                'parent_id' => 38,
                'category_name' => 'その他バスケア・リラックス',
                'image_id' => NULL,
            ),
            217 => 
            array (
                'category_id' => 218,
                'parent_id' => 39,
                'category_name' => '香水',
                'image_id' => NULL,
            ),
            218 => 
            array (
                'category_id' => 219,
                'parent_id' => 39,
                'category_name' => 'その他香水',
                'image_id' => NULL,
            ),
            219 => 
            array (
                'category_id' => 220,
                'parent_id' => 40,
                'category_name' => '歯ブラシ・歯磨き粉',
                'image_id' => NULL,
            ),
            220 => 
            array (
                'category_id' => 221,
                'parent_id' => 40,
                'category_name' => 'その他オーラルケア',
                'image_id' => NULL,
            ),
            221 => 
            array (
                'category_id' => 222,
                'parent_id' => 41,
                'category_name' => 'その他美容・ケア',
                'image_id' => NULL,
            ),
        ));
        
        
    }
}