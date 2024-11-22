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
    $data_categorie = $controller->getCategories($request);

    /*       var_dump($data_categorie); 
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
                                <h2 class="mb-0">Categorías</h2>
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
                            <h5>Categorías</h5>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addCategorieModal">
                                Añadir Categoría
                            </button>

                        </div>
                        <div class="card-body table-border-style">
                            <div class="table-responsive">
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
                                        foreach ($data_categorie as $categorie) {
                                            // Validar que cada elemento sea un objeto y tenga las propiedades esperadas
                                            $name = isset($categorie->name) ? htmlspecialchars($categorie->name) : 'N/A';
                                            $description = isset($categorie->description) ? htmlspecialchars($categorie->description) : 'N/A';
                                            $slug = isset($categorie->slug) ? htmlspecialchars($categorie->slug) : 'N/A';

                                            echo "<tr>";
                                            echo "<td>{$name}</td>";
                                            echo "<td>{$description}</td>";
                                            echo "<td>{$slug}</td>";
                                            echo "<td>";
                                            if (isset($categorie->id)) {
                                                echo "<a href='#' class='btn btn-light-info btn-sm' data-bs-toggle='modal' data-bs-target='#editCategorieModal' data-id='{$categorie->id}' data-name='{$name}' data-description='{$description}' data-slug='{$slug}'>Editar</a>";
                                                echo "<a href='#' class='btn btn-light-danger btn-sm' onclick='openDeleteModal({$categorie->id})'>Eliminar</a>";
                                            }
                                            echo "</td>";
                                            echo "</tr>";
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

    <?php include_once __DIR__ . "/createCategorieModal.php" ?>
    <?php include_once __DIR__ . "/editCategorieModal.php" ?>
    <?php include_once __DIR__ . "/../../layouts/footer.php" ?>
    <!-- Required Js -->
    <?php include_once __DIR__ . "/../../layouts/scripts.php" ?>
</body>
<!-- [Body] end -->

</html>