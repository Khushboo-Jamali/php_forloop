<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table {
        margin-top: 70px;
        text-align: center;
        background-color: pink;

        /* border: 2px solid black; */
    }


    td {
        width: 70px;
        font-size: 20px;
        font-weight: 700;
        height: 70px;
        border: 2px solid black;
    }
</style>

<body>
    <table border="6px" align="center">
        <?php
        for ($row = 1; $row <= 5; $row++) {
            echo "<tr>";
            for ($col = 1; $col <= 5; $col++) {
                echo "<td width='70px' height='70px' border='2px '> " . $row * $col . "</td>";
            }
            echo "</tr>";
        }


        ?>
    </table>
</body>

</html>