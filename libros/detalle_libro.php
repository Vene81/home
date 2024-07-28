<?php
include ('biblioteca.php');
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles.css"> <!--enlace a la página de estilos-->
    <title>Detalles Libros</title>
</head>
<body>
    <h1>Detalle del Libro</h1>
    <div class="libro">
        <ul>
            <li>Id : <?= $id= $_GET['id'];?></li><br>
            <li>Título : <?= $titulo= $_GET['titulo'];?></li><br>
            <li>Autor : <?= $autor= $_GET['autor'];?></li><br>
            <li>Género : <?= $genero= $_GET['genero'];?></li><br>
        </ul>
    </div>
    
    <?php 
        $datos_libro = $biblioteca[$id]; 
    ?>

    <ul>
        <li><a href="/curso_php/ejercicios/home2/libros/index.php">Ir a Listado Libros</a></li>
        <li><a href="/curso_php/ejercicios/home2/index.php">Ir a Inicio</a></li>
    </ul>
    
    
</body>
<footer>
    <?php include '../piePagina.php'; ?>
</footer>
</html>