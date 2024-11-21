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
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="card">
                        <div class="card-header text-center">
                            <h5>Crear Cupón</h5>
                        </div>
                        <div class="card-body">
                            <form action="path_to_your_backend_logic.php" method="POST">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Nombre del cupón:</label>
                                    <input type="text" id="name" name="name" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="code" class="form-label">Código del cupón:</label>
                                    <input type="text" id="code" name="code" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="percentage_discount" class="form-label">Descuento (%):</label>
                                    <input type="number" id="percentage_discount" name="percentage_discount" class="form-control" min="0" max="100">
                                </div>
                                <div class="mb-3">
                                    <label for="min_amount_required" class="form-label">Monto mínimo requerido:</label>
                                    <input type="number" id="min_amount_required" name="min_amount_required" class="form-control" min="0">
                                </div>
                                <div class="mb-3">
                                    <label for="min_product_required" class="form-label">Cantidad mínima de productos:</label>
                                    <input type="number" id="min_product_required" name="min_product_required" class="form-control" min="1">
                                </div>
                                <div class="mb-3">
                                    <label for="start_date" class="form-label">Fecha de inicio:</label>
                                    <input type="date" id="start_date" name="start_date" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="end_date" class="form-label">Fecha de finalización:</label>
                                    <input type="date" id="end_date" name="end_date" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="max_uses" class="form-label">Usos máximos:</label>
                                    <input type="number" id="max_uses" name="max_uses" class="form-control" min="0">
                                </div>
                                <div class="form-check mb-3">
                                    <input type="checkbox" class="form-check-input" id="status" name="status" checked>
                                    <label for="status" class="form-check-label">Activo</label>
                                </div>
                                <div class="form-check mb-3">
                                    <input type="checkbox" id="valid_only_first_purchase" name="valid_only_first_purchase" class="form-check-input">
                                    <label for="valid_only_first_purchase" class="form-check-label">Válido solo para la primera compra</label>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Guardar cupón</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- [ Main Content ] end -->

    <?php include_once __DIR__ .  "/../layouts/footer.php" ?>
    <?php include_once __DIR__ . "/../layouts/scripts.php" ?>

</body>
<!-- [Body] end -->

</html>