<?php
include 'conection.php';

$division=$_POST['division'];
$year=$_POST['year'];
$tipo=$_POST['tipo'];
$sql = "SELECT * From asignatura. *, curso.year, curso.division FROM asignatura INNER JOIN curso ON asignatura.id_curso = curso.id where asignatura.tipo = $tipo curso.division = $division and curso.year = $year";
$result = $conexion->query($sql);
 
$resp = "<option value=''></option>";

while ($row = $result->fetch_assoc()) {
    $resp .= "<option value='".$row['id']."'>".$row['nombre']."</option>";
}
s
echo json_encode($resp, JSON_UNESCAPED_UNICODE);