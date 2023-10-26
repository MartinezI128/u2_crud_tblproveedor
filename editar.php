<?php
include("./config.php");


if (isset($_POST['editar_datos'])) {
   
    $editar_Id_Proveedor = $_POST['editar_Id_Proveedor'];
    $editar_Id_Producto = $_POST['editar_Id_Producto'];
    $editar_NombreEmpresa = $_POST['editar_NombreEmpresa'];
    $editar_Direccion = $_POST['editar_Direccion'];
    $editar_Ciudad = $_POST['editar_Ciudad'];
    $editar_Estado = $_POST['editar_Estado'];
    $editar_Telefono = $_POST['editar_Telefono'];
    $editar_CorreoElectronico = $_POST['editar_CorreoElectronico'];

    // query
    $sql = "UPDATE proveedor SET Id_Producto='$editar_Id_Producto', NombreEmpresa='$editar_NombreEmpresa', Direccion='$editar_Direccion', Ciudad='$editar_Ciudad', Estado='$editar_Estado', Telefono='$editar_Telefono', CorreoElectronico='$editar_CorreoElectronico' WHERE Id_Proveedor = '$editar_Id_Proveedor'";
    $query = mysqli_query($db, $sql);

    
    if ($query)
        header('Location: ./index.php?editar=Exitoso');
    else
        header('Location: ./index.php?editar=Error');
} else
    die("Acceso prohibido....");
