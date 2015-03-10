<?php 
/**
 * Handle upload file
 *
 * @param  Request::file('icon')
 * @return filename
 */
function doUpload($file, $path = IMAGE_PATH)
{
    $filename           = $file->getClientOriginalName();
    $destination_path   = public_path($path);
    $file->move($destination_path, $filename);

    return $filename;
}

function doUploadDocument(){
    $target_dir = "uploads/";
    // dd($_FILES);
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    // dd($_FILES["file"]["name"]); //
    // dd($target_file);    //"uploads/Tab2Space_Guide.txt"
    // dd($imageFileType);
    // dd($_POST["submit"]);

    // Check if image file is a actual image or fake image
    // if(isset($_POST["submit"])) {
        // $check = getimagesize($_FILES["file"]["tmp_name"]);
        // if($check !== false) {
        //     echo "File is an image - " . $check["mime"] . ".";
        //     $uploadOk = 1;
        // } else {
        //     echo "File is not an image.";
        //     $uploadOk = 0;
        // }
    // }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // dd($_FILES["file"]["tmp_name"]);
    // dd(file_exists($target_file));

    // Check file size
    if ($_FILES["file"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // // Allow certain file formats
    // if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    // && $imageFileType != "gif" ) {
    //     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    //     $uploadOk = 0;
    // }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        dd('error');
        
    } else {
        // if everything is ok, try to upload file
        // dd($_FILES["file"]["tmp_name"], $target_file);

        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
            $uploadOk = 1;
        } else {
            echo "Sorry, there was an error uploading your file.";
            $uploadOk = 0;
        }
    }
    return $uploadOk;
}

//get actor string from actor id
function actor($actor_no)
{
    $actor_arr = explode(',', $actor_no);
    $actors = Constant::$actor;
    $actor = '';
    foreach ($actor_arr as $key => $value) {
        if ($key == count($actor_arr)-1) {
            $actor .= $actors[$value];  
        } else {
            $actor .= $actors[$value].', ';
        }
        
    }

    return $actor;
}

function has_permission($require_per, $user_per){
    foreach ($require_per as $value) {
        if (in_array($value, $user_per))
            return true;
    }

    return false;
}
