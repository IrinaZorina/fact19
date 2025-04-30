<?php
class UserAuth {
    private $login;
    private $password;
    private $conn;

    // Конструктор для инициализации подключения к БД
    public function __construct($hostname, $username, $password, $dbname) {
        $this->conn = new mysqli($hostname, $username, $password, $dbname);
        if ($this->conn->connect_error) {
            die("Ошибка подключения: " . $this->conn->connect_error);
        }
    }

    // Метод для установки логина и пароля из формы
    public function setCredentials($login, $password) {
        $this->login = trim($login);
        $this->password = trim($password);
    }

    // Метод авторизации
    public function authenticate() {
        if (empty($this->login) || empty($this->password)) {
            return "Заполните все поля.";
        }

        // Подготовленный запрос для проверки логина
        $stmt = $this->conn->prepare("SELECT id, password FROM user WHERE login = ?");
        if (!$stmt) {
            return "Ошибка подготовки запроса: " . $this->conn->error;
        }
        $stmt->bind_param("s", $this->login);
        $stmt->execute();
        $stmt->bind_result($id, $hashedPassword);
        $stmt->fetch();

        // Проверяем, найден ли пользователь и совпадает ли пароль
        if ($id && password_verify($this->password, $hashedPassword)) {
            return true; // Успешная авторизация
        } else {
            return "Неверный логин или пароль.";
        }

        $stmt->close();
    }

    // Метод для закрытия соединения
    public function __destruct() {
        $this->conn->close();
    }
}
?>