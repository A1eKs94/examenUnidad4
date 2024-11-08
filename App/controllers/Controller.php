<?php

require_once "../../config.php";
require_once "AuthController.php";

class Controller
{
    public static $authController;

    public function __construct()
    {
        self::$authController = new AuthController();
    }
}

$controller = new Controller();

$request = (object)$_POST;

switch($_POST['action'])
{
    case 'login':
        $session_data = Controller::$authController->login($request);

        if($session_data->code == 2)
        {
            session_start();
            $_SESSION['token'] = $session_data->data->token;
            $_SESSION['profile'] = $session_data;

            header('Location: ' . BASE_PATH . 'testHome.php');
        } else {
            header('Location: ' . BASE_PATH . 'index.php');
        }
        break;
}