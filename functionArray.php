<?php
function functionArray($array)
{
    for($i=0;$i<count($array);$i++)
    {
        for($j=0;$j<$i;$j++)
        {
            if($array[$i]==$array[$j])
            {
                break;
            }    
        }
        if($i==$j)
        {
            echo $array[$i]." ";
        }
    }
}
$array=array(12,2,12,8,2,7,9,9);
functionArray($array);
?>