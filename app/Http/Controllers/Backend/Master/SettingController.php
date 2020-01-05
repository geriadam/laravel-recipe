<?php

namespace App\Http\Controllers\Backend\Master;

use View;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\Crudable;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    use Crudable;

    public function index()
    {
        $setting = Setting::first();
        return view('backend.master.setting.index', compact('setting'));
    }

    public function store(Request $request)
    {
        // Check if do with file
        if ($request->has('file_logo')) {
            $file_name = Setting::upload($request->file('file_logo'));
            $request->request->add(['logo' => $file_name]);
        }

        // Check if do with file
        if ($request->has('file_favicon')) {
            $file_name = Setting::upload($request->file('file_favicon'));
            $request->request->add(['favicon' => $file_name]);
        }

        Setting::updateOrCreate(["id" => $request->id],[
            "title"            => $request->title,
            "description"      => $request->description,
            "logo"             => $request->logo,
            "favicon"          => $request->favicon,
            "meta_keyword"     => $request->meta_keyword,
            "meta_description" => $request->meta_description,
            "email"            => $request->email,
            "phone"            => $request->phone,
            "facebook_url"     => $request->facebook_url,
            "instagram_url"    => $request->instagram_url,
            "twitter_url"      => $request->instagram_url
        ]);

        $this->flashSuccessUpdate();
        return redirect()->route('backend.master.setting.index');
    }
}
