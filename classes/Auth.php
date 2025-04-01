<?php

class Auth
{
    private string $login;
    private string $password;

    public function __construct(string $login, string $password) {
        $this->login = $login;
        $this->password = $password;
    }

    public function GetLogin(){
        return $this->login;
    }

    public function GetPassword(){
        return $this->password;
    }

    public function Login(){
        require_once "db.php";

        $status; //хранит стаус логина - успешно или нет (true или false)

        //Запрос к БД
        $sql = "SELECT * FROM users WHERE name=?";

        //Подготовка запроса и извлечение данных из БД
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$this->login]);
        $user = $stmt->fetch();

        if ($user && password_verify($this->password, $user['password'])){
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            $status = true;
        } else {
            $status = false;
        }

        return $status;
    }

}