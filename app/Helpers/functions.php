<?php 
// // app\Helpers\function.php 
// function create_menu_item($menu_name = 'menu', 
// 							$number_child_items = 0,
// 							$child_names = ['Menu'],
// 							$child_links = ['#'],
// 							$icon_class_menu = 'fa-th', 
// 							$is_active = 0,
//                             $menu_link = '#'
// 							){
// 	if($number_child_items == 0 and $is_active == 0){

//         return '<ul class="sidebar-menu">
//                     <li>
//                         <a>
//                             <i class="fa ' . $icon_class_menu . '"></i> <span>' . $menu_name . '</span>
//                         </a>
//                     </li>
//                 </ul>';
//     } elseif ($number_child_items == 0 and $is_active == 1) {

//         return '<ul class="sidebar-menu">
//                     <li class="active">
//                         <a href="' . $menu_link . '">
//                             <i class="fa ' . $icon_class_menu . '"></i> <span>' . $menu_name . '</span>
//                         </a>
//                     </li>
//                 </ul>';
//     } else {
//         $result = '<ul class="sidebar-menu">';
//         $result = $result . '<li class="treeview">
//                                 <a href="#">
//                                     <i class="fa ' . $icon_class_menu . '"></i>
//                                     <span>' . $menu_name . '</span>
//                                     <i class="fa fa-angle-left pull-right"></i>
//                                 </a>
//                              <ul class="treeview-menu">';
//         $total_items = count($child_names);
//         for ($i = 0; $i < $total_items; $i++) {
//             $result = $result . '<li><a href="' . $child_links[$i] . '" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> '. $child_names[$i] .'</a></li>';
//         }

//         return $result . '</ul></li></ul>';
//     }
// }

// function create_dashboard_item($icon_class, $color_class, $link = '#', $title = 'Box', $new_notify_number = 0){

// 	return $result = '<div class="col-lg-3 col-xs-6">
// 			        <!-- small box -->
// 			        <div class="small-box ' . $color_class . '">
// 			            <div class="inner">
// 			                <h3>
// 			                    ' . $new_notify_number . '
// 			                </h3>
// 			                <p>' . $title . '</p>
// 			            </div>
// 			            <div class="icon">
// 			                <i class="ion ' . $icon_class . '"></i>
// 			            </div>
// 			            <a href="' . $link . '" class="small-box-footer">
// 			                Xem Thêm <i class="fa fa-arrow-circle-right"></i>
// 			            </a>
// 			        </div>
// 			    </div>';

// }

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
	$target_dir = "uploads/";
	// dd($_FILES);
	$target_file = $target_dir . basename($_FILES["file"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

	// dd($_FILES["file"]["name"]);	//
	// dd($target_file);	//"uploads/Tab2Space_Guide.txt"
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
