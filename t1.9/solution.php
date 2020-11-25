<?php
function concatRegister(...$args) {
    $res = "";
    $chek= true;
    foreach ($args as $a) {
        if(gettype($a)!='string')throw new TypeError;
        $res .= mb_convert_case($a, $chek ?  MB_CASE_LOWER : MB_CASE_UPPER, "UTF-8")."-";
        $chek = !$chek;
}
    $res = substr($res,0,-1);
    return $res;
}
?>