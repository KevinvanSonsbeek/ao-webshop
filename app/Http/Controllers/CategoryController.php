<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function displayCategory($url_category) {
        $category = \App\Category::where('name', $url_category)->firstOrFail();
        return view('category_products', ['category' => $category]);
    }
}
