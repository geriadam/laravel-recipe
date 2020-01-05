<?php

namespace App\Http\Controllers\Backend\Master;

use View;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\Crudable;
use App\Http\Requests\NewsletterRequest;
use App\Models\Newsletter;

class NewsletterController extends Controller
{
    use Crudable;

    public function index()
    {
        $newsletters = Newsletter::all();
        return view('backend.master.newsletter.index', compact('newsletters'));
    }

    public function create()
    {
        return view('backend.master.newsletter.create');
    }

    public function store(NewsletterRequest $request)
    {
        Newsletter::create($request->all());

        $this->flashSuccessCreate();
        return redirect()->route('backend.master.newsletter.index');
    }

    public function edit(Newsletter $newsletter)
    {
        return view('backend.master.newsletter.edit', compact('newsletter'));
    }

    public function update(NewsletterRequest $request, Newsletter $newsletter)
    {
        $newsletter->update($request->all());

        $this->flashSuccessUpdate();
        return redirect()->route('backend.master.newsletter.index');
    }

    public function destroy(Newsletter $newsletter)
    {
        if ($newsletter->delete()) {
            $this->flashSuccessDelete();
            return redirect()->back();
        }
    }
}
