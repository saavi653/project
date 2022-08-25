<?php
$temp=0;
$unit=350;
if($unit<50)
{
    $money=$unit*3.50;
    echo "$money";
    exit();
}
if($unit > 50 && $unit <150 )
{
    $temp=$unit-50;
    $money1=50*3.50;
    $money2=$temp*4.00;
    $money=$money1+$money2;
    echo "$money";
    exit();
}
if($unit > 150 && $unit < 250)
{
    $temp=$unit-150;
    $money1=50*3.50;
    $money2=100*4.00;
    $money3=$temp*5.20;
    $money=$money1+$money2+$money3;
    echo "$money" ;
    exit();
}
if($unit > 250)
{
    $temp=$unit-250;
    $money1=50*3.50;
    $money2=100*4.00;
    $money3=$temp*5.20;
    $money4=$temp*6.50;
    $money=$money1+$money2+$money3+$money4;
    echo "$money" ;
    exit();
}
?>