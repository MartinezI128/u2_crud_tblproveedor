<?php include("./config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Conceptos básicos de CRUD con PHP y MySQL">
    <title>Tabla Proveedor Muebleria Iram's</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

 
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="bg-light">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom" style="position: sticky !important;
    top: 0 !important; z-index : 99999 !important;">
        <div class="container-fluid container">
            <a class="navbar-brand" href="#">Muebleria Iram's | Iram Ernesto Martinez Ruiz</a>
            
        </div>
    </nav>


    <div class="container mt-5">
        <!-- agregar formulario de proveedor -->
        <div class="card mb-5">
            <!-- agregar datos -->
            <div class="card-body">
                <h3 class="card-title">Mi negocio Muebleria Iram's</h3>
                <h4 class="card-text">Tabla Proveedor</h4>
                <p class="card-text">Elaborado por: Iram Ernesto Martinez Ruiz 5*I</p>

                <!-- mostrar mensaje de éxito agregado -->
                <?php if (isset($_GET['estado'])) : ?>
                    <?php
                    if ($_GET['estado'] == 'Exitoso')
                        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>Exitoso!</strong> Datos agregados exitosamente!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Cerrar'></button>
                      </div>";
                    else
                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Ups!</strong> No se pudieron agregar los datos!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Cerrar'></button>
                      </div>";
                    ?>
                <?php endif; ?>


                <form class="row g-3" action="agregar.php" method="POST">

                    <div class="col-md-12">
                        <label for="Id_Producto" class="form-label">Id Producto</label>
                        <input type="number" name="Id_Producto" class=" form-control" placeholder="00000" required>
                    </div>

                    <div class="col-12">
                        <label for="NombreEmpresa" class="form-label">Nombre Empresa</label>
                        <input type="text" name="NombreEmpresa" class="form-control" placeholder="MisterWils" required>
                    </div>
                    <div class="col-md-4">
                        <label for="Direccion" class="form-label">Direccion</label>
                        <input type="text" name="Direccion" class="form-control" placeholder="Calle #0000" required>
                    </div>

                    <div class="col-md-4">
                        <label for="Ciudad" class="form-label">Ciudad</label>
                        <input type="text" name="Ciudad" class="form-control" placeholder="Ciudad Juarez" required>
                    </div>

                    <div class="col-md-4">
                        <label for="Estado" class="form-label">Estado</label>
                        <input type="text" name="Estado" class="form-control" placeholder="Chihuahua" required>
                    </div>

                    <div class="col-md-6">
                        <label for="Telefono" class="form-label">Telefono</label>
                        <input type="text" name="Telefono" class="form-control" placeholder="6565265147" required>
                    </div>

                    <div class="col-md-6">
                        <label for="CorreoElectronico" class="form-label">Correo Electronico</label>
                        <input type="email" name="CorreoElectronico" class="form-control" placeholder="hola@gmail.com" required>
                    </div>


                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" value="daftar" name="agregar"><i class="fa fa-plus"></i><span class="ms-2">Agregar Datos</span></button>
                    </div>
                </form>
            </div>
        </div>


        <!-- título de la tabla -->
        <h5 class="mb-3">Proveedor</h5>

        <div class="row my-3">
            <div class="col-md-2 mb-3">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Mostrar entradas</option>
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                </select>
            </div>
            <div class="col-md-3 ms-auto">
                <div class="input-group mb-3 ms-auto">
                    <input type="text" class="form-control" placeholder="Buscar algo..." aria-label="Buscar" aria-describedby="button-addon2">
                    <button class="btn btn-primary" type="button" id="button-addon2"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </div>


        <!-- mostrar mensaje de eliminación exitosa -->
        <?php if (isset($_GET['eliminar'])) : ?>
            <?php
            if ($_GET['eliminar'] == 'Exitoso')
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>Exitoso!</strong> ¡Datos eliminados exitosamente!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Cerrar'></button>
                      </div>";
            else
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Ups!</strong> No se pudieron eliminar los datos!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Cerrar'></button>
                      </div>";
            ?>
        <?php endif; ?>


        <?php if (isset($_GET['editar'])) : ?>
            <?php
            if ($_GET['editar'] == 'Exitoso')
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>¡Éxitoso!</strong>¡Datos actualizados exitosamente!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Cerrar'></button>
                      </div>";
            else
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>¡Ups!</strong> ¡No se pudieron actualizar los datos!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Cerrar'></button>
                      </div>";
            ?>
        <?php endif; ?>

        <!-- tabla -->
        <div class="table-responsive mb-5 card">
            <?php
            echo "<div class='card-body'>";

            echo "<table class='table table-hover align-middle bg-white'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th scope='col' class='text-center'>Id Proveedor</th>";
            echo "<th scope='col'>Id Producto</th>";
            echo "<th scope='col'>Nombre Empresa</th>";
            echo "<th scope='col'>Direccion</th>";
            echo "<th scope='col'>Ciudad</th>";
            echo "<th scope='col'>Estado</th>";
            echo "<th scope='col'>Telefono</th>";
            echo "<th scope='col'>Correo Electronico</th>";
            echo "<th scope='col' class='text-center'>Opcion</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";



            $limite = 10;
            $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
            $pagina_principal = ($pagina > 1) ? ($pagina * $limite) - $limite : 0;

            $anterior = $pagina - 1;
            $siguiente = $pagina + 1;

            $datos = mysqli_query($db, "SELECT * FROM proveedor");
            $cantidad_datos = mysqli_num_rows($datos);
            $total_pagina = ceil($cantidad_datos / $limite);

            $datos_proveedor = mysqli_query($db, "SELECT * FROM proveedor LIMIT $pagina_principal, $limite");
            $Id_Proveedor = $pagina_principal + 1;

            // $sql = "SELECT * FROM proveedor";
            // $query = mysqli_query($db, $sql);




            while ($proveedor = mysqli_fetch_array($datos_proveedor)) {
                echo "<tr>";
                echo "<td style='display:none'>" . $proveedor['Id_Proveedor'] . "</td>";
                echo "<td class='text-center'>" . $Id_Proveedor++ . "</td>";
                echo "<td>" . $proveedor['Id_Producto'] . "</td>";
                echo "<td>" . $proveedor['NombreEmpresa'] . "</td>";
                echo "<td>" . $proveedor['Direccion'] . "</td>";
                echo "<td>" . $proveedor['Ciudad'] . "</td>";
                echo "<td>" . $proveedor['Estado'] . "</td>";
                echo "<td>" . $proveedor['Telefono'] . "</td>";
                echo "<td>" . $proveedor['CorreoElectronico'] . "</td>";

                echo "<td class='text-center'>";

                echo "<button type='button' class='btn btn-primary btnEditar pad m-1'><span class='material-icons align-middle'>edit</span></button>";

                
                echo "
                            <button type='button' class='btn btn-danger btnEliminar pad m-1'><span class='material-icons align-middle'>delete</span></button>";
                echo "</td>";

                echo "</tr>";
            }

            echo "</tbody>";
            echo "</table>";
            if ($cantidad_datos == 0) {
                echo "<p class='text-center'>No hay datos disponibles en esta tabla.</p>";
            } else {
                echo "<p>Total de entradas: $cantidad_datos </p>";
            }

            echo "</div>";
            ?>
        </div>

        <!-- pagination -->
        <nav class="mt-5 mb-5">
            <ul class="pagination justify-content-center">
                <li class="page-item">
                    <a class="page-link" <?php echo ($pagina > 1) ? "href='?pagina=$anterior'" : "" ?>><i class="fa fa-chevron-left"></i></a>
                </li>
                <?php
                for ($x = 1; $x <= $total_pagina; $x++) {
                ?>
                    <li class="page-item"><a class="page-link" href="?pagina=<?php echo $x ?>"><?php echo $x; ?></a></li>
                <?php
                }
                ?>
                <li class="page-item">
                    <a class="page-link" <?php echo ($pagina < $total_pagina) ? "href='?pagina=$siguiente'" : "" ?>><i class="fa fa-chevron-right"></i></a>
                </li>
            </ul>
        </nav>

        <!--Modal Editar-->
        <div class='modal fade' style="top:58px !important;" id='editarModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog' style="margin-bottom:100px !important;">
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>Editar Datos de Proveedor</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Cerrar'></button>
                    </div>

                    <?php
                    $sql = "SELECT * FROM proveedor";
                    $query = mysqli_query($db, $sql);
                    $proveedor = mysqli_fetch_array($query);
                    ?>

                    <form action='editar.php' method='POST'>
                        <div class='modal-body text-start'>
                            <input type='hidden' name='editar_Id_Proveedor' id='editar_Id_Proveedor'>

                    <div class="col-md-6">
                        <label for="editar_Id_Producto" class="form-label">Id Producto</label>
                        <input type="number" name="editar_Id_Producto" id="editar_Id_Producto" class=" form-control" placeholder="00000" required>
                    </div>

                    <div class="col-12">
                        <label for="editar_NombreEmpresa" class="form-label">Nombre Empresa</label>
                        <input type="text" name="editar_NombreEmpresa" id="editar_NombreEmpresa" class="form-control" placeholder="MisterWils" required>
                    </div>
                    <div class="col-md-4">
                        <label for="editar_Direccion" class="form-label">Direccion</label>
                        <input type="text" name="editar_Direccion" id="editar_Direccion" class="form-control" placeholder="Calle #0000" required>
                    </div>

                    <div class="col-md-4">
                        <label for="editar_Ciudad" class="form-label">Ciudad</label>
                        <input type="text" name="editar_Ciudad" id="editar_Ciudad" class="form-control" placeholder="Ciudad Juarez" required>
                    </div>

                    <div class="col-md-4">
                        <label for="editar_Estado" class="form-label">Estado</label>
                        <input type="text" name="editar_Estado" id="editar_Estado" class="form-control" placeholder="Chihuahua" required>
                    </div>

                    <div class="col-md-6">
                        <label for="editar_Telefono" class="form-label">Telefono</label>
                        <input type="text" name="editar_Telefono" id="editar_Telefono" class="form-control" placeholder="6565265147" required>
                    </div>

                    <div class="col-md-6">
                        <label for="editar_CorreoElectronico" class="form-label">Correo Electronico</label>
                        <input type="email" name="editar_CorreoElectronico" id="editar_CorreoElectronico" class="form-control" placeholder="hola@gmail.com" required>
                    </div>

                        </div>

                        <div class='modal-footer'>
                            <button type='submit' name='editar_datos' class='btn btn-primary'>Editar</button>
                        </div>

                    </form>


                </div>
            </div>
        </div>


        <!-- Modal Eliminar-->
        <div class='modal fade' style="top:58px !important;" id='eliminarModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>Confirmación</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Cerrar'></button>
                    </div>


                    <form action='eliminar.php' method='POST'>

                        <div class='modal-body text-start'>
                            <input type='hidden' name='eliminar_id' id='eliminar_id'>
                            <p>¿Estás seguro de que deseas eliminar estos datos?</p>
                        </div>

                        <div class='modal-footer'>
                            <button type='submit' name='eliminardatos' class='btn btn-primary'>Eliminar</button>
                        </div>

                    </form>


                </div>
            </div>
        </div>


        <!-- cerrar el contenedor -->
    </div>


    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Paquete de Javascript con arranque popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- Funcion Editar -->
    <script>
        $(document).ready(function() {
            $('.btnEditar').on('click', function() {
                $('#editarModal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#editar_Id_Proveedor').val(data[0]);
                // gak dipake, karena cuma increment number
                // $('#no').val(data[1]);
                $('#editar_Id_Producto').val(data[2]);
                $('#editar_NombreEmpresa').val(data[3]);
                $('#editar_Direccion').val(data[4]);
                $('#editar_Ciudad').val(data[5]);
                $('#editar_Estado').val(data[6]);
                $('#editar_Telefono').val(data[7]);
                $('#editar_CorreoElectronico').val(data[8]);
            });
        });
    </script>

    <!-- delete function -->
    <script>
        $(document).ready(function() {
            $('.btnEliminar').on('click', function() {
                $('#eliminarModal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#eliminar_id').val(data[0]);
            });
        });
    </script>

    <script>
        function clicking() {
            window.location.href = './index.php';
        }
    </script>
</body>

</html>