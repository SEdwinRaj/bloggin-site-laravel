<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    use HasFactory;

    public $table = 'comments';

    protected $fillable = ['blog_id','username','comment','parent_id'];
}
