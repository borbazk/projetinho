<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <?php
        function teste ($x) {
            $x  += 2;
            echo "O valor x e $x";
        }

        $a = 3; 
        teste($a);
        echo "<p>O valor de A e $a</p> "
    ?>
</div>
</body>
</html>