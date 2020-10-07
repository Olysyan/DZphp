<?php
function getSumExp3( array $input ){ 
    $int=0;
    foreach($input as $val){
        $int +=pow(round($val-0.1),3);
    }
    echo ("$int \n");
    return $int;}
?>