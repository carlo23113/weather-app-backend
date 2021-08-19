<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Gallery extends Model
{
    use HasFactory;

    protected $appends = ['image_url'];

    public function city() 
    {
        return $this->belongsTo(City::class);
    }

    public function getImageUrlAttribute()
    {
        $url = url('/');

        return $url . Storage::url($this->image_path);
    }
}