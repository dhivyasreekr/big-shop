<?php

namespace App\Http\Controllers\api\v2;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->has('brand_id')){
            $products=Product::where('brand_id', $request->input('brand_id'))
                            ->orderBy('name', 'asc')
                            ->get();
        }
        else if($request->has('category_id')){
            $products = Product::whereHas('category', function ($query) use ($request) {
                            $query->where('categories.id', $request->input('category_id'));
                        })->orderBy('name', 'asc')->get();
        }
        else
        {
            $products = Product::orderBy('name', 'asc')->get();
        }
    
            $transformedProducts= $products->map(function($row){
           
                return[
                    'id'=>$row->id,
                    'name'=>$row->name,
                    'description' => $row->description,
                    'price' => $row->price,
                    'categories' => $row->category->pluck('name')->toArray(), // Get list of category names
                    'brand' => $row->brand ? $row->brand->name : null,
                    'image_path'=>$row->GetImagePath(),
                    'qty' => $row->qty,
                    'alert_stock' => $row->alert_stock,
                    // 'tag' => $row->productTag->pluck('name')->toArray(),
                    // 'label' => $row->productLabel->pluck('name')->toArray(),
                    // '' => $row->productCompany->pluck('name')->toArray(),
                    // 'label' => $row->productCollection->pluck('name')->toArray()
                    
                ];
            });
                
            return response()->json(['data' => $transformedProducts], 200);
        }
}
    

       
