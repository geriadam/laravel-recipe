<?php

namespace App\Http\Controllers\Backend\Master;

use Auth;
use File;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\Crudable;
use App\Http\Requests\RecipeRequest;
use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class RecipeController extends Controller
{
    use Crudable;

    public function __construct()
    {
        $categories = Category::dropdownCategory();        
        View::share(compact('categories', 'ingrendients'));
    }

    public function index()
    {
        $recipes = Recipe::orderBy('title')->get();

        return view('backend.master.recipe.index', compact('recipes'));
    }

    public function create()
    {
        return view('backend.master.recipe.create');
    }

    public function store(RecipeRequest $request)
    {
        // Check if do with file
        if ($request->has('file')) {
            $file_name = Recipe::upload($request->file('file'));
            $request->request->add(['image' => $file_name]);
        }

        // Check if do with files
        if ($request->has('files')) {
            $files_name = Recipe::bulkUpload($request->file('files'));
            $request->request->add(['image_gallery' => $files_name]);
        }

        $request->request->add(['user_id' => Auth::id()]);

        // Create Recipe
        $create_recipe = Recipe::create($request->all());


        $this->flashSuccessCreate();

        return redirect()->route('backend.master.recipe.index');
    }

    public function edit(Recipe $recipe)
    {
        return view('backend.master.recipe.edit', compact('recipe'));
    }

    public function update(RecipeRequest $request, Recipe $recipe)
    {
        // Check if do with file
        if ($request->has('file')) {

            // Delete Image First
            $recipe->deleteImage();

            // Then Upload
            $file_name = Recipe::upload($request->file('file'));
            $request->request->add(['image' => $file_name]);
        }

        // Check if do with files
        if ($request->has('files')) {

            // Delete Image First
            $recipe->bulkDeleteImage();

            // Then Upload
            $files_name = Recipe::bulkUpload($request->file('files'));
            $request->request->add(['image_gallery' => $files_name]);
        }

        $request->request->add(['user_id' => Auth::id()]);

        // Update Recipe
        $update_recipe = $recipe->update($request->all());

        $this->flashSuccessUpdate();

        return redirect()->route('backend.master.recipe.index');
    }

    public function destroy(Recipe $recipe)
    {
        $recipe->deleteImage();
        $recipe->delete();

        $this->flashSuccessDelete();

        return redirect()->route('backend.master.recipe.index');
    }
}
