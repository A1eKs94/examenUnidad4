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
          <a href="../widget/w_user.html" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-identification-card"></i>
            </span>
            <span class="pc-mtext">User</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="../widget/w_data.html" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-database"></i>
            </span>
            <span class="pc-mtext">Data</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="../widget/w_chart.html" class="pc-link">
            <span class="pc-micon">
              <i class="ph-duotone ph-chart-pie"></i>
            </span>
            <span class="pc-mtext">Chart</span></a>
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
                    <h6 class="mb-0">Jonh Smith</h6>
                    <small>Premiun</small>
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