<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('Backend.dashboard');
    }
    public function createBlog()
    {
        return view('Backend.home.create_blog');
    }
    public function createNewBlog(Request $request)
    {
        $data['title'] = $request->title;

        if(!file_exists(public_path('images')))
        {
            mkdir(public_path('images'),0777, true);
        }

        $image = $request->image;
        $name = $image->getClientOriginalName();
        $imagename = time()."_".$name;
        $destination = public_path('images');
        $image->move($destination,$imagename);

        $data['image'] = 'images/'.$imagename;
        $data['first_section_description'] = $request->firstSection;
        $data['quatation'] = $request->quatation;
        $data['second_section_description'] = $request->secondSection;

        Blog::create($data);

        return redirect()->route('createBlog');
    }
}
