<?php
function stringFunction($string)
{
    // string count with exlode function
    $length=explode(" ",$string);
    echo $string;
    echo " // ".count($length);
    
    // string count with str_word_count function
    echo "<br>".$string;
    echo str_word_count($string);  
}
$string=stringFunction("I like to learn PHP");
?>