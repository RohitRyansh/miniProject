<?php
    session_start(); 
    global $byDefault;
    $byDefault=array();
    foreach($_SESSION['User'] as $key=>$value)
    {
        if($value['id']==$_GET['id'])
        {
            $byDefault=$value;
        }
    }
    if(isset($_POST['submit']))
    {
        foreach($_SESSION['User'] as $key=>$value)
        {
            if($value['id']==$_POST['submit'])
            {
                    $_SESSION['User'][$key]=$_POST;
                    $_SESSION['User'][$key]['id']=$_POST['submit'];
                    header('location:listing.php');     
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Form</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <main>
        <article>
            <h1>
                WELCOME to Login World
            </h1>
            <section class="frontpage">
                    <form action="edit.php" method="post">
                        <div class="signup">
                            <h2>
                                Edit Form
                            </h2>
                            <p>
                                let's get started with us.
                            </p>
                            <input type="text" name="firstName" id="firstName" placeholder="First Name" value=<?php echo $byDefault['firstName']?>>
                            <input type="text" name="lastName" id="lastName" placeholder="Last Name" value=<?php echo $byDefault['lastName']?>>
                            <input type="email" name="email" id="email" placeholder="Email" value=<?php echo $byDefault['email']?>>
                            <input type="password" name="password" id="password" placeholder="Password" value=<?php echo $byDefault['password']?>>
                            <input type="submit"  name="submit" value=<?php echo isset($_GET['id'])? $_GET['id']:"edit"?>> 
                        </div>
                    </form>
            </section> 
        </article>
    </main>     
</body>
</html>
