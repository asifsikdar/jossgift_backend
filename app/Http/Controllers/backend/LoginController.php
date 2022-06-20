<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class LoginController extends Controller
{
    public function viewLogin()
    {
        return view('backend.login.login');
    }

    public function viewregister(){
        return view('backend.login.register');
    }


    public function Loginpost(Request $request){
        $user = User::where('email',$request->email)->first();
        if($user){
            if($user->is_admin==1){
                if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                    return redirect()->intended('/admin/dashboard');
                 }
                 else{
                    return back()->with('failed','Login Error, Use Valid Credentials!');
                 }
            }else{
                return back()->with('failed','You need an approval for Login!');
            }
        }else{
            return back()->with('failed','Register First For Login!!');
        }
    }

    public function registerpost(request $request)
    {
        $validator = Validator::make($request->all(),[
            'email'=>'required|email',
            'password'=>'required|min:6',
            'confirm_password'=>'required|same:password|min:6',
            'name'=>'required'
        ]);
        if($validator->fails()){
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }else{
            $data = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => hash::make($request->password),
                'is_admin' => $request->is_admin,
                'user_type' => $request->user_type,
            ];
            $user = User::where('email',$request->email)->first();
            if($user){
                return back()->with('failed', "Email is already taken. ");
            }else{
                try{
                    User::create($data);
                    return back()->with('success', "Your Account has created Successfully. Please wait for Approval");
                }catch (\Exception $exception) {
                    return back()->with('failed', $exception->getMessage());
                }
            }
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/admin/login');
    }
}
