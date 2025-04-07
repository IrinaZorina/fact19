<?php
Class Auth{
    public string $login;
    public string $password;
    public string $hostname;
    public string $username;
    public string $dbpassword;
    public string $dbname;
    public bool $isLoggedIn = false;
    public string $errorMessage = '';
    private mysqli $mysqli;

    public function __construct($login, $password, $hostname, $username, $dbpassword, $dbname){
        $this->login = $login;
        $this->password = $password;
        $this->hostname = $hostname;
        $this->username = $username;
        $this->dbpassword = $dbpassword;
        $this->dbname = $dbname;
        $this->mysqli = new mysqli($this->hostname, $this->username, $this->dbpassword, $this->dbname);
        $this->mysqli->set_charset('utf8');
        if ($this->mysqli->connect_error) {
            die("Ошибка подключения к базе данных: " . $this->mysqli->connect_error);
        }

    }

    public function authenticate(){
        if(!empty($this->login) && !empty($this->password)){
            $name = $this->login;
            $pass = $this->password;
            $res = $this->mysqli->query("SELECT * FROM user WHERE name = '$name' and password ='$pass'");
            if($res->num_rows>0){
                $zap = $res->fetch_assoc();
                if($zap){
                    $_SESSION['Passw'] = $pass;
                    $this->isLoggedIn = true;

                } else{
                    $this->errorMessage = "введен некорректный пароль";
                    $this->isLoggedIn = false;

                }
            } else{
                $this->errorMessage = "данного пользователя не существует";
                $this->isLoggedIn = false;
            }
        } else{
            $this->errorMessage = "Заполните пустые поля";
            $this->isLoggedIn = false;
        }
    }


}
