<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;


class HomeController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('home.index', compact('items'));
    }


    public function about()
    {
        return view('home.about');
    }
}
