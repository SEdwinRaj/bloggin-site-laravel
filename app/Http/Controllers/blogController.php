<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\Models\blog;
use App\Models\comments;

class blogController extends Controller
{
    public function show1 ($d2) {

        $content = blog::all()->where('username',$d2);
        return view("dashboard")->with("d2", $content)->with("username", $d2);

    }

    public function profile (request $req, $d2) {

        $content = blog::all()->where('username',$d2);
        return view("profile")->with("d2", $content)->with("username", $req->username)->with("author", $d2);
    }

    public function home () {
        $data1 = session("data1");
        $d2 = session("d2");

        return view("home")->with("data1", $data1)->with("d2", $d2);
        // return dd($d2);
    }
    public function createPage ($d2) {
        return view("create")->with("username", $d2);
    }
    public function create (request $request, $d2) {

        $list = Storage::json('/public/words.json');

        $des = $request->description;

        foreach ($list as $l) {
            if(Str::contains($des, $l, ignoreCase:true)) {
                return view('create')->with('error',"The word ".$l." cannot be used since it is against our profanity policy.")->with("username", $d2);
            }
        }

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

    public function content ($id,$username) {

        $content = blog::find( $id );
        $con = comments::where( 'blog_id', $id )->get();

        return view("dview")->with(["data" => $content,'username'=>$username, 'comments' => $con]);
    }

    public function addComment (request $req, $username) {

        $list = Storage::json('/public/words.json');

        $des = $req->comment;

        $content = blog::find( $req->blog_id );
        $con = comments::where( 'blog_id', $req->blog_id )->get();

        foreach ($list as $l) {
            if(Str::contains($des, $l, ignoreCase:true)) {
                return view('dview')->with('error',"The word ".$l." cannot be used since it is against our profanity policy.")->with(["data" => $content,'username'=>$username, 'comments' => $con]);;
            }
        }
        
        $content = new comments;
        $content->blog_id = $req->blog_id;
        $content->username = $username;
        $content->comment = $req->comment;
        $blog_id = $req->blog_id;

        $content->save();

        $con = comments::where( 'blog_id', $blog_id )->get();
        $content = blog::find( $blog_id );

        // $content = comments::findall() 

        return view("dview")->with(["data" => $content,'username'=>$username, 'comments' => $con]);

        // return content($blog_id,$username);
        // return dd($blog_id);

    }

    public function delete ($id,$d2) {
        $content = blog::find($id);
        $content->delete();
        // show1($username);
        // return 
        $content = blog::all()->where('username',$d2);
        return view("dashboard")->with("d2", $content)->with("username", $d2);
        // return show1($d2);
    }

    public function like(request $request) {

        $blog_id = $request->blog_id;
        $data = blog::find( $blog_id);
        $like = $data->likes;
        $data->likes = $like + 1;
        $data->save();

        $con = comments::where( 'blog_id', $blog_id )->get();
        // $content = blog::find( $blog_id );

        // $content = comments::findall() 

        return view("dview")->with(["data" => $data,'username'=>$request->username, 'comments' => $con]);
    }

    public function dislike($username, $id) {

        $data = blog::find( $id);
        $dislike = $data->dislikes;
        $data->dislikes = $dislike + 1;
        $data->save();

        $con = comments::where( 'blog_id', $id )->get();
        // $content = blog::find( $blog_id );

        // $content = comments::findall() 

        return view("dview")->with(["data" => $data,'username'=>$username, 'comments' => $con]);

    }

    
    
}