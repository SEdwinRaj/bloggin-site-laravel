<?php

namespace App\Http\Controllers;

use App\Models\comments;
use App\Models\blog;
use Illuminate\Http\Request;

class commentController extends Controller
{
    public function addComment (request $req, $username) {
        
        $content = new comments;
        $content->blog_id = $req->blog_id;
        $content->username = $username;
        $content->comment = $req->comment;
        $blog_id = $req->blog_id;

        $content->save();

        $con = comments::where( 'blog_id', $blog_id )->get();

        // $content = comments::findall() 

        return view("dview")->with(["con" => $con,'username'=>$username]);

    }
}