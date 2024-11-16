<?php

include_once __DIR__ .  "/config.php";

session_start();

if (isset($_SESSION['error_message'])) {
    $error_message = $_SESSION['error_message'];
    unset($_SESSION['error_message']);
} else {
    $error_message = '';
}

?>
<!doctype html>
<html lang="en">
<!-- [Head] start -->

<head>
    <?php include_once __DIR__ . "/views/layouts/head.php" ?>
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
                        <?php if (!empty($error_message)): ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $error_message; ?> datos incorrectos
                            </div>
                        <?php endif; ?>
                        <form action="<?php echo BASE_PATH; ?>api" method="POST">
                            <input type="hidden" name="action" value="login">
                            <div class="mb-3">
                                <input type="email" class="form-control" id="floatingInput" placeholder="Correo electrónico" required name="email" />
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" id="floatingInput1" placeholder="Contraseña" required name="password" />
                            </div>
                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->

    <?php include_once __DIR__ . "/views/layouts/scripts.php" ?>


</body>
<!-- [Body] end -->

</html>