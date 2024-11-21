<?php
include_once __DIR__ . "/../../config.php";

if (isset($_SESSION['profile']->data->id) && isset($_SESSION['token'])) {
  $user_id = $_SESSION['profile']->data->id;
  $token = $_SESSION['token'];
  require_once __DIR__ . "/../../App/controllers/Controller.php";

  /* <?php            
    echo '<pre>';
    print_r($_SESSION['profile']);
    echo '</pre>';
    ?> */

  $request = (object)[
    'id' => $user_id,
    'token' => $token
  ];
  $user_data = $controller->getUser($request);
} else {
  echo "Error: El perfil del usuario no está disponible o no se encuentra en la sesión.";
  exit;
}

?>
<!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
  <div class="navbar-wrapper">
    <div class="m-header">
      <a href="<?= BASE_PATH ?>home/" class="b-brand text-primary">
        <!-- ========   Change your logo from here   ============ -->
        <img src="<?= BASE_PATH ?>assets/images/logo-dark.svg" alt="logo image" class="logo-lg" />
      </a>
    </div>
    <div class="navbar-content">
      <ul class="pc-navbar">
        <li class="pc-item pc-caption">
          <label>
            Navegación
          </label>
          <i class="ph-duotone ph-gauge"></i>
        </li>
        <li class="pc-item pc-hasmenu">
          <a href="#" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-gauge"></i>
            </span>
            <span class="pc-mtext">Dashboard</span>
          </a>
        </li>
        <li class="pc-item pc-caption">
          <label>Widget</label>
          <i class="ph-duotone ph-chart-pie"></i>
        </li>

        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-identification-card"></i>
            </span>
            <span class="pc-mtext">Usuarios</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>users/list/">Lista de Usuarios</a></li>
            <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>users/crear/">Nuevo Usuario</a></li>
          </ul>
        </li>

        <li class="pc-item pc-hasmenu">
          <a href="#!" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-identification-card"></i>
            </span>
            <span class="pc-mtext">Clientes</span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
          <ul class="pc-submenu">
            <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>clients/list/">Lista de Clientes</a></li>
            <li class="pc-item"><a class="pc-link" href="<?= BASE_PATH ?>clients/crear/">Nuevo Cliente</a></li>
          </ul>
        </li>

        <li class="pc-item">
          <a href="<?= BASE_PATH ?>products/" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-projector-screen-chart"></i>
            </span>
            <span class="pc-mtext">
              Productos
            </span>
          </a>
        </li>
        <li class="pc-item">
          <a href="<?= BASE_PATH ?>carrito/" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-shopping-cart"></i>
            </span>
            <span class="pc-mtext">Carrito de Compras</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="<?= BASE_PATH ?>cupon/lista/" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-table"></i>
            </span>
            <span class="pc-mtext">Cupones</span>
          </a>
        </li>
    </div>

    <div class="card pc-user-card">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <div class="flex-shrink-0">
            <img src="<?= BASE_PATH ?>assets/images/user-default.jpg" alt="user-image" class="user-avtar wid-45 rounded-circle" />
          </div>
          <div class="flex-grow-1 ms-3">
            <div class="dropdown">
              <a href="#" class="arrow-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="0,20">
                <div class="d-flex align-items-center">
                  <div class="flex-grow-1 me-2">
                    <h6 class="mb-0"><?php echo  $user_data->data->name; ?></h6>
                    <small>Administrator</small>
                  </div>
                  <div class="flex-shrink-0">
                    <div class="btn btn-icon btn-link-secondary avtar">
                      <i class="ph-duotone ph-windows-logo"></i>
                    </div>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu">
                <ul>
                  <li>
                    <a class="pc-user-links" href="<?= BASE_PATH ?>profile/">
                      <i class="ph-duotone ph-user"></i>
                      <span>Perfil</span>
                    </a>
                  </li>
                  <li>
                    <a class="pc-user-links" href="">
                      <i class="ph-duotone ph-power"></i>
                      <span>Cerrar Sesión</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>
<!-- [ Sidebar Menu ] end -->