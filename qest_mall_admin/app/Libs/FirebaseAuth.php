<?php

namespace App\Libs;
use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;
use Kreait\Firebase\Auth;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Exception\Auth\FailedToVerifyToken;
use Kreait\Firebase\Exception\FirebaseException;
use Throwable;

class FirebaseAuth
{
    public function auth($id, $password) {
        // Firebaseのユーザー登録処理（パスワード）
        Log::Info("test");
        $factory = (new Factory)
            ->withServiceAccount('../firebase/dev/qest-mall-dev-183a2-firebase-adminsdk-weg8g-a7289804a9.json');
        return true;
    }

    public function adminAuth($id, $password) {
        $factory = (new Factory)
            ->withServiceAccount('../firebase/dev/qest-mall-admin-dev-firebase-adminsdk-8j2vc-794917d832.json');
        return true;
    }

    public function login($id, $password) {
        // TODO Firebaseログイン処理
        $factory = (new Factory)
            ->withServiceAccount('../firebase/dev/qest-mall-dev-183a2-firebase-adminsdk-weg8g-a7289804a9.json');
        $signInResult = $auth->signInWithEmailAndPassword($email, $clearTextPassword);
        return true;
    }

    public function logout(Request $request) {
        $request->session()->forget("id_token");
        $request->session()->forget("refresh_token");
    }

    // 管理画面ログイン
    public function adminLogin(Request $request, string $login_id, string $password) {
        // TODO Firebase登録処理
        $factory = (new Factory)
            ->withServiceAccount('../firebase/dev/qest-mall-admin-dev-firebase-adminsdk-8j2vc-794917d832.json');
        $this->auth = $factory->createAuth();
        try {
            $signInResult = $this->auth->signInWithEmailAndPassword($login_id, $password);
        } catch (FirebaseException $e) {
            return redirect()->route("admin.login");
        } catch (Throwable $e) {

        }

        // セッションへの保存
        $request->session()->put("id_token", $signInResult->idToken());
        $request->session()->put("refresh_token", $signInResult->refreshToken());

        \Log::Info($signInResult->data());

        return $signInResult;
    }
    
    // 管理画面ログアウト
    public function adminLogout(Request $request) {
        $request->session()->forget("id_token");
        $request->session()->forget("refresh_token");
    }

    // ログイン確認：true or false
    public function isAdminLogin(Request $request) {
        $factory = (new Factory)
            ->withServiceAccount('../firebase/dev/qest-mall-admin-dev-firebase-adminsdk-8j2vc-794917d832.json');
        $this->auth = $factory->createAuth();
        
        if($request->session()->has("id_token")) {
            // セッションがあればログイン処理
            $idTokenString = $request->session()->get("id_token");
            try {
                $verifiedIdToken = $this->auth->verifyIdToken($idTokenString);
            } catch (FailedToVerifyToken $e) {
                echo 'The token is invalid: '.$e->getMessage();
                return false;
            }

            return true;
        } else {
            return false;
        }
    }

    // 管理画面ログインチェック
    public function checkAdminLogin(Request $request, $redirectName = null) {
        $factory = (new Factory)
            ->withServiceAccount('../firebase/dev/qest-mall-admin-dev-firebase-adminsdk-8j2vc-794917d832.json');
        $this->auth = $factory->createAuth();
        
        if($request->session()->has("id_token")) {
            // セッションがあればログイン処理
            $idTokenString = $request->session()->get("id_token");
            try {
                $verifiedIdToken = $this->auth->verifyIdToken($idTokenString);
            } catch (FailedToVerifyToken $e) {
                echo 'The token is invalid: '.$e->getMessage();
                return redirect()->route("admin.login");
            }

            $uid = $verifiedIdToken->claims()->get('sub');
            $user = $this->auth->getUser($uid);

            if(empty($redirectName)) {
                return redirect()->route("admin.mode_select");
            } else {
                return redirect()->route($redirectName);
            }
        } else {
            return redirect()->route("admin.login");
        }
    }

    // 匿名アカウント作成（初回アクセス）
    public function createAuthAnonymous(Request $request) {
        Log::Info("匿名アカウント作成");
        $factory = (new Factory)
            ->withServiceAccount('../firebase/dev/qest-mall-dev-183a2-firebase-adminsdk-weg8g-a7289804a9.json');
        $this->auth = $factory->createAuth();
        $signInResult = $this->auth->signInAnonymously();
        Log::Info($signInResult->data());

        // セッションへの保存
        $request->session()->put("id_token", $signInResult->idToken());
        $request->session()->put("refresh_token", $signInResult->refreshToken());
        // RefreshTokenの保存

        return $signInResult;
    }

    public function loginAnonymous(Request $request)
    {
        Log::Info("匿名ログイン");
        $factory = (new Factory)
            ->withServiceAccount('../firebase/dev/qest-mall-dev-183a2-firebase-adminsdk-weg8g-a7289804a9.json');

        $this->auth = $factory->createAuth();
        
        $idTokenString = $request->session()->get("id_token");

        try {
            $verifiedIdToken = $this->auth->verifyIdToken($idTokenString);
        } catch (FailedToVerifyToken $e) {
            echo 'The token is invalid: '.$e->getMessage();
        }

        $uid = $verifiedIdToken->claims()->get('sub');

        $user = $this->auth->getUser($uid);
        \Log::Info("uid:".$uid);
        \Log::Info("user:".$user->uid);

        return true;
    }
}