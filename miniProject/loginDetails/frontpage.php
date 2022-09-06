<?php
include 'validate.php';
session_start();
// session_destroy();
loggedinValidate();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>frontpage Page</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
        <article>
            <section>
                <h1>
                    WELCOME to Login World!
                </h1>
            </section>
        </article>
    </header>
    <main>
        <article>
            <section class="frontpage">
                    <form action="signup.php" method="post">
                        <div class="signup">
                            <h2>
                                Create an account
                            </h2>
                            <p>
                                let's get started with us.
                            </p>
                            <input type="text" name="firstName" id="fname" placeholder="First Name" />
                            <?php
                            if(!empty($_SESSION['error']['firstName']))
                            {
                                echo $_SESSION['error']['firstName'];
                            }
                            ?>
                            <input type="text" name="lastName" id="lname" placeholder="Last Name" />
                            <?php
                            if(!empty($_SESSION['error']['lastName']))
                            {
                                echo $_SESSION['error']['lastName'];
                            }
                            ?>
                            <input type="email" name="email" id="email" placeholder="Email" />
                            <?php
                            if(!empty($_SESSION['error']['email']))
                            {
                                echo $_SESSION['error']['email'];
                            }
                            ?>
                            <input type="password" name="password" id="password" placeholder="Password" />
                            <?php
                            if(!empty($_SESSION['error']['password']))
                            {
                                echo $_SESSION['error']['password'];
                            }
                            ?>
                            <input type="submit" value="Create Account" name="submit"/> 
                        </div>
                    </form>
                    <form action="login.php" method="post">
                        <div class="login">
                            <h2>
                                Log In
                            </h2>
                            <input type="email" name="emailLogin" id="emailLogin" placeholder="Email" />
                            <?php
                            if(!empty($_SESSION['error']['emailLogin']))
                            {
                                echo $_SESSION['error']['emailLogin'];
                            }
                            ?>
                            <input type="password" name="passwordLogin" id="passwordLogin" placeholder="Password" />
                            <?php
                            if(!empty($_SESSION['error']['passwordLogin']))
                            {
                                echo $_SESSION['error']['passwordLogin'];
                            }
                            unset($_SESSION['error']);
                            ?>
                            <input type="submit" value="Log In" name="submit1" />
                        </div>
                    </form>
            </section>
        </article>
    </main>  
</body>
</html>
