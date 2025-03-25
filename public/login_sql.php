<?php
session_start();

$servername = "127.127.126.50";
$username_db = "anton";
$password_db = "1234";
$dbname = "portfolio";

$conn = new mysqli($servername, $username_db, $password_db, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = htmlspecialchars($_POST["username"]);
  $password = htmlspecialchars($_POST["password"]);

  $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
  $stmt->bind_param("s", $username);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    if (password_verify($password, $row['password'])) {
      $_SESSION["user"] = $username;
      header("Location: welcome_sql.php");
      exit();
    } else {
      echo "Ошибка: Неверный пароль!";
    }
  } else {
    echo "Ошибка: Пользователь не найден!";
  }

  $stmt->close();
  $conn->close();
}
?>

<?php include 'components/header.php'; ?>

<form action="login_sql.php" method="POST">
  <label>Логин:</label>
  <input type="text" name="username" required><br>
  <label>Пароль:</label>
  <input type="password" name="password" required><br>
  <button type="submit">Войти</button>
</form>

<?php include 'components/footer.php'; ?>

<?php if (isset($error)) {
  echo "<p style='color:red;'>$error</p>";
} ?>