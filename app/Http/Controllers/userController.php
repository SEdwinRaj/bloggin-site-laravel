<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blogUser;
use App\Models\blog;

class userController extends Controller
{
    public function sign_up(Request $request){
        $data = $request->all();
        $user = new blogUser();
        $user->username = $data["username"];
        $user->email = $data["email"];
        $user->password = $data["pass"];
        $user->save();

        $data1 = blog::all();
        return view('dashboard', compact('data1', "data"));
    }
}
