<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Evenement extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'description',
        'status',
        'data_evenement',
        'image',
    ];
    protected $appends=['image_url'];
    public function getImageUrlAttribute(){
        return env('APP_URL').Storage::url("public/events/$this->image");
    }
}
