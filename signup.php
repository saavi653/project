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
<form action="validation.php" method="POST">
    <h1>ENTER YOUR DEATAILS :</h1>
    <table style="border:2px solid black; padding :20px ;">
        <tr>
            <td> FIRSTNAME<input type="textbox" name="fname"/></td>
        </tr>
        <?php
        if(!empty($_SESSION['error']['fname']))
        {
           ?><td> <?php echo $_SESSION['error']['fname'];?></td><?php
        } 
        if(!empty($_SESSION['error']['fname1']))
        {
            ?><td><?php echo $_SESSION['error']['fname1'];
        }
        ?></td>
        <tr>
            <td>LASTNAME<input type="textbox" name="lname"/></td>
        </tr>
        <?php
        if(!empty($_SESSION['error']['lname']))
        {
            ?><td><?php
            echo $_SESSION['error']['lname'];
        }
        ?></td>
        <tr>
            <td>EMAIL<input type="email" name="email"/></td>
        </tr>
        <?php
        if(!empty($_SESSION['error']['email']))
        {
           ?><td><?php echo $_SESSION['error']['email'];
        }
        ?></td>
        <tr>
            <td>PASSWORD <input type="password" name="password"/></td>
        </tr>
        <?php
        if(!empty($_SESSION['error']['password']))
        {
           ?><td><?php echo $_SESSION['error']['password'];
        }
        ?></td>
        <tr>
            <td><input type="submit" name ="submit"/><td>
        </tr>
    </table>
</body>
</html>