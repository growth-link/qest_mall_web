<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Tag;

class MyMenuController extends Controller
{
    ///////////////////////////////////////////////
    // 基本情報
    public function userInfo() {
        return view('user.my_menu.pc.user_info');
    }

    public function spUserInfo() {
        $major_categories = Category::where('parent_id', null)->get(); // 商品カテゴリ(大項目)取得
        $sub_categories = SubCategory::all(); // サブカテゴリ（ライフシーン）取得
        $tags = Tag::all(); // タグ取得
        return view('user.my_menu.sp.user_info', compact(
            'major_categories',
            'sub_categories',
            'tags',
        ));
    }

    ///////////////////////////////////////////////
    // 退会処理
    public function quit(Request $request) {
        return redirect()->route('quit_done');
    }

    public function spQuit(Request $request) {
        return redirect()->route('sp.quit_done');
    }

    ///////////////////////////////////////////////
    // 退会完了画面
    public function quitDone() {
        return view('user.my_menu.pc.quit_done');
    }

    public function spQuitDone() {
        $major_categories = Category::where('parent_id', null)->get(); // 商品カテゴリ(大項目)取得
        $sub_categories = SubCategory::all(); // サブカテゴリ（ライフシーン）取得
        $tags = Tag::all(); // タグ取得
        return view('user.my_menu.sp.quit_done', compact(
            'major_categories',
            'sub_categories',
            'tags',
        ));
    }
}
