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
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => NULL,
                'category_name' => '生活雑貨・ホビー',
                'image_id' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'parent_id' => NULL,
                'category_name' => 'インテリア',
                'image_id' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'parent_id' => NULL,
                'category_name' => 'フード・ドリンク',
                'image_id' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'parent_id' => NULL,
                'category_name' => '美容ケア',
                'image_id' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'parent_id' => 1,
                'category_name' => 'メンズ',
                'image_id' => 1,
            ),
            6 => 
            array (
                'id' => 7,
                'parent_id' => 1,
                'category_name' => 'レディース',
                'image_id' => 2,
            ),
            7 => 
            array (
                'id' => 8,
                'parent_id' => 1,
                'category_name' => 'キッズ',
                'image_id' => 3,
            ),
            8 => 
            array (
                'id' => 9,
                'parent_id' => 2,
                'category_name' => 'テーブルウェア',
                'image_id' => 4,
            ),
            9 => 
            array (
                'id' => 10,
                'parent_id' => 2,
                'category_name' => 'キッチン',
                'image_id' => 5,
            ),
            10 => 
            array (
                'id' => 11,
                'parent_id' => 2,
                'category_name' => 'インテリア雑貨',
                'image_id' => 6,
            ),
            11 => 
            array (
                'id' => 12,
                'parent_id' => 2,
                'category_name' => 'バス・ハウスキーピング',
                'image_id' => 7,
            ),
            12 => 
            array (
                'id' => 13,
                'parent_id' => 2,
                'category_name' => 'PC・スマホグッズ/家電',
                'image_id' => 8,
            ),
            13 => 
            array (
                'id' => 14,
                'parent_id' => 2,
                'category_name' => '文房具',
                'image_id' => 9,
            ),
            14 => 
            array (
                'id' => 15,
                'parent_id' => 2,
                'category_name' => 'ペット',
                'image_id' => 10,
            ),
            15 => 
            array (
                'id' => 16,
                'parent_id' => 2,
                'category_name' => 'ベビー・キッズ',
                'image_id' => 11,
            ),
            16 => 
            array (
                'id' => 17,
                'parent_id' => 2,
                'category_name' => 'ホビー',
                'image_id' => 12,
            ),
            17 => 
            array (
                'id' => 18,
                'parent_id' => 2,
                'category_name' => 'その他生活雑貨',
                'image_id' => 33,
            ),
            18 => 
            array (
                'id' => 19,
                'parent_id' => 3,
                'category_name' => '照明',
                'image_id' => 13,
            ),
            19 => 
            array (
                'id' => 20,
                'parent_id' => 3,
                'category_name' => '家具',
                'image_id' => 14,
            ),
            20 => 
            array (
                'id' => 21,
                'parent_id' => 3,
                'category_name' => 'ファブリック',
                'image_id' => 15,
            ),
            21 => 
            array (
                'id' => 22,
                'parent_id' => 3,
                'category_name' => 'ガーデン',
                'image_id' => 16,
            ),
            22 => 
            array (
                'id' => 23,
                'parent_id' => 3,
                'category_name' => 'その他インテリア',
                'image_id' => 33,
            ),
            23 => 
            array (
                'id' => 24,
                'parent_id' => 4,
                'category_name' => 'ドリンク',
                'image_id' => 17,
            ),
            24 => 
            array (
                'id' => 25,
                'parent_id' => 4,
                'category_name' => 'スイーツ・お菓子',
                'image_id' => 18,
            ),
            25 => 
            array (
                'id' => 26,
                'parent_id' => 4,
                'category_name' => '麺・パスタ',
                'image_id' => 19,
            ),
            26 => 
            array (
                'id' => 27,
                'parent_id' => 4,
                'category_name' => '米・雑穀',
                'image_id' => 20,
            ),
            27 => 
            array (
                'id' => 28,
                'parent_id' => 4,
                'category_name' => 'パン・シリアル',
                'image_id' => 21,
            ),
            28 => 
            array (
                'id' => 29,
                'parent_id' => 4,
                'category_name' => 'シロップ・ジャム',
                'image_id' => 22,
            ),
            29 => 
            array (
                'id' => 30,
                'parent_id' => 4,
                'category_name' => '健康補助食品',
                'image_id' => 23,
            ),
            30 => 
            array (
                'id' => 31,
                'parent_id' => 4,
                'category_name' => '調味料・食用油',
                'image_id' => 24,
            ),
            31 => 
            array (
                'id' => 32,
                'parent_id' => 4,
                'category_name' => 'その他フード・ドリンク',
                'image_id' => 33,
            ),
            32 => 
            array (
                'id' => 33,
                'parent_id' => 5,
                'category_name' => 'フェイス・ボディソープ',
                'image_id' => 25,
            ),
            33 => 
            array (
                'id' => 34,
                'parent_id' => 5,
                'category_name' => 'スキンケア',
                'image_id' => 26,
            ),
            34 => 
            array (
                'id' => 35,
                'parent_id' => 5,
                'category_name' => 'メイク・ネイル',
                'image_id' => 27,
            ),
            35 => 
            array (
                'id' => 36,
                'parent_id' => 5,
                'category_name' => 'ボディケア',
                'image_id' => 28,
            ),
            36 => 
            array (
                'id' => 37,
                'parent_id' => 5,
                'category_name' => 'へアケア',
                'image_id' => 29,
            ),
            37 => 
            array (
                'id' => 38,
                'parent_id' => 5,
                'category_name' => 'バスケア・リラックス',
                'image_id' => 30,
            ),
            38 => 
            array (
                'id' => 39,
                'parent_id' => 5,
                'category_name' => '香水',
                'image_id' => 31,
            ),
            39 => 
            array (
                'id' => 40,
                'parent_id' => 5,
                'category_name' => 'オーラルケア',
                'image_id' => 32,
            ),
            40 => 
            array (
                'id' => 41,
                'parent_id' => 5,
                'category_name' => 'その他美容・ケア',
                'image_id' => 33,
            ),
            41 => 
            array (
                'id' => 42,
                'parent_id' => 6,
                'category_name' => 'トップス',
                'image_id' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'parent_id' => 6,
                'category_name' => 'ジャケット・アウター',
                'image_id' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'parent_id' => 6,
                'category_name' => 'パンツ',
                'image_id' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'parent_id' => 6,
                'category_name' => 'ルームウェア',
                'image_id' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'parent_id' => 6,
                'category_name' => 'バッグ',
                'image_id' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'parent_id' => 6,
                'category_name' => 'シューズ',
                'image_id' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'parent_id' => 6,
                'category_name' => '帽子',
                'image_id' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'parent_id' => 6,
                'category_name' => 'ファッション雑貨',
                'image_id' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'parent_id' => 6,
                'category_name' => 'アクセサリー',
                'image_id' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'parent_id' => 6,
                'category_name' => 'レッグウェア',
                'image_id' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'parent_id' => 6,
                'category_name' => 'アンダーウェア',
                'image_id' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'parent_id' => 6,
                'category_name' => 'その他ファッション',
                'image_id' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'parent_id' => 7,
                'category_name' => 'トップス',
                'image_id' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'parent_id' => 7,
                'category_name' => 'ジャケット・アウター',
                'image_id' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'parent_id' => 7,
                'category_name' => 'パンツ',
                'image_id' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'parent_id' => 7,
                'category_name' => 'ワンピース',
                'image_id' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'parent_id' => 7,
                'category_name' => 'スカート',
                'image_id' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'parent_id' => 7,
                'category_name' => 'ルームウェア',
                'image_id' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'parent_id' => 7,
                'category_name' => 'バッグ',
                'image_id' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'parent_id' => 7,
                'category_name' => 'シューズ',
                'image_id' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'parent_id' => 7,
                'category_name' => '帽子',
                'image_id' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'parent_id' => 7,
                'category_name' => 'ファッション雑貨',
                'image_id' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'parent_id' => 7,
                'category_name' => 'アクセサリー',
                'image_id' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'parent_id' => 7,
                'category_name' => 'レッグウェア',
                'image_id' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'parent_id' => 7,
                'category_name' => 'アンダーウェア',
                'image_id' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'parent_id' => 7,
                'category_name' => 'その他ファッション',
                'image_id' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'parent_id' => 8,
                'category_name' => 'キッズ・ベビーファッション',
                'image_id' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'parent_id' => 9,
                'category_name' => 'プレート・お皿',
                'image_id' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'parent_id' => 9,
                'category_name' => '鉢・ボウル',
                'image_id' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'parent_id' => 9,
                'category_name' => '茶碗・お椀',
                'image_id' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'parent_id' => 9,
                'category_name' => '湯呑・蕎麦猪口',
                'image_id' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'parent_id' => 9,
                'category_name' => 'マグ・カップ＆ソーサ―',
                'image_id' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'parent_id' => 9,
                'category_name' => 'グラス・タンブラー',
                'image_id' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'parent_id' => 9,
                'category_name' => 'ピッチャー・カラフェ',
                'image_id' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'parent_id' => 9,
                'category_name' => 'カトラリー・箸',
                'image_id' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'parent_id' => 9,
                'category_name' => 'コースター・鍋敷き',
                'image_id' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'parent_id' => 9,
                'category_name' => 'トレー・お盆',
                'image_id' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'parent_id' => 9,
                'category_name' => 'その他テーブルウェア',
                'image_id' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'parent_id' => 10,
                'category_name' => '鍋・フライパン',
                'image_id' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'parent_id' => 10,
                'category_name' => 'キッチンツール',
                'image_id' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'parent_id' => 10,
                'category_name' => 'ナイフ・包丁',
                'image_id' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'parent_id' => 10,
                'category_name' => 'カッティングボード・まな板',
                'image_id' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'parent_id' => 10,
                'category_name' => 'ケトル・薬缶',
                'image_id' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'parent_id' => 10,
                'category_name' => 'ティーポット・お茶グッズ',
                'image_id' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'parent_id' => 10,
                'category_name' => 'コーヒーメーカー・珈琲グッズ',
                'image_id' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'parent_id' => 10,
                'category_name' => '保存容器',
                'image_id' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'parent_id' => 10,
                'category_name' => 'キッチンツール収納',
                'image_id' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'parent_id' => 10,
                'category_name' => 'お弁当箱・お弁当グッズ',
                'image_id' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'parent_id' => 10,
                'category_name' => 'ボトル・水筒',
                'image_id' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'parent_id' => 10,
                'category_name' => 'キッチンファブリック',
                'image_id' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'parent_id' => 10,
                'category_name' => 'その他キッチン',
                'image_id' => NULL,
            ),
            92 => 
            array (
                'id' => 93,
                'parent_id' => 11,
                'category_name' => 'フラワーベース',
                'image_id' => NULL,
            ),
            93 => 
            array (
                'id' => 94,
                'parent_id' => 11,
                'category_name' => 'オブジェ・モービル',
                'image_id' => NULL,
            ),
            94 => 
            array (
                'id' => 95,
                'parent_id' => 11,
                'category_name' => 'キャンドル・キャンドルスタンド',
                'image_id' => NULL,
            ),
            95 => 
            array (
                'id' => 96,
                'parent_id' => 11,
                'category_name' => 'アロマ・ディフューザー',
                'image_id' => NULL,
            ),
            96 => 
            array (
                'id' => 97,
                'parent_id' => 11,
                'category_name' => 'ミラー・手鏡',
                'image_id' => NULL,
            ),
            97 => 
            array (
                'id' => 98,
                'parent_id' => 11,
                'category_name' => 'かご・収納ボックス',
                'image_id' => NULL,
            ),
            98 => 
            array (
                'id' => 99,
                'parent_id' => 11,
                'category_name' => 'デスク収納・小物置き',
                'image_id' => NULL,
            ),
            99 => 
            array (
                'id' => 100,
                'parent_id' => 11,
                'category_name' => '時計',
                'image_id' => NULL,
            ),
            100 => 
            array (
                'id' => 101,
                'parent_id' => 11,
                'category_name' => '傘立て・ドアストッパー',
                'image_id' => NULL,
            ),
            101 => 
            array (
                'id' => 102,
                'parent_id' => 11,
                'category_name' => 'ゴミ箱',
                'image_id' => NULL,
            ),
            102 => 
            array (
                'id' => 103,
                'parent_id' => 11,
                'category_name' => 'ポスター・フレーム',
                'image_id' => NULL,
            ),
            103 => 
            array (
                'id' => 104,
                'parent_id' => 11,
                'category_name' => 'その他インテリア雑貨',
                'image_id' => NULL,
            ),
            104 => 
            array (
                'id' => 105,
                'parent_id' => 12,
                'category_name' => 'ランドリーグッズ',
                'image_id' => NULL,
            ),
            105 => 
            array (
                'id' => 106,
                'parent_id' => 12,
                'category_name' => 'バスグッズ',
                'image_id' => NULL,
            ),
            106 => 
            array (
                'id' => 107,
                'parent_id' => 12,
                'category_name' => 'タオル・バスマット',
                'image_id' => NULL,
            ),
            107 => 
            array (
                'id' => 108,
                'parent_id' => 12,
                'category_name' => '掃除用具・ブラシ',
                'image_id' => NULL,
            ),
            108 => 
            array (
                'id' => 109,
                'parent_id' => 12,
                'category_name' => 'その他バス・ハウスキーピング',
                'image_id' => NULL,
            ),
            109 => 
            array (
                'id' => 110,
                'parent_id' => 13,
                'category_name' => 'スマホケース/カバー',
                'image_id' => NULL,
            ),
            110 => 
            array (
                'id' => 111,
                'parent_id' => 13,
                'category_name' => 'スマホグッズ',
                'image_id' => NULL,
            ),
            111 => 
            array (
                'id' => 112,
                'parent_id' => 13,
                'category_name' => 'PC・タブレットケース',
                'image_id' => NULL,
            ),
            112 => 
            array (
                'id' => 113,
                'parent_id' => 13,
                'category_name' => 'PCグッズ',
                'image_id' => NULL,
            ),
            113 => 
            array (
                'id' => 114,
                'parent_id' => 13,
                'category_name' => '生活家電',
                'image_id' => NULL,
            ),
            114 => 
            array (
                'id' => 115,
                'parent_id' => 13,
                'category_name' => 'キッチン家電',
                'image_id' => NULL,
            ),
            115 => 
            array (
                'id' => 116,
                'parent_id' => 13,
                'category_name' => 'スピーカー',
                'image_id' => NULL,
            ),
            116 => 
            array (
                'id' => 117,
                'parent_id' => 13,
                'category_name' => 'ヘッドフォン/イヤホン',
                'image_id' => NULL,
            ),
            117 => 
            array (
                'id' => 118,
                'parent_id' => 14,
                'category_name' => 'ペン・万年筆',
                'image_id' => NULL,
            ),
            118 => 
            array (
                'id' => 119,
                'parent_id' => 14,
                'category_name' => '手帳・ノート・メモ',
                'image_id' => NULL,
            ),
            119 => 
            array (
                'id' => 120,
                'parent_id' => 14,
                'category_name' => 'レターセット・封筒',
                'image_id' => NULL,
            ),
            120 => 
            array (
                'id' => 121,
                'parent_id' => 14,
                'category_name' => 'カード・はがき',
                'image_id' => NULL,
            ),
            121 => 
            array (
                'id' => 122,
                'parent_id' => 14,
                'category_name' => 'カレンダー',
                'image_id' => NULL,
            ),
            122 => 
            array (
                'id' => 123,
                'parent_id' => 14,
                'category_name' => 'スタンプ・ハンコ',
                'image_id' => NULL,
            ),
            123 => 
            array (
                'id' => 124,
                'parent_id' => 14,
                'category_name' => 'テープ・シール',
                'image_id' => NULL,
            ),
            124 => 
            array (
                'id' => 125,
                'parent_id' => 14,
                'category_name' => 'はさみ・カッター',
                'image_id' => NULL,
            ),
            125 => 
            array (
                'id' => 126,
                'parent_id' => 14,
                'category_name' => 'ラッピンググッズ',
                'image_id' => NULL,
            ),
            126 => 
            array (
                'id' => 127,
                'parent_id' => 14,
                'category_name' => 'その他文房具',
                'image_id' => NULL,
            ),
            127 => 
            array (
                'id' => 128,
                'parent_id' => 15,
                'category_name' => 'ペットグッズ',
                'image_id' => NULL,
            ),
            128 => 
            array (
                'id' => 129,
                'parent_id' => 16,
                'category_name' => 'おもちゃ・絵本',
                'image_id' => NULL,
            ),
            129 => 
            array (
                'id' => 130,
                'parent_id' => 16,
                'category_name' => 'ベビー雑貨',
                'image_id' => NULL,
            ),
            130 => 
            array (
                'id' => 131,
                'parent_id' => 16,
                'category_name' => 'キッズ雑貨',
                'image_id' => NULL,
            ),
            131 => 
            array (
                'id' => 132,
                'parent_id' => 16,
                'category_name' => 'お食事グッズ',
                'image_id' => NULL,
            ),
            132 => 
            array (
                'id' => 133,
                'parent_id' => 16,
                'category_name' => 'その他ベビー・キッズ',
                'image_id' => NULL,
            ),
            133 => 
            array (
                'id' => 134,
                'parent_id' => 17,
                'category_name' => 'カメラ・カメラグッズ',
                'image_id' => NULL,
            ),
            134 => 
            array (
                'id' => 135,
                'parent_id' => 17,
                'category_name' => 'トラベルグッズ',
                'image_id' => NULL,
            ),
            135 => 
            array (
                'id' => 136,
                'parent_id' => 17,
                'category_name' => 'サウナグッズ',
                'image_id' => NULL,
            ),
            136 => 
            array (
                'id' => 137,
                'parent_id' => 17,
                'category_name' => 'スポーツ・アウトドアグッズ',
                'image_id' => NULL,
            ),
            137 => 
            array (
                'id' => 138,
                'parent_id' => 17,
                'category_name' => '音楽・本・雑誌',
                'image_id' => NULL,
            ),
            138 => 
            array (
                'id' => 139,
                'parent_id' => 17,
                'category_name' => '手芸グッズ',
                'image_id' => NULL,
            ),
            139 => 
            array (
                'id' => 140,
                'parent_id' => 17,
                'category_name' => 'その他ホビー',
                'image_id' => NULL,
            ),
            140 => 
            array (
                'id' => 141,
                'parent_id' => 18,
                'category_name' => 'その他生活雑貨',
                'image_id' => NULL,
            ),
            141 => 
            array (
                'id' => 142,
                'parent_id' => 19,
                'category_name' => 'ペンダントライト',
                'image_id' => NULL,
            ),
            142 => 
            array (
                'id' => 143,
                'parent_id' => 19,
                'category_name' => 'フロアランプ・スタンドライト',
                'image_id' => NULL,
            ),
            143 => 
            array (
                'id' => 144,
                'parent_id' => 19,
                'category_name' => 'デスクライト・クリップライト',
                'image_id' => NULL,
            ),
            144 => 
            array (
                'id' => 145,
                'parent_id' => 19,
                'category_name' => 'その他照明',
                'image_id' => NULL,
            ),
            145 => 
            array (
                'id' => 146,
                'parent_id' => 20,
                'category_name' => 'テーブル',
                'image_id' => NULL,
            ),
            146 => 
            array (
                'id' => 147,
                'parent_id' => 20,
                'category_name' => '椅子・スツール',
                'image_id' => NULL,
            ),
            147 => 
            array (
                'id' => 148,
                'parent_id' => 20,
                'category_name' => 'フック・壁掛け',
                'image_id' => NULL,
            ),
            148 => 
            array (
                'id' => 149,
                'parent_id' => 20,
                'category_name' => 'ラック・収納家具',
                'image_id' => NULL,
            ),
            149 => 
            array (
                'id' => 150,
                'parent_id' => 20,
                'category_name' => 'その他家具',
                'image_id' => NULL,
            ),
            150 => 
            array (
                'id' => 151,
                'parent_id' => 21,
                'category_name' => 'カーテン',
                'image_id' => NULL,
            ),
            151 => 
            array (
                'id' => 152,
                'parent_id' => 21,
                'category_name' => 'クッション',
                'image_id' => NULL,
            ),
            152 => 
            array (
                'id' => 153,
                'parent_id' => 21,
                'category_name' => 'ブランケット',
                'image_id' => NULL,
            ),
            153 => 
            array (
                'id' => 154,
                'parent_id' => 21,
                'category_name' => 'ラグ',
                'image_id' => NULL,
            ),
            154 => 
            array (
                'id' => 155,
                'parent_id' => 21,
                'category_name' => '生地',
                'image_id' => NULL,
            ),
            155 => 
            array (
                'id' => 156,
                'parent_id' => 21,
                'category_name' => 'その他ファブリック',
                'image_id' => NULL,
            ),
            156 => 
            array (
                'id' => 157,
                'parent_id' => 22,
                'category_name' => '生花・ドライフラワー',
                'image_id' => NULL,
            ),
            157 => 
            array (
                'id' => 158,
                'parent_id' => 22,
                'category_name' => '鉢・鉢カバー',
                'image_id' => NULL,
            ),
            158 => 
            array (
                'id' => 159,
                'parent_id' => 22,
                'category_name' => 'じょうろ',
                'image_id' => NULL,
            ),
            159 => 
            array (
                'id' => 160,
                'parent_id' => 22,
                'category_name' => 'ガーデン雑貨',
                'image_id' => NULL,
            ),
            160 => 
            array (
                'id' => 161,
                'parent_id' => 22,
                'category_name' => 'その他ガーデン',
                'image_id' => NULL,
            ),
            161 => 
            array (
                'id' => 162,
                'parent_id' => 23,
                'category_name' => 'その他インテリア',
                'image_id' => NULL,
            ),
            162 => 
            array (
                'id' => 163,
                'parent_id' => 24,
                'category_name' => '珈琲',
                'image_id' => NULL,
            ),
            163 => 
            array (
                'id' => 164,
                'parent_id' => 24,
                'category_name' => '紅茶',
                'image_id' => NULL,
            ),
            164 => 
            array (
                'id' => 165,
                'parent_id' => 24,
                'category_name' => 'お茶',
                'image_id' => NULL,
            ),
            165 => 
            array (
                'id' => 166,
                'parent_id' => 24,
                'category_name' => 'ジュース',
                'image_id' => NULL,
            ),
            166 => 
            array (
                'id' => 167,
                'parent_id' => 24,
                'category_name' => 'その他ドリンク',
                'image_id' => NULL,
            ),
            167 => 
            array (
                'id' => 168,
                'parent_id' => 25,
                'category_name' => '焼き菓子・クッキー',
                'image_id' => NULL,
            ),
            168 => 
            array (
                'id' => 169,
                'parent_id' => 25,
                'category_name' => 'チョコレート',
                'image_id' => NULL,
            ),
            169 => 
            array (
                'id' => 170,
                'parent_id' => 25,
                'category_name' => '米菓子',
                'image_id' => NULL,
            ),
            170 => 
            array (
                'id' => 171,
                'parent_id' => 25,
                'category_name' => '飴・キャンディ',
                'image_id' => NULL,
            ),
            171 => 
            array (
                'id' => 172,
                'parent_id' => 25,
                'category_name' => '和菓子',
                'image_id' => NULL,
            ),
            172 => 
            array (
                'id' => 173,
                'parent_id' => 25,
                'category_name' => 'スナック菓子・チップス',
                'image_id' => NULL,
            ),
            173 => 
            array (
                'id' => 174,
                'parent_id' => 25,
                'category_name' => 'その他スイーツ・お菓子',
                'image_id' => NULL,
            ),
            174 => 
            array (
                'id' => 175,
                'parent_id' => 26,
                'category_name' => 'うどん・そば',
                'image_id' => NULL,
            ),
            175 => 
            array (
                'id' => 176,
                'parent_id' => 26,
                'category_name' => 'パスタ',
                'image_id' => NULL,
            ),
            176 => 
            array (
                'id' => 177,
                'parent_id' => 26,
                'category_name' => 'その他麺・パスタ',
                'image_id' => NULL,
            ),
            177 => 
            array (
                'id' => 178,
                'parent_id' => 27,
                'category_name' => '米',
                'image_id' => NULL,
            ),
            178 => 
            array (
                'id' => 179,
                'parent_id' => 27,
                'category_name' => '雑穀',
                'image_id' => NULL,
            ),
            179 => 
            array (
                'id' => 180,
                'parent_id' => 28,
                'category_name' => 'パン・シリアル',
                'image_id' => NULL,
            ),
            180 => 
            array (
                'id' => 181,
                'parent_id' => 28,
                'category_name' => 'オートミール',
                'image_id' => NULL,
            ),
            181 => 
            array (
                'id' => 182,
                'parent_id' => 29,
                'category_name' => 'シロップ',
                'image_id' => NULL,
            ),
            182 => 
            array (
                'id' => 183,
                'parent_id' => 29,
                'category_name' => 'ジャム',
                'image_id' => NULL,
            ),
            183 => 
            array (
                'id' => 184,
                'parent_id' => 29,
                'category_name' => 'ハチミツ',
                'image_id' => NULL,
            ),
            184 => 
            array (
                'id' => 185,
                'parent_id' => 29,
                'category_name' => 'その他シロップ・ジャム',
                'image_id' => NULL,
            ),
            185 => 
            array (
                'id' => 186,
                'parent_id' => 30,
                'category_name' => '健康補助食品',
                'image_id' => NULL,
            ),
            186 => 
            array (
                'id' => 187,
                'parent_id' => 30,
                'category_name' => 'スーパーフード',
                'image_id' => NULL,
            ),
            187 => 
            array (
                'id' => 188,
                'parent_id' => 30,
                'category_name' => 'その他健康補助食品',
                'image_id' => NULL,
            ),
            188 => 
            array (
                'id' => 189,
                'parent_id' => 31,
                'category_name' => '調味料',
                'image_id' => NULL,
            ),
            189 => 
            array (
                'id' => 190,
                'parent_id' => 31,
                'category_name' => '食用油・バター',
                'image_id' => NULL,
            ),
            190 => 
            array (
                'id' => 191,
                'parent_id' => 32,
                'category_name' => 'その他フード・ドリンク',
                'image_id' => NULL,
            ),
            191 => 
            array (
                'id' => 192,
                'parent_id' => 33,
                'category_name' => '洗顔料',
                'image_id' => NULL,
            ),
            192 => 
            array (
                'id' => 193,
                'parent_id' => 33,
                'category_name' => 'ボディソープ',
                'image_id' => NULL,
            ),
            193 => 
            array (
                'id' => 194,
                'parent_id' => 33,
                'category_name' => 'ハンドソープ',
                'image_id' => NULL,
            ),
            194 => 
            array (
                'id' => 195,
                'parent_id' => 33,
                'category_name' => '石鹸',
                'image_id' => NULL,
            ),
            195 => 
            array (
                'id' => 196,
                'parent_id' => 33,
                'category_name' => 'その他フェイス・ボディソープ',
                'image_id' => NULL,
            ),
            196 => 
            array (
                'id' => 197,
                'parent_id' => 34,
                'category_name' => '化粧水',
                'image_id' => NULL,
            ),
            197 => 
            array (
                'id' => 198,
                'parent_id' => 34,
                'category_name' => '乳液',
                'image_id' => NULL,
            ),
            198 => 
            array (
                'id' => 199,
                'parent_id' => 34,
                'category_name' => 'クリーム・美容液',
                'image_id' => NULL,
            ),
            199 => 
            array (
                'id' => 200,
                'parent_id' => 34,
                'category_name' => 'パック',
                'image_id' => NULL,
            ),
            200 => 
            array (
                'id' => 201,
                'parent_id' => 34,
                'category_name' => 'リップケア',
                'image_id' => NULL,
            ),
            201 => 
            array (
                'id' => 202,
                'parent_id' => 34,
                'category_name' => 'その他スキンケア',
                'image_id' => NULL,
            ),
            202 => 
            array (
                'id' => 203,
                'parent_id' => 35,
                'category_name' => 'ベースメイク',
                'image_id' => NULL,
            ),
            203 => 
            array (
                'id' => 204,
                'parent_id' => 35,
                'category_name' => 'メイクアップ',
                'image_id' => NULL,
            ),
            204 => 
            array (
                'id' => 205,
                'parent_id' => 35,
                'category_name' => 'ネイル',
                'image_id' => NULL,
            ),
            205 => 
            array (
                'id' => 206,
                'parent_id' => 35,
                'category_name' => 'その他メイク・ネイル',
                'image_id' => NULL,
            ),
            206 => 
            array (
                'id' => 207,
                'parent_id' => 36,
                'category_name' => 'ボディクリーム',
                'image_id' => NULL,
            ),
            207 => 
            array (
                'id' => 208,
                'parent_id' => 36,
                'category_name' => 'ハンドクリーム',
                'image_id' => NULL,
            ),
            208 => 
            array (
                'id' => 209,
                'parent_id' => 36,
                'category_name' => 'その他ボディケア',
                'image_id' => NULL,
            ),
            209 => 
            array (
                'id' => 210,
                'parent_id' => 37,
                'category_name' => 'シャンプ―・コンディショナー',
                'image_id' => NULL,
            ),
            210 => 
            array (
                'id' => 211,
                'parent_id' => 37,
                'category_name' => 'ヘアケア・トリートメント',
                'image_id' => NULL,
            ),
            211 => 
            array (
                'id' => 212,
                'parent_id' => 37,
                'category_name' => 'スタイリング',
                'image_id' => NULL,
            ),
            212 => 
            array (
                'id' => 213,
                'parent_id' => 37,
                'category_name' => 'ヘアブラシ',
                'image_id' => NULL,
            ),
            213 => 
            array (
                'id' => 214,
                'parent_id' => 37,
                'category_name' => 'その他へアケア',
                'image_id' => NULL,
            ),
            214 => 
            array (
                'id' => 215,
                'parent_id' => 38,
                'category_name' => '入浴剤',
                'image_id' => NULL,
            ),
            215 => 
            array (
                'id' => 216,
                'parent_id' => 38,
                'category_name' => 'バスケア',
                'image_id' => NULL,
            ),
            216 => 
            array (
                'id' => 217,
                'parent_id' => 38,
                'category_name' => 'その他バスケア・リラックス',
                'image_id' => NULL,
            ),
            217 => 
            array (
                'id' => 218,
                'parent_id' => 39,
                'category_name' => '香水',
                'image_id' => NULL,
            ),
            218 => 
            array (
                'id' => 219,
                'parent_id' => 39,
                'category_name' => 'その他香水',
                'image_id' => NULL,
            ),
            219 => 
            array (
                'id' => 220,
                'parent_id' => 40,
                'category_name' => '歯ブラシ・歯磨き粉',
                'image_id' => NULL,
            ),
            220 => 
            array (
                'id' => 221,
                'parent_id' => 40,
                'category_name' => 'その他オーラルケア',
                'image_id' => NULL,
            ),
            221 => 
            array (
                'id' => 222,
                'parent_id' => 41,
                'category_name' => 'その他美容・ケア',
                'image_id' => NULL,
            ),
        ));
        
        
    }
}