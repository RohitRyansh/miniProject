<?php
include 'dataAdd.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Add Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <article>
            <section class="frontpage">
                    <form action="dataAdd.php" method="post">
                        <div class="todo">
                            <h1>
                                Welcome
                            </h1>
                            <label>Tilte</label>
                            <input type="text" name="title" id="fname"/>
                            <?php
                            if(!empty($_SESSION['error']['title']))
                            {
                                echo $_SESSION['error']['title'];
                            }
                            ?>
                            <label>Description</label>
                            <textarea name="description" id="" cols="50" rows="15"></textarea>
                            <?php
                            if(!empty($_SESSION['error']['description']))
                            {
                                echo $_SESSION['error']['description'];
                            }
                            unset($_SESSION['error']);
                            ?>
                            <input type="submit" value="Add" name="submit"/> 
                        </div>
                    </form>
            </section>
        </article>
    </main>  
</body>
</html>
