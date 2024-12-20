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
    <div class="pc-content">
      <!-- [ breadcrumb ] start -->
      <div class="page-header">
        <div class="page-block">
          <div class="row align-items-center">
            <div class="col-md-12">
              <div class="page-header-title">
                <h2 class="mb-0">Añadir Producto</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- [ breadcrumb ] end -->

      <!-- [ Main Content ] start -->
      <div class="row">
        <!-- [ sample-page ] start -->
        <div class="col-xl-6">
          <div class="card">
            <div class="card-header">
              <h5>Descripción de producto</h5>
            </div>
            <div class="card-body">
              <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" class="form-control" placeholder="Nombre del producto" name="name" />
              </div>
              <div class="mb-3">
                <label class="form-label">Marca</label>
                <select class="form-control" name="brand_id" required>
                  <option value="">Selecciona una marca</option>
                </select>
              </div>
              <div class="mb-3">
                <label class="form-label">Características</label>
                <input type="text" class="form-control" placeholder="Características del producto" name="features" />
              </div>
              <div class="mb-3">
                <label class="form-label">Slug</label>
                <input type="text" class="form-control" placeholder="Slug del producto" name="slug" />
              </div>
              <div class="mb-3">
                <label class="form-label">Descripción</label>
                <textarea class="form-control" placeholder="Descripción del producto" name="description"></textarea>
              </div>
              <div class="mb-3">
                <label class="form-label">Categoría</label>
                <div class="input-group">
                  <select class="form-control" name="category_id" required>
                    <!-- Opciones de categoría irían aquí -->
                    <option value="">Selecciona una categoría</option>
                  </select>
                </div>
              </div>

              <div class="mb-3">
                <label class="form-label">Añadir nueva categoría</label>
                <input type="text" class="form-control" placeholder="Escribe una nueva categoría" name="new_category" />
                <button class="btn btn-outline-secondary mt-2" type="button">Añadir</button>
              </div>
            </div>

          </div>


        </div>
        <div class="col-xl-6">
          <div class="card">
            <div class="card-header">
              <h5>Cargar imagen</h5>
            </div>
            <div class="card-body">
              <div class="mb-3" style="text-align: center;">
                <img src="../../assets/images/user-default.jpg" alt="Imagen de usuario" style="width: 500px; height: auto; object-fit: contain;" />
              </div>
              <div class="mb-0" style="text-align: center;">
                <label class="btn btn-outline-secondary" for="flupld"><i class="ti ti-upload me-2"></i>Cargar</label>
                <input type="file" id="flupld" class="d-none" name="cover" />
              </div>
            </div>
          </div>

          <div class="col-sm-12">
            <button class="btn btn-primary mb-0" type="submit">Save product</button>
          </div>
        </div>

        <!-- [ sample-page ] end -->
      </div>
      <!-- [ Main Content ] end -->
    </div>
  </div>

  <?php include_once __DIR__ .  "/../layouts/footer.php" ?>

  <?php include_once __DIR__ . "/../layouts/scripts.php" ?>

</body>
<!-- [Body] end -->

</html>