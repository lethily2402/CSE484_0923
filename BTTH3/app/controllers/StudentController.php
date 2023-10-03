<?php
require_once(APP_ROOT . "/app/services/StudentService.php");
// class StudentController
// {
    // public function index()
    // {
    //     $studentService = new StudentService();
    //     $students = $studentService->getAllStudent();
    //     if ($students == []) {
    //         require_once(APP_ROOT . "/app/views/error/index.php");
    //     } else {
    //         require_once(APP_ROOT . "/app/views/student/index.php");
    //     }
    // }
    // public function add()
    // {
    //     if (isset($_POST["nameStudent"]) && isset($_POST["email"]) && isset($_POST["birthday"]) && isset($_POST["idClass"])) {
    //         $nameStudent = trim($_POST["nameStudent"]);
    //         $email = trim($_POST["email"]);
    //         $birthday = $_POST["birthday"];
    //         $idClass = trim($_POST["idClass"]);
    //         $studentService = new StudentService();
    //         $student = $studentService->addStudent($nameStudent, $email, $birthday, $idClass);
    //         if ($student == false) {
    //             require_once(APP_ROOT . "/app/views/Error/index.php");
    //         } else {
    //             header("Location:" . DOMAIN . "/public/index.php?controller=student&action=index");
    //         }
    //     } else {
    //         require_once(APP_ROOT . "/app/views/student/add.php");
    //     }
    // }
    // public function formAdd()
    // {
    //     require_once(APP_ROOT . "/app/services/classService.php");
    //     $classService = new ClassService();
    //     $class = $classService->getAllClass();
    //     require_once(APP_ROOT . "/app/views/student/add.php");
    // }
   
    // public function update()
    // {
    //     if (isset($_POST["idClass"]) && isset($_POST["nameStudent"]) && isset($_POST["email"]) && isset($_POST["birthday"]) && isset($_POST["id"])) {
    //         $idClass = $_POST["idClass"];
    //         $id = $_POST["id"];
    //         $nameStudent = trim($_POST["nameStudent"]);
    //         $emailStudent = trim($_POST["email"]);
    //         $birthday = trim($_POST["birthday"]);
    //         $studentService = new StudentService();
    //         $student = $studentService->updateStudent($id, $nameStudent, $emailStudent, $birthday, $idClass);
    //         if ($student == false) {
    //             require_once(APP_ROOT . "/app/views/Error/index.php");
    //         } else {
    //             header("Location:" . DOMAIN . "/public/index.php?controller=student&action=index");
    //         }
    //     } else {
    //         require_once(APP_ROOT . "/app/services/classService.php");
    //         $classService = new ClassService();
    //         $class = $classService->getAllClass();
    //         if (isset($_GET["id"])) {
    //             $id = $_GET["id"];
    //             $studentService = new StudentService();
    //             $student = $studentService->getStudent($id);
    //             require_once(APP_ROOT . "/app/views/student/update.php");
    //         }
    //     }
    // }
//     public function updateForm()
//     {
//         require_once(APP_ROOT . "/app/services/classService.php");
//         $classService = new ClassService();
//         $class = $classService->getAllclass();
//         if (isset($_GET["id"])) {
//             $id = $_GET["id"];
//             $studentService = new StudentService();
//             $student = $studentService->getStudent($id);
//             require_once(APP_ROOT . "/app/views/student/update.php");
//         }
//     }
// }
// class ErrorController
// {
//     public function index()
//     {
//         require_once(APP_ROOT . "/app/views/error/index.php");
//     }
// }