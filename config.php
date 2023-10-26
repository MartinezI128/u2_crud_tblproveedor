<?php

$servidor = "localhost";
$usuario = "root";
$contra = "";
$basedeDatos = "MuebleriaIrams";

$db = mysqli_connect($servidor, $usuario, $contra, $basedeDatos);

if (!$db)
    die(" No se pudo conectar a la base de datos" . mysqli_connect_error());
