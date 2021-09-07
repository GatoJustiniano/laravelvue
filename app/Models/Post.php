<?php

namespace App\Models;

use App\Models\Category;
use App\Models\PostImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    protected $fillable =[
        'title',
        'url_clean',
        'content',
        'category_id',
        'posted'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    /**
     * Get the image associated with the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function image()
    {
        return $this->hasOne(PostImage::class);
    }
}
