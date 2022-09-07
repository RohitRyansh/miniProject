<?php
session_start();
include 'dataValidate.php';
if(!empty($_POST['submit']))
{
    $error=array();
    $error=Validate($_POST);
     if(!empty($error))
    {
        $_SESSION['error']=$error;
        header('location:index.php');
    }
    else
    {
        if(!empty($_SESSION['error']))
        {
           unset($_SESSION['error']);
        }
        $List_count = isset($_SESSION['List'])? count($_SESSION['List']): 0;
        $_POST['id'] = $List_count++;
        $_SESSION['List'][]= $_POST;
        header('location:dataList.php');        
    } 
}
?>
