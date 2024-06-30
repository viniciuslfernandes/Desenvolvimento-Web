<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        
        $array = ['x', 'a', 'd', 'b'];

        //verifica se a variavel passada é um array
        if(is_array($array)){
            echo 'é um array';
        }else{
            echo 'não é um array';
        }
        echo '<br><hr>';
        
        //retorna todas as chaves de um array;
        print_r($array);
        echo '<br>';
        $chaves_array = array_keys($array);
        print_r($chaves_array);

        echo '<br><hr>';

        //ordenar o array, funcao 'sort'
        print_r($array);
        echo '<br>';
        sort($array);
        print_r($array);

        echo '<br><hr>';

        //ordena preservando os indices originais
        $array = ['x', 'a', 'd', 'b'];
        print_r($array);
        echo '<br>';
        asort($array);
        print_r($array);

        echo '<br><hr>';

        //conta a quantidade de elemtnos dentro do array;
        $array = ['x', 'a', 'd', 'b'];
        print_r($array);
        echo '<br>';
        echo count($array);

        echo '<br><hr>';

        //fundir varios arrays em um so
        $array =  ['a', 'b'];
        $array2 = array('c', 'd');
        
        $novo_array = array_merge($array, $array2);
        print_r($novo_array);
        
        echo '<br><hr>';
        
        //divide uma string baseada em um delimitador
        $string = '26/01/2018';
        $array_retorno = explode('/', $string);
        print_r($array_retorno);
        
        echo '<br><hr>';

        //junta elementos de um array em uma string
        $array = ['a', 'b', 'c', 'd'];
        $string_retorno = implode('/', $array);
        echo $string_retorno;
    ?>

</body>
</html>