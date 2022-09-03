<?php
session_start();
global $id;
$id=$_GET['id'];
foreach($_SESSION['user'] as $key=>$value)
{
    if($id==$_SESSION['user'][$key]['id'])
    {
        unset($_SESSION['user'][$key]);
        header('location:listing.php');
    }
}
?>