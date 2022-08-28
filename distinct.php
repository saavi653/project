<?php
function distinct($arr)
{
    for($i=0;$i<count($arr);$i++)
    {
        for($j=$i+1;$j<count($arr);$j++)
        {
            if($arr[$i]==$arr[$j])
            {
                array_splice($arr,$j,1);
                $j--;
            }
        
        }
    }
    return $arr ;
}    
$arr=[1,5,2,3,4,1,2,1,3,3,4,1];
echo"array of distinct elements <br>:";
print_r(distinct($arr));
?>