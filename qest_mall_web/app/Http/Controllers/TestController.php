<?php

namespace App\Http\Controllers;

use PaygentModule\System\PaygentB2BModule;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(Request $request) {
        
        $p = new PaygentB2BModule();
        $p->init();
        $p->setEncoding("UTF-8");

        // $result = $p->post();

        // if(!($result === true)) {
        //     # エラーコード取得
        //     $errorcode = $result;
        //     # エラー処理
        // }

        // if($p->hasResNext()) {
        //     # データが存在
        //     $res_array = $p->resNext(); # 要求結果取得
        //     $payment_id = $res_array["payment_id"]; # 決済ID取得 # 他、応答情報を取得
        // }

        // if($request->session()->has("id_token")) {
        //     \FBAuth::loginAnonymous($request);
        // } else {
        //     \FBAuth::createAuthAnonymous($request);
        // }
        //\FBAuth::auth("test", "test");
        

        return view("test");
    }

    public function postTest() {
        return view("test");
    }
}
