<?php

include_once __DIR__ . '/../config.php';
session_start();

?>
<!doctype html>
<html lang="en">
<!-- [Head] start -->

<head>
    <?php include_once __DIR__ . '/layouts/head.php' ?>
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
    <?php include_once __DIR__ . '/layouts/sidebar.php' ?>
    <?php include_once __DIR__ . '/layouts/header.php' ?>
    <!-- [ Sidebar Menu ] end -->
    <!-- [ Header Topbar ] start -->

    <!-- [ Header ] end -->



    <!-- [ Main Content ] start -->
    <div class="pc-container">
        <div class="pc-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Widgets</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between py-3">
                            <h5>Total de Ventas</h5>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <p class="text-muted mb-0">Ventas totales en el sistema</p>
                                    <div class="d-flex align-items-end mt-1">
                                        <h4 class="mb-0">375</h4>
                                    </div>
                                    <ul>
                                        <li>Última actualización: Hoy</li>
                                        <li>Usuarios activos: 15</li>
                                    </ul>
                                </div>
                                <div class="avtar bg-brand-color-2 text-white">
                                    <i class="ph-duotone ph-cube f-26"></i>
                                </div>
                            </div>
                            <hr>
                            <div>
                                <p class="text-muted small">Datos basados en la última semana.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between py-3">
                            <h5>Total de Descuento</h5>
                            <i class="ph-duotone ph-info f-20 ms-1" data-bs-toggle="tooltip" data-bs-title="Total de descuento aplicado al sistema... Hola! :D"></i>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-start my-3">
                                <h2>5.63</h2>
                                <p>%</p>
                                <i class="ti ti-arrow-up text-success"></i>
                            </div>
                            <div>
                                <p class="mb-2">Desglose:</p>
                                <ul>
                                    <li>Cupones utilizados: <b>3</b></li>
                                    <li>Descuento aplicado: <b>$250</b></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- [ Main Content ] end -->
    </div>
    <!-- [ Main Content ] end -->

    <!-- Required Js -->
    <?php include_once __DIR__ .  '/layouts/footer.php' ?>
    <?php include_once __DIR__ .  '/layouts/scripts.php' ?>

</body>
<!-- [Body] end -->

</html>