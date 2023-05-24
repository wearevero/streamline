<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function read()
    {
        $data = Product::select('id', 'name')->get();
        return view('read')->with(['data' => $data]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $data['name'] = $request->name;
        Product::insert($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Product::findOrFail($id);
        return view('edit')->with(['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Product::findOrFail($id);
        $data->name = $request->name;
        $data->save(); 
    }

    public function destroy(string $id)
    {
        $data = Product::findOrFail($id);
        $data->delete();
    }
}
