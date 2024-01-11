<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'titre',
        'facebook',
        'youtube',
        'linkedin',
        'detail',
        'image',
        'status',
    ];
    protected $appends=['image_url'];
    public function getImageUrlAttribute(){
        return env('APP_URL').Storage::url("public/team/$this->image");
    }
}
