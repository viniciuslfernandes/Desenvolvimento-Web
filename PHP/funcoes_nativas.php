<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
        
        $texto = 'Curso Completo de PHP';

        //trnaformar caracteres em minusculo
        echo $texto . '<br>';
        echo strtolower($texto);
        echo '<hr>';

        //transforma todos em caixa alta
        echo $texto . '<br>';
        echo strtoupper($texto);
        echo '<hr>';
        
        //transforma o primeiro caracter em caixa da string em maiusculo
        echo $texto . '<br>';
        echo ucfirst($texto);
        echo '<hr>';
        
        //conta a quantidade de caracteres
        echo strlen($texto);
        echo '<hr>';

        //substitui uma cadeia de caracter por uma outra
        echo $texto . '<br>';
        echo str_replace('Completo', 'completo', $texto);
        echo '<hr>';
    
        //retorna parte da string
        echo $texto . '<br>';
        echo substr($texto, 0, 5);
        echo '<hr>';

        //FUNCOES NATIVAS PARA TAREFAS MATEMATICAS
        $numero = 10.25;

        //arredonda para cima
        echo $numero. '<br>';
        echo ceil($numero);
        echo '<hr>';

        //arredonda para baixo
        echo $numero. '<br>';
        echo floor($numero);
        echo '<hr>';

        //arredonda com base nas casas decimais
        echo $numero. '<br>';
        echo round($numero);
        echo '<hr>';

        //gera numeros aleatorios
        echo rand(0,10);
        echo '<hr>';
        
        //retorna raiz quadrada
        $numero = 9;
        echo $numero;
        echo sqrt($numero);
        echo '<hr>';


        //FUNCOES PARA MANIPULAR DATAS

        //recuperacao da data atual/ data corrente
        echo 'dia atual: '.date('D'). '<br> <hr>'; //D dia da semana ou d dia do mes

        //fazendo tudo junto
        echo date('d/m/Y H:i');
        echo '<br> <hr>';
       
        //pra ajustar o horario precisa saber o timezone
        echo date_default_timezone_get();
        echo '<br> <hr>';
        //para setar o timezone
        date_default_timezone_set('America/Sao_Paulo');
        echo date_default_timezone_get();
        echo '<br>';
        echo date('d/m/Y H:i');

        //calcular diferenca entre datas
        $data_inicial = '2018-04-24';
        $data_final = '2018-05-24';
        //timestamp
        $time_inicial = strtotime(($data_inicial));//espera a data no padrao americano
        $time_final = strtotime($data_final);


        $diferenca_times = $time_final - $time_inicial;
        echo '<br>';
        echo 'A diferenca de segundos entre a data inicial e final é: '.$diferenca_times;

        $segundos_dia = 24*60*60;
        echo '<br>';
        echo 'a diferença de dias entre as datas sao: '.($diferenca_times/$segundos_dia);

    ?>

   

</body>
</html>