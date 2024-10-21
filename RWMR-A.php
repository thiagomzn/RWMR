<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>E.P.E.T. N°5 - Asignaturas</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">E.P.E.T. N°5 Asignaturas</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Buscar" aria-label="Buscar" aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Configuración</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="login.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Trámites</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Mesas
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="RWMR-C.php">Crear</a>
                                    <a class="nav-link" href="RWMR-I.php">Inscribirse</a>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Escuela</div>
                            <a class="nav-link" href="RWMR-A.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Materias
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Accediste como:</div>
                        RWMR
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                        <br>
                        <br>
                            <?php
include ("php/conection.php");
$result = mysqli_query($conexion, "SELECT asignatura.*, curso.year, curso.division FROM asignatura INNER JOIN curso ON asignatura.id_curso = curso.id WHERE asignatura.id_curso < 3 AND asignatura.Tipo = 'Áulica'");
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

if ($result->num_rows > 0) {
    echo "<h2 class=RWMR-A_h>Primer Ciclo - Áulicas</h2>";
    echo "<table class= table-pc>";
    echo "<thead><tr><th>Año/división</th><th>Nombre</th></tr></thead>";
    while($fila = $result->fetch_assoc()) {
        echo "<tbody></td><td>".$fila["year"]."</td><td>".$fila["nombre"]."</td></tr></tbody>";
    }
    echo "</table>";
} else {
    echo "No se encontraron resultados";
}
$conexion->close();
?>
<br>
<br>
<?php
include ("php/conection.php");
$result = mysqli_query($conexion, "SELECT asignatura.*, curso.year, curso.division FROM asignatura INNER JOIN curso ON asignatura.id_curso = curso.id WHERE asignatura.id_curso < 3 AND asignatura.Tipo = 'Taller'");
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

if ($result->num_rows > 0) {
    echo "<h2 class=RWMR-A_h>Primer Ciclo - Taller</h2>";
    echo "<table class= table-pc>";
    echo "<thead><tr><th>Año/división</th><th>Nombre</th></tr></thead>";
    while($fila = $result->fetch_assoc()) {
        echo "<tbody></td><td>".$fila["year"]."</td><td>".$fila["nombre"]."</td></tr></tbody>";
    }
    echo "</table>";
} else {
    echo "No se encontraron resultados";
}
$conexion->close();
?>
<br>
<br>
<?php
include ("php/conection.php");
$result = mysqli_query($conexion, "SELECT asignatura.*, curso.year, curso.division FROM asignatura INNER JOIN curso ON asignatura.id_curso = curso.id WHERE `id_curso` > 2 AND `tipo` = 'Áulica' AND `id_curso` < 7");
if ($conexion->connect_error) {
die("Error de conexión: " . $conexion->connect_error);
}

if ($result->num_rows > 0) {
echo "<h2 class=RWMR-A_h>Segundo Ciclo - Áulicas</h2>";
echo "<h3 class=RWMR-A_h>Técnico en instalaciones electromecánicas</h3>";
echo "<table class= table-elect>";
echo "<thead><tr><th>Año/división</th><th>Nombre</th></tr></thead>";
while($fila = $result->fetch_assoc()) {
echo "<tbody></td><td>".$fila["year"]." - ".$fila["division"]."</td><td>".$fila["nombre"]."</td></tr></tbody>";
}
echo "</table>";
} else {
echo "No se encontraron resultados";
}
$conexion->close();
?>
<br>
<br>
<?php
include ("php/conection.php");
$result = mysqli_query($conexion, "SELECT asignatura.*, curso.year, curso.division FROM asignatura INNER JOIN curso ON asignatura.id_curso = curso.id WHERE `id_curso` > 2 AND `tipo` = 'Taller' AND `id_curso` < 7");
if ($conexion->connect_error) {
die("Error de conexión: " . $conexion->connect_error);
}

