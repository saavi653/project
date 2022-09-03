<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
             background-color:lightpink;
             text-align :left ;
        }
       
    </style>    
</head>
<body>
<?php
    session_start();
    if(isset($_GET['id']))
    {
        $id=$_GET['id'];
        $user=[];
        foreach($_SESSION['user'] as $key=>$value)
        {
            if($id==$_SESSION['user'][$key]['id'])
            {
                $user=$_SESSION['user'][$key];
            }
        }
    }
?>
<form action="" method="POST">
        FIRSTNAME<input type="textbox" name="fname" value=<?php echo $user['fname'] ?> ><br><br>
        LASTNAME<input type="textbox" name="lname"  value=<?php echo $user['lname'] ?>><br><br>
        EMAIL<input type="email" name="email" value=<?php echo $user['email'] ?>><br><br>
        PASSWORD <input type="password" name="password" value=<?php echo $user['password'] ?>><br><br>
        <input type="submit" name ="submit"/>
     <?php
        if(isset($_POST['submit']))
        {
            foreach($_SESSION['user'] as $key=>$value)
            {
                if($id==$_SESSION['user'][$key]['id'])
                {
                     $_SESSION['user'][$key]=$_POST;
                    $_SESSION['user'][$key]['id']=$id;
                    header('location:listing.php');
                }
            }
        }  
    ?> 
</form>    
</body>
</html>
  