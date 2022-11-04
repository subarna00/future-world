<?php

namespace App\Http\Controllers;

use App\Models\ServiceType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
class ServiceTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = ServiceType::latest()->get();
        return view('admin.servicesTypes.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.servicesTypes.create');
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
            "service_id"=>"required",
            'type' => 'required',
            'description' => 'required',
            'short_description' => 'required',
            'status' => 'required',
            'image' => 'required'
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalName();
            $image->move(public_path('images'), $img);
            $data['image'] = $img;
        }
        $data['slug'] = Str::slug($data['type']);

        ServiceType::create($data);
        notify()->success("Service type is created");
        return redirect()->route('service-types.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceType  $serviceType
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceType $serviceType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceType  $serviceType
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceType $serviceType)
    {
        return view('admin.servicesTypes.edit', ['type' => $serviceType]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceType  $serviceType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'service_id'=>"required",
            'type' => 'required',
            'description' => 'required',
            'short_description' => 'required',

            'status' => 'required',
            'image' => 'sometimes'        ]);

            $serviceType = ServiceType::find($id);
            if ($request->hasFile('image')) {
                if (File::exists(public_path('images'), $serviceType->image)) {
                    File::delete(public_path('images', $serviceType->image));
                }
                $image = $request->file('image');
                $img = time() . '.' . $image->getClientOriginalName();
                $image->move(public_path('images'), $img);
                $data['image'] = $img;
            }
        $data['slug'] = Str::slug($data['type']);

       $serviceType->update($data);
        notify()->success("Service type is updated");
        return redirect()->route('service-types.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceType  $serviceType
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceType $serviceType)
    {
      $del=  $serviceType->delete();
        if ($del) {
            if (File::exists(public_path('images'), $serviceType->image)) {
                File::delete(public_path('images', $serviceType->image));
            }
            notify()->success("Service type is deleted");
            return redirect()->route('service-types.index');
        }

    }
}
