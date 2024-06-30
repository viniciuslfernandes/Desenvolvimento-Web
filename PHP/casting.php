<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
        
        //gettype() => retorna o tipo da variavel
        $valor = 10;
        echo gettype($valor);


        $valor2 = (float)$valor;
        echo '<br>';
        echo gettype($valor2);
        //tambem pode usar casting (string) (int) (bool)
    ?>

   

</body>
</html>