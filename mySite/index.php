<?php require_once'inc/header.php'?>
    <main>
    <div class="main">
        <div class="photo">
            <img src="assets/image/1.jpg" width="500">
        </div>
        <div class="container">
            <div class="about">
                <?php
                $text_about = "Здравстуйте , меня зовут Горячих Иван. Живу в городе Магнитогорск , ранее учился на программиста , сейчас хочу вспомнить и получить новые знания. В свободное время занимаюсь баскетболом.";
                $arr = explode(" ", $text_about);
                for ($i = 0; $i <= 5; $i++) {
                    $arrRes[] = $arr[$i] . ' ';
                }
                $stringRes = implode('', $arrRes);
                $first_ = "<span style='color: #00ff40;'>". $stringRes ."</span>";
                $text_about = str_replace($stringRes, $first_, $text_about);
                echo $text_about ."<br>";
                ?>
                <?php
                    $birthday = DateTime::createFromFormat("d.m.Y","25.07.1998");
                    $date_now = new DateTime( 'now');
                    $interval = $date_now ->diff($birthday);
                    $diff = $interval->days;
                    $bioInfo = "Я родился: " . $birthday->format("d.m.Y") . "<br>" .
                    "Сегодня: " . $date_now->format("d.m.Y") . "<br>" .
                    "Разница: " . $diff;
                    echo $bioInfo;
                    ?>
            </div>
            <div class="name">
                <?php
                $fio = '<h1>Горячих Иван</h1>';
                echo $fio;
                ?>
            </div>
            <div class="lesson">
                <?php
                $text_lesson = "С 1 урока был в восторге , все четко и по делу!";
                $arr_lesson = explode(" ", $text_lesson);
                $style_text = "";
                foreach ($arr_lesson as $index_word => $word) {
                    if (($index_word + 1) % 2 === 0) {
                        $style_text .= "<span style='color: #002aff;'>" . $word . " " . "</span>";
                    }else{
                        $style_text .= "<span style='color: #ff0000;'>" . $word . " " . "</span>";
                    }
                }
                echo $style_text  ;
                ?>
            </div>
        </div>
    </div>
<?php
$html10 = '
        <div class="mgn-text">
            <h1> Достопримечательности города Магнитогорск </h1>
        </div>
        <div class="mgn-container">
            <div class="mgn-photo1">
                <div class="tyl">
                    <p>Тыл-фронту</p>
                </div>
                <img src="assets/image/tyl.JPG" alt="Тыл-фронту" width="350" height="250">
            </div>
            <div class="mgn-photo2">
                <div class="palatka">
                    <p>Первая палатка</p>
                </div>
                <img src="assets/image/palatka.jpg" alt="Палатка" width="350" height="250">
            </div>
            <div class="mgn-photo3">
                <div class="hram">
                    <p>Собор Вознесения</p>
                </div>
                <img src="assets/image/hram.jpg" alt="hram" width="350" height="250">
            </div>
            <div class="mgn-photo4">
                <div class="arena">
                    <p>Арена Металлург</p>
                </div>
                <img src="assets/image/arena.jpg" alt="arena" width="350" height="250">
            </div>
        </div>
        <div class="oblast-text">
            <h1>Достопримечательности Челябинской области</h1>
        </div>
        <div class="oblast-container">
            <div class="oblast-photo1">
                <img src="assets/image/taganay.jpg"alt="taganay" width="920" height="550">
                <p>Парк Таганай</p>
            </div>
            <div class="oblast-photo2">
                <img src="assets/image/turgoyak.jpg"alt="turgoyak" width="920" height="550">
                <p>Озеро Тургояк<p>
            </div>
            <div class="oblast-photo3">
                <img src="assets/image/Sugomak.jpg"alt="sukomak" width="920" height="550">
                <p>Сугомакская пещера</p>
            </div>
            
            <div class="oblast-photo4">
                <img src="assets/image/arkaym.jpg" alt="arkaym" width="920" height="550">
                <p>Аркаим</p>
            </div>
        </div>';
echo $html10;
?>
        <div class="container-info">
            <div class="strings">
                <?php
                $fullText = $html10 . $text_about . $bioInfo . $fio . $text_lesson;
                $result = strip_tags($fullText);
                $words = preg_split('/\s+/', trim($result));
                $wordCount = count($words);
                echo "Общее количество слов на странице index.php: " . $wordCount;
                echo "<br>";
                $count = preg_match_all('/[аеёиоуэюяАЕЁИОУЭЮЯ]/u', $fullText);
                echo "Количество гласных букв: " . $count;
                ?>
            </div>
        </div>

    </main>
<?php require_once  'inc/footer.php'?>
