<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva'); //ou $lista_frutas = ['Banana', 'Maçã']
        $lista_frutas[] = 'Abacaxi';
        var_dump($lista_frutas);
        echo '<br>';
        print_r($lista_frutas);

        //multidimensional 

        $lista_coisas = [];
        $lista_coisas['frutas'] = array('Banana', 'Maçã');
        $lista_coisas['pessoas'] = ['João', 'Maria'];

        echo '<br>';
        print_r($lista_coisas);
        echo '<br>';
        echo '<hr>';


        //metodo de pesquisa -> in_array retorna true or false, já o array_search retorna o indice do valor pesquisado
        //utilizando o array lista_frutas
        echo (in_array('Maçã', $lista_frutas)); //se for 1 é pq encontrou, se for vazio é pq nao encontrou
        echo (in_array('Laranja', $lista_frutas)); 
        echo '<br>';
        echo array_search('Uva', $lista_frutas);//quando encontra retorna o indice e quando não encontra retorna null

    ?>

</body>
</html>