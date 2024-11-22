<?php

require_once dirname(__DIR__, 2) . '/config.php';
require_once "AuthController.php";
require_once "UserController.php";
require_once "ClientController.php";
require_once "ProductController.php";


class Controller
{
    public $authController;
    public $userController;
    public $clientController;
    public $productController;
    public $orderController;
    public $categoryController;


    public function __construct()
    {
        $this->authController = new AuthController();
        $this->userController = new UserController();
        $this->clientController = new ClientController();
        $this->productController = new ProductController();
        $this->categoryController = new CategoryController();
        $this->orderController = new OrderController();
    }

    // Auth Controllers
    public function login($request)
    {
        $session_data = $this->authController->login($request);
        if ($session_data->code == 2) {
            session_start();
            $_SESSION['token'] = $session_data->data->token;
            $_SESSION['profile'] = $session_data;

            header('Location: ' . BASE_PATH . 'home');
        } else {
            session_start();
            $_SESSION['error_message'] = $session_data->message;
            header('Location: ' . BASE_PATH . 'auth');
        }
    }

    // User Controllers
    public function getUsers($request)
    {
        $result = $this->userController->index($request);
        if (isset($result->data)) {
            if (is_object($result->data)) {
                return [$result->data];
            }
            if (is_array($result->data)) {
                return $result->data;
            }
        }

        return (object)["code" => -1, "message" => "No se encontraron usuarios"];
    }

    public function getUser($request)
    {
        $user_data = $this->userController->getUser($request);
        return $user_data;
    }

    public function updateUser($request, $redirect_url, $requestFiles)
    {
        $imgTemp = tempnam(sys_get_temp_dir(), "tmp");
        $urlImg = ($requestFiles['profile_photo_file']['tmp_name'] === "" ? $imgTemp : $requestFiles["profile_photo_file"]['tmp_name']);

        $request->urlImg = $urlImg;

        $result = $this->userController->updateUser($request);

        session_start();
        $_SESSION['message'] = $result->message;
        $_SESSION['id_status'] = $result->code;
        header('Location: ' . BASE_PATH . $redirect_url);
    }

    public function createUser($request, $requestFiles)
    {
        $imgTemp = tempnam(sys_get_temp_dir(), "tmp");
        $urlImg = ($requestFiles['profile_photo_file']['tmp_name'] === "" ? $imgTemp : $requestFiles["profile_photo_file"]['tmp_name']);

        $transformed_request = (object)[
            'name' => $request->name,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'created_by' => $request->created_by,
            'password' => $request->password,
            'profile_photo_file' => $urlImg,
            'token' => $request->token
        ];

        $result = $this->userController->createUser($transformed_request);

        session_start();
        $_SESSION["message"] = $result->message;
        $_SESSION["id_status"] = isset($result->code) ? $result->code : -1;

        unlink($imgTemp);
        header('Location: ' . BASE_PATH . $request->redirect_url);
    }

    public function deleteUser($request)
    {
        $result = $this->userController->deleteUser($request);

        session_start();
        $_SESSION['message'] = $result->message;
        $_SESSION['id_status'] = $result->code;
        header('Location: ' . BASE_PATH . $request->redirect_url);
    }

    // Client Controllers
    public function getClients($request)
    {
        $result = $this->clientController->index($request);
        if (isset($result->data)) {
            if (is_object($result->data)) {
                return [$result->data];
            }
            if (is_array($result->data)) {
                return $result->data;
            }
        }

        return (object)["code" => -1, "message" => "No se encontraron usuarios"];
    }

    public function getClient($request)
    {
        $result = $this->clientController->get($request);
        return $result;
    }

    public function createClient($request)
    {
        $result = $this->clientController->create($request);
        session_start();
        $_SESSION["message"] = $result->message;
        $_SESSION["id_status"] = $result->code;
        header("Location: " . BASE_PATH . $request->redirect_url);
    }

    public function updateClient($request)
    {
        $result = $this->clientController->update($request);
        session_start();
        $_SESSION["message"] = $result->message;
        $_SESSION["id_status"] = $result->code;
        header("Location: " . BASE_PATH . $request->redirect_url);
    }

