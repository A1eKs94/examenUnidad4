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
                                        <?php if (is_array($data_brand) || is_object($data_brand)) {
                                        foreach ($data_brand as $brand) {
                                        echo "<tr>";
                                            echo "<td>" . htmlspecialchars($brand->name) . "</td>";
                                            echo "<td>" . htmlspecialchars($brand->description) . "</td>";
                                            echo "<td>" . htmlspecialchars($brand->slug) . "</td>";
                                            echo "<td>";
                                                echo "<a href='#' class='btn btn-light-info btn-sm' data-bs-toggle='modal' data-bs-target='#editBrandModal' data-id='" . $brand->id . "' data-name='" . $brand->name . "' data-description='" . $brand->description . "' data-slug='" . $brand->slug . "'>Editar</a>";
                                                echo "<a href='#' class='btn btn-light-danger btn-sm' onclick='openDeleteModal(" . $brand->id . ")'>Eliminar</a>";
                                                echo "</td>";
                                            echo "</tr>";
                                        }
                                        } else {
                                        echo "<tr>
                                            <td colspan='4'>No se encontraron marcas.</td>
                                        </tr>";
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


</body>
<!-- [Body] end -->

</html>