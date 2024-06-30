<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        
        $funcionario1 = null;
        $funcionario2 = '';

        //valores null
        if(is_null($funcionario1)){
            echo 'Sim, a variavel é null';
        }else{
            echo 'Não, a variavel não é null';
        }
        echo '<br>';
        if(is_null($funcionario2)){
            echo 'Sim, a variavel é null';
        }else{
            echo 'Não, a variavel não é null';
        }


        echo '<br><hr>';


        //valores vazios
        if(empty($funcionario1)){
            echo 'Sim, a variavel esta vazia';
        }else{
            echo 'Não, a variavel não esta vazia';
        }
        echo '<br>';
        if(empty($funcionario2)){
            echo 'Sim, a variavel esta vazia';
        }else{
            echo 'Não, a variavel não esta vazia';
        }

    ?>

</body>
</html>