<?php
function student($marks)
{
    switch($marks)
    {
    case $marks > 60:
        echo "First";
        break;
    case $marks>45 && $marks<=59:
        echo "Second";
        break;
    case $marks>33 && $marks<=44:
        echo "Third";
        break;
    default:
        echo "Fail";
    }
}
student(50);
?>