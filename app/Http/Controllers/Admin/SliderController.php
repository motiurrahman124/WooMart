<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller

{

    public function index()
    {
        $sliders = Slider::all();
        return view('Backend.slider.index',['menu' => 'slider', 'sliders' => $sliders]);
    }   


    
    public function create()
    {
        return view('Backend.slider.create',['menu' => 'slider']);
    }

    
    public function store(Request $request)
    {
        $data['title1']         = $request->title1;
        $data['title2']         = $request->title2;
        $data['description']    = $request->description;

        $data['background_image']   = fileUploade($request->background_image,'images/slider/' );
        $data['banner_image']       = fileUploade($request->banner_image,'images/slider/' );

        Slider::create($data);

        return redirect()->route('slider.index');
    }

    public function edit($id)
    {
        $slider = slider::where(['id' => $id])->first();
        if(!empty($slider))
        {
            return view('Backend.slider.edit',['slider' =>$slider, 'menu' => 'slider']);
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

        $slider = slider::where('id', $request->id)->first();
        $slider->update($data);

        return redirect ()->route('slider.index');
    }

    public function delete($id)
    {
        $slider = slider::where(['id' => $id])->first();
        if(!empty($slider))
        {
            $slider->delete();
            return redirect()->route('slider.index');
        }
        return redirect()->back();
    }
}
