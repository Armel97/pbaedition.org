<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Training extends Model
{
    protected $fillable = [
        'titre',
        'auteur',
        'date_debut',
        'date_fin',
        'image',
        'status',
        'description',
    ];
    use HasFactory;
    protected $appends=['image_url'];
    public function getImageUrlAttribute(){
        return env('APP_URL').Storage::url("public/trainings/$this->image");
    }
}
