<?php

namespace Classes;

use mysqli;

class User
{
    private mysqli|false $connection;
    private string $login;
    private string $password;
    private string $password_confirm;

    public function __construct($login, $password, $password_confirm = '')
    {
        $this->connection = mysqli_connect('MySQL-8.2', 'root', '', 'blinov');
        $this->login = htmlentities(trim($login));
        $this->password = htmlentities(trim($password));
        $this->password_confirm = htmlentities(trim($password_confirm));
    }

    public function register(): ?array
    {
        $errors = $this->validate();

        // Сохраняем данные в БД
        if (empty($errors)) {
            $query = "SELECT login FROM users WHERE login = '{$this->login}' LIMIT 1";
            $found = mysqli_query($this->connection, $query);
            if (mysqli_fetch_array($found)) {
                $errors['login'] = 'Такой пользователь уже есть!';
            } else {
                $passwordHashed = password_hash($this->password, PASSWORD_DEFAULT);
                $query = "INSERT INTO users (login, password) VALUES ('{$this->login}', '{$passwordHashed}');";
                if (mysqli_query($this->connection, $query)) {
                    $_SESSION['login'] = $this->login;
                    header('Location: /');
                    exit;
                } else {
                    $errors['login'] = 'Ошибка регистрации!';
                }
            }
        }

        mysqli_close($this->connection);
        return $errors;
    }

    public function login(): ?array
    {
        $errors = $this->validate();

        // Пытаемся войти
        if (empty($errors)) {
            $query = "SELECT login, password FROM users WHERE login = '{$this->login}' LIMIT 1";
            $result = mysqli_query($this->connection, $query);

            $userDB = mysqli_fetch_array($result, MYSQLI_ASSOC);

            if ($userDB && password_verify($this->password, $userDB['password'])) {
                $_SESSION['login'] = $userDB['login'];
                $_SESSION['show_message'] = true;
                header('Location: /');
                exit;
            }

            $errors['login'] = 'Неправильно введен логин или пароль';
        }

        mysqli_close($this->connection);
        return $errors;
    }
    
    private function validate(): array
    {
        $errors = [];

        if (!$this->connection) {
            $errors['login'] = 'Ошибка подключения к БД!';
        }

        if (empty($this->login)) $errors['login'] = 'Введите логин!';
        if (empty($this->password)) $errors['password'] = 'Введите пароль!';
        if ($this->password !== $this->password_confirm && $this->password_confirm != '') {
            $errors['password'] = $errors['password_confirm'] = 'Пароли не совпадают!';
        }

        return $errors;
    }

    static public function logout(): void
    {
        if (isset($_SESSION['login'])) {
            unset($_SESSION['login']);
        }

        header("location: /");
        exit;
    }
}