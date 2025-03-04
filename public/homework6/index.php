<?php require $_SERVER['DOCUMENT_ROOT'] . '/../src/templates/_header.php'; ?>
<main class="main">
    <div class="section">
        <h1 class="title content__title">Дополнительное задание</h1>
        <div class="task">
            <h2 class="task__title">Задача про нахождение максимальной и минимальной заработной платы персонала.
            </h2>
            <div class="task__answer">
                <?php

                class Workers
                {
                    private array $workers = [
                        ['name' => 'Сергей', 'salary' => 25000],
                        ['name' => 'Андрей', 'salary' => 35000],
                        ['name' => 'Владимир', 'salary' => 22000],
                        ['name' => 'Александр', 'salary' => 42000],
                        ['name' => 'Петр', 'salary' => 45000],
                        ['name' => 'Вадим', 'salary' => 32000],
                        ['name' => 'Леонид', 'salary' => 5000],
                        ['name' => 'Степан', 'salary' => 70000]
                    ];

                    private function getYearSalary(int $salary): int
                    {
                        return $salary * 12;
                    }

                    public function showMinMaxSalary(): void
                    {
                        $min = INF;
                        $minName = '';
                        $max = 0;
                        $maxName = '';
                        foreach ($this->workers as $worker) {
                            $yearSalary = $this->getYearSalary($worker['salary']);
                            if ($yearSalary < $min) {
                                $min = $yearSalary;
                                $minName = $worker['name'];
                            } elseif ($yearSalary > $max) {
                                $max = $yearSalary;
                                $maxName = $worker['name'];
                            }
                        }

                        echo 'Минимальная годовая ЗП у ' . $minName . ' и равна ' . $min . 'р.' . '<br>';
                        echo 'Максимальная годовая ЗП у ' . $maxName . ' и равна ' . $max . 'р.';
                    }

                    public function showWorkers(): void
                    {
                        echo '<table border="1">';
                        foreach ($this->workers as $worker) {
                            echo '<tr>';
                            echo '<td>' . $worker['name'] . '</td>';
                            echo '<td>' . $worker['salary'] . 'р.' . '</td>';
                            echo '</tr>';
                        }
                        echo '</table>';
                    }
                }

                $worker = new Workers();
                $worker->showWorkers();
                $worker->showMinMaxSalary();
                ?>
            </div>
        </div>

    </div>
</main>
<?php require $_SERVER['DOCUMENT_ROOT'] . '/../src/templates/_footer.php'; ?>
</div>
<script src="../assets/js/hamburger-menu.js"></script>
</body>
</html>