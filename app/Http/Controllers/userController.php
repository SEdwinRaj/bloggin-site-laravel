<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blogUser;
use App\Models\blog;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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

        if(isset($request->email) && isset($request->password) && isset($request->username)){
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

        }else{
            return view('index')->with('error','something went wrong');
        }
    }
    public function signin(Request $request){
        // $request->validate([
        //     'name'=> 'required',
        //     'pass'=> 'required',
        // ]);

        // $name = $request->name;
        // $pass = $request->pass;
        // $username = blogUser::query()->where('username', $name);
        // $password = blogUser::query()->where('password', $pass);

        // if($){
        //     return "valid";
        // }
        $data1 = blog::all();
        if((!empty(blogUser::query()->where('username', $request->name)) != 0) && (!empty(blogUser::query()->where('password', $request->pass)))){
            
            return redirect('/tohome')->with(["data1"=> $data1,"d2"=> $request->name]);
        }
        return "error";
    }

}
