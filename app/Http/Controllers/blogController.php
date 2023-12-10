<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;

class blogController extends Controller
{
    public function show1 ($d2) {

        $content = blog::all()->where('username',$d2);
        return view("dashboard")->with("d2", $content)->with("username", $d2);

    }
    public function home () {
        $data1 = session("data1");
        $d2 = session("d2");

        return view("home")->with("data1", $data1)->with("d2", $d2);
    }
    public function createPage ($d2) {
        return view("create")->with("username", $d2);
    }
    public function create (request $request, $d2) {

        $content = new blog;
        $content->username = $d2;
        $content->title = $request->title;
        $content->description = $request->description;
        $content->image = $request->file('image')->store('images', 'public');
        $content->save();

        $data = blog::all()->where('username',$d2);
        return view("dashboard")->with("d2", $data)->with("username", $d2);
    }

    public function dth ($d2) {
        $data1 = blog::all();
        return redirect('/tohome')->with(["data1"=> $data1,"d2"=> $d2]);
    }

    public function content ($id) {
        $content = blog::find( $id );

        return view("dview")->with(["data" => $content,'username'=>$content['username']]);
    }
    
}