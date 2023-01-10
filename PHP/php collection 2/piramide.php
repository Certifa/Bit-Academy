<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>piramide</title>
</head>
<body>
    <table>
        <?php
        for ($i = 0; $i < 10; $i++) {
            echo "<tr>";
            for ($j = 0; $j <= $i; $j++) {
                     echo "<td style='background-color: black; width: 50px; height: 50px;'></td>";
            }
                  echo "</tr>";
        }
                
        ?>
    </table>
</body>
</html>
