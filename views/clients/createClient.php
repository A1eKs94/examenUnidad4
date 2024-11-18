<?php

include_once __DIR__ . "/../../config.php";
session_start();

?>
<!doctype html>
<html lang="en">
<!-- [Head] start -->

<head>
    <?php include_once __DIR__ . "/../../views/layouts/head.php" ?>
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
    <?php include_once __DIR__ .  "/../../views/layouts/sidebar.php" ?>
    <!-- [ Sidebar Menu ] end -->
    <!-- [ Header Topbar ] start -->
    <?php include_once __DIR__ .  "/../../views/layouts/header.php" ?>
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
                                <h2 class="mb-0">Crear Cliente</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->


            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- [ form-element ] start -->
                <div class="col-lg-12">
                    <div class="card">
                        <div id="sticky-action" class="sticky-action">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-sm-6">
                                        <h5>Ingrese los datos</h5>
                                    </div>
                                    <div class="col-sm-6 text-sm-end mt-3 mt-sm-0">
                                        <button type="reset" class="btn btn-success">Crear</button>
                                        <button type="reset" class="btn btn-light-secondary">Limpiar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Nombre</label>
                                        <input type="text" class="form-control" placeholder="Ingrese su nombre" />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleInputEmail1">Correo electronico</label>
                                        <input
                                            type="email"
                                            class="form-control"
                                            id="exampleInputEmail1"
                                            aria-describedby="emailHelp"
                                            placeholder="Ingrese su correo" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Numero de telefono</label>
                                        <input type="text" class="form-control" placeholder="Ingrese su telefono" />
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="exampleInputPassword1">Contraseña</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese su contrasena" />
                                        <small id="passwordHelp" class="form-text text-muted">Nunca comparta su contraseña con nadie.</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- [ form-element ] end -->
                </div>
                <!-- [ Main Content ] end -->
            </div>
    </section>
    <!-- [ Main Content ] end -->
    <?php include_once __DIR__ . "/../../views/layouts/footer.php" ?>
    <!-- Required Js -->
    <?php include_once __DIR__ . "/../../views/layouts/scripts.php" ?>

</body>
<!-- [Body] end -->

</html>