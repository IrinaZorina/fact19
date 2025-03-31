<?php
$hostname = "MySQL-8.2";  // Убедитесь, что хост корректен (обычно 'localhost')
$username = "fact";
$password = "220691";
$dbname = "fact";


$hostname = "MySQL-8.2";
$username = "fact";
$password = "220691";
$dbname = "fact";

// Подключение к базе данных
$mysqli = new mysqli($hostname, $username, $password, $dbname);

// Проверка соединения
if ($mysqli->connect_error) {
    die("Ошибка подключения: " . $mysqli->connect_error);
}

// Установка кодировки UTF-8
$mysqli->set_charset('utf8');

// Создание таблицы связей
$result = $mysqli->query("CREATE TABLE IF NOT EXISTS people_hobbies (
    id INT NOT NULL AUTO_INCREMENT,
    id_people INT,
    id_hobbies INT,
    PRIMARY KEY (id),
    FOREIGN KEY (id_people) REFERENCES people(id) ON DELETE RESTRICT ON UPDATE CASCADE,
    FOREIGN KEY (id_hobbies) REFERENCES hobbies(id) ON DELETE RESTRICT ON UPDATE CASCADE
)");

// Проверка выполнения запроса
if ($result === false) {
    die("Ошибка при создании таблицы: " . $mysqli->error);
} else {
    echo "Таблица people_hobbies успешно создана!";
}

// Закрытие соединения
$mysqli->close();
