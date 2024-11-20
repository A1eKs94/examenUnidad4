<?php

include_once __DIR__ . '/../../config.php';
session_start();

if (isset($_SESSION['profile']->data->id) && isset($_SESSION['token'])) {
    $user_id = $_SESSION['profile']->data->id;
    $token = $_SESSION['token'];

    require_once "../../App/controllers/Controller.php";

    $request = (object)[
        'token' => $token
    ];
    $data_user = $controller->getUsers($request);

    //var_dump($user_data); 
} else {
    echo "Error: error al traer los usuarios";
    exit;
}

?>

<!doctype html>
<html lang="en">
<!-- [Head] start -->

<head>
    <?php include_once __DIR__ . '/../layouts/head.php' ?>
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
    <?php include_once __DIR__ . '/../layouts/sidebar.php' ?>
    <!-- [ Sidebar Menu ] end -->
    <!-- [ Header Topbar ] start -->

    <?php include_once __DIR__ . '/../layouts/header.php' ?>
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
                                <h2 class="mb-0">Tabla de Usuarios</h2>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->

            <div class="row">
                <!-- [ basic-table ] start -->
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5>Tabla de usuarios</h5>
                            <a href="<?= BASE_PATH ?>users/crear/" class="btn btn-primary btn-sm">Añadir Usuario</a>
                        </div>
                        <div class="card-body table-border-style">
                        <input type="hidden" name="id" value="<?php echo  $user_id; ?>">

                            <div class="table-responsive">
                        
                            <form id="deleteUserForm" action="<?php echo BASE_PATH; ?>api" method="POST" style="display: none;">
                                <input type="hidden" name="action" value="deleteUser">
                                <input type="hidden" name="redirect_url" value="users/list/">
                                <input type="hidden" name="token" value="<?php echo $token; ?>">
                                <input type="hidden" name="id" id="userIdToDelete"> 
                            </form>

                                                                
                            <table class="table" id="pc-dt-simple">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Correo</th>
                                        <th>Teléfono</th>
                                        <th>Nivel</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($data_user as $user) {
                                        echo "<tr>";
                                        echo "<td>" . htmlspecialchars($user->id) . "</td>";
                                        echo "<td>" . htmlspecialchars($user->name) . "</td>";
                                        echo "<td>" . htmlspecialchars($user->email) . "</td>";
                                        echo "<td>" . (isset($user->phone_number) ? htmlspecialchars($user->phone_number) : 'No disponible') . "</td>";
                                        echo "<td>" . htmlspecialchars($user->role) . "</td>";
                                        
                                        echo "<td>";
                                        echo "<a href='" . BASE_PATH . "users/ver/?id=" . $user->id . "' class='btn btn-light-primary btn-sm'>Ver</a>";
                                        echo "<a href='#' class='btn btn-light-info btn-sm' data-bs-toggle='modal' data-bs-target='#editUserModal' data-id='" . $user->id . "' data-name='" . $user->name . "' data-lastname='" . $user->lastname . "' data-email='" . $user->email . "' data-phone='" . $user->phone_number . "' data-image='" . $user->avatar . "'>Editar</a>";
                                        echo "<a href='#' class='btn btn-light-danger btn-sm' onclick='setUserIdToDelete(" . $user->id . ")'>Eliminar</a>";
                                        echo "</td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>

                            
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ basic-table ] end -->
            </div>

            <!-- [ Main Content ] end -->
        </div>
    </section>

    <?php include_once __DIR__ . "/../../views/layouts/modalUsersList.php" ?>
    <!-- [ Main Content ] end -->
    <?php include_once __DIR__ . "/../../views/layouts/footer.php" ?>
    <!-- Required Js -->
    <?php include_once __DIR__ . "/../../views/layouts/scripts.php" ?>

    <script>
        function loadUserData(id, name, lastname, email, phone, level) {
            document.getElementById('editUserId').value = id;
            document.getElementById('editUserName').value = name;
            document.getElementById('editLastName').value = lastname;
            document.getElementById('editUserEmail').value = email;
            document.getElementById('editUserPhone').value = phone;
            document.getElementById('editUserLevel').value = level;
        }


        function setUserIdToDelete(userId) {
            document.getElementById('userIdToDelete').value = userId;
            
            document.getElementById('deleteUserForm').submit();
        }
    </script>

</body>
<!-- [Body] end -->

</html>