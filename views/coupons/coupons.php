<?php

include_once __DIR__ .  "../../../config.php";
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

    <?php include_once __DIR__ .  "/../../views/layouts/sidebar.php" ?>
    <?php include_once __DIR__ .  "/../../views/layouts/header.php" ?>

    <!-- [ Main Content ] start -->
    <div class="pc-container">
        <div class="container my-4">
            <!-- Botón "Añadir Producto" -->
            <div class="d-flex justify-content-start mb-4">
                <a href="/cupon/crear-cupon">
                    <button class="btn btn-secondary btn-prod-card">Añadir Cupón</button>
                </a>
            </div>

            <div class="row">
                <!-- Tarjeta de Cupón 1 -->
                <div class="col-md-6 mb-4">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <!-- Título e Ícono -->
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-primary text-white rounded-circle d-flex justify-content-center align-items-center"
                                    style="width: 50px; height: 50px; font-size: 1.2rem;">
                                    <i class="bi bi-ticket-perforated"></i>
                                </div>
                                <h5 class="ms-3 mb-0">Cupón: <strong>DESCUENTO50</strong></h5>
                            </div>

                            <!-- Información del Cupón -->
                            <p class="card-text">
                                <strong>Nombre:</strong> 50% de descuento <br>
                                <strong>Descuento:</strong> 50% <br>
                                <strong>Válido desde:</strong> 01/12/2023 <br>
                                <strong>Hasta:</strong> 31/12/2023 <br>
                                <strong>Monto mínimo:</strong> $100.00
                            </p>

                            <!-- Botones editar o eliminar -->
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#editCouponModal">
                                    <i class="bi bi-pencil-square"></i> Editar
                                </button>

                                <button class="btn btn-outline-danger btn-sm">
                                    <i class="bi bi-trash"></i> Eliminar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- segunda columna -->
                <div class="col-md-6 mb-4">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <!-- Título e Ícono -->
                            <div class="d-flex align-items-center mb-3">
                                <div class="bg-success text-white rounded-circle d-flex justify-content-center align-items-center"
                                    style="width: 50px; height: 50px; font-size: 1.2rem;">
                                    <i class="bi bi-gift"></i>
                                </div>
                                <h5 class="ms-3 mb-0">Cupón: <strong>ENVIOGRATIS</strong></h5>
                            </div>
                            <p class="card-text">
                                <strong>Nombre:</strong> Envío gratuito <br>
                                <strong>Descuento:</strong> 100% en envío <br>
                                <strong>Válido desde:</strong> 15/11/2023 <br>
                                <strong>Hasta:</strong> 30/11/2023 <br>
                                <strong>Monto mínimo:</strong> $200.00
                            </p>
                            <div class="d-flex justify-content-between">
                                <button class="btn btn-outline-primary btn-sm">
                                    <i class="bi bi-pencil-square"></i> Editar
                                </button>
                                <button class="btn btn-outline-danger btn-sm">
                                    <i class="bi bi-trash"></i> Eliminar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- [ Main Content ] end -->
    <?php include_once __DIR__ .  "/../coupons/modalCouponEdit.php" ?>
    <?php include_once __DIR__ .  "/../layouts/footer.php" ?>
    <?php include_once __DIR__ . "/../layouts/scripts.php" ?>

</body>
<!-- [Body] end -->

</html>