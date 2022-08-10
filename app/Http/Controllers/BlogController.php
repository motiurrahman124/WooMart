<?php

namespace App\Http\Controllers;


use App\Models\Blog;
use App\Models\BlogComment;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function single_blog($id)
    {
        try{
            $blog = Blog::where(['id'=>decrypt($id)])->with('comments')->first();
            if(!empty($blog))
            {
                return view('Frontend.home.blog.single-blog',['blog'=>$blog]);
            }
            return redirect()->back();

        }catch(Exception $e)
        {
            return redirect()->back();
        }
    }

    public function comment(Request $request)
    {
        try {
            BlogComment::create([
                'blog_id' => $request->blog_id,
                'user_id' => Auth::id(),
                'messege' => $request->messege,
            ]);

            return redirect()->back();

        } catch (Exception $e) {
            return redirect()->back();

        }
    }
}
