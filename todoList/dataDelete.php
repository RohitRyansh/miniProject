<?php
session_start();
foreach($_SESSION['List'] as $key=>$value)
{
    if($_GET['id']==$value['id'])
    {
        unset($_SESSION['List'][$key]);
        header('location:dataList.php');
    }
}
?>