if ($result->num_rows > 0) {
echo "<h2 class=RWMR-A_h>Segundo Ciclo - Talleres</h2>";
echo "<h3 class=RWMR-A_h>Técnico en instalaciones electromecánicas</h3>";
echo "<table class= table-elect>";
echo "<thead><tr><th>Año/división</th><th>Nombre</th></tr></thead>";
while($fila = $result->fetch_assoc()) {
echo "<tbody></td><td>".$fila["year"]." - ".$fila["division"]."</td><td>".$fila["nombre"]."</td></tr></tbody>";
}
echo "</table>";
} else {
echo "No se encontraron resultados";
}
$conexion->close();
?>
<br>
<br>
<?php
include ("php/conection.php");
$result = mysqli_query($conexion, "SELECT asignatura.*, curso.year, curso.division FROM asignatura INNER JOIN curso ON asignatura.id_curso = curso.id WHERE `id_curso` > 6 AND `tipo` = 'Áulica' AND `id_curso` < 13");
if ($conexion->connect_error) {
die("Error de conexión: " . $conexion->connect_error);
}

if ($result->num_rows > 0) {
echo "<h2 class=RWMR-A_h>Segundo Ciclo - Áulicas</h2>";
echo "<h3 class=RWMR-A_h>Técnico en Informática Profesional y Personal</h3>";
echo "<table class= table-infor>";
echo "<thead><tr><th>Año/división</th><th>Nombre</th></tr></thead>";
while($fila = $result->fetch_assoc()) {
echo "<tbody></td><td>".$fila["year"]." - ".$fila["division"]."</td><td>".$fila["nombre"]."</td></tr></tbody>";
}
echo "</table>";
} else {
echo "No se encontraron resultados";
}
$conexion->close();
?>
<br>
<br>
<?php
include ("php/conection.php");
$result = mysqli_query($conexion, "SELECT asignatura.*, curso.year, curso.division FROM asignatura INNER JOIN curso ON asignatura.id_curso = curso.id WHERE `id_curso` > 6 AND `tipo` = 'Taller' AND `id_curso` < 13");
if ($conexion->connect_error) {
die("Error de conexión: " . $conexion->connect_error);
}

if ($result->num_rows > 0) {
echo "<h2 class=RWMR-A_h>Segundo Ciclo - Talleres</h2>";
echo "<h3 class=RWMR-A_h>Técnico en Informática Profesional y Personal</h3>";
echo "<table class= table-infor>";
echo "<thead><tr><th>Año/división</th><th>Nombre</th></tr></thead>";
while($fila = $result->fetch_assoc()) {
echo "<tbody></td><td>".$fila["year"]." - ".$fila["division"]."</td><td>".$fila["nombre"]."</td></tr></tbody>";
}
echo "</table>";
} else {
echo "No se encontraron resultados";
}
$conexion->close();
?>
<br>
<br>
<?php
include ("php/conection.php");
$result = mysqli_query($conexion, "SELECT asignatura.*, curso.year, curso.division FROM asignatura INNER JOIN curso ON asignatura.id_curso = curso.id WHERE `id_curso` > 12 AND `tipo` = 'Áulica'");
if ($conexion->connect_error) {
die("Error de conexión: " . $conexion->connect_error);
}

if ($result->num_rows > 0) {
echo "<h2 class=RWMR-A_h>Segundo Ciclo - Áulicas</h2>";
echo "<h3 class=RWMR-A_h>Técnico en Automotores</h3>";
echo "<table class= table-autom>";
echo "<thead><tr><th>Año/división</th><th>Nombre</th></tr></thead>";
while($fila = $result->fetch_assoc()) {
echo "<tbody></td><td>".$fila["year"]." - ".$fila["division"]."</td><td>".$fila["nombre"]."</td></tr></tbody>";
}
echo "</table>";
} else {
echo "No se encontraron resultados";
}
$conexion->close();
?>
<br>
<br>
<?php
include ("php/conection.php");
$result = mysqli_query($conexion, "SELECT asignatura.*, curso.year, curso.division FROM asignatura INNER JOIN curso ON asignatura.id_curso = curso.id WHERE `id_curso` > 12 AND `tipo` = 'Taller'");
if ($conexion->connect_error) {
die("Error de conexión: " . $conexion->connect_error);
}

if ($result->num_rows > 0) {
echo "<h2 class=RWMR-A_h>Segundo Ciclo - Talleres</h2>";
echo "<h3 class=RWMR-A_h>Técnico en Automotores</h3>";
echo "<table class= table-autom>";
echo "<thead><tr><th>Año/división</th><th>Nombre</th></tr></thead>";
while($fila = $result->fetch_assoc()) {
echo "<tbody></td><td>".$fila["year"]." - ".$fila["division"]."</td><td>".$fila["nombre"]."</td></tr></tbody>";
}
echo "</table>";
} else {
echo "No se encontraron resultados";
}
$conexion->close();
?>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
