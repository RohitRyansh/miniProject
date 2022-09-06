<?php
include 'frontpage.php';
loggedinValidate();
if(!empty($_POST['submit1']))
{
    $error=array();
    $error=Validate($_POST,null);
    if(!empty($error))
    {
        $_SESSION['error']=$error;
        header('location:frontpage.php');
    }
    else
    {     
        foreach($_SESSION['User'] as $key=>$value1)
        {
            if($value1['email']==$_POST['emailLogin'] && $value1['password']==$_POST['passwordLogin'])
            {
                $_SESSION['loggedin']=true;
                header('location:../user/listing.php');
            }        
            else
            {
                echo "wrong id and password";
            }
        }  
    }
}
?>