<?php

include_once __DIR__ . '/../config.php';
session_start();

?>
<!doctype html>
<html lang="en">
<!-- [Head] start -->


<head>

  <?php include_once __DIR__ . '/layouts/head.php' ?>
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
  <?php include_once __DIR__ . '/layouts/sidebar.php' ?>
  <?php include_once __DIR__ . '/layouts/header.php' ?>

  <!-- [ Main Content ] start -->
  <div class="pc-container">
    <div class="pc-content">
      <!-- [ breadcrumb ] start -->
      <div class="page-header">
        <div class="page-block">
          <div class="row align-items-center">
            <div class="col-md-12">
              <div class="page-header-title">
                <h2 class="mb-0">Productos</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- [ breadcrumb ] end -->


      <!-- [ Main Content ] start -->
      <div class="row">
        <!-- [ sample-page ] start -->
        <div class="col-sm-12">
          <div class="ecom-wrapper">
            <div class="ecom-content">
              <div class="d-sm-flex align-items-center mb-4">
                <ul class="list-inline me-auto my-1">
                  <li class="list-inline-item">
                    <form class="form-search d-inline-flex align-items-center">
                      <i class="ph-duotone ph-magnifying-glass icon-search me-2"></i>
                      <input type="search" class="form-control me-2" placeholder="Buscar productos" />

                      <!-- Select de categorías -->
                      <select class="form-select me-2">
                        <option selected disabled>Categoría</option>
                        <option value="">Electrónica</option>
                        <option value="">Moda</option>
                        <option value="">Hogar</option>
                        <option value="">Deportes</option>
                      </select>
                    </form>
                  </li>
                </ul>
                <a href="/crear-producto" class="ms-auto">
                  <button class="btn btn-secondary btn-prod-card">Añadir Producto</button>
                </a>
              </div>


              <div class="row">
                <!-- Carta para el producto -->
                <div class="col-sm-6 col-xl-3">
                  <div class="card product-card">
                    <div class="card-img-top">
                      <a href="detalles/">
                        <img src="<?= BASE_PATH ?>assets/images/productDefault.png" alt="image" class="img-prod img-fluid" />
                      </a>
                      <div class="card-body position-absolute end-0 top-0">
                      </div>
                    </div>
                    <div class="card-body">
                      <a href="ecom_product-details.html">
                        <p class="prod-content mb-0 text-muted"></p>
                      </a>
                      <div class="d-flex align-items-center justify-content-between mt-2 mb-3 flex-wrap gap-1">
                        <h4 class="mb-0 text-truncate"><b>Nombre del producto</b></h4>
                        <div class="d-inline-flex align-items-center">
                          <i class="ph-duotone ph-star text-warning me-1"></i>
                          4.5 <small class="text-muted">/ 5</small>
                        </div>
                      </div>
                      <p class="card-text">Descripción</p>
                      <div class="d-flex">
                        <div class="flex-grow-1 ms-3">
                          <a href="editar-producto/">
                            <button class="btn btn-light-warning">Editar</button>
                          </a>
                          <button class="btn btn-light-danger">Eliminar</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Puedes borrar el resto ya que mandes a llamar los productos de la api -->
                <div class="col-sm-6 col-xl-3">
                  <div class="card product-card">
                    <div class="card-img-top">
                      <a href="details/">
                        <img src="../assets/images/productDefault.png" alt="image" class="img-prod img-fluid" />
                      </a>
                      <div class="card-body position-absolute end-0 top-0">
                      </div>
                    </div>
                    <div class="card-body">
                      <a href="ecom_product-details.html">
                        <p class="prod-content mb-0 text-muted"></p>
                      </a>
                      <div class="d-flex align-items-center justify-content-between mt-2 mb-3 flex-wrap gap-1">
                        <h4 class="mb-0 text-truncate"><b>Nombre del producto</b></h4>
                        <div class="d-inline-flex align-items-center">
                          <i class="ph-duotone ph-star text-warning me-1"></i>
                          4.5 <small class="text-muted">/ 5</small>
                        </div>
                      </div>
                      <p class="card-text">Descripción</p>
                      <div class="d-flex">
                        <div class="flex-grow-1 ms-3">
                          <button class="btn btn-light-warning">Editar</button>
                          <button class="btn btn-light-danger">Eliminar</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="card product-card">
                    <div class="card-img-top">
                      <a href="details/">
                        <img src="../assets/images/productDefault.png" alt="image" class="img-prod img-fluid" />
                      </a>
                      <div class="card-body position-absolute end-0 top-0">
                      </div>
                    </div>
                    <div class="card-body">
                      <a href="ecom_product-details.html">
                        <p class="prod-content mb-0 text-muted"></p>
                      </a>
                      <div class="d-flex align-items-center justify-content-between mt-2 mb-3 flex-wrap gap-1">
                        <h4 class="mb-0 text-truncate"><b>Nombre del producto</b></h4>
                        <div class="d-inline-flex align-items-center">
                          <i class="ph-duotone ph-star text-warning me-1"></i>
                          4.5 <small class="text-muted">/ 5</small>
                        </div>
                      </div>
                      <p class="card-text">Descripción</p>
                      <div class="d-flex">
                        <div class="flex-grow-1 ms-3">
                          <button class="btn btn-light-warning">Editar</button>
                          <button class="btn btn-light-danger">Eliminar</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                  <div class="card product-card">
                    <div class="card-img-top">
                      <a href="details/">
                        <img src="../assets/images/productDefault.png" alt="image" class="img-prod img-fluid" />
                      </a>
                      <div class="card-body position-absolute end-0 top-0">
                      </div>
                    </div>
                    <div class="card-body">
                      <a href="ecom_product-details.html">
                        <p class="prod-content mb-0 text-muted"></p>
                      </a>
                      <div class="d-flex align-items-center justify-content-between mt-2 mb-3 flex-wrap gap-1">
                        <h4 class="mb-0 text-truncate"><b>Nombre del producto</b></h4>
                        <div class="d-inline-flex align-items-center">
                          <i class="ph-duotone ph-star text-warning me-1"></i>
                          4.5 <small class="text-muted">/ 5</small>
                        </div>
                      </div>
                      <p class="card-text">Descripción</p>
                      <div class="d-flex">
                        <div class="flex-grow-1 ms-3">
                          <button class="btn btn-light-warning">Editar</button>
                          <button class="btn btn-light-danger">Eliminar</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Aqui terminan las cartas de ejemplo -->
              </div>
            </div>
          </div>
        </div>
        <!-- [ sample-page ] end -->
      </div>
      <!-- [ Main Content ] end -->
    </div>
  </div>
  <!-- [ Main Content ] end -->

  <?php include_once __DIR__ .  '/layouts/footer.php' ?>
  <?php include_once __DIR__ .  '/layouts/scripts.php' ?>
</body>
<!-- [Body] end -->

</html>