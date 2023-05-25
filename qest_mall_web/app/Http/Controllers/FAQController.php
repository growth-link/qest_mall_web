<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Tag;

class FAQController extends Controller
{
    ///////////////////////////////////////////////
    // よくあるご質問（FAQ）
    public function faq(Request $request) {
        // ログインチェック
        $is_login = false;
        if ($request->session()->has('user_id_token')) {
            $is_login = true;
        } else {
            $is_login = false;
        }

        $faq = config('faq');
        return view('user.faq.pc.faq', compact(
            'faq',
            'is_login'
        ));
    }

    public function spFaq(Request $request) {
        $faq = config('faq');
        $major_categories = Category::where('parent_id', null)->get(); // 商品カテゴリ(大項目)取得
        $sub_categories = SubCategory::all(); // サブカテゴリ（ライフシーン）取得
        $tags = Tag::all(); // タグ取得
        return view('user.faq.sp.faq', compact(
            'faq',
            'major_categories',
            'sub_categories',
            'tags',
        ));
    }

    ///////////////////////////////////////////////
    // 企業情報
    public function corporateInfo(Request $request) {
        // ログインチェック
        $is_login = false;
        if ($request->session()->has('user_id_token')) {
            $is_login = true;
        } else {
            $is_login = false;
        }
        return view('user.faq.pc.corporate_info',compact(
            'is_login'
        ));
    }

    public function spCorporateInfo(Request $request) {
        return view('user.faq.sp.corporate_info');
    }
}
