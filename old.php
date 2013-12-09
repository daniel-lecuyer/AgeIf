<?php
function writeAge($age) {

    if($age <= 20) {           
        return PHP_EOL."Jeune(.$age.)".PHP_EOL;    
    }
    if($age <= 40) {
        return PHP_EOL."Moins Jeune(.$age.)".PHP_EOL;
    }
    if($age <= 60) {
        return PHP_EOL."Presque Vieux(.$age.)".PHP_EOL;    
    }
    if($age <= 78) {
        return PHP_EOL."Vieux(.$age.)".PHP_EOL;
    }   
}
$age = rand(18, 78);
$text = writeAge($age);
echo $text;