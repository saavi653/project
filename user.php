<?php
include('validation.php');
if(isset($_POST['submit']))
{
    session_start();
    $err=[];
    $err['error'] = validate_name($_POST['fname'],$_POST['lname']);
    $err['error']=validate($_POST['email'],$_POST['password']);
if(!empty($err['error']))
{
    $_SESSION['error']=$err['error'];
    header('location:signup.php');
}
else
{
    if(!empty($_SESSION['error']))
    {
        unset($_SESSION['error']);
    }
    $user_count=isset($_SESSION['user'])?count($_SESSION['user']):0;
    $_POST['id']=$user_count+1;
    $_SESSION['user'][]=$_POST;
    header('location:login.php');

}
}
?>