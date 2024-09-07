<?php
include 'conection.php';

$idcurso = $conexion->real_escape_string($_POST['curso']);
$sql = "SELECT * From asignatura where id_curso = $idcurso";
$result = $conexion->query($sql);

$resp = "<option value=''></option>";

while ($row = $result->fetch_assoc()) {
    $resp .= "<option value='".$row['id']."'>".$row['nombre']." - ".$row['tipo']."</option>";
}

echo json_encode($resp, JSON_UNESCAPED_UNICODE);