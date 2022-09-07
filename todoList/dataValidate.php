<?php
function Validate($value)
{
    $check= array();
    foreach($value as $key=>$value1)
    {
        if(empty($value1))
        {
            $check[$key]="$key is required !";
        }
        else
        {
            $value1=trim($value1);
            if(empty($value1))
            {
                $check[$key]="Don't enter spaces !";
            }
        }
    }
    return $check;
}
?>