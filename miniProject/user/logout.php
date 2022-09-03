<?php
session_start();
if(isset($_SESSION['loggedin']))
{
    if($_SESSION['loggedin']==true)
    {
        unset($_SESSION['loggedin']);
        header('location:../loginDetails/frontpage.php');
    }
}

?>