<?php
function student($marks)
{
    switch($marks)
    {
    case $marks > 60:
        echo "First division";
        break;
    case $marks>45 && $marks<=59:
        echo "Second division";
        break;
    case $marks>33 && $marks<=44:
        echo "Third division";
        break;
    default:
        echo "Fail";
    }
}
student(50);
?>