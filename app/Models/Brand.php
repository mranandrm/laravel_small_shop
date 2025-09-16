<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Storage;

class Brand extends Model
{
    protected $fillable = [
        'name',
        'logo',
       
    ];

    public function GetLogoImage()
    {
        return env('DOMAIN_URL') . Storage::url($this->logo);
    }
}
