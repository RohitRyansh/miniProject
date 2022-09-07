<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data List Page</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="list">
    <main>
        <section>
            <h1><u>Data List</u></h1>
            <h2><u> Welcome</u></h2>
        </section>
    </main>
</body>
</html>
<?php
session_start();
echo "<a href=\"index.php\"><button>Add</button></a>";
?>
<div class="table">
<?php
echo "<table cellspacing=5 border=1px > <tr>  <th>Title</th> <th>View</th> <th>Edit</th> <th>Delete</th>  </tr>"; 
    foreach($_SESSION['List'] as $value1)
    {
        echo "<tr>";
        echo "<td>".$value1['title']."</td>";
        echo " <td><a href=\"dataView.php?id=".$value1['id']."\"><button>View</button></a></td>
        <td><a href=\"dataEdit.php?id=".$value1['id']."\"><button>Edit</button></a></td>
        <td><a href=\"dataDelete.php?id=".$value1['id']."\"><button>Delete</button></a></td>";
    }
echo "</table>";
?>
</div>


