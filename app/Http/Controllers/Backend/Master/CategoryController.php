<?php

namespace App\Http\Controllers\Backend\Master;

use View;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\Crudable;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    use Crudable;

    public function index()
    {
        $categorys = Category::all();
        return view('backend.master.category.index', compact('categorys'));
    }

    public function create()
    {
        return view('backend.master.category.create');
    }

    public function store(CategoryRequest $request)
    {
        // Check if do with file
        if ($request->has('file')) {
            $file_name = Category::upload($request->file('file'));
            $request->request->add(['image' => $file_name]);
        }

        Category::create($request->all());

        $this->flashSuccessCreate();
        return redirect()->route('backend.master.category.index');
    }

    public function edit(Category $category)
    {
        return view('backend.master.category.edit', compact('category'));
    }

    public function update(CategoryRequest $request, Category $category)
    {
        // Check if do with file
        if ($request->has('file')) {
            $file_name = Category::upload($request->file('file'));
            $request->request->add(['image' => $file_name]);
        }

        $category->update($request->all());

        $this->flashSuccessUpdate();
        return redirect()->route('backend.master.category.index');
    }

    public function destroy(Category $category)
    {
        $category->deleteImage();
        if ($category->delete()) {
            $this->flashSuccessDelete();
            return redirect()->back();
        }
    }
}
