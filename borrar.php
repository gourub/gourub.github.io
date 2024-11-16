<!DOCTYPE HTML>
<html>
<head>
    <title>PIA</title>
    <meta charset="utf-8">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body class="subpage">
    
<?php
// Variables PHP para contenido dinámico
$pageTitle = "Eliminar Datos";

// Conexión a la base de datos
$con = mysqli_connect("localhost", "root", "", "bd_colegio");

if (!$con) {
    die('No se estableció la conexión con el servidor:' . mysqli_error($con));
}

// Inicializar una variable para el mensaje
$message = "";

// Procesamiento del formulario si se ha enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["ID"])) {
    $id = $_POST["ID"];
    
    // Sanitizar la entrada para evitar inyección SQL
    $id = mysqli_real_escape_string($con, $id);

    // Consulta preparada para eliminar el registro
    $sql = "DELETE FROM alumnos WHERE ID = ?";
    
    // Preparar la consulta
    if ($stmt = mysqli_prepare($con, $sql)) {
        // Enlazar el parámetro
        mysqli_stmt_bind_param($stmt, "s", $id);
        
        // Ejecutar la consulta
        if (mysqli_stmt_execute($stmt)) {
            $message = "<p>Registro borrado correctamente.</p>";  // Almacenar el mensaje
        } else {
            $message = "<p>Error al borrar el registro: " . mysqli_error($con) . "</p>";
        }
        
        // Cerrar la sentencia preparada
        mysqli_stmt_close($stmt);
    } else {
        $message = "<p>Error en la preparación de la consulta: " . mysqli_error($con) . "</p>";
    }
}

mysqli_close($con);
?>

<!-- Header -->
<header id="header">
    <div class="logo"><a href="in.php">PIA</a></div>
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

<!-- One -->
<section id="One" class="wrapper style3">
    <div class="inner">
        <header class="align-center">
            <p>Formulario de Borrado de Datos</p>
            <h2><?php echo $pageTitle; ?></h2>
        </header>
    </div>
</section>

<!-- Two -->
<section id="two" class="wrapper style">
    <div class="inner">
        <div class="box">
            <div class="content">
                <header class="align-center">
                    <p>Formulario de Borrado</p>
                </header>
                <div class="message-container">
                    <?php echo $message; ?> <!-- Aquí se muestra el mensaje -->
                </div>
                <br>
                <h1>Datos a Borrar</h1>

                <form action="borrar.php" method="post">
                    <table>
                        <tr><td>ID alumno:</td>
                        <td><input type="text" name="ID"></td></tr>
                    </table>
                    <input type="submit" value="Borrar" />
                    <br><br>
                    <a href='consultabd.php'>Ver Datos</a>
                </form>
            </div>
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
