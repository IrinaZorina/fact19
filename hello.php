<?php

    if(isset($_POST['delete-session']) && $_POST['delete-session']) {
        session_destroy();
        header("Location: index.php");
    }
    if(isset($_POST['theme'])) {
        if($_POST['theme'] == "dark") {
            setcookie('dark-theme', true);
        }else{
            setcookie('dark-theme', false);
        }
        header("Refresh:0");
    }
?>

<? include_once "header.php"; ?>

<h1>Добро пожаловать!</h1>
<p>Вы авторизованы</p>
<?php 
    if(isset($_COOKIE['last-url']))
        echo "<p> В последний раз вы были на странице: " . $_COOKIE['last-url'] . "</p>";
?>
<h2>Выберите страницу</h2>
<a href="bitrix.php">Bitrix</a>
<a href="fact.php">Fact</a>

<p>Удалить сессию</p>
<form action="" method="post">
    <input type="hidden" name="delete-session" value="true">
    <button type="submit">
        Удалить сессию
    </button>
</form>


<h2>Выбрать тему</h2>
<form action="" method="post">
    <select name="theme">
        <option value="dark" <?= (isset($_COOKIE['dark-theme']) && $_COOKIE['dark-theme']) ? 'selected' : "" ?>>Темная</option>
        <option value="light" <?= (!isset($_COOKIE['dark-theme']) || !$_COOKIE['dark-theme']) ? 'selected' : "" ?>>Светлая</option>
    </select>
    <button type="submit">
        Выбрать
    </button>
</form>

<? include_once "footer.php"; ?>