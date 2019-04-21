<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GetloginController extends Controller
{
    public function getLogin(){
            // neu da log in roi thi se khong the ve trang getLogin nua
        if(Auth::check()){
            return redirect()->route('index');
        }else{
            // nguoc lai neu chua dang nhap se  dc return ve trang login.
            return view('login.login');
        }
    }
    public function postLogin(Request $request){
        $username = $request->name;
        $password = $request->password;
        // neu chua login return ve trang login
        if(Auth::attempt(['email' => $username, 'password' => $password]))
            return redirect()->route('admin.list');
        else
            return redirect()->route('getLogin');
    }
    public function getRegister(){
        return view('login.register');
    }
    public function postRegister(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route('index');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('getLogin');
    }
}
