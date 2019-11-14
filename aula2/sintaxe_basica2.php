<?php
    //-------------------- escopo de variaveis
    $variavel = 10;
    if(10 > 5) {
        $variavel2 = 5;
    }
    function teste($valor) {
        $variavel3 = $valor;
        echo "dentro da função ".$variavel."<br>";  // nao vai funcionar
        echo "dentro da função ".$variavel2."<br>"; // nao vai funcionar
        echo "dentro da função ".$variavel3."<br>"; // funciona!!
    }
    teste(6);
    echo $variavel."<br>";   // funciona!
    echo $variavel2."<br>";  // funciona!
    echo $variavel3."<br>";  // nao vai funcionar
    echo "<br><br><br><a href='sintaxe_basica.php'><< Página 1 </a>";
