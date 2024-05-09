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
        function soma ($a, $b) {
            $s = $a + $b;
            return $s;
        }

        $s = 3;
        $y = 4; 
        $r = soma($s, $y); 
        echo "a soma entre $s e $y e igaual a $r";
    ?>
</div>
</body>
</html>