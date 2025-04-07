<?php
class User {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function register($login, $password) {
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $this->conn->prepare("INSERT INTO users (login, password) VALUES (?, ?)");
        return $stmt->execute([$login, $passwordHash]);
    }

    public function login($login, $password) {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE login = ?");
        $stmt->execute([$login]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }
        return false;
    }

    public function loginExists($login) {
        $query = "SELECT COUNT(*) FROM users WHERE login = :login";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':login', $login);
        $stmt->execute();
        return $stmt->fetchColumn() > 0;
    }
}
?>
