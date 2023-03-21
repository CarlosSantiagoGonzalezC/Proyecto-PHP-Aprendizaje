<?php
include("conexion.php");
$nombre = $_POST['txtNombre'];
$codigo = $_POST['txtCodigo'];

$sql = $pdo->prepare("INSERT INTO pokemons(pokNombre, pokCodigo) VALUES(:nombre, :codigo)");
$sql->bindValue(':nombre', $nombre);
$sql->bindValue(':codigo', $codigo);
$sql->execute();

$respuesta = $sql;
if ($respuesta == true) {
    $idInsertado = $pdo->lastInsertId();
    echo "Se ha registrado un nuevo pokemon con los siguientes datos: <br>";
    echo "ID: $idInsertado <br>";
    echo "Nombre: $nombre <br>";
    echo "Codigo: $codigo <br>";

} else {
    echo "Ha ocurrido un error al agregar el pokemon!!";
}

?>