<?php
require_once("../app/config/config.php");
require_once(APP_ROOT . "/app/controller/userController.php");
if (isset($_GET["action"]) && ($_GET["action"] == "login")) {
    $userController = new UserController();
    $userController->login();
}
else{
    $userController = new UserController();
    $userController->index();
}