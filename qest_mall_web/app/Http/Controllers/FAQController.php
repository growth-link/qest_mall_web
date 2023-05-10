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
    public function faq() {
        $faq = config('faq');
        return view('user.faq.pc.faq', compact('faq'));
    }

    public function spFaq() {
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
    public function corporateInfo() {
        return view('user.faq.pc.corporate_info', compact(
        ));
    }

    public function spCorporateInfo() {
        return view('user.faq.sp.corporate_info', compact(
        ));
    }
}
