<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Gallery extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'description',
        'status',
        'gallery_category_id',
        'image',
    ];
    protected $appends=['image_url'];

    public function gallery_category(){
        return $this->BelongsTo(GalleryCategory::class,'gallery_category_id');
    }
    public function getImageUrlAttribute(){
        return env('APP_URL').Storage::url("public/galerie/$this->image");
    }
}
