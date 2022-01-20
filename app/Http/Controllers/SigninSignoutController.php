<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SigninSignoutController extends Controller
{
    /**
     *  SIGN_IN機能
     * 
     *  @param Request $request
     *  @return Response
     */
    public function signin(Request $request){
        $password = $request->password;

        //サインイン成功
        if($password == 'ABCD1234'){
            session()->put('simple_auth', true);
            return redirect('/admin');
        }

        //サインイン失敗
        return redirect('/signin')->withErrors([
            'login' => 'ユーザーIDまたはパスワードが違います'
        ]);
    }

    /**
     *  SIGN_OUT機能
     * 
     *  @param Request $request
     *  @return Response
     */
    public function signout(Request $request){
        session()->forget('simple_auth');
        return redirect('/');
    }
}
