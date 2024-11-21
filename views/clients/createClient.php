<?php

include_once __DIR__ . '/../../config.php';
session_start();

if (isset($_SESSION['profile']->data->id) && isset($_SESSION['token'])) {
    $user_id = $_SESSION['profile']->data->id;
    $token = $_SESSION['token'];
    $created_by = $_SESSION['profile']->data->created_by;
    require_once "../../App/controllers/Controller.php";

    /*  $request = (object)[
        'token' => $token
    ];
    $data_user = $controller->getUsers($request);
 */
    //var_dump($user_data); 
} else {
    echo "Error: error no hay token o id";
    exit;
}

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

                    <form id="createClient" action="<?php echo BASE_PATH; ?>api" method="POST">
                        <input type="hidden" name="action" value="createClient">
                        <input type="hidden" name="redirect_url" value="clients/list/">
                        <input type="hidden" name="token" value="<?php echo  $token; ?>">
                        <input type="hidden" name="created_by" value="<?php echo  $created_by; ?>">

                        <div class="card">
                            <div id="sticky-action" class="sticky-action">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col-sm-6">
                                            <h5>Ingrese los datos</h5>
                                        </div>
                                        <div class="col-sm-6 text-sm-end mt-3 mt-sm-0">
                                            <button type="submit" class="btn btn-success">Crear</button>
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
                                            <input type="text" class="form-control" id="inputName" name="name" placeholder="Ingrese su nombre" required />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleInputEmail1">Correo electronico</label>
                                            <input
                                                type="email"
                                                class="form-control"
                                                name="email"
                                                id="inputEmail"
                                                aria-describedby="emailHelp"
                                                placeholder="Ingrese su correo"
                                                required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Número de teléfono</label>
                                            <input
                                                type="number"
                                                class="form-control"
                                                id="inputPhoneNumber"
                                                name="phone_number"
                                                placeholder="Ingresa tu número de teléfono"
                                                required
                                                min="1000000000"
                                                max="9999999999" />
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleInputPassword1">Contraseña</label>
                                            <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Ingrese su contrasena" required />
                                            <small id="passwordHelp" class="form-text text-muted">Nunca comparta su contraseña con nadie.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- [ form-element ] end -->
                </div>
                <!-- [ Main Content ] end -->
            </div>
    </section>
    <!-- [ Main Content ] end -->
    <?php include_once __DIR__ . "/../../views/layouts/footer.php" ?>
    <!-- Required Js -->
    <?php include_once __DIR__ . "/../../views/layouts/scripts.php" ?>

    <script>
        const inputName = document.getElementById('inputName');

        inputName.addEventListener('input', (event) => {
            const value = event.target.value;
            event.target.value = value.replace(/[^a-zA-ZñÑ\s]/g, '');
        });

        const inputLastName = document.getElementById('inputLastName');

        inputLastName.addEventListener('input', (event) => {
            const value = event.target.value;
            event.target.value = value.replace(/[^a-zA-ZñÑ\s]/g, '');
        });

        const inputPhoneNumber = document.getElementById('inputPhoneNumber');
        const form = document.getElementById('createClient');

        // Validar en el evento submit
        form.addEventListener('submit', (event) => {
            const phoneNumber = inputPhoneNumber.value;

            // Verificar si el número tiene exactamente 10 dígitos
            if (phoneNumber.length !== 10) {
                event.preventDefault();
                Swal.fire({
                    icon: "warning",
                    title: "Oops...",
                    text: "El número de teléfono debe contener exactamente 10 dígitos.",
                });
            }
        });
    </script>

</body>
<!-- [Body] end -->

</html>

<script>
    function vaciarCampos() {

        document.getElementById("inputName").value = '';
        document.getElementById("inputEmail").value = '';
        document.getElementById("inputPhoneNumber").value = '';
        document.getElementById("inputPassword").value = '';


    }
</script>