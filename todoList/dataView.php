<link rel="stylesheet" href="css/style.css">
<div class="view">
    <h2>
        <u>Data Description</u>
    </h2>
    <?php
    session_start();
    include 'dataValidate.php';
    foreach($_SESSION['List'] as $value1)
    {
        if($_GET['id']==$value1['id'])
        {   
            echo "<pre>";
            echo $value1['description'];
            echo "</pre>";
        }
    }
    ?>
    <div class="ViewButtons">
        <?php
        echo "<a href=\"dataList.php\"><button>Back</button></a>";
        ?>
    </div>
</div>