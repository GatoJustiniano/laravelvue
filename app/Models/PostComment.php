<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostComment extends Model
{
    protected $fillable = [
        'title',
        'message',
        'post_id',
        'user_id',
        'approved',
    ];
}
