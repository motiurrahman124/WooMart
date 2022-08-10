<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function single_blog($id)
    {
        try{
            $blog = Blog::where(['id'=>decrypt($id)])->first();
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
}
