<?php

namespace App\Http\Controllers\Backend\Master;

use File;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\Crudable;
use App\Http\Requests\RecipeRequest;
use App\Models\Category;
use App\Models\Ingrendient;
use App\Models\Recipe;
use App\Models\RecipeIngrendients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class RecipeController extends Controller
{
    use Crudable;

    public function __construct()
    {
        $categories = Category::dropdownCategory();
        $ingrendients = Ingrendient::dropdownIngrendients();

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
        DB::beginTransaction();

        try {

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

            // Create Recipe
            $create_recipe = Recipe::create($request->all());

            // Loop Array Ingrendients and Save in RecipeIngrendients
            foreach ($request->ingrendients_id as $i => $ingrendient) {
                if ($ingrendient != null && $request->ingrendient_description[$i] != null) {

                    $recipe_ingrendients = new RecipeIngrendients();
                    $recipe_ingrendients->recipe_id = $create_recipe->id;
                    $recipe_ingrendients->ingredients_id = $ingrendient;
                    $recipe_ingrendients->description = $request->ingrendient_description[$i];
                    $recipe_ingrendients->save();
                }
            }

            DB::commit();
            $this->flashSuccessCreate();

            return redirect()->route('backend.master.recipe.index');
        } catch (Exception $e) {
            DB::rollback();
            $request->session()->flash('danger', "Data gagal disimpan dengan error " . $e->getMessage());

            return back()->withInput();
        }
    }

    public function edit(Recipe $recipe)
    {
        return view('backend.master.recipe.edit', compact('recipe'));
    }

    public function update(RecipeRequest $request, Recipe $recipe)
    {
        DB::beginTransaction();

        try {

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

            // Update Recipe
            $update_recipe = $recipe->update($request->all());

            // Delete Kesehatan has penyakit
            $recipe->recipeIngrendients()->delete();

            // Loop Array Ingrendients and Save in RecipeIngrendients
            foreach ($request->ingrendients_id as $i => $ingrendient) {
                if ($ingrendient != null && $request->ingrendient_description[$i] != null) {

                    $recipe_ingrendients = new RecipeIngrendients();
                    $recipe_ingrendients->recipe_id = $recipe->id;
                    $recipe_ingrendients->ingredients_id = $ingrendient;
                    $recipe_ingrendients->description = $request->ingrendient_description[$i];
                    $recipe_ingrendients->save();
                }
            }

            DB::commit();
            $this->flashSuccessUpdate();

            return redirect()->route('backend.master.recipe.index');
        } catch (Exception $e) {
            DB::rollback();
            $request->session()->flash('danger', "Data gagal disimpan dengan error " . $e->getMessage());

            return back()->withInput();
        }
    }

    public function destroy(Recipe $recipe)
    {
        $recipe->recipeIngrendients()->delete();
        $recipe->deleteImage();
        $recipe->delete();

        $this->flashSuccessDelete();

        return redirect()->route('backend.master.recipe.index');
    }
}
