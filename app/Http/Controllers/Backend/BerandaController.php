<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Ingrendient;
use App\Models\Recipe;
use Auth;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $category_count     = Category::count();
        $ingrendients_count = Ingrendient::count();
        $recipe_count       = Recipe::count();

        return view('backend.beranda.home', compact('category_count', 'ingrendients_count', 'recipe_count'));
    }
}
