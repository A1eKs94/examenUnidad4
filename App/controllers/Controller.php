<?php

require_once "../../config.php";
require_once "AuthController.php";
require_once "UserController.php";

class Controller
{
    public static $authController;
    public static $userController;

    public function __construct()
    {
        self::$authController = new AuthController();
        self::$userController = new UserController();
    }

    // Auth Controllers
    public function login($request)
    {
        $session_data = Controller::$authController->login($request);
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
        $user_data = Controller::$userController->getUser($request);
        return $user_data;
    }
}

$controller = new Controller();

$request = (object)$_POST;

if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        // Auth
        case 'login': $controller->login($request); break;

        // User
        case 'getUser': $controller->getUser($request); break;

        default: echo 'Controlador no encontrado';
    }
} else {
    echo 'Sistema de controladores';
}
