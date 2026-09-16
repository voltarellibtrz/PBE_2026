<?php
    $nome = $_POST['nome'];
    $salario_bruto = $_POST['salario_bruto'] ?? 0;
    $horas_extras = $_POST['horas_extras'];
    $beneficios = $_POST['beneficios'];
    $desconto = $_POST['descontos'];

    $valor_hora = $salario / 160;
    $valor_hora_extra = $valor_hora * 1.5;
    // valor que ganhei por fazer horas extras
    $valor_total_horas_extras = $horas_extras * $valor_hora_extra;

    // o valor total bruto sem nenhum desconto
    $salario_bruto_sem_descontos = $salario_bruto + $valor_total_horas_extras + $beneficios;

    if($salario_bruto_sem_descontos >= 5000){
        $imposto = $salario_bruto_sem_descontos * 10/100;
    }elseif($salario_bruto_sem_descontos >= 3000){
        $imposto = $salario_bruto_sem_descontos * 5/100;
    }else{
        $imposto = 0;
    }

    $salario_liquido = $salario_bruto_sem_descontos - $imposto - $desconto;

    if($salario_liquido > 4000){
        $remuneracao = "Bem remunerado";
    }else{
        $remuneracao = "Médio";
    }

    echo "Nome: $nome <br>";
    echo "Salário Bruto: R$ $salario_bruto <br>";
    echo "Salário Bruto + Total de horas extras + Beneficios R$ $salario_bruto_sem_descontos <br>";
    echo "Desconto: $desconto <br>";
    echo "Imposto Aplicado R$ $imposto <br>";
    echo "Salário Líquido R$ $salario_liquido";
    echo "Status: $remuneracao";
?>