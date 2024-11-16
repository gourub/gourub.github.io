<!DOCTYPE HTML>
<html>
<head>
    <title>Tempest</title>
    <meta charset="utf-8">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<!-- Header -->
<header id="header" class="alt">
    <div class="logo">
        <a href="index.php">Hola <span>por VicTempest</span></a>
    </div>
    <a href="#menu">Menu</a>
</header>

<!-- Nav -->
<nav id="menu">
    <ul class="links">
        <li><a href="index.php">Inicio</a></li>
        <li><a href="etapa1.php">Etapa 1</a></li>
        <li><a href="etapa2.php">Etapa 2</a></li>
        <li><a href="etapa3.php">Etapa 3</a></li>
        <li><a href="etapa4.php">Etapa 4</a></li>
    </ul>
</nav>

<!-- Banner -->
<section class="banner full">
<?php
    // Ruta de la imagen del primer artículo del banner
    $imagen1 = '2.jpg'; // Reemplaza con la ruta correcta de tu imagen

    // Verifica si la imagen existe antes de mostrar el artículo del banner
    if (file_exists($imagen1)) {
        echo '<article>';
        echo '<img src="' . $imagen1 . '" alt="Imagen 1" width="1440" height="961">';
        echo '<div class="inner">';
        echo '<header>';
        echo '<p>PIA de Victor Angel Reyes Valdez</p>';
        echo '<h2>Fundamentos de Programacion Web</h2>';
        echo '</header>';
        echo '</div>';
        echo '</article>';
    }
    ?>
    <!-- Segundo artículo del banner -->
    
</section>

<!-- One -->
<section id="one" class="wrapper style2">
    <div class="inner">
        <div class="grid-style">
            <?php
            // Array de datos para las etapas, con asociación de imágenes
            $etapas = [
                1 => [
                    'titulo' => 'Introduccion al lenguaje de PHP',
                    'descripcion' => 'Descripción de la Etapa 1...',
                    'enlace' => 'etapa1.php',
                    'imagen' => 'ima/et1.jpeg' // Ruta de la imagen para la Etapa 1
                ],
                2 => [
                    'titulo' => 'Aplicacion de lenguaje PHP',
                    'descripcion' => 'Descripción de la Etapa 2...',
                    'enlace' => 'etapa2.php',
                    'imagen' => 'ima/et2.jpeg' // Ruta de la imagen para la Etapa 2
                ],
                3 => [
                    'titulo' => 'Formularios con PHP',
                    'descripcion' => 'Descripción de la Etapa 3...',
                    'enlace' => 'etapa3.php',
                    'imagen' => 'ima/et3.jpeg' // Ruta de la imagen para la Etapa 3
                ],
                4 => [
                    'titulo' => 'Funciones con PHP',
                    'descripcion' => 'Descripción de la Etapa 4...',
                    'enlace' => 'etapa4.php',
                    'imagen' => 'ima/et4.jpeg' // Ruta de la imagen para la Etapa 4
                ]
            ];

            // Generar contenido dinámico para cada etapa
            foreach ($etapas as $numero => $etapa) {
                echo '<div>';
                echo '<div class="box">';
                echo '<div class="image fit">';
                echo '<img src="' . $etapa['imagen'] . '" alt="" width="600" height="300">';
                echo '</div>';
                echo '<div class="content">';
                echo '<header class="align-center">';
                echo '<p>Etapa ' . $numero . '</p>';
                echo '<h2>' . $etapa['titulo'] . '</h2>';
                echo '</header>';
                echo '<p>' . $etapa['descripcion'] . '</p>';
                echo '<footer class="align-center">';
                echo '<a href="' . $etapa['enlace'] . '" class="button alt">Ver más</a>';
                echo '</footer>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</section>

<!-- Footer -->
<footer id="footer">
    <div class="container">
        <ul class="icons">
            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
        </ul>
    </div>
</footer>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>
