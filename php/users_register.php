<?php
if (!empty($_POST["register"])) {
    if (empty($_POST["dni"]) or empty($_POST["pwd"])) {
        echo '<div class="alert alert-danger">Ingrese los datos solicitados</div>';
    } else {
        $dni=$_POST["dni"];
        $pwd=$_POST["pwd"];
        $puesto=$_POST["puesto"];
        if (strlen($dni) != 8 || !ctype_digit($dni)) {
            echo '<div class="alert alert-danger">Coloque un DNI válido</div>';
        } else {
        $sql=$conexion->query("INSERT INTO usuario (puesto, dni, pwd) VALUES ('$puesto', '$dni', '$pwd')");
        if ($sql==1) {
            echo 'Usuario registrado'; 
            if ($puesto == "Docente") {
                header("Location: d-RWMR.php");
                exit;
            }else {
                header("Location: a-RWMR.php");
                exit;
            }
        } else {
            echo 'Hubo un problema con el registro';  
        }
    }
}
}
?>
