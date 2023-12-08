<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogController extends Controller
{
    public function create(request $request) {
        if ($request->hasFile('image')) {
            // File is being uploaded
            $imagePath = $request->file('image')->store('images');
            return $imagePath;
        } else {
            return "error";
        }
        
    }

    
}
