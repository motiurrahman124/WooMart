<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $brand = Brand::all();
        return view('Backend.brand.index',['menu' => 'brand', 'brand' => $brand]);
    }   


    
    public function create()
    {
        return view('Backend.brand.create',['menu' => 'brand']);
    }

    
    public function store(Request $request)
    {

        $data['brand_image']   = fileUploade($request->image,'images/brand/' );

        Brand::create($data);

        return redirect()->route('brand.index');
    }

    public function edit($id)
    {
        $brand = Brand::where(['id' => $id])->first();

        if(!empty($brand))
        {
            return view('Backend.brand.edit',['brand' =>$brand, 'menu' => 'brand']);
        }
        return redirect()->back();
    }

    
    public function update(Request $request)
    {
        if($request->image)
        {
            $data['brand_image']   = fileUploade($request->image,'images/brand/' ); 
        }


        $brand = Brand::where('id', $request->id)->first();
        $brand->update($data);

        return redirect ()->route('brand.index');
    }

    public function delete($id)
    {
        $brand = Brand::where(['id' => $id])->first();
        if(!empty($brand))
        {
            $brand->delete();
            return redirect()->route('brand.index');
        }
        return redirect()->back();
    }
}
