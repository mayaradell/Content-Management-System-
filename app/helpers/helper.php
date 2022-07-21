<?php


function save_image($image_name, $path)
{

    $extension = $image_name->getClientOriginalExtension();
    $filename = time() . "." . $extension;
    $image_name->move($path, $filename);

    return $path.'/'.$filename;
}
function new_fun(){
    echo "hii2+ welcome abraod";
}


