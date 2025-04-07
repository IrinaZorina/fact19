<?php
include 'ins/header.php';
include 'config.php';
include 'classes/Database.php';
include 'classes/Auth.php';

$database = new Database();
$db = $database->connect();
$auth = new Auth();

if (!isset($_SESSION['login'])) {
    header("Location: registration.php");
    exit();
}

$message = 'Добро пожаловать в ваш личный кабинет, ' . htmlspecialchars($_SESSION['login']) . '!';

if (isset($_SESSION['last_page'])) {
    $lastPage = "Последняя страница: " . htmlspecialchars($_SESSION['last_page']);
} else {
    $lastPage = "Последняя страница: неизвестна";
}
?>

<body>
<div class="box2">
    <h1 class="message"><?php echo $message; ?></h1>
    <p class="lastPage"><?php echo $lastPage; ?></p>
    <a href="logout.php"><button type="button" class="btnClose">Выход</button></a>
</div>

</body>
<?php
include 'ins/footer.php';
?>
