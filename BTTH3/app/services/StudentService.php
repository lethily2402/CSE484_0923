<?php
require_once(APP_ROOT . "/app/model/student.php");
require_once(APP_ROOT . "/app/lib/DBconnection.php");
class StudentService
{
    public function addStudent($name, $email, $birthday, $idClass)
    {
        $dbConnection = new DBconnection();
        $conn = $dbConnection->getConnection();
        if ($conn != null) {
            $sql = "INSERT INTO sinhvien(tensinhvien,email,ngaysinh,idlop) values(?,?,?,?)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1, $name);
            $stmt->bindParam(2, $email);
            $stmt->bindParam(3, $birthday);
            $stmt->bindParam(4, $idClass);
            $stmt->execute();
            return true;
        }
        return false;
    }
    public function getAllStudent()
    {
        $dbConnection = new DBconnection();
        $conn = $dbConnection->getConnection();
        if ($conn != null) {
            $sql = "SELECT * FROM sinhvien";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $studentArr = [];
            if ($stmt->rowCount() > 0) {
                foreach ($stmt->fetchAll() as $row) {
                    $student = new Student($row["id"], $row["tensinhvien"], $row["email"], $row["ngaysinh"], $row["idlop"]);
                    $studentArr[] = $student;
                }
            }
            return $studentArr;
        }
    }
    public function deleteStudent($id)
    {
        $dbConnection = new DBconnection();
        $conn = $dbConnection->getConnection();
        if ($conn != null) {
            $sql = "DELETE FROM Sinhvien WHERE id=?";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1, $id);
            $stmt->execute();
            return true;
        }
        return false;
    }
    public function updateStudent($id, $name, $email, $birthday, $idClass)
    {
        $dbConnection = new DBconnection();
        $conn = $dbConnection->getConnection();
        if ($conn != null) {
            $sql = "Update sinhvien set tensinhvien = ? , email = ? , ngaysinh=?,idlop= ? where id =?";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1, $name);
            $stmt->bindParam(2, $email);
            $stmt->bindParam(3, $birthday);
            $stmt->bindParam(4, $idClass);
            $stmt->bindParam(5, $id);
            $stmt->execute();
            return true;
        }
        return false;
    }
    public function getStudent($id)
    {
        $dbConnection = new DBconnection();
        $conn = $dbConnection->getConnection();
        if ($conn != null) {
            $sql = "SELECT * FROM sinhvien where id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1, $id);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                $row=$stmt->fetch();
                $student = new Student($row["id"], $row["tensinhvien"], $row["email"], $row["ngaysinh"], $row["idlop"]);
            }
            return $student;
        }
    }
}
