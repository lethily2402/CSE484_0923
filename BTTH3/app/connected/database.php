<?php

class Database {
    private $host ='QuanliSV';
    private $username = 'root';
    private $password = '123456789';
    private $database = 'QuanlySinhVien';

    protected $connection;

    public function __construct() {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);

        if ($this->connection->connect_error) {
            die('Kết nối cơ sở dữ liệu thất bại: ' . $this->connection->connect_error);
        }
    }
}