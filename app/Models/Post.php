<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\AutoSlug;
use App\Traits\Searchable;
class Post extends Model
{
    use AutoSlug, Searchable, HasFactory;

    protected $fillable = [
        'title', 'slug', 'content',
        'post_category_id', 'image', 'status'
    ];
    protected $searchable = ['title', 'content', 'slug'];
    public function category()
    {
        return $this->belongsTo(PostCategory::class, 'post_category_id');
    }
}
