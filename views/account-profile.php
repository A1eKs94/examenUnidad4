<?php
include "../config.php";

session_start();

if (isset($_SESSION['profile']->data->id) && isset($_SESSION['token'])) {
    $user_id = $_SESSION['profile']->data->id;  
    $token = $_SESSION['token'];  
    require_once "../App/controllers/Controller.php";


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
  <!-- [ Sidebar Menu ] start -->
  <?php include "layouts/sidebar.php" ?>
  <!-- [ Sidebar Menu ] end -->
  <!-- [ Header Topbar ] start -->
  <?php include "layouts/header.php" ?>
  <!-- [ Header ] end -->


  <!-- [ Main Content ] start -->
  <div class="pc-container">
    <div class="pc-content">
      <!-- [ breadcrumb ] start -->
      <div class="page-header">
        <div class="page-block">
          <div class="row align-items-center">
            <div class="col-md-12">
              <div class="page-header-title">
                <h2 class="mb-0">Perfil</h2>
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
          <div class="row">

            <div class="col-lg-5 col-xxl-3">
              <div class="card overflow-hidden">
                <div class="card-body position-relative">
                  <div class="text-center mt-3">
                    <div class="chat-avtar d-inline-flex mx-auto">
                      <img
                        class="rounded-circle img-fluid wid-90 img-thumbnail"
                        src="<?= BASE_PATH ?>assets/images/user-default.jpg"
                        alt="User image" />
                    </div>
                    <!-- Aqui va el nombre de usuario -->
                    <h5 class="mb-0">William Bond</h5>
                  </div>
                </div>
                <!-- Aqui va el menu de opciones -->
                <div
                  class="nav flex-column nav-pills list-group list-group-flush account-pills mb-0"
                  id="user-set-tab"
                  role="tablist"
                  aria-orientation="vertical">
                  <a
                    class="nav-link list-group-item list-group-item-action active"
                    id="user-set-profile-tab"
                    data-bs-toggle="pill"
                    href="#user-set-profile"
                    role="tab"
                    aria-controls="user-set-profile"
                    aria-selected="true">
                    <span class="f-w-500"><i class="ph-duotone ph-user-circle m-r-10"></i>Descripción General</span>
                  </a>
                  <a
                    class="nav-link list-group-item list-group-item-action"
                    id="user-set-orders-tab"
                    data-bs-toggle="pill"
                    href="#user-set-orders"
                    role="tab"
                    aria-controls="user-set-orders"
                    aria-selected="false">
                    <span class="f-w-500"><i class="ph-duotone ph-notebook m-r-10"></i>Ordenes</span>
                  </a>
                  <a
                    class="nav-link list-group-item list-group-item-action"
                    id="user-set-account-tab"
                    data-bs-toggle="pill"
                    href="#user-set-account"
                    role="tab"
                    aria-controls="user-set-account"
                    aria-selected="false">
                    <span class="f-w-500"><i class="ph-duotone ph-notebook m-r-10"></i>Editar Perfil</span>
                  </a>
                </div>
              </div>
            </div>
            
            <div class="col-lg-7 col-xxl-9">
              <div class="tab-content" id="user-set-tabContent">
                <div class="tab-pane fade show active" id="user-set-profile" role="tabpanel" aria-labelledby="user-set-profile-tab">
                  <div class="card">
                    <div class="card-header">
                      <h4>Detalles del Perfil</h4>
                    </div>
                    <div class="card-body">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item px-0 pt-0">
                          <div class="row">
                            <!-- Aqui va el nombre de usuario -->
                            <div class="col-md-6">
                              <p class="mb-1 text-muted">Nombre</p>
                              <p class="mb-0">  <?php echo  $user_data->data->name; ?></p>
                            </div>
                            <!-- Aqui va el nivel que tiene el usuario 'vip, premiun o normal'-->
                            <div class="col-md-6">
                              <p class="mb-1 text-muted">Nivel</p>
                              <p class="mb-0">Premiun</p>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item px-0">
                          <div class="row">
                            <!-- Aqui va el telefono del usuario -->
                            <div class="col-md-6">
                              <p class="mb-1 text-muted">Número de Teléfono</p>
                              <p class="mb-0"><?php echo  $user_data->data->phone_number; ?></p> 
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item px-0">
                          <div class="row">
                            <!-- Aqui va el correo del usuario -->
                            <div class="col-md-6">
                              <p class="mb-1 text-muted">Email</p>
                              <p class="mb-0"> <?php echo  $user_data->data->email; ?></p>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                
                <div class="tab-pane fade" id="user-set-account" role="tabpanel" aria-labelledby="user-set-account-tab">

                  <form action="<?php echo BASE_PATH; ?>api" method="POST">
                    <div class="card">
                      <div class="card-header">
                        <h4>Editar Perfil</h4>
                      </div>
                      <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <input type="hidden" name="action" value="updateUser">
                            <input type="hidden" name="redirect_url" value="profile">
                            <input type="hidden" name="token" value="<?php echo  $token; ?>">
                            <input type="hidden" name="id" value="<?php echo  $user_id; ?>">

                            <!-- Campo para nombre -->
                            <li class="list-group-item px-0 pt-0">
                                <div class="row mb-0">
                                    <label class="col-form-label col-md-4 col-sm-12 text-md-end">Nombre<span class="text-danger">*</span></label>
                                    <div class="col-md-8 col-sm-12">
                                        <input type="text" id="name" name="name" class="form-control" value="<?php echo $user_data->data->name; ?>" required />
                                    </div>
                                </div>
                            </li>

                            <!-- Campo para correo -->
                            <li class="list-group-item px-0">
                                <div class="row mb-0">
                                    <label class="col-form-label col-md-4 col-sm-12 text-md-end">Correo Electrónico <span class="text-danger">*</span></label>
                                    <div class="col-md-8 col-sm-12">
                                        <input type="email" id="email" name="email" class="form-control" value="<?php echo $user_data->data->email; ?>" required />
                                    </div>
                                </div>
                            </li>

                            <!-- Campo para teléfono -->
                            <li class="list-group-item px-0">
                                <div class="row mb-0">
                                    <label class="col-form-label col-md-4 col-sm-12 text-md-end">Número de Teléfono<span class="text-danger">*</span></label>
                                    <div class="col-md-8 col-sm-12">
                                        <input type="text" id="phoneNumber" name="phone_number" class="form-control" value="<?php echo $user_data->data->phone_number; ?>" />
                                    </div>
                                </div>
                            </li>
                        </ul>
                      </div>
                    </div>
                    <div class="card">
                        <div class="card-body text-end">
                            <button type="button" class="btn btn-outline-dark me-2" onclick="vaciarCampos()">Vaciar</button>
                            <button type="submit" class="btn btn-primary">Actualizar Perfil</button>
                        </div>
                    </div>
                  </form>  
                </div>

                <div class="tab-pane fade " id="user-set-orders" role="tabpanel" aria-labelledby="user-set-orders-tab">
                  <div class="card">
                    <div class="card-header">
                      <h4>Ordenes Realizadas</h4>
                    </div>

                  </div>
                  <div class="card">
                    <div class="card-body">
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item px-0 pt-0">
                          <div class="row">
                            <!-- Aqui va el nombre del producto -->
                            <div class="col-md-6">
                              <h4>Lavadora</h4>
                              <!-- Aqui el precio del producto -->
                              <p class="mb-0">$21441</p>
                            </div>
                            <!-- Aqui va el folio de la orden'-->
                            <div class="col-md-6">
                              <p class="mb-1 text-muted">Folio</p>
                              <p class="mb-0">123456</p>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item px-0">
                          <div class="row">
                            <div class="col-md-6">
                              <!-- Aqui va el tipo de pago -->
                              <p class="mb-1 text-muted">Tipo de pago</p>
                              <p class="mb-0">contado etc</p>
                            </div>
                            <div class="col-md-6">
                              <!-- Estado de la orden "pendiente de pago, cancelada, enviada, entregada, abandonada, etc" -->
                              <p class="mb-1 text-muted">Estado</p>
                              <p class="mb-0">Pagado</p>
                            </div>
                          </div>
                        </li>
                        <li class="list-group-item px-0">
                          <div class="row">
                            <div class="col-md-4">
                              <!-- Aqui va la direccion -->
                              <p class="mb-1 text-muted">Dirección</p>
                              <p class="mb-0">Calle 123</p>
                            </div>
                            <div class="col-md-4">
                              <p class="mb-1 text-muted">Codigo Postal</p>
                              <p class="mb-0">20020</p>
                            </div>
                            <div class="col-md-4">
                              <p class="mb-1 text-muted">Ciudad</p>
                              <p class="mb-0">La Paz</p>
                            </div>
                            
                          </div>
                        </li>
                        <!-- Aqui va el cupon aplicado -->
                        <li class="list-group-item px-0 pb-0">
                          <p class="mb-1 text-muted">Cupon aplicado</p>
                          <p class="mb-0">20% de descuento</p>
                        </li>
                      </ul>
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


  <!-- Required Js -->
  
  <?php include "layouts/scripts.php"?>

  <script>
    function vaciarCampos() {
        document.getElementById("name").value = '';
        document.getElementById("email").value = '';
        document.getElementById("phoneNumber").value = '';
    }
</script>

</body>
<!-- [Body] end -->

</html>