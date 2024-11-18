<?php
include_once __DIR__ .  "/../../config.php";
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
    <div class="pc-container">
        <div class="pc-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Detalles de Cliente</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->

            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- [ sample-page ] start -->
                <div class="col-sm-12">
                    <div class="row">

                        <div class="col-lg-5 col-xxl-3">
                            <div class="card overflow-hidden">
                                <div class="card-body position-relative">
                                    <div class="text-center mt-3">
                                        <div class="chat-avtar d-inline-flex mx-auto">
                                            <img
                                                class="rounded-circle img-fluid wid-90 img-thumbnail"
                                                src="<?= BASE_PATH ?>assets/images/user-default.jpg"
                                                alt="User image" />
                                        </div>
                                        <!-- Aqui va el nombre de usuario -->
                                        <h5 class="mb-0">William Bond</h5>
                                    </div>
                                </div>
                                <!-- Aqui va el menu de opciones -->
                                <div
                                    class="nav flex-column nav-pills list-group list-group-flush account-pills mb-0"
                                    id="user-set-tab"
                                    role="tablist"
                                    aria-orientation="vertical">
                                    <a
                                        class="nav-link list-group-item list-group-item-action active"
                                        id="user-set-profile-tab"
                                        data-bs-toggle="pill"
                                        href="#user-set-profile"
                                        role="tab"
                                        aria-controls="user-set-profile"
                                        aria-selected="true">
                                        <span class="f-w-500"><i class="ph-duotone ph-user-circle m-r-10"></i>Descripción General</span>
                                    </a>
                                    <a
                                        class="nav-link list-group-item list-group-item-action"
                                        id="user-set-orders-tab"
                                        data-bs-toggle="pill"
                                        href="#user-set-orders"
                                        role="tab"
                                        aria-controls="user-set-orders"
                                        aria-selected="false">
                                        <span class="f-w-500"><i class="ph-duotone ph-notebook m-r-10"></i>Ordenes</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-7 col-xxl-9">
                            <div class="tab-content" id="user-set-tabContent">
                                <div class="tab-pane fade show active" id="user-set-profile" role="tabpanel" aria-labelledby="user-set-profile-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Detalles del Cliente</h4>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item px-0 pt-0">
                                                    <div class="row">
                                                        <!-- Aqui va el nombre de usuario -->
                                                        <div class="col-md-6">
                                                            <p class="mb-1 text-muted">Nombre</p>
                                                            <p class="mb-0">Anshan Handgun</p>
                                                        </div>
                                                        <!-- Aqui va el nivel que tiene el usuario 'vip, premiun o normal'-->
                                                        <div class="col-md-6">
                                                            <p class="mb-1 text-muted">Nivel</p>
                                                            <p class="mb-0">Premiun</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item px-0">
                                                    <div class="row">
                                                        <!-- Aqui va el telefono del usuario -->
                                                        <div class="col-md-6">
                                                            <p class="mb-1 text-muted">Número de Teléfono</p>
                                                            <p class="mb-0">(+1-876) 8654 239 581</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item px-0">
                                                    <div class="row">
                                                        <!-- Aqui va el correo del usuario -->
                                                        <div class="col-md-6">
                                                            <p class="mb-1 text-muted">Email</p>
                                                            <p class="mb-0">anshan.dh81@gmail.com</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade " id="user-set-orders" role="tabpanel" aria-labelledby="user-set-orders-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Ordenes Realizadas</h4>
                                        </div>

                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item px-0 pt-0">
                                                    <div class="row">
                                                        <!-- Aqui va el nombre del producto -->
                                                        <div class="col-md-6">
                                                            <h4>Lavadora</h4>
                                                            <!-- Aqui el precio del producto -->
                                                            <p class="mb-0">$21441</p>
                                                        </div>
                                                        <!-- Aqui va el folio de la orden'-->
                                                        <div class="col-md-6">
                                                            <p class="mb-1 text-muted">Folio</p>
                                                            <p class="mb-0">123456</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item px-0">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <!-- Aqui va el tipo de pago -->
                                                            <p class="mb-1 text-muted">Tipo de pago</p>
                                                            <p class="mb-0">contado etc</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <!-- Estado de la orden "pendiente de pago, cancelada, enviada, entregada, abandonada, etc" -->
                                                            <p class="mb-1 text-muted">Estado</p>
                                                            <p class="mb-0">Pagado</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item px-0">
                                                    <div class="row">
                                                        <div class="col-md-4">
                                                            <!-- Aqui va la direccion -->
                                                            <p class="mb-1 text-muted">Dirección</p>
                                                            <p class="mb-0">Calle 123</p>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <p class="mb-1 text-muted">Codigo Postal</p>
                                                            <p class="mb-0">20020</p>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <p class="mb-1 text-muted">Ciudad</p>
                                                            <p class="mb-0">La Paz</p>
                                                        </div>

                                                    </div>
                                                </li>
                                                <!-- Aqui va el cupon aplicado -->
                                                <li class="list-group-item px-0 pb-0">
                                                    <p class="mb-1 text-muted">Cupon aplicado</p>
                                                    <p class="mb-0">20% de descuento</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ sample-page ] end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>

    <!-- [ Main Content ] end -->

    <?php include_once __DIR__ . "/../layouts/footer.php" ?>


    <!-- Required Js -->

    <?php include_once __DIR__ . "/../layouts/scripts.php" ?>

</body>
<!-- [Body] end -->

</html>