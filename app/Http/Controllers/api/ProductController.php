<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
       public function index()
       {
             $products = Product::all();
   
             $transformedProducts = $products->map(function ($row){
                 return [
                'id'   => $row->id,
                'name' => $row->name,
                'description' => $row->description,
                'price' => $row->price,
                'image' => $row->GetLogoImage(),
            ];
                
             });

             return response()->json([
            'data'=> $transformedProducts,
        ]);
       }
}
