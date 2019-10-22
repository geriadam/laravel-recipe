<?php

namespace App\Http\Controllers\Backend\Master;

use View;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\Crudable;
use App\Http\Requests\IngrendientRequest;
use App\Models\Ingrendient;

class IngrendientController extends Controller
{
    use Crudable;

    public function index()
    {
        $ingrendients = Ingrendient::all();
        return view('backend.master.ingrendient.index', compact('ingrendients'));
    }

    public function create()
    {
        return view('backend.master.ingrendient.create');
    }

    public function store(IngrendientRequest $request)
    {
        // Check if do with file
        if ($request->has('file')) {
            $file_name = Ingrendient::upload($request->file('file'));
            $request->request->add(['image' => $file_name]);
        }

        Ingrendient::create($request->all());

        $this->flashSuccessCreate();
        return redirect()->route('backend.master.ingrendient.index');
    }

    public function edit(Ingrendient $ingrendient)
    {
        return view('backend.master.ingrendient.edit', compact('ingrendient'));
    }

    public function update(IngrendientRequest $request, Ingrendient $ingrendient)
    {
        // Check if do with file
        if ($request->has('file')) {
            $file_name = Ingrendient::upload($request->file('file'));
            $request->request->add(['image' => $file_name]);
        }

        $ingrendient->update($request->all());

        $this->flashSuccessUpdate();
        return redirect()->route('backend.master.ingrendient.index');
    }

    public function destroy(Ingrendient $ingrendient)
    {
        $ingrendient->deleteImage();
        if ($ingrendient->delete()) {
            $this->flashSuccessDelete();
            return redirect()->back();
        }
    }
}
