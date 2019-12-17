<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class loginController extends Controller
{
    public function login(){
        return view('guest/login');
    }

    public function register(){
        return view('guest/register');
    }

    public function loginProcess(Request $request)
       {
           $credentials = $request->only('email', 'password');

           if (Auth::attempt($credentials)) {
               return redirect()->intended('member');
           }
       }




    public function registerProcess(Request $request){
        if ($request->isMethod('post')){
            $validateData = $request->validate([
                'name' => 'required',
                'email' => 'required',
                'password' => 'required',
                'confpassword' => 'required',
                'sex' => 'required',
                'address' => 'required',
                'bday' => 'required',
                'file_upload' => 'required'
            ]);

            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->role = "Member";
            $user->password = bcrypt($request->password);
            $user->password = bcrypt($request->confpassword);
            $user->gender = $request->sex;
            $user->address = $request->address;
            $user->birthday = $request->bday;
            $user->photo = $request->file_upload;

            $user->save();

            return redirect('/login')->with('success','register success');
        }else{
            return redirect('/register');
        }
    }
}
