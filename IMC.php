<?php
    $peso = 75;
    $altura = 1.90;

    $IMC = $peso / ($altura * $altura);

    echo "IMC = ".number_format($IMC,1,'.',',')."</br>";

    if($IMC < 18.5){
        echo " Abaixo do peso! ";

    }elseif($IMC < 24.9){
        echo " Peso normal! ";

    }elseif($IMC < 29.9){
        echo " Sobrepeso! ";

    }elseif($IMC < 34.9){
        echo " Obesidade grau 1! ";

    }elseif($IMC < 39.9){
        echo " Obesidade grau 2!";

    }elseif($IMC > 40){
        echo "Obesidade grau 3!";
    }
?>