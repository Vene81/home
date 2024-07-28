<?php
include ('biblioteca.php');

//hago un foreach para recorrer todo el array
foreach($biblioteca as $id => $datos_libros){
};


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles.css"> <!--enlace a la página de estilos-->
    <title>Listado de Libros</title>
</head>
<body>
    <h1>Listado de Libros</h1>
    
    <!--Creación de la tabla para listado de libros-->
    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Género</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($biblioteca as $id => $datos_libros) :?>
                <tr>
                    <td><a href="/curso_php/ejercicios/home2/libros/detalle_libro.php?id=<?= $id ?>&titulo=<?= $datos_libros['titulo'] ?>&autor=<?= $datos_libros['Autor'] ?>&genero=<?= $datos_libros['Género']?>"><?= $datos_libros['titulo']?></a></td>
                    <td><?= $datos_libros['Autor']?></td>
                    <td><?= $datos_libros['Género']?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <ul>
        <li><a href="/curso_php/ejercicios/home2/index.php">Ir a Inicio</a>&nbsp;&nbsp;</li>
    </ul>


</body>
<footer>
    <?php include '../piePagina.php'; ?>
</footer>
</html>