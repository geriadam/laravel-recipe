<?php

namespace App\Http\Controllers\Frontend;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\Category;
use App\Models\FavoriteRecipe;
use App\Http\Controllers\Traits\Crudable;

class RecipeController extends Controller
{
    use Crudable;

    public function index(Request $request)
    {
        $recipes = Recipe::query();

        if(isset($request->title) && !empty($request->title)){
            $recipes = $recipes->where('title', 'like', '%'.$request->title.'%');
        }

        $recipes = $recipes->paginate(10);

        return view('frontend.recipe.index', compact('recipes'));
    }

    public function show($slug)
    {
        $recipe = Recipe::whereSlug($slug)->first();

        if(empty($recipe)) abort(404);

        return view('frontend.recipe.show', compact('recipe'));   
    }

    public function category($slug)
    {
        $recipes = Category::whereSlug($slug)->first()->recipe()->paginate(10);

        if($recipes->count() == 0) abort(404);

        return view('frontend.recipe.index', compact('recipes'));
    }

    public function favorite(Recipe $recipe)
    {

        $check = FavoriteRecipe::where('recipe_id', $recipe->id)->where('user_id', Auth::id())->first();

        if(!empty($check)){
            $this->flashFailedSave("Failed, this recipe already exist in favorite");
        } else {
            $favorite = new FavoriteRecipe();
            $favorite->recipe_id = $recipe->id;
            $favorite->user_id = Auth::id();
            $favorite->save();

            $this->flashSuccessCreate("Success add to favorite");
        }

        
        return redirect()->back();
    }
}
