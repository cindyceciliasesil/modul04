<?php

namespace App\Http\Controllers;

use App\Models\Category;

class BookController extends Controller
{
    public function index()
    {
        $categories = Category::with('books')->get();
        return view('books', compact('categories'));
    }
}