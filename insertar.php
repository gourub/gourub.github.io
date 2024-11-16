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
$pageTitle = "Insertar Datos";

// Establecer conexión con la base de datos
$con = mysqli_connect("localhost", "root", "", "bd_colegio");
if (!$con) {
    die('No se estableció la conexión con el servidor: ' . mysqli_error($con));
}

// Manejar el envío del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = mysqli_real_escape_string($con, $_POST['ID']);
    $nombre = mysqli_real_escape_string($con, $_POST['Nombre']);
    $apellido = mysqli_real_escape_string($con, $_POST['Apellido']);
    $edad = mysqli_real_escape_string($con, $_POST['Edad']);
    $carrera = mysqli_real_escape_string($con, $_POST['Carrera']);

    $sql = "INSERT INTO alumnos (ID, Nombre, Apellido, Edad, Carrera) 
            VALUES ('$id', '$nombre', '$apellido', '$edad', '$carrera')";

    if (!mysqli_query($con, $sql)) {
        die('Error: ' . mysqli_error($con));
    }

    echo "<center>";
    echo "1 registro agregado <br>";
    echo "<a href='consultabd.php'>Ver registros</a>";
    echo "</center>";
    mysqli_close($con);
    exit;
}
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
            <p>????</p>
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
                <p>Formulario de registro</p>
                </header>
                <br>
                <h1>Insertar Datos</h1>
                <form action="" method="post">
                    <table border="1">
                        <tr>
                            <td>ID:</td>
                            <td><input type="text" name="ID" required></td>
                        </tr>
                        <tr>
                            <td>Nombre:</td>
                            <td><input type="text" name="Nombre" required></td>
                        </tr>
                        <tr>
                            <td>Apellidos:</td>
                            <td><input type="text" name="Apellido" required></td>
                        </tr>
                        <tr>
                            <td>Edad:</td>
                            <td><input type="number" name="Edad" required></td>
                        </tr>
                        <tr>
                            <td>Carrera:</td>
                            <td><input type="text" name="Carrera" required></td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: center;">
                                <input type="submit" value="Grabar">
                            </td>
                        </tr>
                    </table>
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

