<?php

namespace App\Http\Controllers;

use App\Http\Requests\GetLoginRigister;
use App\Http\Requests\UpdatePassword;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        if(Auth::attempt(['email' => $username, 'password' => $password, 'role' => '1'])){
            return redirect()->route('admin.list');
        }
        else if(Auth::attempt(['email' => $username, 'password' => $password])){
            return redirect()->route('index');
        }
        else{
            return redirect()->route('getLogin');
        }
    }
    public function getRegister(){
        return view('login.register');
    }
    public function postRegister(GetLoginRigister $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route('index');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('getLogin');
    }
    //reset pass
    public function getPass($id){
        $pass = User::find($id);
        return view('login.reset', compact('pass'));
    }
    public function updatePass(UpdatePassword $request, $id){
        $pass = User::find($id);
//        if($request->input('present_password') == $pass->name && $request->input('password') == $request->input('confirm_password')){
//            $pass->password = bcrypt($request->input('password'));
//        }else{
//            echo 'that bai';
//        }
//        $pass->save();
        $hashedPassword = $pass->password;
        if (Hash::check($request->input('present_password'), $hashedPassword) && $request->input('password') == $request->input('confirm_password')) {
            $pass->password = bcrypt($request->input('password'));
            $pass->save();
            return redirect()->route('index');
        }else{
            return redirect()->route('getLogin');
        }
    }
}
