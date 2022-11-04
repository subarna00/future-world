<?php

namespace App\Http\Controllers;

use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SiteSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = SiteSetting::latest()->get();
        return view('admin.setting.index', compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.setting.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'logo' => 'required',
            'email' => 'required',
            'phone_number' => "required",
            'address' => 'required',
            'facebook' => 'sometimes',
            'instagram' => 'sometimes',
            'youtube' => 'sometimes',
            'twitter' => 'sometimes',
            'tiktok' => 'sometimes',
            'fav_icon' => 'sometimes',
            'experience' => 'sometimes',
            'satisfied' => 'sometimes',
            'projects' => 'sometimes',
            'finished_works' => 'sometimes',
        ]);
        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $img = time() . '.' . $image->getClientOriginalName();
            $image->move(public_path('images'), $img);
            $data['logo'] = $img;
        }
        if ($request->hasFile('fav_icon')) {
            $image = $request->file('fav_icon');
            $img = time() . '.' . $image->getClientOriginalName();
            $image->move(public_path('images'), $img);
            $data['fav_icon'] = $img;
        }

        SiteSetting::create($data);
        notify()->success('Site setting is created');
        return redirect()->route('site-setting.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SiteSetting  $siteSetting
     * @return \Illuminate\Http\Response
     */
    public function show(SiteSetting $siteSetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SiteSetting  $siteSetting
     * @return \Illuminate\Http\Response
     */
    public function edit(SiteSetting $siteSetting)
    {
        return view('admin.setting.edit', ['siteSetting' => $siteSetting]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SiteSetting  $siteSetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SiteSetting $siteSetting)
    {
        $data = $request->validate([
            'logo' => 'sometimes',
            'email' => 'required',
            'phone_number' => "required",
            'address' => 'required',
            'facebook' => 'sometimes',
            'instagram' => 'sometimes',
            'youtube' => 'sometimes',
            'twitter' => 'sometimes',
            'tiktok' => 'sometimes',
            'fav_icon' => 'sometimes',
            'experience' => 'sometimes',
            'satisfied' => 'sometimes',
            'projects' => 'sometimes',
            'finished_works' => 'sometimes',
        ]);
        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
            $img = time() . '.' . $image->getClientOriginalName();
            $image->move(public_path('images'), $img);
            $data['logo'] = $img;
        }
        if ($request->hasFile('fav_icon')) {
            $image = $request->file('fav_icon');
            $img = time() . '.' . $image->getClientOriginalName();
            $image->move(public_path('images'), $img);
            $data['fav_icon'] = $img;
        }

        SiteSetting::find($siteSetting->id)->update($data);
        notify()->success('Site setting is updated');
        return redirect()->route('site-setting.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SiteSetting  $siteSetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(SiteSetting $siteSetting)
    {
        $siteSetting->delete();
        if (File::exists(public_path('images'), $siteSetting->logo)) {
            File::delete(public_path('images', $siteSetting->logo));
        }
        notify()->success('Banner is deleted');
        return redirect()->route('site-setting.index');
    }
}
