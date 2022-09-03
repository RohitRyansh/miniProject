<?php
include 'frontpage.php';
loggedinValidate();
if(!empty($_POST['submit1']))
{
    $login=array();
    $login['login']=emailValidateLogin($_POST['emailLogin'],'emailLogin');
    $login['login']=passwordValidateLogin($_POST['passwordLogin'],'passwordLogin');
    if(!empty($login['login']))
    {
        $_SESSION['login']=$login['login'];
        header('location:frontpage.php');
    }
    else
    {     
        foreach($_SESSION['User'] as $key=>$value1)
        {
            print_r($value1);
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