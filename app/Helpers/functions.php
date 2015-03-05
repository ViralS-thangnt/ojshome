<?php
// app\Helpers\function.php 
function create_menu_item($menu_name = 'menu', 
							$number_child_items = 0,
							$child_names = [],
							$child_links = [],
							$icon_class_menu = 'fa fa-th', 
							$is_active = 0
							){
	if($number_child_items == 0 and $is_active == 0){

		return '<ul class="sidebar-menu">
		            <li>
		                <a>
		                    <i class="' . $icon_class_menu . '"></i> <span>' . $menu_name . '</span>
		                </a>
		            </li>
		        </ul>';
	} elseif ($number_child_items == 0 and $is_active == 1) {

		return '<ul class="sidebar-menu">
		            <li class="active">
		                <a href="#">
		                    <i class="' . $icon_class_menu . '"></i> <span>' . $menu_name . '</span>
		                </a>
		            </li>
		        </ul>';
	} else {
		$result = '<ul class="sidebar-menu">';
		$result = $result . '<li class="treeview">
								<a href="#">
				                    <i class="' . $icon_class_menu . '"></i>
				                    <span>' . $menu_name . '</span>
				                    <i class="fa fa-angle-left pull-right"></i>
				                </a>
				             <ul class="treeview-menu">';
		$total_items = count($child_names);
		for ($i = 0; $i < $total_items; $i++) {
			$result = $result . '<li><a href="' . $child_links[$i] . '" style="margin-left: 10px;"><i class="fa fa-angle-double-right"></i> '. $child_names[$i] .'</a></li>';
		}

		return $result . '</ul></li></ul>';
	}
}

function create_dashboard_item($icon_class, $color_class, $link = '#', $title = 'Box', $new_notify_number = 0){
	return $result = '<div class="col-lg-3 col-xs-6">
			        <!-- small box -->
			        <div class="small-box ' . $color_class . '">
			            <div class="inner">
			                <h3>
			                    ' . $new_notify_number . '
			                </h3>
			                <p>' . $title . '</p>
			            </div>
			            <div class="icon">
			                <i class="ion ' . $icon_class . '"></i>
			            </div>
			            <a href="' . $link . '" class="small-box-footer">
			                Xem Thêm <i class="fa fa-arrow-circle-right"></i>
			            </a>
			        </div>
			    </div>';

}

// function 