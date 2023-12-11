<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blogUser;
use App\Models\blog;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    public function signup(Request $request){

            $data = $request->all();
            $user = new blogUser();
            $user->username = $data["username"];
            $user->email = $data["email"];
            $user->password = $data["pass"];
            $user->save();

            $data1 = blog::all();
            return redirect('/tohome')->with(["data1"=> $data1,"d2"=> $data['username']]);
}
    public function signin(Request $request){
        $request->validate([
            'name'=> 'required',
            'pass'=> 'required',
        ]);

        $name = $request->name;
        $pass = $request->pass;
        $username = DB::table('blog_user')->where('username', $name)->value('username');
        $password = DB::table('blog_user')->where('password', $pass)->value('password');

        $data1 = blog::all();

        if(($username == $name)){
            if($password == $pass){
                return redirect('/tohome')->with(["data1"=> $data1,"d2"=> $request->name]);
            }else{ return view('index')->with('error','incorrect password');}
        }
        else{ return view('index')->with('error','incorrect username');}
    }

}
