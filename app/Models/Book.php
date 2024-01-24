<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'author',
        'real_price',
        'promotion_price',
        'image',
        'description',
        'amazon',
        'category_id',
        'status',
        'type',
    ];
    public function category(){
        return $this->BelongsTo(Category::class);
    }

    protected $appends=['image_url'];
    public function getImageUrlAttribute(){
        return env('APP_URL').Storage::url("public/books/$this->image");
    }
}
