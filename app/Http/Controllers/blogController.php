<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;

class blogController extends Controller
{
    public function show () {
        $data = blog::all();
        return view("dashboard")->with("datas", $data);
    }

    public function create(request $request) {
        $data = $request->all();
        $title = $data["title"];
        $description = $data['description'];
        $imagePath = $request->file('image')->store('images', 'public');
        
        $data = new blog;
        $data->title = $title;
        $data->description = $description;
        $data->image = $imagePath;
        $data->save();
        return redirect('dboard');
    }

    
}