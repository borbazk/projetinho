<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <form action="18tabuada.php" method="get">
            <select name="num">
                <?php
                    for ($c=1; $c <= 35
                    ; $c++) {
                        echo"<option>$c</option>";
                    }
                ?>
            </select>
            <input type="submit" value="Tabuada"?>
        </form>
    </div>
</body>

</html>