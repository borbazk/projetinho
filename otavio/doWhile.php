<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $c = 1;
    do {
        echo "$c ";
        $c++;
    } while($c<=10);
    $c = 10;
    
    do {
        echo "$c ";
        $c--;
    } while($c>=1);
    ?>
</body>
</html>