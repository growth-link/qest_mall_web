<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Auth;
use Kreait\Firebase\Factory;

class FirebaseTestController extends Controller
{
    private $factory;
    private $auth;

    public function loginAnonymous()
    {
        $factory = (new Factory)
            ->withServiceAccount('../firebase/dev/qest-mall-dev-183a2-firebase-adminsdk-weg8g-a7289804a9.json');
        $this->auth = $factory->createAuth();
        $anonymous = $this->auth->signInAnonymously();
        return view('index');
    }
}
