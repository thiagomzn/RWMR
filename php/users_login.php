<?php
if (!empty($_POST["login"])) {
    if (empty($_POST["dni"]) or empty($_POST["pwd"])) {
        echo '<div class="alert alert-danger">Ingrese los datos solicitados</div>';
    } else {
        $dni=$_POST["dni"];
        $pwd=$_POST["pwd"];
        $puesto=$_POST["puesto"]; 
        if (strlen($dni) != 8 || !ctype_digit($dni)) {
            echo '<div class="alert alert-danger">Coloque un DNI válido</div>';
        } else {
            $sql="SELECT * FROM usuario WHERE puesto = '$puesto' AND dni = '$dni' AND pwd = '$pwd'";
            $result = $conexion->query($sql);
            
            if ($result->num_rows > 0) {
                session_start();
                $_SESSION['pwd'] = $pwd; 
                $_SESSION['dni'] = $dni;
                $_SESSION['puesto'] = $puesto;
                echo "Inicio de sesión exitoso";
            } else {
                echo "Inicio de sesión fallido";
                if ($puesto == "Docente") {
                    header("Location: d-RWMR.php");
                    exit;
                } else {
                    header("Location: a-RWMR.php");
                    exit;
                }
            }
        }
    }
}
?>
