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
        $a = isset($_GET["ano"])?$_GET["ano"]:1900;
        $i = date("Y") - $a;
        echo "Voce nasceu em $a e tera $i anos. <br/>";
        if ($i < 16) {
            $tipovoto = "nao vota";
        }
        elseif (($i >= 16 && $i < 18) || ($i>65 )) {
                $tipovoto = "voto opicional";
            }
            else {
                $tipovoto = "voto obrigatorio";
            }
        echo "para essa idade, $tipovoto";
    ?>
</div>
</body>
</html>