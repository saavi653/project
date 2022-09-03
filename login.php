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
    <form action="" method="POST">  
        USERNAME<input type="email" name="email"><br><br>
        PASSWORD<input type="password" name="pwd"><br><br>
        <input type="submit" name="submit">
        <?php
        session_start();
        if(isset($_POST['submit']))
            {
                $email=$_POST['email'];
                $pass=$_POST['pwd'];
                foreach($_SESSION['user'] as $key=>$value)
                {
                    if($email==$_SESSION['user'][$key]['email'] && $pass==$_SESSION['user'][$key]['password'])
                    {
                
                        header('location:listing.php');
                    }
                }   
            }   
        ?>
    </form>
</body>
</html>