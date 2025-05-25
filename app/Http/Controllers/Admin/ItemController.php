<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::with('category')->get();
        return view('admin.items.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          $categories = Category::all();
        return view('admin.items.create', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category_id' => 'required'
        ]);
      
        Item::create($request->all());
        return redirect()->route('admin.items.index')->with('success','Added successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item)
    {
        return view('Admin.items.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Item $item)
    {
         $request->validate([
            'name' => 'required',
          'discription' => 'required',
            'price' => 'required',
            'category_id' => 'required'
        ]);
         
        $item->update($request->all());
        return redirect()->route('admin.items.index')->with('success','updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
         $item->delete();
        return redirect()->route('admin.items.index')->with('success', 'item deleted successfully!');
    }
}
