<?php
session_start();
$hostname = "MySQL-8.2";
$username = "Vad";
$password = "zapret";
$dbname = "db_Borisin";
if($_SERVER['REQUEST_METHOD']=='POST'){
$name = $_POST['Log'];
$pass = $_POST['Passw'];
//корректный логин и пароль: Вадим    Борисин
// Илья    Ефремов
if(!empty($name) && !empty($pass)){
$mysqli = new mysqli($hostname,$username, $password, $dbname);
$mysqli->set_charset('utf8');
$res = $mysqli->query("SELECT * FROM user WHERE name = '$name' and password ='$pass'");
if($res->num_rows>0){
    $zap = $res->fetch_assoc();
if($zap){
$hashPass = password_hash($pass,PASSWORD_DEFAULT);
$_SESSION['Passw'] = $hashPass;
$_SESSION['Log'] = $name;
require_once 'pages/header.php';
echo "добро пожаловать";
}
else{
    echo "введен некорректный пароль";
    
}
}
else{
    echo "данного пользователя не существует";
}
}
else{
    echo "Заполните пустые поля";
}
}
?>

<form method="post"><style><?include "style/form.css"?></style>
    <h2>Авторизация</h2>
    <p>
        <label for="name">Имя:</label>
        <input type="text" name="Log"  required />
    </p>
    <p>
        <label for="pass">Пароль:</label>
        <input type="password" name="Passw"  required />
    </p>
    <button type="submit">
        Авторизоваться
    </button>
</form>