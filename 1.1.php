<?php
function typesCounter( array $input)
{  
    $arr = array();
    foreach ($input as $value) {
        $j = 0;
        $s=gettype($value);
        foreach ($input as $value1){
            if(gettype($value) == gettype($value1)){
                $j+=1;
            }
        }
        $arr[$s]="$j";   
    }
    foreach ($arr as $key => $value ){echo("$key => $value \n");}
    return $arr;
}
?>