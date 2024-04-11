<?php
    /* 
        FUNÇÕES 
        NÃO PRECISA DEFINIR VARIÁVEIS DE INÍCIO E NEM TIPO

    */
    function soma($n1, $n2){

        $total = $n1 + $n2;
      
        return "A soma dos valores é = $total <br>";
      
      }

    function subtracao($n1, $n2){

        $total = $n1 - $n2;

        return "A diferença dos valores é = $total <br>";
    }

    function multiplicacao($n1, $n2){

        $total = $n1 * $n2;

        return "O produto dos valores é = $total <br>";
    }

    function divisao($n1, $n2){

        $total = $n1 / $n2;

        return "A divisão dos valores é = $total <br>";
    }

    echo soma(10, 10);
    echo subtracao(10, 10);
    echo multiplicacao(10, 10);
    echo divisao(10, 10);
?>