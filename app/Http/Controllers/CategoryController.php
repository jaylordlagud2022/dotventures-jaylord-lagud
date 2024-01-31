<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategories(Request $request)
    {
        $search = $request->get('q');
        $categories = Category::where('name', 'like', "%$search%")->pluck('name', 'id');

        return response()->json(['results' => $categories]);
    }
}