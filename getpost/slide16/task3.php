<?php
$name = '';
$resultMessage = '';
$score = 0;

if ($_POST) {
    $name = $_POST['name'];

    $answers = [
        $_POST['q1'], $_POST['q2'], $_POST['q3'], $_POST['q4'],
        $_POST['q5'], $_POST['q6'], $_POST['q7'], $_POST['q8'],
        $_POST['q9'], $_POST['q10'], $_POST['q11'], $_POST['q12'],
        $_POST['q13'], $_POST['q14'], $_POST['q15'], $_POST['q16'],
        $_POST['q17'], $_POST['q18'], $_POST['q19']
    ];

    // Подсчет баллов
    foreach ($answers as $index => $answer) {
        if (in_array($index + 1, [3, 9, 10, 13, 14, 19]) && $answer === 'yes') {
            $score++;
        }
        if (in_array($index + 1, [1, 2, 4, 5, 6, 7, 8, 11, 12, 15, 16, 17, 18]) && $answer === 'no') {
            $score++;
        }
    }

    if ($score > 15) {
        $resultMessage = "У Вас покладистый характер";
    } elseif ($score >= 8) {
        $resultMessage = "Вы не лишены недостатков, но с вами можно ладить";
    } else {
        $resultMessage = "Вашим друзьям можно посочувствовать";
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Анкета</title>
</head>
<body>
<?php if ($_POST): ?>
    <h2>Результаты анкеты для <?php echo htmlspecialchars($name); ?>:</h2>
    <p><?php echo htmlspecialchars($resultMessage); ?></p>
<?php endif; ?>
<h1>Анкета</h1>

<form method="post" action="">
    <label for="name">Ваше имя:</label>
    <input type="text" name="name" id="name" value="<?php echo htmlspecialchars($name); ?>" required>
    <br><br>

    <?php for ($i = 1; $i <= 19; $i++): ?>
        <p>Вопрос <?php echo $i; ?>:</p>
        <label>
            <input type="radio" name="q<?php echo $i; ?>" value="yes" checked>
            Да
        </label>
        <label>
            <input type="radio" name="q<?php echo $i; ?>" value="no">
            Нет
        </label>
        <br><br>
    <?php endfor; ?>

    <input type="submit" value="Отправить">
</form>
</body>
</html>
