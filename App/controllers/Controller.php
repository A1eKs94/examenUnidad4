<?php

require_once dirname(__DIR__, 2) . '/config.php';
require_once "AuthController.php";
require_once "UserController.php";

class Controller
{
    public $authController;
    public $userController;

    public function __construct()
    {
        $this->authController = new AuthController();
        $this->userController = new UserController();
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
    public function getUser($request)
    {
        $user_data = $this->userController->getUser($request);
        return $user_data;
    }

    public function updateUser($request, $redirect_url)
    {
        $result = $this->userController->updateUser($request);
        session_start();
        $_SESSION['message'] = $result->message;
        $_SESSION['id_status'] = $result->code;
        header('Location: ' . BASE_PATH . $redirect_url);
    }

    public function createUser($request, $requestFiles)
    {
        $imgTemp = tempnam(sys_get_temp_dir(),"tmp");
        $urlImg = ($requestFiles['profile_photo_file']['tmp_name'] === "" ? $imgTemp:$requestFiles["profile_photo_file"]['tmp_name']);
        
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
        unlink($imgTemp);
    }
}

$controller = new Controller();

$request = (object)$_POST;

// Form

if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        // Auth
        case 'login': $controller->login($request); break;

        // User
        case 'createUser': $controller->createUser($request, $_FILES); break;
        case 'updateUser': $controller->updateUser($request, $_POST['redirect_url']); break;

        default: echo 'Controlador no encontrado';
    }
} else {
    echo "<script>console.log('Sistema de controladores')</script>";
}
