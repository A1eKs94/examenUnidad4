<?php

include_once __DIR__ . '/../config.php';
session_start();

if (isset($_SESSION['profile']->data->id) && isset($_SESSION['token'])) {
    $user_id = $_SESSION['profile']->data->id;
    $token = $_SESSION['token'];

    require_once "../App/controllers/Controller.php";

    $request = (object)[
        'token' => $token
    ];
    $data_client = $controller->getClients($request);
    $categorias = $controller->getCategories($request);
    $productos = $controller->getProducts($request);


      /*       var_dump($categorias); 
    exit;     */
} else {
    echo "Error: error al traer los usuarios";
    exit;
}
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


      <div id="deleteModal" class="modalEliminar" style="display: none;">
            <div class="modal-content-eliminar">
                <span class="close" onclick="closeDeleteModal()">&times;</span>
                <h2>Confirmar eliminación</h2>
                <p>¿Estás seguro de que deseas eliminar este usuario?</p>
                <button onclick="confirmDelete()">Sí, eliminar</button>
                <button onclick="closeDeleteModal()">Cancelar</button>
            </div>
        </div>


        <form id="deleteProductForm" action="<?php echo BASE_PATH; ?>api" method="POST" style="display: none;">
            <input type="hidden" name="action" value="deleteProduct">
            <input type="hidden" name="redirect_url" value="home/">
            <input type="hidden" name="token" value="<?php echo $token; ?>">
            <input type="hidden" name="id" id="productIdToDelete"> 
        </form>


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
                      <select class="form-select me-2" id="categorySelect">
                          <option selected disabled>Categoría</option>
                          <?php
                          if (!empty($categorias->data)) {
                              foreach ($categorias->data as $categoria) {
                                  $categoria_name = trim($categoria->name);
                                  $categoria_name = str_replace(["\n", "\r"], " ", $categoria_name); 
                                  $slug = htmlspecialchars($categoria->slug);
                                  echo "<option value='" . $slug . "'>" . htmlspecialchars($categoria_name) . "</option>";
                              }
                          }
                          ?>
                      </select>
                    </form>
                  </li>
                </ul>
                <a href="/crear-producto" class="ms-auto">
                  <button class="btn btn-secondary btn-prod-card">Añadir Producto</button>
                </a>
              </div>


              <div class="row">
              <div class="container">
                  <div class="row">
                    <?php
                    foreach ($productos->data as $producto) {

                      $coverImage = isValidImage($producto->cover) ? $producto->cover : BASE_PATH . 'assets/images/default-image.jpg';

                      echo '<div class="col-sm-6 col-md-4 col-xl-3 mb-4">  <!-- Columna responsive -->
                              <div class="card product-card">
                                <div class="card-img-top">
                                  <a href="details/">
                                     <img src="' . htmlspecialchars($coverImage) . '" alt="image" class="img-prod img-fluid" />
                                  </a>
                                  <div class="card-body position-absolute end-0 top-0"></div>
                                </div>
                                <div class="card-body">
                                  <a href="ecom_product-details.html">
                                    <p class="prod-content mb-0 text-muted"></p>
                                  </a>
                                  <div class="d-flex align-items-center justify-content-between mt-2 mb-3 flex-wrap gap-1">
                                    <h4 class="mb-0 text-truncate"><b>' . htmlspecialchars($producto->name) . '</b></h4>
                                    <div class="d-inline-flex align-items-center">
                                      <i class="ph-duotone ph-star text-warning me-1"></i>
                                      4.5 <small class="text-muted">/ 5</small>
                                    </div>
                                  </div>
                                  <p class="card-text">' . htmlspecialchars($producto->description) . '</p>
                                  <div class="d-flex">
                                    <div class="flex-grow-1 ms-3">
                                      <a href="' . BASE_PATH . 'editar-producto/?id=' . $producto->id . '" class="btn btn-light-warning">Editar</a>
                                      <a class="btn btn-light-danger" onclick="openDeleteModal(' . $producto->id . ')">Eliminar</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>';
                    }
                    ?>
                  </div> <!-- Fin de la fila -->
                </div> <!-- Fin del contenedor -->

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

  <?php
  function isValidImage($url) {
    // Verificar si la URL está vacía
    if (empty($url)) {
        return false;
    }

    // Obtener los encabezados HTTP de la URL
    $headers = @get_headers($url);
    
    // Si no se puede acceder a los encabezados o no hay respuesta
    if ($headers === false) {
        return false;
    }

    // Comprobar si la respuesta HTTP es 404 (no encontrado)
    if (strpos($headers[0], '404') !== false) {
        return false; // Imagen no encontrada
    }

    // Si la respuesta no es 404, entonces la imagen es válida
    return true;
}

  ?>
</body>
<!-- [Body] end -->

</html>

<script>

  
function openDeleteModal(userId) {
    userIdToDelete = userId; 
    document.getElementById('deleteModal').style.display = "block";
}

function closeDeleteModal() {
  document.getElementById('deleteModal').style.display = "none"; 
}

function confirmDelete() {
    document.getElementById('productIdToDelete').value = userIdToDelete;
    
    document.getElementById('deleteProductForm').submit();

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