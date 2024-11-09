<?php

include "config.php";
?>
<!doctype html>
<html lang="en">
<!-- [Head] start -->

<head>
    <?php include "views/layouts/head.php" ?>
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

    <div class="auth-main v2">
        <div class="bg-overlay bg-dark"></div>
        <div class="auth-wrapper">
            <div class="auth-form">
                <div class="card my-5 mx-3">
                    <div class="card-body">
                        <h4 class="f-w-500 mb-1">Iniciar sesión con tu correo</h4>
                        <p class="mb-3">Ingrese los datos solicitados</p>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="Correo electrónico" required name="email" />
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="floatingInput1" placeholder="Contraseña" required name="password" />
                        </div>
                        <div class="d-grid mt-4">
                            <a class="btn btn-primary" href="">Iniciar Sesión</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->

    <?php include "views/layouts/scripts.php" ?>


</body>
<!-- [Body] end -->

</html>