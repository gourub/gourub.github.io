<!DOCTYPE HTML>
<html>
<head>
    <title>Tempest</title>
    <meta charset="utf-8">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="main.css">
</head>
<body>

<!-- Header -->
<header id="header" class="alt">
    <div class="logo">
        <a href="in.php"> <span>PIA</span></a>
    </div>
    <a href="#menu">Menu</a>
</header>

<!-- Nav -->
<nav id="menu">
    <ul class="links">
        <li><a href="in.php">Inicio</a></li>
        <li><a href="consultabd.php">Consulta BD</a></li>
        <li><a href="insertar.php">Insertar Registro</a></li>
        <li><a href="marco.php">Eliminar registro</a></li>
        <li><a href="actu.php">Actualizar Datos</a></li>
    </ul>
</nav>

<!-- Banner -->
<section class="banner full">
<?php
    // Ruta de la imagen del primer artículo del banner
    $imagen1 = 'pri.jpg'; // Reemplaza con la ruta correcta de tu imagen

    // Verifica si la imagen existe antes de mostrar el artículo del banner
    if (file_exists($imagen1)) {
        echo '<article>';
        echo '<img src="' . $imagen1 . '" alt="Imagen 1" width="1440" height="961">';
        echo '<div class="inner">';
        echo '<header>';
        echo '<p>PIA de Base de Datos con Paginas Web Dinamicas</p>';
        echo '<h2>Equipo</h2>';
        echo '</header>';
        echo '</div>';
        echo '</article>';
    }
    ?>
    
    
</section>

<!-- One -->
<section id="one" class="wrapper style2">
    <div class="inner">
        <div class="grid-style">
            <?php
            // Array de datos para las etapas, con asociación de imágenes
            $funciones  = [
                1 => [
                    'titulo' => 'ConsultaBD',
                    'descripcion' => 'Descripción de la Etapa 1...',
                    'enlace' => 'consultabd.php',
                ],
                2 => [
                    'titulo' => 'Insertar Datos',
                    'descripcion' => 'Descripción de la Etapa 2...',
                    'enlace' => 'insertar.php',
                    
                ],
                3 => [
                    'titulo' => 'Eliminar registro',
                    'descripcion' => 'Descripción de la Etapa 3...',
                    'enlace' => 'marco.php',
                    
                ],
                4 => [
                    'titulo' => 'Actualizar Datos',
                    'descripcion' => 'Descripción de la Etapa 4...',
                    'enlace' => 'etapa4.php',
                    
                ]
            ];

            // Generar contenido dinámico para cada etapa
            foreach ($funciones as $numero => $funcion) {
                echo '<div>';
                echo '<div class="box">';
                echo '<div class="image fit">';
                echo '</div>';
                echo '<div class="content">';
                echo '<header class="align-center">';
                echo '<p>Funcion ' . $numero . '</p>';
                echo '<h2>' . $funcion['titulo'] . '</h2>';
                echo '</header>';
                echo '<p>' . $funcion['descripcion'] . '</p>';
                echo '<footer class="align-center">';
                echo '<a href="' . $funcion['enlace'] . '" class="button alt">Ingresar</a>';
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
