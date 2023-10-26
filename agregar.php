<?php
include("./config.php");

// Compruebe si se ha hecho clic en el botón de agregar o no
if (isset($_POST['agregar'])) {
    // recuperar datos del formulario
    $Id_Producto = $_POST['Id_Producto'];
    $NombreEmpresa = $_POST['NombreEmpresa'];
    $Direccion = $_POST['Direccion'];
    $Ciudad = $_POST['Ciudad'];
    $Estado = $_POST['Estado'];
    $Telefono = $_POST['Telefono'];
    $CorreoElectronico = $_POST['CorreoElectronico'];

    // query
    $sql = "INSERT INTO proveedor(Id_Producto, NombreEmpresa, Direccion, Ciudad, Estado, Telefono,CorreoElectronico)
    VALUES('$Id_Producto', '$NombreEmpresa', '$Direccion', '$Ciudad', '$Estado', '$Telefono', '$CorreoElectronico')";
    $query = mysqli_query($db, $sql);

    // Comprueba si la consulta se guardó correctamente
    if ($query)
        header('Location: ./index.php?estado=Exitoso');
    else
        header('Location: ./index.php?estado=Error');
} else
    die("Acceso prohibido....");
