<?php
Form::macro('input_text', function($name, $label, $type = 'text', $class = array()) {
	$html = '<div class="form-group">';
	$html .= Form::label($name, $label, array('class' => 'col-sm-2 control-label'));
	$html .= ' <div class="col-sm-10">';

	$class = (!empty($class)) ? implode(' ', $class) : '';
	$class = 'form-control '. $class;

	switch ($type) {
		case 'email':
			$html .= Form::email($name, null, ['class' => $class]);
			break;
		case 'password':
			$html .= Form::password($name, null, ['class' => $class]);
			break;
		
		default:
			$html .= Form::text($name, null, ['class' => $class]);
			break;
	}
	$html .= '</div></div>';

	return $html;
});

Form::macro('input_select', function($name, $label, $value = array()) {
	$html = '<label class="col-sm-2 control-label">'.$label.'</label>
			<div class="col-sm-10">';
	$html .= Form::select($name, $value, null, ['class' => 'form-control']);
	$html .= '</div>';

	return $html;
});

Form::macro('input_check', function($name, $value = array()) {
	$html = '';
	if (!empty($value)) {
		foreach ($value as $key => $item) {
			$html .= '<label class="checkbox-inline">';
			$html .= Form::checkbox($name.'[]', $key);
			$html .= $item;
			$html .= '</label>';
		}
	}
	
	return $html;
});

Form::macro('input_radio', function($name, $label = '', $value = array()) {
	$html =    '<label class="col-sm-2 control-label">'.$label.'</label>';
	if (!empty($value)) {
		foreach ($$value as $key => $item) {
			$html .= '<label class="radio-inline">';
			$html .= Form::radio($item, $key);
			$html .= '</label>';
		}
	}
	
	return $html;
});

Form::macro('button_submit', function($value = 'Submit', $class = 'btn btn-primary') {
	return '<input type="submit" class="'.$class.'" value="'.$value.'" />';
});

// Custom label 
Form::macro('label_custom', function($content = 'label', 
									$class = array(''), 
									$is_required_symbol = false){

	$span = ($is_required_symbol) ? ' <span style="color: red">*</span>' : '';
	$class = (empty($class)) ? '' : implode(' ', $class) ;

	return $result = '<label for="type" class="' . $class . '">' . $content . $span . '</label>';

	 // '<label for="type" style="font-size: large">Thể loại bài viết  (<span style="color: red">*</span>)</label>';
});

// Custom combobox
Form::macro('combobox_custom', function($name = 'combobox', 
										$data = array(), 
										$class = ['form-control'],
										$is_multiple = 'true',
										$selected = array(0)){

	$multiple = ($is_multiple) ? ' multiple = "" ' : '';
	$result = '<select class="' . implode(' ', $class) . '" id="' . $name . '" name="' . $name . '" ' . $multiple . '>';
	
	// $result = $result . ;
	if ($data) {
		foreach ($data as $key => $value) {
			if(in_array($key, $selected) )
				$result = $result . '<option value="' . $key . '" selected >' . $value . '</option>';
			else 
				$result = $result . '<option value="' . $key . '" >' . $value . '</option>';
		}
	}

	$result = $result . "</select>";

	return $result;
});

// Custom help block style
Form::macro('help_block', function($content = '', $class = array()){

	return '<p name = "" class="help-block-custom ' . implode(' ', $class) . '">' . $content . '</p>';
});

// Custom textarea
Form::macro('textarea_custom', 
				function($name = '', 
						$content = '',
						$rows = 5, 
						$placeholder = 'Enter something...', 
						$class = array('form-control')){

	return $result = '<textarea 
						class = "' . implode(' ', $class) . '" 
						rows = "' . $rows . '" 
						placeholder = "' . $placeholder . '" 
						name = "' . $name . '" 
						id = "' . $name . '">' . $content . '</textarea>';
});

// Custom image
Form::macro('image_custom', function($src = '', $alt = 'Image', $class = IMAGE_CIRCLE){

	return '<img src="' . $src . '" class="' . $class . '" alt="' . $alt . '">';
});

// Create custom menu item 
Form::macro('create_menu_item', function ($menu_name = 'menu', 
							$number_child_items = 0,
							$child_names = ['Menu'],
							$child_links = ['#'],
							$icon_menu_class = 'fa-th', 
							$is_active = 0,
							$menu_link = '#'
							){
	if($number_child_items == 0 and $is_active == 0){

		return '<ul class="sidebar-menu">
					<li>
						<a>
							<i class="fa ' . $icon_menu_class . '"></i> <span>' . $menu_name . '</span>
						</a>
					</li>
				</ul>';
	} elseif ($number_child_items == 0 and $is_active == 1) {

		return '<ul class="sidebar-menu">
					<li class="active">
						<a href="' . $menu_link . '">
							<i class="fa ' . $icon_menu_class . '"></i> <span>' . $menu_name . '</span>
						</a>
					</li>
				</ul>';
	} else {
		$result = '<ul class="sidebar-menu">';
		$result = $result . '<li class="treeview">
								<a href="#">
									<i class="fa ' . $icon_menu_class . '"></i>
									<span>' . $menu_name . '</span>
									<i class="fa fa-angle-left pull-right"></i>
								</a>
							 <ul class="treeview-menu">';
		$total_items = count($child_names);
		for ($i = 0; $i < $total_items; $i++) {
			$result = $result . '<li><a href="' . $child_links[$i] . '" style="margin-left: 10px;">
										<i class="fa fa-angle-double-right"></i> '. $child_names[$i] .'</a></li>';
		}

		return $result . '</ul></li></ul>';
	}
});

// Create dashboard item
Form::macro('create_dashboard_item', function($icon_class, 
												$color_class, 
												$link = '#', 
												$title = 'Box', 
												$new_notify_number = 0){

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

});

// Create navigate link
Form::macro('create_navigate_link', function($icon_class = 'MENU_ICON_DASHBOARD', 
												$navigate_names = array('Trang chủ'), 
												$navigate_links = array('admin')
												){
	if (empty($navigate_names)) {
		
		return $result = '<ol class="breadcrumb">
							<li><a href="' . (empty($navigate_links) ? '' : $navigate_links[0]) . '"><i class="fa ' . $icon_class . '">
								</i> Trang chủ</a></li></ol>dsaljfdlks;àlkd;';
	} 

	$result = '<ol class="breadcrumb">
				<li><a href="#"><i class="fa ' . $icon_class . '">
					</i> ' . $navigate_names[0] . '</a></li>';

	$count = count($navigate_names);
	for($i = 1; $i < $count; $i++)
		$result = $result . '<li><a href="' . $navigate_links[$i] . '">' . $navigate_names[$i] . '</a></li>';

	return $result . '</ol>';
});












