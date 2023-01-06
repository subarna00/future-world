<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogType;
use App\Models\Client;
use App\Models\Course;
use App\Models\Faq;
use App\Models\NewsNotice;
use App\Models\Project;
use App\Models\Service;
use App\Models\ServiceQuery;
use App\Models\ServiceType;
use App\Models\ServiceTypeSub;
use App\Models\SiteSetting;
use App\Models\Team;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $siteInfo = SiteSetting::where('status', 'active')->first();
        return view('frontend.pages.home', compact('siteInfo'));
    }
    public function teams()
    {
        $teams = Team::where("status", "active")->latest()->get();
        return view("frontend.pages.team", compact("teams"));
    }
    public function services()
    {
        $services = Service::latest()->get();
        return view('frontend.pages.services', compact('services'));
    }
    public function serviceDetailPage($slug)
    {
        $service = Service::where('slug', $slug)->first();
        return view('frontend.pages.serviceDetail', compact('service'));
    }
    public function serviceTypeDetailPage($service, $slug)
    {
        $service = ServiceType::where('slug', $slug)->first();
        return view('frontend.pages.serviceTypeDetail', compact('service'));
    }
    public function serviceSubTypeDetailPage($service, $type, $slug)
    {
        $service = ServiceTypeSub::where('slug', $slug)->first();
        return view('frontend.pages.serviceSubTypeDetail', compact('service'));
    }
    public function sendQuery(Request $request)
    {
        $store = new ServiceQuery();
        $store->name = $request->name;
        $store->email = $request->email;
        $store->number = $request->number;
        $store->message = $request->message;
        $store->course = $request->course;
        $store->save();
        return redirect()->back()->with("msg", "Your query has been submitted. Thank you!");
    }

    public function faq()
    {
        $faqs = Faq::latest()->get();
        return view('frontend.pages.faqs', compact('faqs'));
    }
    public function contactPage()
    {
        return view('frontend.pages.contact');
    }
    public function blogs()
    {
        $blogs = Blog::inRandomOrder()->paginate(10);
        $recentBlogs = Blog::latest()->take(10)->get();
        return view('frontend.pages.blogs', compact('blogs', "recentBlogs"));
    }
    public function blogCategory($slug)
    {
        $blog = BlogType::where("slug", $slug)->first();
        $blogs = $blog->blogs;
        $recentBlogs = Blog::latest()->take(10)->get();
        return view('frontend.pages.blogs', compact('blogs', "recentBlogs"));
    }
    public function blogDetailPage($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        $recentBlogs = Blog::latest()->take(10)->get();
        return view('frontend.pages.blogDetail', compact('blog', "recentBlogs"));
    }

    public function news()
    {
        $news = NewsNotice::latest()->get();
        return view('frontend.pages.newsPage', compact('news'));
    }
    public function aboutus()
    {
        return view('frontend.pages.about');
    }
    public function projects()
    {
        $projects = Project::where("status", "active")->latest()->get();
        return view('frontend.pages.project', compact('projects'));
    }
    public function clients()
    {
        $clients = Client::latest()->paginate(12);
        return view('frontend.pages.clients', compact('clients'));
    }
    public function courses()
    {
        $courses = Course::where("status", "active")->latest()->get();
        return view("frontend.pages.courses", compact("courses"));
    }
    public function courseDetail($slug)
    {
        $course = Course::where("slug", $slug)->first();
        return view("frontend.pages.courseDetail", compact('course'));
    }
}
