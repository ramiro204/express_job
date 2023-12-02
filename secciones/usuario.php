<?php

include_once '../configuraciones/bd.php';
$conexionBD=BD::crearInstancia();

print_r($_POST);

$sql="SELECT * FROM usuario";
$listaUsusarios=$conexionBD->query($sql);
$usuarios=$listaUsusarios->fetchAll();

print_r($usuarios);

?>