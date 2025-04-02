<?php

class Auth{
    public $login;
    public $password;

    public function __construct($login, $password){
        $this->login = $login;
        $this->password = $password;
    }

    public function login(){
        $hostname = "MySQL-8.2";
        $username = "GaliyaSR";
        $password = "galiya";
        $dbname = "db_sarbaeva";
        $mysqli = new mysqli($hostname, $username, $password, $dbname); // соединение/подключение к БД
        $mysqli->set_charset("utf8"); // установить кодировку

        $result = $mysqli->query("SELECT * FROM users WHERE login = '$this->login'  and password = '$this->password'");

        $row = $result->fetch_all(MYSQLI_ASSOC);

        if ($row) {
            echo 'Авторизация прошла успешно!';
            $_SESSION['auth'] = 'yes';
            header("Location: ../?login=yes");
            exit();
        } else {
            $_SESSION['auth'] = 'no';
            echo 'Логин / Пароль неверный :(';
        }
    }

    public function signUp(){
        $hostname = "MySQL-8.2";
        $username = "GaliyaSR";
        $password = "galiya";
        $dbname = "db_sarbaeva";
        $mysqli = new mysqli($hostname, $username, $password, $dbname); // соединение/подключение к БД
        $mysqli->set_charset("utf8"); // установить кодировку

        //проверить наличие логина
        $result = $mysqli->query("SELECT id FROM users WHERE login='$this->login'");

        $row = $result->fetch_all(MYSQLI_ASSOC);

        if ($row) {
            echo "Логин '$this->login' уже занят.";
        }
        //такого логина нет
        else {
            $mysqli->query("INSERT INTO users   (login, password) VALUES ('$this->login', '$this->password')");
            echo "Вы зарегистрированы!";
        }
    }
}