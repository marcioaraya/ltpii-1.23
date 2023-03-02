<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Televisão </h1>
    <?php
        include_once("televisao.class.php");
        $tv = new Televisao();
        
        echo '<hr>';
            var_dump($tv);
        echo '<hr>';
        echo 'Vamos ligar a TV<br>';
        echo '<hr>';
        $tv->ligaDesliga();
        var_dump($tv);
        echo '<hr>';
        echo 'Vamos aumentar o canal<br>';
        $tv->aumentaCanal();
        echo "o canal agora é:".$tv->mostraCanal()."<br>";
        echo '<hr>';
        echo 'Vamos diminuir o volume<br>';
        $tv->diminuiVolume();
        echo "o volume agora é:".$tv->mostraVolume()."<br>";
        echo '<hr>';
        
    ?>
</body>
</html>