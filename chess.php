<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td {
            padding: 40px;

        }
    </style>
</head>
<body>
    <table>
        <?php  
            for($i=1;$i<9;$i++)
            {  
                if($i%2==0)
                {
        ?>
        <tr>
            <?php
                for($j=0;$j<4;$j++)
                {
            ?>
            <td style="background-color:black;"></td>
            <td style="background-color:white;"> </td>
            <?php
                }
            ?>
        </tr>
        <?php            
                }
                else
                {
        ?>
        <tr>
            <?php
                for($j=0;$j<4;$j++)
                {
            ?>
            <td style="background-color:white;"></td>
            <td style="background-color:black;"> </td>
            <?php
                }
            ?>
        </tr>
        <?php
                }
            }   
        ?>

    </table>
</body>
</html>