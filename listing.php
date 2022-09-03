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
             font-size :20px;
        }
        table, td {
            border:2px solid black;
            padding :5px;
            margin-left:30%;
        }
        a{
            color: black;
        }
        th{
            
            padding:10px;
            
        }
        tr:nth-child(even){
                background-color:white;
            }
        
    </style>
</head>
<body>
    <table>
        <th >FIRST NAME</th>
        <th>LAST NAME</th>
        <th>EMAIL</th>
    <?php
    session_start();
    foreach($_SESSION['user'] as $key=>$value)
    {
        echo "<tr>";
    ?>
            <td><?php echo $value['fname'];?></td>
            <td><?php echo $value['lname'];?></td>
            <td><?php echo $value['email'];?></td>
            <td style="background-color:green";> <?php echo "<a href=\"edit.php?id=".$value['id']."\">edit</a>"?> </td>
            <td style=" background-color:red";><?php echo "<a href=\"delete.php?id=".$value['id']."\">delete</a>"?></td>
    <?php
        echo "</tr>";
    }
    ?> 
    </table>
    <div style="text-align:center">
    <?php
    echo "<b><a href=\"login.php\"> LOGOUT </a></b>";
    ?>
    </div>
</body>
</html>