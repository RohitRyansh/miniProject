<?php
include 'frontpage.php';
loggedinValidate();
if(!empty($_POST['submit']))
{
    $error=array();
    $error=Validate($_POST,$_SESSION['User']);
     if(!empty($error))
    {
        $_SESSION['error']=$error;
        header('location:frontpage.php');
    }
    else
    {
        if(!empty($_SESSION['error']))
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
