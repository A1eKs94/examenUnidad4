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
    $data_client = $controller->getClients($request);

/*       var_dump($data_client); 
    exit;   */
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
                                <h2 class="mb-0">Tabla de Clientes</h2>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->

            <div class="row">
                <div id="deleteModal" class="modalEliminar" style="display: none;">
                    <div class="modal-content-eliminar">
                        <span class="close" onclick="closeDeleteModal()">&times;</span>
                        <h2>Confirmar eliminación</h2>
                        <p>¿Estás seguro de que deseas eliminar este cliente?</p>
                        <button onclick="confirmDelete()">Sí, eliminar</button>
                        <button onclick="closeDeleteModal()">Cancelar</button>
                    </div>
                </div>
                <!-- [ basic-table ] start -->
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5>Tabla de clientes</h5>
                            <a href="<?= BASE_PATH ?>clients/crear/" class="btn btn-primary btn-sm">Añadir Cliente</a>
                        </div>
                        <div class="card-body table-border-style">
                        <input type="hidden" name="id" value="<?php echo  $user_id; ?>">

                            <div class="table-responsive">
                        
                            <form id="deleteClientForm" action="<?php echo BASE_PATH; ?>api" method="POST" style="display: none;">
                                <input type="hidden" name="action" value="deleteClient">
                                <input type="hidden" name="redirect_url" value="clients/list/">
                                <input type="hidden" name="token" value="<?php echo $token; ?>">
                                <input type="hidden" name="id" id="clientIdToDelete"> 
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
                                    foreach ($data_client as $client) {
                                        echo "<tr>";
                                        echo "<td>" . htmlspecialchars($client->id) . "</td>";
                                        echo "<td>" . htmlspecialchars($client->name) . "</td>";
                                        echo "<td>" . htmlspecialchars($client->email) . "</td>";
                                        echo "<td>" . (isset($client->phone_number) ? htmlspecialchars($client->phone_number) : 'No disponible') . "</td>";
                                      /*   echo "<td>" . htmlspecialchars($client->role) . "</td>"; */
                                        
                                        echo "<td>";
                                        echo "<a href='" . BASE_PATH . "clients/ver/?id=" . $client->id . "' class='btn btn-light-primary btn-sm'>Ver</a>";
                                        echo "<a href='#' class='btn btn-light-info btn-sm' data-bs-toggle='modal' data-bs-target='#editClientsModal' data-id='" . $client->id . "' data-name='" . $client->name . "' data-email='" . $client->email . "' data-phone='" . $client->phone_number . "' data-level-id='" . $client->level_id . "'>Editar</a>";
                                        echo "<a href='#' class='btn btn-light-danger btn-sm' onclick='openDeleteModal(" . $client->id . ")'>Eliminar</a>";
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

    <?php include_once __DIR__ . "/../../views/layouts/modalClientList.php" ?>
    <!-- [ Main Content ] end -->
    <?php include_once __DIR__ . "/../../views/layouts/footer.php" ?>
    <!-- Required Js -->
    <?php include_once __DIR__ . "/../../views/layouts/scripts.php" ?>

    <script>

        var clientIdToDelete = null; 

        function loadUserData(id, name, email, phone, level) {
            document.getElementById('editUserId').value = id;
            document.getElementById('editUserName').value = name;
            document.getElementById('editUserEmail').value = email;
            document.getElementById('editUserPhone').value = phone;
            document.getElementById('editUserLevel').value = level;
        }


        function openDeleteModal(userId) {
            clientIdToDelete = userId; 
            document.getElementById('deleteModal').style.display = "block";
        }

        function closeDeleteModal() {
         document.getElementById('deleteModal').style.display = "none"; 
        }

        function confirmDelete() {
            document.getElementById('clientIdToDelete').value = clientIdToDelete;
            
            document.getElementById('deleteClientForm').submit();

            closeDeleteModal();
        }
    </script>


    <style>
        .modalEliminar {
        display: none; 
        position: fixed;  
        z-index: 1050; 
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0); 
        background-color: rgba(0, 0, 0, 0.4); 
        }

        .modal-content-eliminar {
        background-color: #fefefe;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        max-width: 500px;
        text-align: center;
        position: relative;
        }

        .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        }

        .close:hover,
        .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
        }

        button {
        padding: 10px 20px;
        margin: 10px;
        font-size: 16px;
        cursor: pointer;
        }

        button:hover {
        background-color: #f44336;
        color: white;
        }
    </style>

</body>
<!-- [Body] end -->

</html>