<?php 

// // app\Helpers\function.php 
function output_text($label, $value)
{
	return '<label class="col-sm-2 control-label">'.$label.'</label>
			<div class="col-sm-10">'.
			  $value
			.'</div><div class="clear"></div>';
}

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
	$target_dir = public_path() . FILE_PATH . $_FILES["file"]["tmp_name"] ;
	$target_file = $target_dir . basename($_FILES["file"]["name"]);
	$uploadOk = 1;

	// Check if file already exists
	if (file_exists($target_file)) {
		Session::flash('msg_response', "Sorry, file already exists.");
		$uploadOk = 0;
	}

	// Check file size
	if ($_FILES["file"]["size"] > FILE_SIZE_MAX) {
		Session::flash('msg_response', "Sorry, your file is too large.");
		$uploadOk = 0;
	}

	File::makeDirectory($target_dir, $mode = 0777, true, true);
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		Session::flash('msg_response', "Sorry, your file was not uploaded.");
	} else {
		// if everything is ok, try to upload file
		if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
			Session::flash('msg_response', "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.");
			$uploadOk = 1;
		} else {
			Session::flash('msg_response', "Sorry, there was an error uploading your file.");
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
