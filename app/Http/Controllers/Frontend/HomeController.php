<?php

namespace App\Http\Controllers\Frontend;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Recipe;

class HomeController extends Controller
{
    public function index()
    {
        $recipes = Recipe::paginate(10);

        return view('home', compact('recipes'));
    }

    public function show($slug)
    {
        $recipe = Recipe::whereSlug($slug)->first();

        return view('recipe', compact('recipe'));   
    }
}