    public function deleteClient($request)
    {
        $result = $this->clientController->delete($request);
        session_start();
        $_SESSION["message"] = $result->message;
        $_SESSION["id_status"] = $result->code;
        header("Location: " . BASE_PATH . $request->redirect_url);
    }

    public function widgetPurchases($request)
    {
        $result = $this->clientController->totalPurchases($request);
        return $result;
    }

    // Products Controllers

    public function getProduct($request)
    {
        $result = $this->productController->get($request);
        return $result;
    }

    public function getProducts($request)
    {
        $result = $this->productController->index($request);
        return $result;
    }

    public function createProduct($request, $files)
    {
        $request->cover = $files['cover']['tmp_name'];
        $result = $this->productController->create($request);
        session_start();
        $_SESSION['message'] = $result->message;
        $_SESSION['id_status'] = $result->code;
        header('Location: ' . BASE_PATH . $request->redirect_url);
    }

    public function updateProduct($request)
    {
        $result = $this->productController->update($request);
        session_start();
        $_SESSION['message'] = $result->message;
        $_SESSION['id_status'] = $result->code;
        header('Location: ' . BASE_PATH . $request->redirect_url); 
    }

    public function deleteProduct($request)
    {
        $result = $this->productController->delete($request);
        session_start();
        $_SESSION['message'] = $result->message;
        $_SESSION['id_status'] = $result->code;
        header('Location: ' . BASE_PATH . $request->redirect_url);
    }

    // ============= Category Controllers ============= //

    public function getCategories($request)
    {
        $result = $this->categoryController->index($request);
        return $result;
    }

    public function getCategory($request)
    {
        $result = $this->categoryController->get($request);
        return $result;
    }

    public function createCategory($request)
    {
        $result = $this->categoryController->create($request);
        session_start();
        $_SESSION['message'] = $result->message;
        $_SESSION['id_status'] = $result->code;
        header('Location: ' . BASE_PATH . $request->redirect_url);
    }

    public function updateCategory($request)
    {
        $result = $this->categoryController->update($request);
        session_start();
        $_SESSION['message'] = $result->message;
        $_SESSION['id_status'] = $result->code;
        header('Location: ' . BASE_PATH . $request->redirect_url);
    }

    public function deleteCategory($request)
    {
        $result = $this->categoryController->delete($request);
        session_start();
        $_SESSION['message'] = $result->message;        
        $_SESSION['id_status'] = $result->code;
        header('Location: ' . BASE_PATH . $request->redirect_url);
    }

    // ============= Orders Controllers ============= //
    public function getOrder($token, $id_user)
    {
      
        $orders_data = $this->orderController->get($token, $id_user);  
        if (isset($orders_data->data)) {
            if (is_object($orders_data->data)) {
                return [$orders_data->data]; 
            }
            if (is_array($orders_data->data)) {
                return $orders_data->data;
            }
        }

        return (object)["code" => -1, "message" => "No se encontraron ordenes"];
    }
}

$controller = new Controller();

$request = (object)$_POST;

// Form

if (isset($_POST['action'])) {
    switch ($_POST['action']) {
            // Auth
        case 'login':
            $controller->login($request);
            break;

            // User
        case 'createUser':
            $controller->createUser($request, $_FILES);
            break;
        case 'updateUser':
            $controller->updateUser($request, $_POST['redirect_url'], $_FILES);
            break;
        case 'deleteUser':
            $controller->deleteUser($request);
            break;

            // Client
        case 'getClients':
            $controller->getClients($request);
            break;
        case 'getClient':
            $controller->getClient($request);
            break;
        case 'createClient':
            $controller->createClient($request);
            break;
        case 'updateClient':
            $controller->updateClient($request);
            break;
        case 'deleteClient':
            $controller->deleteClient($request);
            break;

            // Product
        case 'createProduct':
            $controller->createProduct($request, $_FILES);
            break;
        case 'updateProduct':
            $controller->updateProduct($request);
            break;
        case 'deleteProduct':
            $controller->deleteProduct($request);
            break;

            // Order

        default:
            echo 'Controlador no encontrado';
    }
} else {
    echo "<script>console.log('Sistema de controladores')</script>";
}
