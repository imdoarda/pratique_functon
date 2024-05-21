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
       function triplo($numero){

        $x = $numero * 3;
        return $x;
       }

       //chamada de função
       $valor = 5;
       echo "O triplo de $valor é " . triplo($valor);

    ?>

</body>
</html>