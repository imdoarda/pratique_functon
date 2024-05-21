<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>atividade função</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href=''>
</head>
<body>
     <?php
       // Bloco de declaração de função

       function soma_valores($valor1, $valor2, $valor3){
        $soma = $valor1 + $valor2 + $valor3;
        echo "A soma dos valores $valor1, $valor2 e $valor3 é: ";
        echo $soma;
       }

       //Variáveis que carregam valores para a aplicação
       $n1 = 10;
       $n2 = 22;
       $n3 = 35;

       //Execução da função
       soma_valores($n1, $n2, $n3);
    ?>

</body>
</html>