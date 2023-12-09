<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogUser extends Model
{
    use HasFactory;

    public $table = "blog_user";

    protected $fillable = ['username','email','password'];
}
