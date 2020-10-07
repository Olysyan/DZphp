<?php
function getBMI( int $height, float $weight ){
    if($height<10||$height>300||$weight<1||$weight>300){return null;}
    $float =round(($weight/pow($height/100,2)),2);
    echo("$float \n");    
    return $float;}
?>