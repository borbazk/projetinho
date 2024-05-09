<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <pre>
    <?php
        $m = array ( array(6,4),
                     array(4,9),
                     array(3,2));
        print_r($m);

        echo"<br>";

        $v = array("A", "J", "M", "X", "K");
        array_unshift($v, "U");
        print_r($v);

        echo"<br>";

        $v = array("A", "J", "M", "X", "K");
        array_shift($v);
        print_r($v);

        echo"<br>";

        $v = array("A", "J", "M", "X", "K");
        array_push($v, "U");
        print_r($v);

        echo"<br>";

        $v = array("A", "J", "M", "X", "K");
        array_pop($v);
        print_r($v);

        echo"<br>";

        $v = array("A", "J", "B", "X", "K");
        rsort($v);
        print_r($v);

        echo"<br>";

        $v = array("A", "J", "B", "X", "K");
        sort($v);
        print_r($v);

        echo"<br>";

        $v = array("A", "J", "B", "X", "K");
        asort($v);
        print_r($v);

        echo"<br>";

        $v = array("A", "J", "B", "X", "K");
        ksort($v);
        print_r($v);

        echo"<br>";

        $v = array("A", "J", "B", "X", "K");
        krsort($v);
        print_r($v);
    ?>
    </pre>
</div>    
</body>
</html>