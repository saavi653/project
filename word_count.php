<?php
$str="I like to learn PHP";
$newstr=str_replace(" "," @ ",$str);
$arr=explode(" ",$newstr);
$count=1;
 for($i=0;$i<count($arr);$i++)
 {
    if($arr[$i]=="@")
    {
        $count++;
    }
 }
echo "No. of words :"."$count";
?>
 