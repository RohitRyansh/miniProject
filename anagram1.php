<?php
if(isset($_POST['submit']))
    {
    $len=strlen($_POST['name1']);
    $len1=strlen($_POST['name1']);
    $len2=strlen($_POST['name2']);
    if($len1==$len2)
    {
        for($i=0;$i<$len2;$i++)
        {
            for($j=0;$j<$len2;$j++)
            {
                if($_POST['name1'][$i]==$_POST['name2'][$j])
                {
                    $len1--;
                    break;
                }
            }
        }
        echo ($len1==0)?"String is Anagram":"not Anagram";
    }
}    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="angram1.php" method="post">
        <label>name1</label>
        <input type="text" name="name1" id="">
        <label>name2</label>
        <input type="text" name="name2" id="">
        <input type="submit" value="submit" name="submit">
    </form>

</body>
</html>