<?php
session_start();
if(isset($_GET['id']))
{
    global $id;
    $id=$_GET['id'];
    foreach($_SESSION['user'] as $key=>$value)
    {
        if($id==$value['id'])
        {
            unset($_SESSION['user'][$key]);
            header('location:listing.php');
        }
    }
}
?>