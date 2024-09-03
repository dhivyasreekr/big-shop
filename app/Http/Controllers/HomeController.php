<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\City;
use App\Models\Product;
use App\Models\Category;

use Illuminate\Database\Eloquent\ModelNotFoundException;

class HomeController extends Controller
{
    public function index(Request $request)
{
    // Retrieve all cities and categories for use in the view
    $cities = City::all();
    $categories = Category::all();

    // Start building the query for products, with eager loading of productLabels
    $query = Product::with('productLabel');

    // Apply search filter if search term is present
    if ($request->has('search')) {
        $searchTerm = $request->input('search');
        $query->where('name', 'like', "%{$searchTerm}%");
    }

    // Apply category filter if category is present and is not 'All'
    if ($request->has('category') && $request->category != 'All') {
        // Filter products by the selected category
        $query->whereHas('category', function ($q) use ($request) {
            $q->where('categories.id', $request->category);
        });

        // Set page title and product count based on the selected category
        $category = Category::find($request->category);
        $data['page_title'] = $category ? $category->name : 'Category';
        $data['product_count'] = $category ? $category->products()->count() : 0;
    }

    // Get the final list of products after applying filters
    $products = $query->get();

    // Prepare the data array with products, categories, and cities
    $data = [
        'products' => $products, // Changed 'product' to 'products' for consistency
        // 'categories' => $categories,
        'cities' => $cities,
    ];

    // Return the appropriate view based on the category filter
    if ($request->has('category') && $request->category != 'All') {
        return view('frontend.product.list.type1', $data);
    }

    return view('frontend.home', $data, compact('categories'));
}

    public function show($id)
    {
        // dd($id);

        // Retrieve all cities for use in the view
        $cities = City::all();

        // Retrieve all categories for use in the view
        $categories = Category::all();

        $product = Product::findOrFail($id);

        // Initialize data array
        $data = [
            'product' => $product,
            'categories' => $categories,
            'cities' => $cities,
        ];

        // dd($data);

        return view('frontend/product/detail/type1', $data);
    }


    public function about(Request $request)
    {
        return view('frontend/auth/about');
    }



}