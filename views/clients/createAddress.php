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
                <div class="col-md-8 col-lg-7">
                    <div class="card">
                        <div class="card-header">
                            <h4>Añadir Dirección</h4>
                        </div>
                        <div class="card-body">
                            <form action="process_add_address.php" method="POST" id="addAddressForm">
                                <div class="mb-3">
                                    <label for="street" class="form-label">Calle y Número</label>
                                    <input type="text" class="form-control" id="street" name="street_and_use_number" placeholder="Ingrese calle y numero" required>
                                </div>
                                <div class="mb-3">
                                    <label for="apartment" class="form-label">Apartamento (Opcional)</label>
                                    <input type="text" class="form-control" id="apartment" name="apartment" placeholder="Ingrese su apartamento">
                                </div>
                                <div class="mb-3">
                                    <label for="postalCode" class="form-label">Código Postal</label>
                                    <input type="text" class="form-control" id="postalCode" name="postal_code" placeholder="Codigo Postal" required>
                                </div>
                                <div class="mb-3">
                                    <label for="city" class="form-label">Ciudad</label>
                                    <input type="text" class="form-control" id="city" name="city" placeholder="Ciudad" required>
                                </div>
                                <div class="mb-3">
                                    <label for="province" class="form-label">Provincia</label>
                                    <input type="text" class="form-control" id="province" name="province" placeholder="Provincia" required>
                                </div>
                                <div class="mb-3">
                                    <label for="phoneNumber" class="form-label">Número de Teléfono</label>
                                    <input type="text" class="form-control" id="phoneNumber" name="phone_number" placeholder="Número de telefono" required>
                                </div>
                                <div class="mb-3">
                                    <label for="isBilling" class="form-label">¿Es dirección de facturación?</label>
                                    <select class="form-select" id="isBilling" name="is_billing_address" required>
                                        <option value="1">Sí</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary">Guardar Dirección</button>
                                    <a href="previous_page.php" class="btn btn-secondary ms-2">Cancelar</a>
                                </div>
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