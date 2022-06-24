<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function UserView()
    {
        $data['userdata'] = User::all();
        $dataa['usertype'] = User::all();
        return view('backend.admin.User.user',$data,$dataa);
    }

    public function UserType(request $request,$id){
        $data = User::find($id);
        $data->user_type = $request->user_type;
        $data->save();
        // dd($data);
        return redirect()->route('user.view');
    }
}
