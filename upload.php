<?php

$upload_dir = 'image/';

if (isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0)
{
    $tmp_name = $_FILES["photo"]["tmp_name"];
    $name = strtolower($_FILES["photo"]["name"]);
    $size = strtolower($_FILES["photo"]["size"]);
    $image_size = getimagesize($_FILES["photo"]["tmp_name"]);
    echo "<pre>";
    print_r($image_size);
    echo "</pre>";
    exit;
    $file_extn = substr($name, strrpos($name, '.') + 1);
    $valid_ext = array('jpg', 'jpeg', 'png', 'pdf');
    if (in_array($file_extn, $valid_ext))
    {


        $rand_val = rand(100, 3565656);
        $new_name = $rand_val . "." . $file_extn;
        move_uploaded_file($tmp_name, $upload_dir . $new_name);
        echo "upload Successfully";
    } else
    {
        echo "You are trying to upload invalid file";
    }
}
?>
