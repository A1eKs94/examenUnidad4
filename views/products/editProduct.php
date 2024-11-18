<?php include __DIR__ . "../../../config.php"; ?>
<!doctype html>
<html lang="en">

<head>
    <?php include __DIR__ . "../../layouts/head.php"; ?>
</head>

<body data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme="light">
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>

    <?php include __DIR__ . "../../layouts/sidebar.php"; ?>
    <?php include __DIR__ . "../../layouts/header.php"; ?>

    <div class="pc-container">
        <div class="pc-content">
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h2 class="mb-0">Editar Producto</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h3>Información del Producto</h3>
                            <div class="mb-3">
                                <label for="product-name" class="form-label">Nombre del Producto</label>
                                <input type="text" id="product-name" class="form-control" placeholder="Nombre del Producto">
                            </div>
                            <div class="mb-3">
                                <label for="product-slug" class="form-label">Slug</label>
                                <input type="text" id="product-slug" class="form-control" placeholder="producto-slug">
                            </div>
                            <div class="mb-3">
                                <label for="product-description" class="form-label">Descripción</label>
                                <textarea id="product-description" class="form-control" rows="4" placeholder="Descripción del Producto"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h3>Categorías y Marcas</h3>
                            <div class="mb-3">
                                <label for="product-category" class="form-label">Categorías</label>
                                <select id="product-category" class="form-select">
                                    <option value="1">Categoría 1</option>
                                    <option value="2">Categoría 2</option>
                                    <option value="3">Categoría 3</option>
                                </select>
                                <button class="btn btn-link mt-2">Añadir nueva categoría</button>
                            </div>

                            <div class="mb-3">
                                <label for="product-tag" class="form-label">Etiquetas</label>
                                <select id="product-tag" class="form-select">
                                    <option value="1">Etiqueta 1</option>
                                    <option value="2">Etiqueta 2</option>
                                    <option value="3">Etiqueta 3</option>
                                </select>
                                <button class="btn btn-link mt-2">Añadir etiqueta nueva</button>
                            </div>

                            <h3 class="mt-4">Marca</h3>
                            <div class="mb-3">
                                <input type="text" id="product-brands" class="form-control" placeholder="Marca">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3>Imágenes del Producto</h3>
                            <div class="mb-3">
                                <input type="file" class="form-control" id="product-image" accept="image/*">
                            </div>
                            <div class="d-flex mt-3 flex-wrap gap-3">
                                <!-- Imagen 1 -->
                                <div class="position-relative" style="width: 120px; height: 120px;">
                                    <img src="<?= BASE_PATH ?>assets/images/productDefault.png" alt="Imagen del Producto" class="rounded" style="width: 100%; height: 100%; object-fit: cover;">
                                    <button class="btn btn-danger btn-sm position-absolute top-0 end-0 m-1 p-0" style="width: 24px; height: 24px; border-radius: 50%;">&times;</button>
                                </div>

                                <!-- Imagen 2 -->
                                <div class="position-relative" style="width: 120px; height: 120px;">
                                    <img src="<?= BASE_PATH ?>assets/images/productDefault.png" alt="Imagen del Producto" class="rounded" style="width: 100%; height: 100%; object-fit: cover;">
                                    <button class="btn btn-danger btn-sm position-absolute top-0 end-0 m-1 p-0" style="width: 24px; height: 24px; border-radius: 50%;">&times;</button>
                                </div>

                                <!-- Imagen 3 -->
                                <div class="position-relative" style="width: 120px; height: 120px;">
                                    <img src="<?= BASE_PATH ?>assets/images/productDefault.png" alt="Imagen del Producto" class="rounded" style="width: 100%; height: 100%; object-fit: cover;">
                                    <button class="btn btn-danger btn-sm position-absolute top-0 end-0 m-1 p-0" style="width: 24px; height: 24px; border-radius: 50%;">&times;</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Botones guardar y cancelar -->
            <div class="row mt-4">
                <div class="col-12">
                    <div class="d-flex justify-content-end gap-3">
                        <button class="btn btn-outline-secondary btn-lg">Cancelar</button>
                        <button class="btn btn-primary btn-lg">Guardar Cambios</button>
                    </div>
                </div>
            </div>

        </div>

        <?php include __DIR__ . "../../layouts/footer.php"; ?>
        <?php include __DIR__ . "../../layouts/scripts.php"; ?>

</body>

</html>