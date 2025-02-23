<?php require $_SERVER['DOCUMENT_ROOT'] . '/src/templates/_header.php'; ?>
<main class="main">
    <div class="section">
        <h1 class="title content__title">Слайд №25</h1>
        <div class="task">
            <div class="task__answer">
                <h2 class="task__title">1. Выведите столбец чисел от 5 до 13.</h2>
                <?php
                for ($i = 5; $i <= 13; $i++) {
                    echo "<p>{$i}</p>";
                }
                ?>
            </div>
        </div>
        <div class="task">
            <h2 class="task__title">2. Дано число $num=1000. Делите его на 2 столько раз, пока результат деления не
                станет меньше
                50.
                Какое число получится? Посчитайте количество итераций, необходимых для этого (итерация - это проход
                цикла).
                Решите задачу сначала через цикл while, а потом через цикл for.</h2>
            <div class="task__answer-container">
                <div>
                    <p>While:</p>
                    <div class="task__answer">
                        <?php
                        $number = 1000;
                        $iter = 0;
                        while ($number >= 50) {
                            $number /= 2;
                            $iter++;
                        }
                        echo "Получится число {$number} <br>";
                        echo "Количество итераций {$iter} <br>";
                        ?>
                    </div>
                </div>
                <div>
                    <p>For:</p>
                    <div class="task__answer">
                        <?php
                        $iter = 0;
                        $number = 0;
                        for ($i = 1000; $i >= 50; $i /= 2) {
                            $iter++;
                            $number = $i / 2;
                        }
                        echo "Получится число {$number} <br>";
                        echo "Количество итераций {$iter} <br>";
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="task">
            <h2 class="task__title">3. Необходимо создать переменную ($i) и передавать в нее значение. Если в переменную
                положить
                0,
                то
                на экране должна отображаться строка со значением «0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10». Если переменная
                равна
                1, то на экране отображается строка «0, 1, 2, 3, 4, 5, 6, 7, 8, 9». Если переменная равна 2, то на
                экране
                отображается строка «0, 1, 2, 3, 4, 5, 6, 7, 8». Если переменная равна 3, то на экране отображается
                строка
                «0, 1, 2, 3, 4, 5, 6, 7» и так далее, до i=10.
            </h2>
            <form method="get" class="form__group">
                <label for="value">Значение</label>
                <input class="task__input" type="text" id="value" name="value">
                <button class="form__submit">Отправить</button>
            </form>
            <div class="task__answer">
                <?php
                try {
                    if (isset($_GET['value']) && $_GET['value'] >= 0 && $_GET['value'] <= 10) {
                        $value = htmlentities($_GET['value']);
                        $arr = range(0, 10 - $value);
                        echo implode(', ', $arr);
                    } else {
                        throw Exception();
                    }
                } catch (Throwable $e) {
                    echo 'Введите число';
                }
                ?>
            </div>
        </div>
    </div>
</main>
<?php require '../src/templates/_footer.php'; ?>
</div>
<script src="assets/js/hamburger-menu.js"></script>
</body>
</html>