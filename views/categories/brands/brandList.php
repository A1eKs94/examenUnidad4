<?php

include_once __DIR__ . '/../../../config.php';
session_start();

if (isset($_SESSION['profile']->data->id) && isset($_SESSION['token'])) {
    $user_id = $_SESSION['profile']->data->id;
    $token = $_SESSION['token'];

    require_once "../../../App/controllers/Controller.php";

    $request = (object)[
        'token' => $token
    ];
    $data_brand = $controller->getBrands($request);

    // var_dump($data_brand);
} else {
    echo "Error: error al traer los marcas";
    exit;
}
?>

<!doctype html>
<html lang="en">
<!-- [Head] start -->

<head>
    <?php include_once __DIR__ . '/../../../views/layouts/head.php' ?>
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
    <?php include_once __DIR__ . '/../../../views/layouts/header.php' ?>
    <!-- [ Sidebar Menu ] start -->
    <?php include_once __DIR__ . '/../../../views/layouts/sidebar.php' ?>
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
                                <h2 class="mb-0">Marcas</h2>
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
                            <h5>Marcas</h5>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addBrandModal">
                                Añadir Marca
                            </button>

                        </div>
                        <div class="card-body table-border-style">
                            <div class="table-responsive">

                                <form id="deleteBrandForm" action="<?php echo BASE_PATH; ?>api" method="POST" style="display: none;">
                                    <input type="hidden" name="action" value="deleteBrand">
                                    <input type="hidden" name="redirect_url" value="categorias/marcas/">
                                    <input type="hidden" name="token" value="<?php echo $token; ?>">
                                    <input type="hidden" name="id" id="brandIdToDelete">
                                </form>

                                <table class="table" id="pc-dt-simple">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Descrpción</th>
                                            <th>Slug</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (is_array($data_brand)) {
                                            foreach ($data_brand as $brand) {
                                                // Validar que cada elemento sea un objeto y tenga las propiedades esperadas
                                                $name = isset($brand->name) ? htmlspecialchars($brand->name) : 'N/A';
                                                $description = isset($brand->description) ? htmlspecialchars($brand->description) : 'N/A';
                                                $slug = isset($brand->slug) ? htmlspecialchars($brand->slug) : 'N/A';

                                                echo "<tr>";
                                                echo "<td>{$name}</td>";
                                                echo "<td>{$description}</td>";
                                                echo "<td>{$slug}</td>";
                                                echo "<td>";
                                                if (isset($brand->id)) {
                                                    echo "<a href='#' class='btn btn-light-info btn-sm' data-bs-toggle='modal' data-bs-target='#editBrandModal' data-id='{$brand->id}' data-name='{$name}' data-description='{$description}' data-slug='{$slug}'>Editar</a>";
                                                    echo "<a href='#' class='btn btn-light-danger btn-sm' onclick='openDeleteModal({$brand->id})'>Eliminar</a>";
                                                }
                                                echo "</td>";
                                                echo "</tr>";
                                            }
                                        } else {
                                            echo "<tr><td colspan='4'>No se encontraron marcas.</td></tr>";
                                        }
                                        ?>

                                        <!-- Puedes añadir más filas aquí -->
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

    <?php include_once __DIR__ . "/createBrandModal.php" ?>
    <?php include_once __DIR__ . "/editBrandModal.php" ?>
    <?php include_once __DIR__ . "/../../layouts/footer.php" ?>
    <!-- Required Js -->
    <?php include_once __DIR__ . "/../../layouts/scripts.php" ?>
    <script>
        var brandIdToDelete = null;

        function loadBrandData(id, name, description, slug) {
            document.getElementById('editBrandId').value = id;
            document.getElementById('editBrandName').value = name;
            document.getElementById('editBrandDescription').value = description;
            document.getElementById('editBrandSlug').value = slug;
        }


        function openDeleteModal(userId) {
            brandIdToDelete = userId;
            document.getElementById('deleteModal').style.display = "block";
        }

        function closeDeleteModal() {
            document.getElementById('deleteModal').style.display = "none";
        }

        function confirmDelete() {
            document.getElementById('brandIdToDelete').value = brandIdToDelete;

            document.getElementById('deleteBrandForm').submit();

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