<?php
session_start();
if(isset($_SESSION['loggedin']))
{
    if($_SESSION['loggedin']==true)
    {
        header('location:listing.php');
    }
}
$id=$_GET['id'];
foreach($_SESSION['User'] as $key=>$value)
{
    if($id==$value['id'])
    {
        unset($_SESSION['User'][$key]);
        echo "<h2>Data Deleted Successfully";
        header('location:listing.php');
    }
}
?>