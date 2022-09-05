<?php
global $error;
$error=[];
function validate_name($fname,$lname)
{
    global $error;
    if(empty($fname))
    {
        $error['fname']="this field is required <br>";
        
    }
    if(strlen($fname)<=5)
        {
            $error['fname']="name should contain more than 5 characters";
        }
     
    if(empty($lname))
    {
        $error['lname']="this field is required <br>";
    }    
    return $error;

}
function validate($email,$password)
{  
    global $error;
    if(empty($email))
    {
         $error['email']="this field is required";
    }
    if(empty($password))
    {
        $error['password']="this field is required";
    }
    return $error;
}
