<?php
include 'frontpage.php';
loggedinValidate();
if(!empty($_POST['submit']))
{
    session_start();
    $error=array();
    $error['error']=fnameValidate($_POST['fname'],'fname');
    $error['error']=lnameValidate($_POST['lname'],'lname');
    $error['error']=emailValidate($_POST['email'],'email');
    $error['error']=passwordValidate($_POST['password'],'password');
    if(!empty($error['error']))
    {
        $_SESSION['error']=$error['error'];
        header('location:frontpage.php');
    }
    else
    {
        if(!empty($error))
        {
           unset($_SESSION['error']);
        }
        $user_count = isset($_SESSION['User'])? count($_SESSION['User']): 0;
        $_POST['id'] = $user_count++;
        $_SESSION['User'][]= $_POST;
        if(isset($_SESSION['loggedin']))
        {
            $_SESSION['loggedin']=false;
        }
        header('location:login.php');        
    } 
}
?>
