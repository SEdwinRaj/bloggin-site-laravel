<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blogUser;
use App\Models\blog;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    // public function sign_up(Request $request){
    //     $data = $request->all();
    //     $user = new blogUser();
    //     $user->username = $data["username"];
    //     $user->email = $data["email"];
    //     $user->password = $data["pass"];
    //     $user->save();

    //     $data1 = blog::all();
    //     return view('dashboard', compact('data1', "data"));
    // }

    public function signup(Request $request){

            $data = $request->all();
            $user = new blogUser();
            $user->username = $data["username"];
            $user->email = $data["email"];
            $user->password = $data["pass"];
            $user->save();

            $data1 = blog::all();
            return redirect('/tohome')->with(["data1"=> $data1,"d2"=> $data['username']]);
            // return redirect("home")->with(["data1"=> $data1,"d2"=> $data['username']]);

            

            // $data['name'] = $request->username;
            // $data['email'] = $request->email;
            // $data['password'] = $request->pass;
            // $user = User::create($data);
            // if(!$user){
            //     return dd($data);
            // }
            // return "success";
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
            }else{ return redirect('/sign_in')->with('error','incorrect password');}
        }
        else{ return redirect('/sign_in')->with('error','incorrect username');}
        
        // if((!empty(blogUser::query()->where('username', $request->name)) != 0) && (!empty(blogUser::query()->where('password', $request->pass)))){
            
        //     return redirect('/tohome')->with(["data1"=> $data1,"d2"=> $request->name]);
        // }
        // return "error";
    }

}
