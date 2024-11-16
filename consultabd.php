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
$pageTitle = "Consulta a Base de Datos";
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
                <p>???</p>
                </header>
                <br>
                <ul>
                <center>
        <?php
        $con = mysqli_connect("localhost","root","","bd_colegio");
        $resultado = mysqli_query($con,"select * from alumnos");
        if($resultado === FALSE){
            echo "fallo ";
            die(musqli_error($con));
        }
        echo "<center><font face='Arial'>";
        echo "<a href='consultabd.php'>Actualizar tabla</a>";
        echo "<h2>Tabla Alumnos</h2>";
    echo "<table border='1'>
    <tr>
    <th>ID_Alumno</th>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Edad</th>
    <th>Carrera</th>
    </tr>";
    while($row=mysqli_fetch_array($resultado))
    {
        echo "<tr>";
        echo "<td align=center>" .$row['ID'] ."</td>";
        echo "<td>" .$row['Nombre'] ."</td>";
        echo "<td>" .$row['Apellido'] ."</td>";
        echo "<td>" .$row['Edad'] ."</td>";
        echo "<td align=center>" .$row['Carrera'] ."</td>";
    }
    echo "</table>";
    $registros=mysqli_num_rows($resultado);
    echo "<br>Registros: "  .$registros;
mysqli_close($con);
?></p>
                </ul>

                <br>
                

            </div>
        </div>
    </div>
</section></center>
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

