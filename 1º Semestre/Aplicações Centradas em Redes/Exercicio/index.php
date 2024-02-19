<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h3>Exercicio 1</h3>
    <?php
        $x = 10;
        $texto = "O numero é: " . $x;
        echo "<p>$texto<br></p>";

        

        echo "<h3>Exercicio 2 <br></h3>";
        $string = "Testing php";
        $string2 = "Finishing test!";

        $length = strlen($string);
        echo "<p>Tamanho da string: $length";

        echo "<h3>Exercicio 3 <br></h3>";
        
        $cmp = strcmp($string, $string2);
        
        if ($cmp == 0) 
            print "As variaveis são iguais!";
        else print "As variaveis não são iguais!";

        echo "<h3>Exercicio 4 <br></h3>";

        $revertedText = strrev($string);

        echo "<p>$revertedText</p>";

        echo "<h3>Exercicio 5 <br></h3>";

        $trimText = trim($string, "Tp");

        echo "<p>$trimText</p>";

        echo "<h3>Exercicio 6 <br></h3>";

        $fechaAtual = date("d/m/Y");

        $dia = date("l");
        function weekend($dia) {
            if ($dia == 'Saturday' || $dia == 'Sunday') {
                echo 'Boa!';
            } else echo 'Nunca mais é fim de semana!';
        }

        weekend($dia);

        echo "<h3>Exercicio 7 <br></h3>";

        $array = [5,3,8,10,1,2,9,23,6];
        $arrayLength = count($array);

        sort($array);

        $arrayString = "[";

        for ($i=0; $i < $arrayLength; $i++) { 
            $arrayString .= $array[$i];
            if ($i == $arrayLength -1)
                $arrayString .= "]";
            else $arrayString .= ", ";
        }

        echo $arrayString;


        
    ?>
</body>
</html>