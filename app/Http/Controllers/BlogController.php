<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use Exception;
use App\Models\Blog;
=======
use App\Models\Blog;
use Exception;
>>>>>>> b61ef255aa01ce8665ae58b42acae15d0193180d
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function single_blog($id)
    {
        try{
<<<<<<< HEAD
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
        
=======

            $blog = Blog::where(['id' =>decrypt($id) ])->first();
            if(!empty($blog)) {
                return view('Frontend.home.blog.single-blog',['blog' => $blog]);
            }
            return redirect()->back();
         } catch (Exception $e)
        {
            return redirect()->back();
        }
>>>>>>> b61ef255aa01ce8665ae58b42acae15d0193180d
    }
}
