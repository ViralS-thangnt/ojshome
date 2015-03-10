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
									$class = '', 
									$is_required_symbol = false){

	$span = ($is_required_symbol) ? ' <span style="color: red">*</span>' : '';
	// $class = (empty($class)) ? '' : implode(' ', $class) ;

	return $result = '<label for="type" class="' . $class . '">' . $content . $span . '</label>';

	 // '<label for="type" style="font-size: large">Thể loại bài viết  (<span style="color: red">*</span>)</label>';
});

// Custom combobox
Form::macro('combobox_custom', function($name = 'combobox', 
										$data = array(), 
										$class = 'form-control',
										$is_multiple = 'true',
										$selected = array(0)){
	$multiple = ($is_multiple) ? ' multiple ' : '';
	$result = Form::select($name, $data, null, ['class' => $class, 'multiple' => $multiple, 'name' => $name . '[]']);

	return $result;
});

// Custom help block style
Form::macro('help_block', function($content = '', $class = ''){

	return '<p class="help-block-custom ' . $class . '">' . $content . '</p>';
});

// Custom textarea
Form::macro('textarea_custom', 
				function($name = '', 
						$content = '',
						$rows = 5, 
						$placeholder = 'Enter something...', 
						$class = 'form-control'){
	if ($rows == 1) {

		return $result = Form::text($name, $content, ['class' => $class, 'placeholder' => $placeholder]);
	} 

	return $result = Form::textarea($name, $content, ['class' => $class, 'placeholder' => $placeholder, 'rows' => $rows]);
});

// Custom image
Form::macro('image_custom', function($src = '', $alt = 'Image', $class = IMAGE_CIRCLE){

	return '<img src="' . $src . '" class="' . $class . '" alt="' . $alt . '">';
});

// Create custom menu item 
Form::macro('menu_item', function ($menu_name = 'menu', 
							// $number_child_items = 0,
							$child_names = ['Menu'],
							$child_links = ['#'],
							$icon_menu_class = ICON_MENU_SPEED_DIAL, 
							$is_active = 0,
							$menu_link = '#'
							){
	$total_items = count($child_names);
	if($total_items == 0 and $is_active == 0){

		return '<ul class="sidebar-menu">
					<li>
						<a>
							<i class="fa ' . $icon_menu_class . '"></i> <span>' . $menu_name . '</span>
						</a>
					</li>
				</ul>';
	} elseif ($total_items == 0 and $is_active == 1) {

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
		
		for ($i = 0; $i < $total_items; $i++)
			$result = $result . '<li><a href="' . $child_links[$i] . '" style="margin-left: 10px;">
										<i class="fa fa-angle-double-right"></i> '. $child_names[$i] .'</a></li>';

		return $result . '</ul></li></ul>';
	}
});

// Create dashboard item
Form::macro('dashboard_item', function($icon_class = ICON_DOCUMENT_TEXT, 
												$color_class = COLOR_LIME, 
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
Form::macro('navigate_link', function($icon_class = MENU_ICON_DASHBOARD, 
										$navigate_names = array('Trang chủ'), 
										$navigate_links = array('admin')
										){
	if (empty($navigate_names)) {
		
		return $result = '<ol class="breadcrumb">
							<li><a href="' . (empty($navigate_links) ? '' : $navigate_links[0]) . '"><i class="fa ' . $icon_class . '">
								</i> Trang chủ</a></li></ol>';
	} 

	$result = '<ol class="breadcrumb">
				<li><a href="#"><i class="fa ' . $icon_class . '">
					</i> ' . $navigate_names[0] . '</a></li>';

	$count = count($navigate_names);
	for($i = 1; $i < $count; $i++)
		$result = $result . '<li><a href="' . $navigate_links[$i] . '">' . $navigate_names[$i] . '</a></li>';

	return $result . '</ol>';
});

// Header Form for Input
Form::macro('title_box_header', function($title){
	
	return '<div class="box-header">
				<h3 class="box-title">' . $title . '</h3>
			</div><!-- /.box-header -->';
});

// Custom <ul> for dashboard
Form::macro('ul_custom', function($data = [''],
									$links = array(), 
									$new_notify_number = array(),
									$ul_class = '', 
									$li_class = ''){
	
	$result = '<ul class="' . $ul_class . '">';
	$count_links = count($links);
	$count = count($data);
	if (empty(count($links))) {
		for($i = 0; $i < $count; $i++)
			$result = $result . '<li class="' . $li_class . '">' . $data[$i] . '</li>';

		return $result;
	}
	
	for($i = 0; $i < $count; $i++)
		if($count_links >= $i)
			$result = $result . '<li class="' . $li_class . '"><a href="' . $links[$i] . '">' . $data[$i] . '</a></li>';

	$result = $result . '</ul';

	return $result;
});

// Custom div
Form::macro('div_open', function($class = '', $id = ''){

	return '<div class="' . $class . '" ' . (empty($id) ?  '' : $id ) . '>';
});

Form::macro('div_close', function(){

	return '</div>';
});

// Custom <h>
Form::macro('h_custom', function($level_number = 3, $content = '', $class = ''){

	return '<h' . $level_number . ' class="' . $class . '">' . $content . '</h' . $level_number . '>';
});





