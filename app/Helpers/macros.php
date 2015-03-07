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
Form::macro('label_custom', function($text = 'label', 
                                    $class = array(''), 
                                    $is_required_symbol = false){

    $span = ($is_required_symbol) ? ' <span style="color: red">*</span>' : '';
    $class = (empty($class)) ? '' : implode(' ', $class) ;

    return $result = '<label for="type" class="' . $class . '">' . $text . $span . '</label>';

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
Form::macro('help_block', function($text = '', $class = array()){

    return '<p name = "" class="help-block-custom ' . implode(' ', $class) . '">' . $text . '</p>';
});

// Custom textarea
Form::macro('textarea_custom', 
                function($name = '', 
                        $text = '',
                        $rows = 5, 
                        $placeholder = 'Enter something...', 
                        $class = array('form-control')){

    return $result = '<textarea 
                        class = "' . implode(' ', $class) . '" 
                        rows = "' . $rows . '" 
                        placeholder = "' . $placeholder . '" 
                        name = "' . $name . '" 
                        id = "' . $name . '">' . $text . '</textarea>';
});














