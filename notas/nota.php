<?php
    include 'nota.class.php';


    $aluno1 = new Aluno();
    $aluno2 = new Aluno();
    $aluno3 = new Aluno();
    $aluno4 = new Aluno();
    $aluno5  = new Aluno();


    $aluno1->matricula = "123456";
    $aluno1->nome = "Mileny";
    $aluno1->setN1(2);
    $aluno1->setN2(6);
    $aluno1->setT1(8);
    $aluno1->Media();

    $aluno2->matricula = "654321";
    $aluno2->nome = "Claudiney";
    $aluno2->setN1(8);
    $aluno2->setN2(9);
    $aluno2->setT1(5);
    $aluno2->Media();

    $aluno3->matricula = "741852";
    $aluno3->nome = "Valéria";
    $aluno3->setN1(4);
    $aluno3->setN2(9);
    $aluno3->setT1(10);
    $aluno3->Media();

    $aluno4->matricula = "963852";
    $aluno4->nome = "Maria";
    $aluno4->setN1(4);
    $aluno4->setN2(1);
    $aluno4->setT1(2);
    $aluno4->Media();

    $aluno5->matricula = "124796";
    $aluno5->nome = "Elenice";
    $aluno5->setN1(6);
    $aluno5->setN2(9);
    $aluno5->setT1(5);
    $aluno5->Media();   

    $aluno1->imprime();
    $aluno2->imprime();
    $aluno3->imprime();
    $aluno4->imprime();
    $aluno5->imprime();
?>