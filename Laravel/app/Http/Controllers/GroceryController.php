<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grocery;
use App\Models\Category;

class GroceryController extends Controller
{
    // /**
    //  * @return \Illuminate\Http\Response
    //  */
    // public function showCategories(Category $categories)
    // {
    // return view('groceries.create', ['categories' => $categories]);
    // }

    /**
     * Display a listing of the resource
     * @return \Illuminate\Http\Response
     */
    public function index(Grocery $grocery)
    {
        $groceries = $grocery->all();
        return view('groceries.index', compact('groceries'));
    }

    /**
     * Show the form for creating a new resource
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('groceries.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'category_id' => 'required',
            'product' => 'required|min:2|max:30|unique:groceries,product',
            'quantity' => 'required|numeric|integer',
            'price' => 'required|numeric|max:999999.99'
        ]);
        $attributes['product'] = ucwords($attributes['product']);

        Grocery::create($attributes);

        return redirect('/groceries');

        
    }

    /**
     * Show the form for editing the specified resource
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Grocery $grocery)
    {
        $categories = Category::all();
        return view('groceries.edit', compact('grocery'), ['categories' => $categories]);
    }

    /**
     * Update the specified resource in storage
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grocery $grocery)
    {
        $validatedData = $request->validate([
            'category_id' => 'required',
            'quantity' => 'required|max:9',
            'price' => 'required|numeric|max:999999.99'
        ]);
    
        $grocery->update($validatedData);
    
        return redirect('/groceries');
    }

    /**
     * Remove the specified resource from storage
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grocery $grocery)
    {
        $grocery->delete();

        return redirect('/groceries');
    }
}