<?php
require_once(APP_ROOT."/app/services/UserService.php");
class UserController{
    public function index(){
        $UserService=new UserService();
        $user=$UserService->getAllUser();
        if($user == []){
            require_once(APP_ROOT."/app/views/error/index.php");
        }
        else{
            require_once(APP_ROOT."/app/views/home/index.php");
        }
    }
    public function login(){
        $UserService=new UserService();
    }
}