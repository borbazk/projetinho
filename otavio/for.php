<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for($c =1;$c<=10;$c++) {
        echo "$c ";
    }
    echo "<br/> ";
    for ($c =10;$c>=1;$c--) {
        echo "$c ";
    }
    echo "<br/> ";
    for($c =5;$c<=50;$c+=5) {
        echo "$c ";
    }
    echo "<br/> ";
    for($c =20;$c>=2;$c-=2) {
        echo "$c ";
    }
    ?>
</body>
</html