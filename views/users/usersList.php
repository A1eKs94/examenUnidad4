<?php

include "../../config.php";

?>

<!doctype html>
<html lang="en">
<!-- [Head] start -->

<head>
    <?php include "../../views/layouts/head.php" ?>
</head>
<!-- [Head] end -->
<!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme="light">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ Sidebar Menu ] start -->
    <?php include "../../views/layouts/sidebar.php" ?>
    <!-- [ Sidebar Menu ] end -->
    <!-- [ Header Topbar ] start -->
    <?php include "../../views/layouts/header.php" ?>
    <!-- [ Header ] end -->



    <!-- [ Main Content ] start -->
    <section class="pc-container">
        <div class="pc-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Tabla de Usuarios</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->

            <div class="row">
                <!-- [ basic-table ] start -->
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Tabla de usuarios</h5>
                        </div>
                        <div class="card-body table-border-style">
                            <div class="table-responsive">
                                <table class="table" id="pc-dt-simple">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Correo</th>
                                            <th>Telefono</th>
                                            <th>Nivel</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <!-- Aqui va el id -->
                                            <td>1</td>
                                            <!-- Aqui va el nombre -->
                                            <td>Sergio</td>
                                            <!-- Aqui va el correo -->
                                            <td>sergio@gmail.com</td>
                                            <!-- Aqui va el telefono -->
                                            <td>123456</td>
                                            <!-- Aqui va el nivel -->
                                            <td>VIP</td>
                                            <!-- botones de acciones -->
                                            <td>
                                                <a href="" class="btn btn-light-primary btn-sm">Ver</a>
                                                <a href="" class="btn btn-light-info btn-sm">Editar</a>
                                                <a href="" class="btn btn-light-danger btn-sm">Eliminar</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ basic-table ] end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </section>
    <!-- [ Main Content ] end -->
    <?php include "../../views/layouts/footer.php" ?>
    <!-- Required Js -->
    <?php include "../../views/layouts/scripts.php" ?>



</body>
<!-- [Body] end -->

</html>