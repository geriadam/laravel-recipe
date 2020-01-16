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

        $randoms = Recipe::inRandomOrder()->limit(5)->get();

        return view('frontend.home', compact('recipes', 'randoms'));
    }
}
