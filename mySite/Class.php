<?php
session_start();
class Database {
    private $conn;
    public function __construct($host, $username, $password, $dbname) {
        $this->conn = new mysqli($host, $username, $password, $dbname);

        if ($this->conn->connect_error) {
            die("Ошибка подключения: " . $this->conn->connect_error);
        }
    }
    public function query($sql) {
        return $this->conn->query($sql);
    }
    public function escape_string($string) {
        return $this->conn->real_escape_string($string);
    }
    public function close() {
        $this->conn->close();
    }
}
class User {
    private $db;
    private $login;
    private $password;
    public function __construct(Database $db, $login, $password) {
        $this->db = $db;
        $this->login = $login;
        $this->password = $password;
    }
    public function authenticate() {
        $login = $this->db->escape_string($this->login);
        $sql = "SELECT * FROM user WHERE login = '$login'";
        $result = $this->db->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($this->password, $row['password'])) {
                $_SESSION['login'] = $this->login;
                $_SESSION['password'] = password_hash($this->password, PASSWORD_DEFAULT);
                header('Location: welcome.php');
                exit;
            } else {
                echo "Неверный пароль!";
            }
        } else {
            echo "Пользователь не найден!";
        }
    }
}
