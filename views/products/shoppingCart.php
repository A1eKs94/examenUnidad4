<?php 
include_once __DIR__ . "../../../config.php"; 

session_start();
?>
<!doctype html>
<html lang="en">
<!-- [Head] start -->

<head>
    <?php include_once __DIR__ . "../../layouts/head.php"; ?>
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

    <?php include_once __DIR__ . "../../layouts/sidebar.php"; ?>
    <?php include_once __DIR__ . "../../layouts/header.php"; ?>

    <!-- [ Main Content ] start -->
    <div class="pc-container">
        <div class="pc-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Carrito de Compras</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->

            <!-- [ Main Content ] start -->
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="mb-4">Carrito de Compras</h3>

                            <!-- Lista de Productos -->
                            <div class="table-responsive">
                                <table class="table table-bordered align-middle">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Producto</th>
                                            <th>Precio</th>
                                            <th>Cantidad</th>
                                            <th>Subtotal</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Producto 1 -->
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="../assets/images/productDefault.png" alt="Producto" class="img-fluid" style="width: 60px; height: 60px; object-fit: cover; margin-right: 10px;" />
                                                    <div>
                                                        <h5 class="mb-0">Producto 1</h5>
                                                        <span class="text-muted">Categoría 1</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$50.00</td>
                                            <td>
                                                <input type="number" class="form-control w-50" value="1" min="1" />
                                            </td>
                                            <td>$50.00</td>
                                            <td>
                                                <button class="btn btn-danger btn-sm">Eliminar</button>
                                            </td>
                                        </tr>

                                        <!-- Producto 2 -->
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="../assets/images/productDefault.png" alt="Producto" class="img-fluid" style="width: 60px; height: 60px; object-fit: cover; margin-right: 10px;" />
                                                    <div>
                                                        <h5 class="mb-0">Producto 2</h5>
                                                        <span class="text-muted">Categoría 2</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>$30.00</td>
                                            <td>
                                                <input type="number" class="form-control w-50" value="2" min="1" />
                                            </td>
                                            <td>$60.00</td>
                                            <td>
                                                <button class="btn btn-danger btn-sm">Eliminar</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Total y Acciones -->
                            <div class="d-flex justify-content-between align-items-center mt-4">
                                <h4>Total: <span class="text-primary">$110.00</span></h4>
                                <div class="d-flex gap-3">
                                    <button class="btn btn-outline-secondary">Seguir Comprando</button>
                                    <button class="btn btn-primary">Proceder al Pago</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
    <!-- [ Main Content ] end -->

    <?php include_once __DIR__ . "../../layouts/footer.php"; ?>
    <?php include_once __DIR__ . "../../layouts/scripts.php"; ?>

</body>
<!-- [Body] end -->

</html>