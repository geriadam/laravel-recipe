<?php

namespace App\Http\Controllers\Frontend;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FavoriteRecipe;
use App\Http\Controllers\Traits\Crudable;

class FavoriteRecipeController extends Controller
{
    use Crudable;

    public function index()
    {
        $favorites = FavoriteRecipe::paginate(10);

        return view('frontend.favorite.index', compact('favorites'));
    }

    public function destroy(FavoriteRecipe $favorite)
    {
        if($favorite->delete()){
            $this->flashSuccessCreate("Success remove from favorite");
            return redirect()->back();
        } else {
            abort(404);
        }
    }
}
