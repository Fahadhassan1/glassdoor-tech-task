<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
       
        try {
            // Validate the request
            $validated = $request->validate([
                'category' => 'nullable|string',
                'sort' => 'nullable|string|in:asc,desc',
                'search' => 'nullable|string',
                'page' => 'nullable|integer|min:1'
            ]);

            $category = $request->input('category');
            $sort = $request->input('sort', 'asc');
            $search = $request->input('search');

            $query = Product::query();

            // Prepare the query
        
            if ($category) {
            $query->where('category', $category);
            }

            // search  name
            if ($search) {
            $query->where('name', 'like', '%' . $search . '%');
            }

            $query->orderBy('price', $sort);

            // add the pagnination 
            $products = $query->paginate(10);

            // Return the Response in json format
            return response()->json($products);


        } catch (\Illuminate\Validation\ValidationException $e) {

            return response()->json(['error' => $e->errors()], 422);
        } catch (\Exception $e) {

            return response()->json(['error' => 'An unexpected error occurred.'], 500);
        }

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
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
