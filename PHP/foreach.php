<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
        
        $elementos = ['Geladeira', 'Fogão', 'Mesa'];
        foreach($elementos as $i){
            echo $i . '<br>';
        }

        echo "<br><hr>";
        //outras possibilidades

        foreach($elementos as $indice => $elemento){
            echo 'indice '.$indice.': '.$elemento.'<br>';
        }

    ?>

   

</body>
</html>