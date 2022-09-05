<?php
    session_start();
?>
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
<form action="user.php" method="POST">
    <h1>ENTER YOUR DEATAILS :</h1>
        <label >FIRSTNAME</label>
            <input type="textbox" name="fname"/><br>
            <div>
            <?php
                if(!empty($_SESSION['error']))
                {
                    if(isset($_SESSION['error']['fname']))
                    {
                        echo $_SESSION['error']['fname'];
                    }
                }
            ?>
            </div>
            <label>LASTNAME</label>
            <input type="textbox" name="lname"/><br>
            <?php
                if(!empty($_SESSION['error']))
                {
                    if(isset($_SESSION['error']['lname']))
                    {
                        echo $_SESSION['error']['lname'];
                    }
                }
            ?>
            <label>EMAIL</label>
            <input type="email" name="email"/><br>
            <?php
                if(!empty($_SESSION['error']))
                {
                    if(isset($_SESSION['error']['email']))
                    {
                        echo $_SESSION['error']['email']."<br>";
                    }
                }
            ?>
            <label>PASSWORD</label> 
            <input type="password" name="password"/><br>
            <?php
                if(!empty($_SESSION['error']))
                {
                    if(isset($_SESSION['error']['password']))
                    {
                        echo $_SESSION['error']['password']."<br>";
                    }
                }
                unset($_SESSION['error']);
            ?>
            <input type="submit" name ="submit" value="submit"/>
</body>
</html>