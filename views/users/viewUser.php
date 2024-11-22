<?php
include_once __DIR__ . '/../../config.php';

session_start();

if (isset($_SESSION['profile']->data->id) && isset($_SESSION['token'])) {
        //$user_id = $_SESSION['profile']->data->id;  
        $token = $_SESSION['token'];  
        require_once "../../App/controllers/Controller.php";
        require_once "../../App/controllers/OrderController.php";

        if (isset($_GET['id'])) {
            $user_id = $_GET['id'];
            
            $request = (object)[
                'id' => $user_id,  
                'token' => $token   
            ];
            $user_datas = $controller->getUser($request);
            $id_user = $user_datas->data->id;
            $orders = $controller->getOrder($token,$id_user);
              /*  var_dump($orders);
            exit();     */
            $hayOrdenes = true;  
         
            if(is_object($orders)){
                if ($orders->message == "No se encontraron ordenes" || $orders->code == -1) {
                    $hayOrdenes = false; 
                }
            }else{
                $presentations = $orders[0]->presentations;
            }
           

        } else {
            echo "No se especificó el ID del usuario.";
        }

    } else {
        echo "Error: El perfil del usuario no está disponible o no se encuentra en la sesión.";
        exit;
    }
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
    <!-- [ Sidebar Menu ] start -->
    <?php include_once __DIR__ .  "/../../views/layouts/sidebar.php" ?>
    <!-- [ Sidebar Menu ] end -->
    <!-- [ Header Topbar ] start -->
    <?php include_once __DIR__ .  "/../../views/layouts/header.php" ?>
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
                                <h2 class="mb-0">Detalles de Usuario</h2>
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
                                        <img class="rounded-circle img-fluid wid-90 img-thumbnail"
                                            src="<?= isValidImage($user_datas->data->avatar) 
                                                    ? $user_datas->data->avatar 
                                                    : BASE_PATH . 'assets/images/user-default.jpg' ?>"
                                            alt="User image" />
                                        <h5 class="mb-0"><?php echo  $user_datas->data->name; ?></h5>
                                    </div>
                                </div>
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
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-7 col-xxl-9">
                            <div class="tab-content" id="user-set-tabContent">
                                <div class="tab-pane fade show active" id="user-set-profile" role="tabpanel" aria-labelledby="user-set-profile-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Detalles del Usuario</h4>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item px-0 pt-0">
                                                    <div class="row">
                                                        <!-- Aqui va el nombre de usuario -->
                                                        <div class="col-md-6">
                                                            <p class="mb-1 text-muted">Nombre</p>
                                                            <p class="mb-0"><?php echo  $user_datas->data->name; ?></p>
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
                                                            <p class="mb-0"><?php echo  $user_datas->data->phone_number; ?></p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item px-0">
                                                    <div class="row">
                                                        <!-- Aqui va el correo del usuario -->
                                                        <div class="col-md-6">
                                                            <p class="mb-1 text-muted">Email</p>
                                                            <p class="mb-0"><?php echo  $user_datas->data->email; ?></p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade " id="user-set-orders" role="tabpanel" aria-labelledby="user-set-orders-tab">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Ordenes Realizadas</h4>
                                        </div>

                                    </div>

                                    <?php

                                    

                                    if ($hayOrdenes) {

                                        /* validacion para saber si hay cupones */
                                        if ($orders[0]->coupon !== null && isset($orders[0]->coupon->name)) {
                                            $couponText = htmlspecialchars($orders[0]->coupon->name);
                                        } else {
                                            $couponText = "No se aplicó cupón";  
                                        }

                                        foreach ($presentations as $order) {
                                            echo '<div class="card">
                                                <div class="card-body">
                                                    <ul class="list-group list-group-flush">
                                                        <li class="list-group-item px-0 pt-0">
                                                            <div class="row">
                                                                <div class="col-md-6">

                                                                    <h4>' . htmlspecialchars($order->description) . '</h4>
                                                                    <!-- Aqui el precio del producto -->
                                                                    <p class="mb-0">$' . htmlspecialchars($order->current_price->amount) . '</p>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <p class="mb-1 text-muted">Folio</p>
                                                                    <p class="mb-0">' . htmlspecialchars($orders[0]->folio) . '</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item px-0">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <!-- Aqui va el tipo de pago -->
                                                                    <p class="mb-1 text-muted">Tipo de pago</p>
                                                                    <p class="mb-0">' . htmlspecialchars($orders[0]->payment_type->name) . '</p>
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
                                                                    <p class="mb-0">' . htmlspecialchars($orders[0]->address->street_and_use_number) . '</p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <p class="mb-1 text-muted">Codigo Postal</p>
                                                                    <p class="mb-0">' . htmlspecialchars($orders[0]->address->postal_code) . '</p>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <p class="mb-1 text-muted">Ciudad</p>
                                                                    <p class="mb-0">' . htmlspecialchars($orders[0]->address->city) . '</p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <!-- Aqui va el cupon aplicado -->
                                                        <li class="list-group-item px-0 pb-0">
                                                            <p class="mb-1 text-muted">Cupon aplicado</p>
                                                         <p class="mb-0">' . htmlspecialchars($couponText) . '</p>


                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>';
                                        }
                                       
                                    }else{                                   
                                        echo '<div class="card">
                                                <div class="card-body">
                                                    <div class="col-md-6">
                                                    <h4>Sin ordenes</h4>
                                                    </div>  
                                                </div>
                                            </div>';  
                                    }
                               
                                    ?>                                                        
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

    <?php include_once __DIR__ . "/../layouts/footer.php" ?>


    <!-- Required Js -->

    <?php include_once __DIR__ . "/../layouts/scripts.php" ?>

    <?php
        function isValidImage($url) {
            if (empty($url)) {
                return false;
            }
            
            $imageInfo = @getimagesize($url);
            
            return $imageInfo !== false;
        }
    ?>


</body>
<!-- [Body] end -->

</html>

