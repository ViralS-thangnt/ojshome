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

Form::macro('input_radio', function($name, $label, $value = array()) {
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
