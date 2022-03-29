<?php

namespace App\Http\Controllers;

use App\Models\ServiceType;
use Illuminate\Http\Request;
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
            'type' => 'required',
            'status' => 'required',
        ]);
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
            'type' => 'required',
            'status' => 'required',
        ]);
        $data['slug'] = Str::slug($data['type']);

        ServiceType::find($id)->update($data);
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
        $serviceType->delete();
        notify()->success("Service type is deleted");
        return redirect()->route('service-types.index');
    }
}
