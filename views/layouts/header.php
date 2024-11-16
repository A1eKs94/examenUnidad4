<?php
// include "../config.php";

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

<header class="pc-header">
  <div class="header-wrapper"> <!-- [Mobile Media Block] start -->
    <div class="me-auto pc-mob-drp">
      <ul class="list-unstyled">
        <!-- ======= Menu collapse Icon ===== -->
        <li class="pc-h-item pc-sidebar-collapse">
          <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
            <i class="ti ti-menu-2"></i>
          </a>
        </li>
        <li class="pc-h-item pc-sidebar-popup">
          <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
            <i class="ti ti-menu-2"></i>
          </a>
        </li>
        <li class="dropdown pc-h-item d-inline-flex d-md-none">
          <a
            class="pc-head-link dropdown-toggle arrow-none m-0"
            data-bs-toggle="dropdown"
            href="#"
            role="button"
            aria-haspopup="false"
            aria-expanded="false">
            <i class="ph-duotone ph-magnifying-glass"></i>
          </a>
        </li>
      </ul>
    </div>
    <!-- [Mobile Media Block end] -->
    <div class="ms-auto">
      <ul class="list-unstyled">
        <li class="dropdown pc-h-item">
          <a
            class="pc-head-link dropdown-toggle arrow-none me-0"
            data-bs-toggle="dropdown"
            href="#"
            role="button"
            aria-haspopup="false"
            aria-expanded="false">
            <i class="ph-duotone ph-sun-dim"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">
            <a href="#!" class="dropdown-item" onclick="layout_change('dark')">
              <i class="ph-duotone ph-moon"></i>
              <span>Modo Oscuro</span>
            </a>
            <a href="#!" class="dropdown-item" onclick="layout_change('light')">
              <i class="ph-duotone ph-sun-dim"></i>
              <span>Modo Claro</span>
            </a>
          </div>
        </li>
        <li class="dropdown pc-h-item header-user-profile">
          <a
            class="pc-head-link dropdown-toggle arrow-none me-0"
            data-bs-toggle="dropdown"
            href="#"
            role="button"
            aria-haspopup="false"
            data-bs-auto-close="outside"
            aria-expanded="false">
            <img src="<?= BASE_PATH ?>assets/images/user-default.jpg" alt="user-image" class="user-avtar" />
          </a>
          <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
            <div class="dropdown-header d-flex align-items-center justify-content-between">
              <h5 class="m-0">Perfil</h5>
            </div>
            <div class="dropdown-body">
              <div class="profile-notification-scroll position-relative" style="max-height: calc(100vh - 225px)">
                <ul class="list-group list-group-flush w-100">
                  <li class="list-group-item">
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0">
                        <img src="<?= BASE_PATH ?>assets/images/user-default.jpg" alt="user-image" class="wid-50 rounded-circle" />
                      </div>
                      <div class="flex-grow-1 mx-3">
                        <h5 class="mb-0"><?php echo  $user_data->data->name; ?></h5>
                        <a class="link-primary" href=""><?php echo  $user_data->data->email; ?></a>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item">
                    <a href="#" class="dropdown-item">
                      <span class="d-flex align-items-center">
                        <i class="ph-duotone ph-user-circle"></i>
                        <span>Perfil</span>
                      </span>
                    </a>
                    <a href="#" class="dropdown-item">
                      <span class="d-flex align-items-center">
                        <i class="ph-duotone ph-power"></i>
                        <span>Cerrar Sesión</span>
                      </span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
  </div>
</header>