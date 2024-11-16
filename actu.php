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
$pageTitle = "Actualzar Datos";
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
            <p>?????</p>
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
                    <p>????</p>
                </header>

                <?php
                // Conexión a la base de datos
                $con = mysqli_connect("localhost", "root", "", "bd_colegio");
                if (!$con) {
                    echo "Fallo en la conexión";
                    die(mysqli_connect_error());
                }

                if (isset($_POST['id'])) {
                    // Procesar la edición si se ha enviado un ID
                    $ID = $_POST['id'];
                    $resultado = mysqli_query($con, "SELECT * FROM alumnos WHERE ID = '$ID'"); 
                    if (!$resultado) {
                        echo "Fallo en la consulta";
                        die(mysqli_error($con));
                    }

                    // Mostrar el formulario de edición
                    if ($row = mysqli_fetch_array($resultado)) {
                        echo "<center>";
                        echo "<form action='' method='POST'>"; 
                        echo "<h1>Editar Datos</h1>";
                        echo "<table border='0'>";
                        echo "<tr><td>ID:</td><td><input type='text' name='ID' value='" . $row['ID'] . "' readonly></td></tr>"; 
                        echo "<tr><td>Nombre:</td><td><input type='text' name='Nombre' value='" . $row['Nombre'] . "'></td></tr>"; 
                        echo "<tr><td>Apellido:</td><td><input type='text' name='Apellido' value='" . $row['Apellido'] . "'></td></tr>"; 
                        echo "<tr><td>Edad:</td><td><input type='text' name='Edad' value='" . $row['Edad'] . "'></td></tr>"; 
                        echo "<tr><td>Carrera:</td><td><input type='text' name='Carrera' value='" . $row['Carrera'] . "'></td></tr>"; 
                        echo "</table>";
                        echo "<input type='submit' value='Actualizar Datos'/>"; 
                        echo "</form>";
                    }
                }

                // Procesar la actualización de los datos
                if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['Nombre'], $_POST['Apellido'], $_POST['Edad'], $_POST['Carrera'], $_POST['ID'])) {
                    // Obtener los valores enviados
                    $ID = $_POST['ID'];
                    $NOMBRE = $_POST['Nombre'];
                    $APELLIDO = $_POST['Apellido'];
                    $EDAD = $_POST['Edad'];
                    $CARRERA = $_POST['Carrera'];

                    // Usando una consulta preparada para evitar inyección SQL
                    $stmt = $con->prepare("UPDATE alumnos SET Nombre = ?, Apellido = ?, Edad = ?, Carrera = ? WHERE ID = ?");
                    $stmt->bind_param("ssssi", $NOMBRE, $APELLIDO, $EDAD, $CARRERA, $ID);

                    // Ejecutar la consulta y verificar
                    if ($stmt->execute()) {
                        echo "Datos actualizados con éxito";
                        header("Location: etapa4.php"); // Redirigir a la página de consulta
                        exit();
                    } else {
                        echo "Error al actualizar: " . $stmt->error;
                    }

                    $stmt->close();
                }

                // Mostrar la lista de estudiantes y la opción de editar
                if (!isset($_POST['id'])) {
                    $resultado = mysqli_query($con, "SELECT * FROM alumnos");
                    if ($resultado === FALSE) {
                        echo "Fallo en la consulta";
                        die(mysqli_error($con)); 
                    }

                    echo "<center><font face='Arial'>";
                    echo "<h2>Tabla Alumnos</h2>";
                    echo "<table border='1'>
                    <tr>
                    <th>ID_Alumno</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Edad</th>
                    <th>Carrera</th>
                    </tr>";

                    while ($row = mysqli_fetch_array($resultado)) {
                        echo "<tr>";
                        echo "<td align=center>" . $row['ID'] . "</td>";
                        echo "<td>" . $row['Nombre'] . "</td>";
                        echo "<td>" . $row['Apellido'] . "</td>";
                        echo "<td>" . $row['Edad'] . "</td>";
                        echo "<td align=center>" . $row['Carrera'] . "</td>";
                        echo "</tr>"; 
                    }

                    echo "</table>";
                    $registros = mysqli_num_rows($resultado);
                    echo "<br>Registros: " . $registros;

                    // Formulario para seleccionar el ID a editar
                    echo "<h3>Escribe el ID del registro a editar</h3>";
                    echo "<form action='' method='post'> 
                    ID :<input type='text' name='id'/><br>
                    <input type='submit' value='Editar'/>
                    </form>";
                }

                // Cerrar la conexión a la base de datos
                mysqli_close($con);
                ?>
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
