<?php

include_once __DIR__ . '/../../config.php';
session_start();

?>

<!doctype html>
<html lang="en">
<!-- [Head] start -->

<head>
    <?php include_once __DIR__ . '/../layouts/head.php' ?>
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
    <?php include_once __DIR__ . '/../layouts/sidebar.php' ?>
    <!-- [ Sidebar Menu ] end -->
    <!-- [ Header Topbar ] start -->

    <?php include_once __DIR__ . '/../layouts/header.php' ?>
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
                                <h2 class="mb-0">Tabla de Clientes</h2>
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
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5>Tabla de Clientes</h5>
                            <a href="<?= BASE_PATH ?>clients/crear/" class="btn btn-primary btn-sm">Añadir Cliente</a>
                        </div>
                        <div class="card-body table-border-style">
                            <div class="table-responsive">
                                <table class="table" id="pc-dt-simple">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Correo</th>
                                            <th>Teléfono</th>
                                            <th>Nivel</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <!-- Aquí va el id -->
                                            <td>1</td>
                                            <!-- Aquí va el nombre -->
                                            <td>Sergio</td>
                                            <!-- Aquí va el correo -->
                                            <td>sergio@gmail.com</td>
                                            <!-- Aquí va el teléfono -->
                                            <td>123456</td>
                                            <!-- Aquí va el nivel -->
                                            <td>VIP</td>
                                            <!-- Botones de acciones -->
                                            <td>
                                                <a href="<?= BASE_PATH ?>clients/ver/" class="btn btn-light-primary btn-sm">Ver</a>
                                                <a href="#"
                                                    class="btn btn-light-info btn-sm"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#editUserModal">
                                                    Editar
                                                </a>

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

    <?php include_once __DIR__ . "/../../views/layouts/modalUsersList.php" ?>
    <!-- [ Main Content ] end -->
    <?php include_once __DIR__ . "/../../views/layouts/footer.php" ?>
    <!-- Required Js -->
    <?php include_once __DIR__ . "/../../views/layouts/scripts.php" ?>

    <script>
        function loadUserData(id, name, email, phone, level) {
            document.getElementById('editUserId').value = id;
            document.getElementById('editUserName').value = name;
            document.getElementById('editUserEmail').value = email;
            document.getElementById('editUserPhone').value = phone;
            document.getElementById('editUserLevel').value = level;
        }
    </script>

</body>
<!-- [Body] end -->

</html>