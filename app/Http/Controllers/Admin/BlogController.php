<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('Backend.blog.index',['menu' => 'blog', 'blogs' => $blogs]);
    }
    
    public function createBlog()
    {
        return view('Backend.blog.create_blog',['menu' => 'blog']);
    }
    
    public function createNewBlog(Request $request)
    {
        $data['author_id'] = Auth::id();
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

        return redirect()->route('blog.index');
    }

    public function edit($id)
    {
        $blog = Blog::where(['id' => $id])->first();
        if(!empty($blog))
        {
            return view('Backend.blog.edit',['blog' =>$blog, 'menu' => 'blog']);
        }
        return redirect()->back();
    }

    
    public function update(Request $request)
    {
        if($request->image)
        {
            $image = $request->image;
            $name = $image->getClientOriginalName();
            $imagename = time()."_".$name;
            $destination = public_path('images');
            $image->move($destination,$imagename);
            $data['image'] = 'images/'.$imagename;  
        }

        $data['title'] = $request->title;
        $data['first_section_description'] = $request->firstSection;
        $data['quatation'] = $request->quatation;
        $data['second_section_description'] = $request->secondSection;

        $blog = Blog::where('id', $request->id)->first();
        $blog->update($data);

        return redirect ()->route('blog.index');
    }

    public function delete($id)
    {
        $blog = Blog::where(['id' => $id])->first();
        if(!empty($blog))
        {
            $blog->delete();
            return redirect()->route('blog.index');
        }
        return redirect()->back();
    }
}
