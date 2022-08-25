<?php
function blackBlock()
{
    ?>
    <!DOCTYPE html>
        <html lang="en">
        <head>
            <link rel="stylesheet" href="chessboard.css">
        </head>
        <body>
            <table width="12%" height="150vh">
                <td class="black">
                </td> 
            </table>
            </body>
        </html> 
    <?php
}
?>
<?php
function whiteBlock()
{
    ?>
       <table width="12%" height="150vh">
            <td class="white">
            </td> 
        </table>  
    <?php
}
?>
<?php
$start=0;
$length=8;
for($i=0;$i<8;$i++)
{
    for($j=$start;$j<$length;$j++)
    {
        if($j%2==0)
        {
            blackBlock();
        }
        else
        {
            whiteBlock();
        }
    }
    $start++;
    $length++;
}
?>


