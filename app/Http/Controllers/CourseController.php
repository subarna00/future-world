<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::latest()->get();
        return view("admin.courses.index",compact("courses"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.courses.create");
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
            "title"=>"required",
            "description"=>"sometimes",
            "overview"=>"sometimes",
            "syllabus"=>"sometimes",
            "image"=>"required",
            "duration"=>"required",
            "status"=>"required",
        ]);
        $data["slug"] = Str::slug($request->title);
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalName();
            $image->move(public_path('images'), $img);
            $data['image'] = $img;
        }
        Course::create($data);
        notify()->success('course is created');
        return redirect()->route('courses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view("admin.courses.edit",["course"=> $course]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $data = $request->validate([
            "title"=>"required",
            "description"=>"sometimes",
            "overview"=>"sometimes",
            "syllabus"=>"sometimes",
            "image"=>"sometimes",
            "duration"=>"required",
            "status"=>"required",
        ]);
        $data["slug"] = Str::slug($request->title);
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $img = time() . '.' . $image->getClientOriginalName();
            $image->move(public_path('images'), $img);
            $data['image'] = $img;
        }
        $course->update($data);
        notify()->success('course is updated');
        return redirect()->route('courses.index');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete();
        notify()->success('course is deleted');
        return redirect()->route('courses.index');
    }
}
