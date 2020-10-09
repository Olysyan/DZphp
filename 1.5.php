<?php
function getInitials( string $FIO ){ 
    if(substr_count($FIO, ' ') < 1 || trim($FIO) == ''){return  null;}
    $string = "";
    $str= explode(" ", $FIO);
    $string .= mb_convert_case($str[0], MB_CASE_TITLE, "UTF-8");
    $i=1;
    while($i<= substr_count($FIO, ' ')){
        $string .= " ".mb_convert_case(mb_substr($str[$i], 0,1), MB_CASE_TITLE, "UTF-8").".";
        $i +=1;}
    echo("$string \n");
    return $string;}
getInitials("мамин-сибиряк дмитрий наркисович")."\n";
getInitials("Петров иван")."\n";
getInitials("Маркес Габриэль Хосе Гарсиа")."\n";
getInitials("  ")."\n";
?>