<?php

function mirsh_hour_options($time){
    $mirsh_options = '';
        for($i = 0; $i <= 23; $i++){
            $mirsh_options .= '<option value="'.$i.'"';
            if(intval($time) === $i)
                $mirsh_options .= ' selected';

            $mirsh_options .= '>'.$i.':00</option>';
        }
    return $mirsh_options;
}

function mirsh_dom_options($time){
    $mirsh_options = '';
        for($i = 1; $i <= 31; $i++){
            $mirsh_options .= '<option value="'.$i.'"';
            if(intval($time) === $i)
                $mirsh_options .= ' selected';

            $mirsh_options .= '>'.$i.'</option>';
        }
    return $mirsh_options;
}

?>
