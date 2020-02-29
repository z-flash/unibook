<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * For URL Generation
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = Product::latest()->paginate(5);
        return view('product', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function airline()
    {
        $data = Product::latest()->paginate(5);
        return view('product', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function taxi()
    {
        $data = Product::latest()->paginate(5);
        return view('product', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
