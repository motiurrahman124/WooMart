<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    public function index()
    {
        $categories =  Category::all();
        return view('Backend.category.index',['menu' => 'category', 'categories' => $categories]);
    }   


    
    public function create()
    {   
        $categories = Category::where(['parent_id' => 0])->get();
        return view('Backend.category.create',['menu' => 'category','categories' => $categories]);
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories'
        ]);
        $data['name']   = $request->name;
        $data['parent_id']   = $request->parent_id;
        $data['is_top_product_category']   = $request->is_top_product_category == 'on' ? true : false;
       if(!empty($request->banner)) {
            $data['banner'] = fileUploade($request->banner, IMAGE_CATEGORY_PATH );
       }
        Category::create($data);

        toast('category successfully added', 'success');
        // Alert::success('Success Title', 'Success Message');

        return redirect()->route('category.index');
    }

    public function edit($id)
    {
        $category = category::where(['id' => $id])->first();
        $categories = Category::where(['parent_id' => 0])->get();

        if(!empty($category))
        {
            return view('Backend.category.edit',['category' =>$category, 'menu' => 'category', 'categories' =>$categories]);
        }
        return redirect()->back();
    }

    
    public function update(Request $request)
    {
       
        $request->validate([
            'name' => 'required'
        ]);
       
        if($request->banner)
        {
            $data['banner']   = fileUploade($request->banner,IMAGE_CATEGORY_PATH); 
        }

       
        $data['name']   = $request->name;
        $data['parent_id']   = $request->parent_id; 
        $data['is_top_product_category']   = $request->is_top_product_category == 'on' ? true : false;
        

        $category = Category::where('id', $request->id)->first();
        $category->update($data);

        return redirect ()->route('category.index');
    }

    public function delete($id)
    {
        $category = category::where(['id' => $id])->first();
        if(!empty($category))
        {
            $category->delete();
            return redirect()->route('category.index');
        }
        return redirect()->back();
    }
}
