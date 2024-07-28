<?php
 $bolas_bombo= $_GET['bolas-bombo'];
 $bolas_premio= $_GET['bolas-premio'];
 $texto= $_GET['texto'];

function loto_internacional($bolas_bombo, $bolas_premio, $texto){
    //lleno el bombo de bolas
    $bombo= [];
    for($i=1; $i<=$bolas_bombo; $i++){
        $bombo[]= $i;
    };
    //desordenamos las bolas del bombo
    shuffle($bombo);
    //cogemos las premiadas
    $premiadas= [];
    for($i=0; $i<$bolas_premio; $i++){
        $premiadas[]= $bombo[$i];
    };
    //ordenos las premiadas
    sort($premiadas);

    echo $texto;

    //rrecorro el array foreach y guardo todas las bolas en la variable $bolas
    foreach($premiadas as $bola){
    echo "  $bola ";
    }
}
    //loto_internacional(49, 6, "Lotería España :  ");
    //loto_internacional(49, 6, "Lotería Alemania : ");
    //loto_internacional(49, 5, "Lotería Francia : ");
    //loto_internacional(90, 6, "Lotería Italia : ");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles.css"> <!--enlace a la página de estilos-->
    <title>Generador de Loto</title>
</head>
<body>
    <h1>Los números premiados son:</h1>
    <div class= "loto">
        <ul>
            <li>
        <?php loto_internacional($bolas_bombo, $bolas_premio, $texto) ?><br><br>
            </li>
        </ul>
    <ul>
        <li><a href="/curso_php/ejercicios/home2/loto/menu.php">Ir a Menu Loto</a>&nbsp;&nbsp;</li>
        <li><a href="/curso_php/ejercicios/home2/index.php">Ir a Inicio</a>&nbsp;&nbsp;</li>
    </ul>
    </div>
    
</body>
<footer>
    <?php include '../piePagina.php'; ?>
</footer>
</html>
