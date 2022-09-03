<?php
 global $name;
 $name['error']=array();
 global $name1;
 $name1['login']=array();
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
function fnameValidate($fname,$key)
{
    global $name;
    if(empty($fname))
    {
        $name['error']['fname']="$key is required !";
    }
    return $name['error'];
}
function lnameValidate($lname,$key)
{   
    global $name;
    if(empty($lname))
    {
        $name['error']['lname']="$key is required !";
    }
    return $name['error'];
}
function emailValidate($email,$key)
{
    global $name;
    if(empty($email))
    {
        $name['error']['email']="$key is required !";
    }
    return $name['error'];
}
function passwordValidate($password,$key)
{
    global $name;
    if(empty($password))
    {
        $name['error']['password']="$key is required !";
    }
    return $name['error'];
}
function emailValidateLogin($emailLogin,$key)
{
    global $name1;
    if(empty($emailLogin))
    {
        $name1['login']['emailLogin']="Email is required !";
    }
    return $name1['login'];
}
function passwordValidateLogin($passwordLogin,$key)
{
    global $name1;
    if(empty($passwordLogin))
    {
        $name1['login']['passwordLogin']="Password is required !";
    }
    return $name1['login'];
}
?>