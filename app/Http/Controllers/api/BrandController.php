<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
     public function index()
     {
        $brands = Brand::all();  

        $transformedBrands = $brands->map(function ($row) {
            return [
                'id'   => $row->id,
                'name' => $row->name,
                'logo' => $row->GetLogoImage(),
            ];
        });

        return response()->json([
            'data'=> $transformedBrands,
        ]);
     }
}
