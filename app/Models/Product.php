<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\AutoSlug;
use App\Traits\Searchable;
class Product extends Model
{
    use AutoSlug, Searchable, HasFactory;
    protected $fillable = [
        'name', 'slug', 'description', 'price',
        'stock', 'sku', 'category_id', 'status', 'image'
    ];
    protected $searchable = ['name', 'description', 'slug'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
