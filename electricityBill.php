<?php
function electricityBill($bill)
{
    $sum=0;
    if($bill>250)
    {
        $sum=$bill*6.50;
        return $sum;
    }
    elseif($bill<=250 && $bill>150)
    {
        $sum=$bill*5.20;
        return $sum;
    }
    elseif($bill<=150 && $bill>50)
    {
        $sum=$bill*4.00;
        return $sum;
    }
    else
    {
        $sum=$bill*3.50;
        return $sum;
    }   
}
$total=electricityBill(166);
echo "the total Electricity Bill is ".$total;
?>