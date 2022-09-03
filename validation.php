
<?php
session_start();
if(isset($_POST['submit']))
{
    $error=[];
    if(isset($_POST['fname'])&& empty($_POST['fname']))
    {
        $error['fname']="this field is required <br>";
        
    }
    if(strlen($_POST['fname'])<=5)
        {
            $error['fname1']="name should contain more than 5 characters";
        }
    if(isset($_POST['lname'])&& empty($_POST['lname']))
    {
        $error['lname']="this field is required";
    }   
    if(isset($_POST['email'])&& empty($_POST['email']))
    {
        $error['email']="this field is required";
    }
    if(isset($_POST['password'])&& empty($_POST['password']))
    {
        $error['password']="this field is required";
    }
}
if(!empty($error))
{
    $_SESSION['error']=$error;
    header('location:signup.php');
   
}
else
{
    if(!empty($_SESSION['error']))
    {
        session_unset($_SESSION['error']);
    }
    $user_count=isset($_SESSION['user'])?count($_SESSION['user']):0;
    $_POST['id']=$user_count+1;
    $_SESSION['user'][]=$_POST;
    header('location:login.php');

}
?>