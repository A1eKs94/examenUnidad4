<?php

include "../config.php";

?>
<!doctype html>
<html lang="en">
<!-- [Head] start -->

<head>
  <?php include "layouts/head.php" ?>
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
  <?php include "layouts/sidebar.php" ?>
  <?php include "layouts/header.php" ?>

  <!-- [ Main Content ] start -->
  <div class="pc-container">
    <div class="pc-content">
      <!-- [ breadcrumb ] start -->
      <div class="page-header">
        <div class="page-block">
          <div class="row align-items-center">
            <div class="col-md-12">
              <div class="page-header-title">
                <h2 class="mb-0">Detalles de Producto</h2>
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
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="sticky-md-top product-sticky">
                    <div id="carouselExampleCaptions" class="carousel slide ecomm-prod-slider" data-bs-ride="carousel">
                      <div class="carousel-inner bg-light rounded position-relative">
                        <div class="card-body position-absolute bottom-0 end-0">
                          <ul class="list-inline ms-auto mb-0 prod-likes">
                            <li class="list-inline-item m-0">
                              <a href="#" class="avtar avtar-xs text-white text-hover-primary">
                                <i class="ti ti-zoom-in f-18"></i>
                              </a>
                            </li>
                            <li class="list-inline-item m-0">
                              <a href="#" class="avtar avtar-xs text-white text-hover-primary">
                                <i class="ti ti-zoom-out f-18"></i>
                              </a>
                            </li>
                            <li class="list-inline-item m-0">
                              <a href="#" class="avtar avtar-xs text-white text-hover-primary">
                                <i class="ti ti-rotate-clockwise f-18"></i>
                              </a>
                            </li>
                          </ul>
                        </div>
                        <div class="carousel-item active">
                          <img src="../assets/images/productDefault.png" alt="image" class="img-prod img-fluid" />
                        </div>
                      </div>
                      <ol class="list-inline carousel-indicators position-relative product-carousel-indicators my-sm-3 mx-0">
                        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="list-inline-item w-25 h-auto active">
                          <img src="" class="d-block wid-50 rounded" alt="Product images" />
                        </li>
                      </ol>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <h2 class="my-3">Nombre de producto</h2>
                  <div class="star f-18 mb-3">
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star-half-alt text-warning"></i>
                    <i class="far fa-star text-muted"></i>
                    <span class="text-sm text-muted">(4.0)</span>
                  </div>
                  <h3 class="mt-4 mb-sm-3 mb-2 f-w-500">Descripción</h5>
                    <h4>
                      Aqui va la descripcion
                    </h4>

                    <div class="row">
                      <div class="col-6">
                        <div class="d-grid">
                          <button type="button" class="btn btn-primary">Buy Now</button>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="d-grid">
                          <button type="button" class="btn btn-outline-secondary">Add to cart</button>
                        </div>
                      </div>
                    </div>
                </div>

              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header pb-0">
              <ul class="nav nav-tabs profile-tabs mb-0" id="myTab" role="tablist">
                <li class="nav-item">
                  <a
                    class="nav-link active"
                    id="ecomtab-tab-1"
                    data-bs-toggle="tab"
                    href="#ecomtab-1"
                    role="tab"
                    aria-controls="ecomtab-1"
                    aria-selected="true">Features
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    class="nav-link"
                    id="ecomtab-tab-2"
                    data-bs-toggle="tab"
                    href="#ecomtab-2"
                    role="tab"
                    aria-controls="ecomtab-2"
                    aria-selected="true">Specifications
                  </a>
                </li>
              </ul>
            </div>
            <div class="card-body">
              <div class="tab-content">
                <div class="tab-pane show active" id="ecomtab-1" role="tabpanel" aria-labelledby="ecomtab-tab-1">
                  <div class="table-responsive">
                    <table class="table table-borderless mb-0">
                      <tbody>
                        <tr>
                          <td class="text-muted py-1">Band :</td>
                          <td class="py-1">Smart Band</td>
                        </tr>
                        <tr>
                          <td class="text-muted py-1">Compatible Devices :</td>
                          <td class="py-1">Smartphones</td>
                        </tr>
                        <tr>
                          <td class="text-muted py-1">Ideal For :</td>
                          <td class="py-1">Unisex</td>
                        </tr>
                        <tr>
                          <td class="text-muted py-1">Lifestyle :</td>
                          <td class="py-1">Fitness | Indoor | Sports | Swimming | Outdoor</td>
                        </tr>
                        <tr>
                          <td class="text-muted py-1">Basic Features :</td>
                          <td class="py-1">Calendar | Date & Time | Timer/Stop Watch</td>
                        </tr>
                        <tr>
                          <td class="text-muted py-1">Health Tracker :</td>
                          <td class="py-1">Heart Rate | Exercise Tracker</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="tab-pane" id="ecomtab-2" role="tabpanel" aria-labelledby="ecomtab-tab-2">
                  <div class="row gy-3">
                    <div class="col-md-6">
                      <h5>Product Category</h5>
                      <hr class="mb-3 mt-1" />
                      <div class="table-responsive">
                        <table class="table mb-0">
                          <tbody>
                            <tr>
                              <td class="text-muted py-1 border-top-0">Wearable Device Type:</td>
                              <td class="py-1 border-top-0">Smart Band</td>
                            </tr>
                            <tr>
                              <td class="text-muted py-1">Compatible Devices :</td>
                              <td class="py-1">Smartphones</td>
                            </tr>
                            <tr>
                              <td class="text-muted py-1">Ideal For :</td>
                              <td class="py-1">Unisex</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <h5>Manufacturer Details</h5>
                      <hr class="mb-3 mt-1" />
                      <div class="table-responsive">
                        <table class="table mb-0">
                          <tbody>
                            <tr>
                              <td class="text-muted py-1 border-top-0">Brand :</td>
                              <td class="py-1 border-top-0">Apple</td>
                            </tr>
                            <tr>
                              <td class="text-muted py-1">Model Series :</td>
                              <td class="py-1">Watch SE</td>
                            </tr>
                            <tr>
                              <td class="text-muted py-1">Model Number :</td>
                              <td class="py-1">MYDT2HN/A</td>
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
        <!-- [ sample-page ] end -->
      </div>
      <!-- [ Main Content ] end -->
    </div>
  </div>
  <!-- [ Main Content ] end -->

  <?php include "layouts/footer.php" ?>

  <?php include "layouts/scripts.php" ?>

</body>
<!-- [Body] end -->undefined

</html>