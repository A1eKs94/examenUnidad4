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
                <h2 class="mb-0">Detalles del Producto</h2>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <div id="product-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner bg-light rounded">
                  <div class="carousel-item active">
                    <img src="../assets/images/productDefault.png" class="d-block w-100" alt="Product Image">
                  </div>
                </div>
              </div>
              <h2 class="mt-3">Nombre del Producto</h2>
              <p class="text-muted">Slug: <span class="text-dark">producto-slug</span></p>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h3>Descripción</h3>
              <p>Aquí va la descripción del producto.</p>

              <h3 class="mt-4">Características</h3>
              <ul>
                <li>Característica 1</li>
                <li>Característica 2</li>
                <li>Característica 3</li>
              </ul>

              <h3 class="mt-4">Categorías</h3>
              <span class="badge bg-primary fs-5 px-3 py-2">Categoría 1</span>
              <span class="badge bg-primary fs-5 px-3 py-2">Categoría 2</span>

              <h3 class="mt-4">Etiquetas</h3>
              <span class="badge bg-secondary fs-5 px-3 py-2">Tag 1</span>
              <span class="badge bg-secondary fs-5 px-3 py-2">Tag 2</span>

              <div class="d-flex gap-3 mt-4">
                <button type="button" class="btn btn-outline-secondary btn-lg">Añadir al carrito</button>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header pb-0">
                <ul class="nav nav-tabs" id="product-details-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="features-tab" data-bs-toggle="tab" href="#features" role="tab" aria-controls="features" aria-selected="true">Características</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="specifications-tab" data-bs-toggle="tab" href="#specifications" role="tab" aria-controls="specifications" aria-selected="false">Especificaciones</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="features" role="tabpanel" aria-labelledby="features-tab">
                    <ul>
                      <li>Característica detallada 1</li>
                      <li>Característica detallada 2</li>
                    </ul>
                  </div>
                  <div class="tab-pane fade" id="specifications" role="tabpanel" aria-labelledby="specifications-tab">
                    <table class="table table-striped">
                      <tbody>
                        <tr>
                          <td class="text-muted">Categoría:</td>
                          <td>Smart Band</td>
                        </tr>
                        <tr>
                          <td class="text-muted">Compatible con:</td>
                          <td>Smartphones</td>
                        </tr>
                        <tr>
                          <td class="text-muted">Marca:</td>
                          <td>Apple</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <?php include __DIR__ . "../../layouts/footer.php"; ?>
    <?php include __DIR__ . "../../layouts/scripts.php"; ?>

</body>

</html>