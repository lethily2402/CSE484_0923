<?php
// Xử lý các thao tác thêm, chỉnh sửa, xóa sinh viên

// Kết nối cơ sở dữ liệu và tạo đối tượng Model
// require_once 'Database.php';
// require_once 'Model.php';
// $db = new Database();
// $model = new Model($db);

// Xử lý lấy danh sách sinh viên từ Model
// $students = $model->layDanhSachSinhVien();

// Xử lý lấy danh sách lớp từ Model
// $classes = $model->layDanhSachLop();

// Xử lý thêm sinh viên mới
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['tenSinhVien']) && isset($_POST['email']) && isset($_POST['ngaySinh']) && isset($_POST['idLop'])) {
    $tenSinhVien = $_POST['tenSinhVien'];
    $email = $_POST['email'];
    $ngaySinh = $_POST['ngaySinh'];
    $idLop = $_POST['idLop'];
    $model->themSinhVien($tenSinhVien, $email, $ngaySinh, $idLop);
}

// Xử lý cập nhật thông tin sinh viên
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id']) && isset($_POST['tenSinhVien']) && isset($_POST['email']) && isset($_POST['ngaySinh']) && isset($_POST['idLop'])) {
    $idSinhVien = $_POST['id'];
    $tenSinhVien = $_POST['tenSinhVien'];
    $email = $_POST['email'];
    $ngaySinh = $_POST['ngaySinh'];
    $idLop = $_POST['idLop'];
    $model->capNhatSinhVien($idSinhVien, $tenSinhVien, $email, $ngaySinh, $idLop);
}

// Xử lý xóa sinh viên
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $idSinhVien = $_GET['id'];
    $model->xoaSinhVien($idSinhVien);
}

// Chuyển hướng về trang chủ
header('Location: index.php');
exit;
?>