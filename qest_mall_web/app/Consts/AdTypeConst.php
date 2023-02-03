<?php

namespace App\Consts;

class AdTypeConst
{
    public const TOP_RECTANGLE = 1;
    public const BOTTOM_RECTANGLE_UPPER = 2;
    public const BOTTOM_RECTANGLE_MIDDLE = 3;
    public const BOTTOM_RECTANGLE_LOWER = 4;
    public const MOBILE = 5;
    public const LIST = [
        self::TOP_RECTANGLE => "トップレクタングルバナー（左カラム）",
        self::BOTTOM_RECTANGLE_UPPER => "ボトムレクタングルバナー上（左カラム）",
        self::BOTTOM_RECTANGLE_MIDDLE => "ボトムレクタングルバナー中（左カラム）",
        self::BOTTOM_RECTANGLE_LOWER => "ボトムレクタングルバナー下（左カラム）",
        self::MOBILE => "モバイルバナー（フッター上）",
    ];
}
