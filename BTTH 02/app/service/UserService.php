<?php
require_once(APP_ROOT . "/app/model/User.php");
require_once(APP_ROOT . "/app/lib/DBconnection.php");
class UserService
{
    public function getUser($username, $email)
    {
        $dbConnection = new DBconnection();
        $conn = $dbConnection->getConnection();
        if ($conn != null) {
            $sql = "SELECT * FROM USERS where username=? and email = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1, $username);
            $stmt->bindParam(2, $email);
            $stmt->execute();
            $user = new User($stmt->fetch()["id"], $stmt->fetch()["username"], $stmt->fetch()["password"], $stmt->fetch()["email"], $stmt->fetch()["role"], $stmt->fetch()["state"]);
            return $user;
        }
    }
    public function getAllUser()
    {
        $dbConnection = new DBconnection();
        $conn = $dbConnection->getConnection();
        if ($conn != null) {
            $sql = "SELECT * FROM users";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $userArr = [];
            if ($stmt->rowCount() > 0) {
                foreach ($stmt->fetchAll() as $row) {
                    $user = new User($row["id"], $row["username"], $row["password"], $row["email"], $row["role"], $row["state"]);
                    $userArr[] = $user;
                }
            }
            return $userArr;
        }
    }
    public function setPassword($username, $email, $newPassword)
    {
        $dbConnection = new DBconnection();
        $conn = $dbConnection->getConnection();
        if ($conn != null) {
            $password = password_hash($newPassword, PASSWORD_DEFAULT);
            $sql = "Update users set password = ? where username= ? and email = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(1, $password);
            $stmt->bindParam(2, $username);
            $stmt->bindParam(3, $email);
            $stmt->execute();
        }
    }
    public function checkSession(){
    }
    public function login($username, $password)
    {

    }
}