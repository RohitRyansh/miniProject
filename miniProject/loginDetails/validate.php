<?php
 global $name;
 $name['error']=array();
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
function Validate($fname,$key)
{
    global $name;
    if(empty($fname))
    {
        $name['error'][$key]="$key is required !";
    }
    elseif($key=='firstName'|| $key=='lastName')
    {
        if(is_numeric($fname) || preg_match('/[^a-z_+-0-9]/i',$fname))
        {
            $name['error'][$key]="Please enter correct $key!";
        }
    }
    elseif($key=='email'|| $key=='emailLogin')
    {
        if(!filter_var($fname, FILTER_VALIDATE_EMAIL))
        {
            $name['error'][$key]="Please enter a valid Email !";
        }
    }
    elseif($key=='password')
    {
        if(strlen($fname)<8)
        {
            $name['error'][$key]="Password must be 8 digit!";
        }
    }
    return $name['error'];
}
?>