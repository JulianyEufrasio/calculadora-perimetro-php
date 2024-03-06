<?php

class CalculadoraPerimetro
{

    public function calcularPerimetroRetangulo($baseret, $alturaret)
    {
        return 2 * ($baseret + $alturaret);
    }

    public function calcularPerimetroQuadrado($alturaqua)
    {
        return 4 * $alturaqua;
    }

    public function calcularPerimetroTrapezio($ladoatrap, $ladobtrap, $ladoctrap, $basebtrap)
    {
        return $ladoatrap + $ladobtrap + $ladoctrap + $basebtrap;
    }

    public function calcularPerimetroParalelogramo($baseparalelo, $ladoparalelo)
    {
        return 2 * ($baseparalelo + $ladoparalelo);
    }
}


$calculadora = new CalculadoraPerimetro();
if (isset($_POST['alturaret'])) {
    echo "<script>alert('Perímetro do retângulo: " . $calculadora->calcularPerimetroRetangulo($_POST['baseret'], $_POST['alturaret']) . "');";
    echo "window.location.href = 'index.php';</script>";
    exit(); 
}

if (isset($_POST['alturaqua'])) {
    echo "<script>alert('Perímetro do Quadrado: " . $calculadora->calcularPerimetroQuadrado($_POST['alturaqua']) . "');";
    echo "window.location.href = 'index.php';</script>";
    exit(); 
}

if (isset($_POST['ladoatrap'])) {
    echo "<script>alert('Perímetro do trapézio: " . $calculadora->calcularPerimetroTrapezio($_POST['ladoatrap'], $_POST['ladobtrap'], $_POST['ladoctrap'], $_POST['basebtrap']) . "');";
    echo "window.location.href = 'index.php';</script>";
    exit(); 
}

if (isset($_POST['baseparalelo'])) {
    echo "<script>alert('Perímetro do Paralelogramo: " . $calculadora->calcularPerimetroParalelogramo($_POST['baseparalelo'], $_POST['ladoparalelo']) . "');";
    echo "window.location.href = 'index.php';</script>";
    exit(); 
}

