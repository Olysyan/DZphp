<?php
function getSumNK( array $input, int $N, int $K ){
    if(count($input)==0){return 0;}
    if(count($input)<$K+$N-1){return -1;}
    foreach($input as $val){
        if(gettype($val) != 'integer'){return -1;}
    }
    if($N <= 0){return -1;}
    if($N == 1){return $input[$K-1];}
    $int=0;
    foreach(range(0,$N-1) as $i){
        $int += $input[$K+$i-1];
    }
    echo("$int \n");
    return $int;
}
?>