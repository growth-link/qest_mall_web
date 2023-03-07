<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(Request $request) {
        
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
