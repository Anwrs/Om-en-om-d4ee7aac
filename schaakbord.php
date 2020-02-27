<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table cellspacing="0" style="border:1px solid black;" name="checkboard">
    <?php
    for($i = 0; $i < 8; $i++) {
        echo "<tr>";
        for($j = 0; $j < 8; $j++) {
            $t = $j + $i;
            if($t % 2 == 0) {
                echo "<td width=70px height=70px bgcolor=#FFFFFF></td>";
            } else {
                echo "<td width=70px height=70px bgcolor=#000000></td>";
            }
        }
        echo "</tr>";
    }
    ?>
    </table>
</body>
</html>
