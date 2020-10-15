<?php
function getSumExp3( array $input ){ 
    $int=0;
    if(count($input)==0){return 0;}
    foreach($input as $val){
        if(gettype($val) != 'integer' && gettype($val) != 'double'){return -1;}
        $int +=pow(round($val-0.1),3);
    }
    echo ("$int \n");
    return $int;}
?>