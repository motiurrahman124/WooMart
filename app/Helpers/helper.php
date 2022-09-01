<?php

use App\Models\Category;

function fileUploade($image, $path)
{
    if(!file_exists(public_path($path)))
    {
        mkdir(public_path($path),0777, true);
    }
    
    $name = $image->getClientOriginalName();
    $imagename = time()."_".$name;
    $destination = public_path($path);
    $image->move($destination,$imagename);

    return $path.$imagename;
}

function categories()
{
    return Category::get();   
}

function megaCategories()
{
    return Category::where('parent_id', 0)->with('child')->get();   
}