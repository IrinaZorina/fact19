<?php
$servername = "127.127.126.50";
$username = "arr";
$password = "123";
$dbname = "portfolio";

$connection = new mysqli('127.127.126.50', $username, $password, $dbname);


if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $stmt = $connection->prepare("SELECT * FROM users WHERE username = ?");
  $stmt->bind_param("s", $username);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    echo "Пользователь с таким логином уже существует!";
  } else {
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    $stmt = $connection->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $hashed_password);

    if ($stmt->execute()) {
      echo "Новый пользователь успешно зарегистрирован!";
    } else {
      echo "Ошибка: " . $stmt->error;
    }
  }

  $stmt->close();
}

$connection->close();
?>

<?php include 'components/header.php'; ?>

<form action="register_sql.php" method="POST">
  <label>Логин:</label>
  <input type="text" name="username" required><br>
  <label>Пароль:</label>
  <input type="password" name="password" required><br>
  <button type="submit">Зарегистрироваться</button>
</form>

<?php include 'components/footer.php'; ?>