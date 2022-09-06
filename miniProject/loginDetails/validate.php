<?php
function loggedinValidate()
{
    if(isset($_SESSION['loggedin']))
    {
    if($_SESSION['loggedin']==true)
    {
        header('location:../user/listing.php');
    }
    }
}
function Validate($value,$all)
{
    $name= array();
    foreach($value as $key=>$value1)
    {
        if(empty($value1))
        {
            $name[$key]="$key is required !";
        }
        elseif($key=='firstName'|| $key=='lastName')
        {
            if(is_numeric($value1) || preg_match('/[^a-z_+-0-9]/i',$value1))
            {
                $name[$key]="Please enter correct $key!";

            }
        }
        elseif($key=='email')
        {
            foreach($all as $key2=>$value2)
            {
                if($value['email']==$value2['email'])
                {
                $name[$key]="email already exist!";
                break;
                }
            }
            if(!filter_var($value1, FILTER_VALIDATE_EMAIL))
            {
                $name[$key]="Please enter a valid Email !";

            }
        }
        
        elseif($key=='password')
        {
            $value1=trim($value1);
            if(empty($value))
            {
                $name[$key]="Don't enter spaces !";

            }
            elseif(strlen($value1)<8)
            {
                $name[$key]="Password must be 8 digit!";

            }
        }
    }
return $name;
}
?>