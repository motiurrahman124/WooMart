<?php

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