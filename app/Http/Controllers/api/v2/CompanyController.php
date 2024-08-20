<?php

namespace App\Http\Controllers\api\v2;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::orderBy('name', 'asc')->get();

        $transformedCompanies = $companies->map(function($row){
            return[
                'id' => $row->id,
                'name' => $row->name,
                'image_path' => $row->getImagePath(),
                'user' => $row->user->name,
                
            ];

        });

        // return response()->json(['data' => $categories], 200);
        
        return response()->json(['data' => $transformedCompanies],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        //
    }
}
