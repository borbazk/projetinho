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
        $n = array(1,2,3,4,5,6,7); 
        print_r($n);

        echo"<br>";

        $c = range(5,20,2);
        foreach($c as $v) {
            echo "$v ";
        }

        echo"<br>";

        $v = array( 0=>5,
                    1=>9,
                    2=>8,
                    3=>7); 
        print_r($v);

        echo"<br>";

        $v = array("nome"=>"Ana",
                     "idade"=>23,
                     "peso"=>78.5); 
        foreach($v as $k => $c){
            echo" O campo $k possui o conteudo $c<br>"; 
        }
    ?>
    </pre>
</div>
</body>
</html>