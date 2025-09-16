<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
     protected $fillable = [
        'name',
        'image',
        'description',
        'price'
       
    ];

     public function GetLogoImage()
    {
        return env('DOMAIN_URL') . Storage::url($this->image);
    }
}
