<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Recipe;
use Auth;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $category_count     = Category::count();
        $recipe_count       = Recipe::count();

        return view('backend.beranda.home', compact('category_count', 'recipe_count'));
    }
}
