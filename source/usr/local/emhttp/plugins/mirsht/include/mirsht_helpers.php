<?php

function mirsht_hour_options($time){
    $mirsht_options = '';
        for($i = 0; $i <= 23; $i++){
            $mirsht_options .= '<option value="'.$i.'"';
            if(intval($time) === $i)
                $mirsht_options .= ' selected';

            $mirsht_options .= '>'.$i.':00</option>';
        }
    return $mirsht_options;
}

function mirsht_dom_options($time){
    $mirsht_options = '';
        for($i = 1; $i <= 31; $i++){
            $mirsht_options .= '<option value="'.$i.'"';
            if(intval($time) === $i)
                $mirsht_options .= ' selected';

            $mirsht_options .= '>'.$i.'</option>';
        }
    return $mirsht_options;
}

?>
