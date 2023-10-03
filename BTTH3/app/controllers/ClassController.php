<?php
require_once(APP_ROOT."/app/services/ClassService.php");
class ClassController{
    // public function index(){
    //     $classService=new ClassService();
    //     $class=$classService->getAllClass();
    //     if($class == []){
    //         require_once(APP_ROOT."/app/views/error/index.php");
    //     }
    //     else{
    //         require_once(APP_ROOT."/app/views/class/index.php");
    //     }
    // }
    public function add(){
        if(isset($_POST["nameClass"])){
            $nameClass=trim($_POST["nameClass"]);
            $classService=new ClassService();
            $class=$classService->addClass($nameClass);
            if($class==false){
                require_once(APP_ROOT."/app/views/error/index.php");
            }
            else{
                header("Location:".DOMAIN."/public/index.php?controller=class&action=index");
            }
        }
        else{
            require_once(APP_ROOT."/app/views/class/add.php");
        }
    }
    public function formAdd(){
        require_once(APP_ROOT."/app/views/class/add.php");
    }
    public function delete(){
        if(isset($_GET["id"])){
            $id=$_GET["id"];
            $classService=new ClassService();
            $class=$classService->deleteClass($id);
            if($class==false){
                require_once(APP_ROOT."/app/views/error/index.php");
            }
            else{
                header("Location:".DOMAIN."/public/index.php?controller=class&action=index");
            }
        }
    }
    public function update(){
        if(isset($_POST["idClass"])&&isset($_POST["nameClass"])){
            $id=$_POST["idClass"];
            $nameClass=trim($_POST["nameClass"]);
            $classService=new ClassService();
            $class=$classService->updateClass($id,$nameClass);
            if($class==false){
                require_once(APP_ROOT."/app/views/error/index.php");
            }
            else{
                header("Location:".DOMAIN."/public/index.php?controller=class&action=index");
            }
        }
        else{
            if(isset($_GET["id"])){
                $id=$_GET["id"];
                $classService=new ClassService();
                $class=$classService->getClass($id);
                require_once(APP_ROOT."/app/views/class/update.php");
            }        
        }
    }
    public function updateForm(){
        if(isset($_GET["id"])){
            $id=$_GET["id"];
            $classService=new ClassService();
            $class=$classService->getClass($id);
            require_once(APP_ROOT."/app/views/class/update.php");
        }
    }
}
class ErrorController{
    public function index(){
        require_once(APP_ROOT."/app/views/error/index.php");
    }
}