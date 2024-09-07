<?php
if (!empty($_POST["cmesa"])) {
    if (empty($_POST["nombre"]) or empty($_POST["date"])) {
        echo '<div class="alert alert-danger">Ingrese los datos solicitados</div>';
    } else {
        $nombre=$_POST["nombre"];
        $date=$_POST["date"];
        $sql=$conexion->query("INSERT INTO examen (id_asignatura, date) VALUES ('$nombre', '$date')");
        if ($sql==1) {
           echo '<div class="alert-success">Mesa de examen creada</div>';
           header("Location: s-RWMR.php");
        } else {
            echo '<div class="alert alert-danger">Hubo un problema al crear la mesa</div>';  
        }
    }
}