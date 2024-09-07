<?php
if (!empty($_POST["registrar"])) {
    if (empty($_POST["dni"]) or empty($_POST["pwd"])) {
        echo '<div class="alert alert-danger">Ingrese los datos solicitados</div>';
    } else {
        $date=$_POST["date"];
        $patente=$_POST["patente"];
        $nombre=$_POST["nombre"]; 
        $num_tel=$_POST["num_tel"];
        $email=$_POST["email"];
        if (strlen($dni) != 8 || !ctype_digit($dni)) {
            echo '<div class="alert alert-danger">Coloque un DNI válido</div>';
        } else {
            $sql="SELECT * FROM usuario WHERE puesto = '$puesto' AND dni = '$dni' AND pwd = '$pwd'";
            $result = $conexion->query($sql);
                if ($puesto == "Secretario") {
                } else {
                    header("Location: SAMVTV.php");
                    exit;
                }
            }
        }
    }
}
?>
