<?php
function f1($bill)
{
    $sum=$bill*3.50;
    return $sum;
}
function f2($bill)
{
    $temp=$bill-50;
    $sum=f1(50);
    $temp=$sum+$temp*4.00;
    return $temp;
}
function f3($bill)
{
    $temp=$bill-150;
    $sum=f2(150);
    $temp=$sum+$temp*5.20;
    return $temp;
}
function f4($bill)
{
    $temp=$bill-250;
    $sum=f3(250);
    $temp=$sum+$temp*6.50;
    return $temp;
} 
function electricityBill($bill)
{
    if($bill>=250)
    {
        $sum=f4($bill);
        return $sum;
    }
    elseif($bill<250 && $bill>=150)
    {
        $sum=f3($bill);
        return $sum;
    }
    elseif($bill<150 && $bill>=50)
    {
        $sum=f2($bill);
        return $sum;
    }
    else
    {
        $sum=f1($bill);
        return $sum;
    } 
}  
$total=electricityBill(55);
echo "Total Electricty bill is ".$total;
?>