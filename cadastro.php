<?php 
    $name = $_GET['name'];
    $alt = $_GET['alt'];
    $peso = $_GET['peso'];

    $imc = $peso / ($alt * $alt);

    if ($imc < 18.5) {
        echo "Olá, ".$name;
        echo "<br>De acordo com o seu IMC, você está abaixo do peso!";
    }   elseif ($imc >= 18.5 && $imc <= 25){
        echo "Olá, ".$name;
        echo "<br>De acordo com o seu IMC, você está com o peso normal!";
    }   elseif ($imc >= 25 && $imc <= 30) {
        echo "Olá, ".$name;
        echo "<br>De acordo com o seu IMC, você está com excesso de peso, cuidado!";
    }   elseif ($imc > 30) {
        echo "Olá, ".$name;
        echo "<br>De acordo com o seu IMC, você está com obesidade, procure por um médico!";
    } 
?>