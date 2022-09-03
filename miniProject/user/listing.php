<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editing Page</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="list">
    <main>
    <section>
        <h2>Data List</h2>
        <h1>
            WELCOME to Login World!
        </h1>
    </section>
</main>
</body>
</html>
<?php
session_start();
if(isset($_SESSION['loggedin']))
{
    if($_SESSION['loggedin']==false)
    {
        header('location:../loginDetails/frontpage.php');
    }
}
?>
<h2 class="accountCreate">Login Successfully</h2>
<div class="table">
<?php
echo "<table cellspacing=5 border=1px > <tr><th>Id</th> <th>First Name</th> <th>Last Name</th> <th>Email</th> <th>Edit</th> <th>Delete</th> </tr>";   
foreach($_SESSION['User'] as $value1)
{
    echo "<tr>";
    echo "<td>".$value1['id']."</td>";
    foreach($value1 as $key2=>$value2)
    {    
        if( $key2=='password' )
        {
            break;
        }
        echo "<td>".$value2."</td>";

    }
    echo "<td><a href=\"edit.php?id=".$value1['id']."\"><button>Edit</button></a></td>
    <td><a href=\"delete.php?id=".$value1['id']."\"><button>Delete</button></a></td>";
    echo "</tr>";
}
echo "</table>";
?>
</div>
<?php
echo "<a href=\"logout.php\"><button>Log Out</button></a>";
?>

