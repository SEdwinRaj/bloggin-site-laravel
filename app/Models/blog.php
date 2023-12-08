<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;

    public $table = 'blog';
    protected $fillable = ['username','email,','password','title','description','image'];
}
