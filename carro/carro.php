<?php
    include 'carro.class.php';

    // Objetos
    $ferrari = new Carro();
    $fusca = new Carro();
    $sandeiro = new Carro();
    $fiesta = new Carro();
    $hb20  = new Carro();


    $ferrari->marca = "Ferrari";
    $ferrari->modelo = "Ferrari";
    $ferrari->portas = 2;
    $ferrari->combustível = "Gasolina";
    $ferrari->capacidade_tanque = "15 Litros";

    $fusca->marca = "Volkswagen";
    $fusca->modelo = "Fusca";
    $fusca->portas = 2;
    $fusca->combustível = "Álcool";
    $fusca->capacidade_tanque = "3 Litros";

    $sandeiro->marca = "Renalt";
    $sandeiro->modelo = "Sandeiro";
    $sandeiro->portas = 4;
    $sandeiro->combustível = "Gasolina";
    $sandeiro->capacidade_tanque = "50 Litros";

    $fiesta->marca = "Ford";
    $fiesta->modelo = "Fiesta";
    $fiesta->portas = 4;
    $fiesta->combustível = "Disel";
    $fiesta->capacidade_tanque = "25 Litros";

    $hb20->marca = "Hyundai";
    $hb20->modelo = "HB20";
    $hb20->portas = 4;
    $hb20->combustível = "Gasolina";
    $hb20->capacidade_tanque = "50 Litros";
    

    $ferrari->imprime();
    $fusca->imprime();
    $sandeiro->imprime();
    $fiesta->imprime();
    $hb20->imprime();
?>