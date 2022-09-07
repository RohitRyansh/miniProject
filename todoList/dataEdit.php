<?php
    include 'dataValidate.php';
    $byDefault=array();
    $idCount=0;
    session_start();
    foreach($_SESSION['List'] as $key=>$value)
    {
        if($value['id']==$_GET['id'])
        {
            $byDefault=$value;
            $idCount =0;
            break;
        }
        else
        {
            $idCount++;
        }
    }
    if($idCount>0)
    {
        header('location:dataList.php');
    }
    if(isset($_POST['submit']))
    {
        $_SESSION['error']=Validate($_POST);
        if(!empty($_SESSION['error']))
        {            
            header('location:dataEdit.php?id='.$_GET['id']);
        }
        else
        {
        foreach($_SESSION['List'] as $key=>$value)
        {
            if($value['id']==$_POST['submit'])
            {       
                $_SESSION['List'][$key]=$_POST;
                $_SESSION['List'][$key]['id']=$_POST['submit'];    
                header('location:dataList.php');     
            }
        }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <section class="frontpage">
                <form action="dataEdit.php?id=<?php echo $_GET['id'];?>" method="post">
                    <div class="todo">
                        <h2>
                            Edit Form
                        </h2>
                        <label>Title</label>
                        <input type="text" name="title" value=<?php echo isset($byDefault['title'])?$byDefault['title']:null?>>
                        <?php
                        if(!empty($_SESSION['error']['title']))
                        {
                            echo $_SESSION['error']['title'];
                        }
                        ?>
                        <label>Description</label>
                        <textarea name="description"  cols="50" rows="15" ><?php echo isset($byDefault['description'])?$byDefault['description']:null?></textarea>
                        <?php
                        if(!empty($_SESSION['error']['description']))
                        {
                            echo $_SESSION['error']['description'];
                        }
                        ?>
                        <input type="submit"  name="submit" value=<?php echo isset($_GET['id'])? $_GET['id']:"edit"?>> 
                    </div>
                </form>
        </section> 
    </main>     
</body>
</html>
