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
            ->withServiceAccount('../firebase/dev/qest-mall-dev-firebase-adminsdk-a7n16-8e8ab03d73.json');
        $this->auth = $factory->createAuth();
        $anonymous = $this->auth->signInAnonymously();
        return view('index');
    }
}
