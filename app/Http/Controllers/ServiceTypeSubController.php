<?php

namespace App\Http\Controllers;

use App\Models\ServiceTypeSub;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
class ServiceTypeSubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subType = ServiceTypeSub::latest()->get();
        return view("admin.servicesSubTypes.index",compact("subType"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.servicesSubTypes.create");
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
            "service_type_id"=>"required",
            'title' => 'required',
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
        $data['slug'] = Str::slug($data['title']);

        ServiceTypeSub::create($data);
        notify()->success("Service Sub Type is created");
        return redirect()->route('service-sub-type.index');    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ServiceTypeSub  $serviceTypeSub
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceTypeSub $serviceTypeSub)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceTypeSub  $serviceTypeSub
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $serviceTypeSub = ServiceTypeSub::find($id);
        return view("admin.servicesSubTypes.edit",["serviceTypeSub"=>$serviceTypeSub]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceTypeSub  $serviceTypeSub
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            "service_type_id"=>"required",
            'title' => 'required',
            'short_description' => 'required',
            'description' => 'required',
            'status' => 'required',
            'image' => 'sometimes'
        ]);
        $serviceTypeSub = ServiceTypeSub::find($id);
        if ($request->hasFile('image')) {
            if (File::exists(public_path('images'), $serviceTypeSub->image)) {
                File::delete(public_path('images', $serviceTypeSub->image));
            }
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalName();
            $image->move(public_path('images'), $img);
            $data['image'] = $img;
        }
        $data['slug'] = Str::slug($data['title']);
        $serviceTypeSub->update($data);
        notify()->success("service sub type is updated");
        return redirect()->route('service-sub-type.index');   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceTypeSub  $serviceTypeSub
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceTypeSub $serviceTypeSub)
    {
        $del =  $serviceTypeSub->delete();
        if ($del) {
            if (File::exists(public_path('images'), $serviceTypeSub->image)) {
                File::delete(public_path('images', $serviceTypeSub->image));
            }
            notify()->success("service is deleted");
            return redirect()->route('service-sub-type.index');
           }   }
}
