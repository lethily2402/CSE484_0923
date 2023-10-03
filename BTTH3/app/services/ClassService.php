<?php
require_once(APP_ROOT . "/app/model/Class.php");
require_once(APP_ROOT . "/app/libs/DBconnection.php");
class ClassService{
    // public function getAllClass()
    // {
    //     $dbConnection = new DBconnection();
    //     $conn = $dbConnection->getConnection();
    //     if ($conn != null) {
    //         $sql = "SELECT * FROM Lop";
    //         $stmt = $conn->prepare($sql);
    //         $stmt->execute();
    //         $classArr = [];
    //         if ($stmt->rowCount() > 0) {
    //             foreach ($stmt->fetchAll() as $row) {
    //                 $class = new Class($row["id"], $row["tenlop"]);
    //                 $classArr[] = $class;
    //             }
    //         }
    //         return $classArr;
    //     }
    // }
    public function getCLass($id)
    {
        $dbConnection = new DBconnection();
        $conn = $dbConnection->getConnection();
        if ($conn != null) {
            $sql = "SELECT * FROM lop where id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1,$id);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                $row = $stmt->fetch();
                $class = new Classs($row["id"], $row["tenlop"]);
            }
            return $class;
        }
    }
    public function addClass($name)
    {
        $dbConnection = new DBconnection();
        $conn = $dbConnection->getConnection();
        if ($conn != null) {
            $sql = "INSERT INTO lop(tenlop) values(?)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1,$name);
            $stmt->execute();
            return true;
        }
        return false;
    }
    public function deleteClass($id)
    {
        $dbConnection = new DBconnection();
        $conn = $dbConnection->getConnection();
        if ($conn != null) {
            $sql = "DELETE FROM LOP WHERE id=?";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1,$id);
            $stmt->execute();
            return true;
        }
        return false;
    }
    public function updateClass($id,$name)
    {
        $dbConnection = new DBconnection();
        $conn = $dbConnection->getConnection();
        if ($conn != null) {
            $sql = "Update LOP set tenlop =? where id =?";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1,$name);
            $stmt->bindParam(2,$id);
            $stmt->execute();
            return true;
        }
        return false;
    }
}
?>