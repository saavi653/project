<?php
function unique($value)
{ 
    print_r($value);
    echo"<br> array of distint elements : <br>";
    for($i=0;$i<count($value);$i++)
    {
        for($j=$i+1;$j<count($value);$j++)
        {   
            if($value[$i]==$value[$j])
            {
                unset($value[$j]);    
            }    
        }
        $value=array_values($value);
    }
     return $value;
}
$arr=[1,2,3,4,5,6,7,8,9,5,6,7,8,9];
print_r(unique($arr));
?>