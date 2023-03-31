<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('user.faq.sp.faq', compact('faq'));
    }
}
