<?php
function proverbio_aleatorio(){
    $proverbios = [
        "La gente se arregla todos los días el cabello. ¿Por qué no el corazón?” Este proverbio nos invita a reflexionar sobre la importancia de cuidar nuestras emociones y sentimientos, no solo nuestra apariencia física.",
        "Las grandes almas tienen voluntades; las débiles tan solo deseos.” Nos recuerda que la voluntad y la determinación son esenciales para el crecimiento personal.",
        "No puedes evitar que el pájaro de la tristeza vuele sobre tu cabeza, pero sí puedes evitar que anide en tu cabellera.” Significa que podemos enfrentar la tristeza, pero también podemos elegir no dejar que nos afecte demasiado.",
        "Cuando bebas agua, recuerda la fuente.” Nos insta a ser agradecidos y recordar de dónde provienen nuestras bendiciones.",
        "El que teme sufrir ya sufre el temor.” Este proverbio nos habla sobre cómo el miedo anticipado puede ser una carga en sí mismo.",
        "Es más fácil variar el curso de un río que el carácter de un hombre.” Nos dice que cambiar nuestra personalidad es difícil y requiere esfuerzo constante.",
        "Si no quieres que se sepa, no lo hagas.” En otras palabras, si tienes secretos, es mejor no actuar de manera que los revele.",
        "La puerta mejor cerrada es aquella que puede dejarse abierta.” Cuando no tememos, no hay necesidad de preocuparse.",
        "Es fácil esquivar la lanza, mas no el puñal oculto.” Advierte sobre los enemigos disfrazados como amigos.",
        "Excava el pozo antes de que tengas sed.” Nos enseña la importancia de la prevención y la preparación.",
    ];
    $indice_aleatorio = array_rand($proverbios);
return $proverbios[$indice_aleatorio];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Proyecto</title>
    <link rel="stylesheet" href="assets/styles.css"> <!--enlace a la página de estilos-->
</head>
<body>
    <h1>Bienvenido a mi Proyecto!</h1>
    <img src="https://picsum.photos/250/150" alt="">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed convallis accumsan aliquet. 
        Curabitur tortor tellus, efficitur at nibh a, viverra ullamcorper felis. Integer vestibulum eget libero ac laoreet. 
        Etiam in semper turpis, et tempus massa. Quisque tempus augue odio. Cras id urna nunc. Nam vitae tristique neque, ut eleifend est. 
        In dictum arcu in diam convallis, eu interdum nisl efficitur. Sed tincidunt imperdiet dolor a porttitor. In eu efficitur massa, id maximus lorem. 
        In non dolor eget sem blandit mattis.
        Nulla facilisi. Cras varius elementum euismod. In sit amet purus nec turpis tristique pretium pellentesque nec purus.</p><br>
    <p><i><?= proverbio_aleatorio() ?></i></p>
    <ul>
        <li><a href="/curso_php/ejercicios/home2/loto/menu.php">Menu Loto</a></li>
        <li><a href="/curso_php/ejercicios/home2/libros/index.php">Listado de Libros</a></li>
    </ul>
</body>
<footer>
    <?php include 'piePagina.php'; ?>
</footer>
</html>