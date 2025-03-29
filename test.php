<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $score = 0;


    $correct_answers = [
        'q1' => 'b',
        'q2' => 'a',
        'q3' => 'c',
        'q4' => 'd',
        'q5' => 'a',
        'q6' => 'b',
        'q7' => 'c',
        'q8' => 'd',
        'q9' => 'a',
        'q10' => 'b',
    ];


    foreach ($correct_answers as $question => $answer) {
        if (isset($_POST[$question]) && $_POST[$question] == $answer) {
            $score++;
        }
    }


    echo "<h1>Ваш результат: $score из 10</h1>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тест по информатике</title>
</head>
<body>
    <h1>Тест по информатике</h1>
    <form method="post">
        <ol>
            <li>
                <p> Что такое PHP?</p>
                <label><input type="radio" name="q1" value="a"> Язык программирования для создания игр</label><br>
                <label><input type="radio" name="q1" value="b"> Серверный язык программирования</label><br>
                <label><input type="radio" name="q1" value="c"> Язык разметки</label><br>
                <label><input type="radio" name="q1" value="d"> Операционная система</label>
            </li>
            <li>
                <p>Что такое HTML?</p>
                <label><input type="radio" name="q2" value="a"> Язык разметки для веб-страниц</label><br>
                <label><input type="radio" name="q2" value="b"> Язык программирования</label><br>
                <label><input type="radio" name="q2" value="c"> База данных</label><br>
                <label><input type="radio" name="q2" value="d"> Операционная система</label>
            </li>
            <li>
                <p>Что такое SQL?</p>
                <label><input type="radio" name="q3" value="a"> Язык программирования</label><br>
                <label><input type="radio" name="q3" value="b"> Язык разметки</label><br>
                <label><input type="radio" name="q3" value="c"> Язык для работы с базами данных</label><br>
                <label><input type="radio" name="q3" value="d"> Операционная система</label>
            </li>
            <li>
                <p>Что такое CSS?</p>
                <label><input type="radio" name="q4" value="a"> Язык программирования</label><br>
                <label><input type="radio" name="q4" value="b"> Язык разметки</label><br>
                <label><input type="radio" name="q4" value="c"> Язык для работы с базами данных</label><br>
                <label><input type="radio" name="q4" value="d"> Язык для стилизации веб-страниц</label>
            </li>
            <li>
                <p>Что такое алгоритм?</p>
                <label><input type="radio" name="q5" value="a"> Последовательность действий для решения задачи</label><br>
                <label><input type="radio" name="q5" value="b"> Программа для компьютера</label><br>
                <label><input type="radio" name="q5" value="c"> Язык программирования</label><br>
                <label><input type="radio" name="q5" value="d"> Операционная система</label>
            </li>
            <li>
                <p>Что такое операционная система?</p>
                <label><input type="radio" name="q6" value="a"> Программа для работы с базами данных</label><br>
                <label><input type="radio" name="q6" value="b"> Программное обеспечение, управляющее аппаратными ресурсами компьютера</label><br>
                <label><input type="radio" name="q6" value="c"> Язык программирования</label><br>
                <label><input type="radio" name="q6" value="d"> Язык разметки</label>
            </li>
            <li>
                <p>Что такое интернет?</p>
                <label><input type="radio" name="q7" value="a"> Локальная сеть</label><br>
                <label><input type="radio" name="q7" value="b"> Программа для общения</label><br>
                <label><input type="radio" name="q7" value="c"> Глобальная сеть, соединяющая миллионы компьютеров</label><br>
                <label><input type="radio" name="q7" value="d"> Операционная система</label>
            </li>
            <li>
                <p>Что такое браузер?</p>
                <label><input type="radio" name="q8" value="a"> Программа для работы с базами данных</label><br>
                <label><input type="radio" name="q8" value="b"> Язык программирования</label><br>
                <label><input type="radio" name="q8" value="c"> Программа для просмотра веб-страниц</label><br>
                <label><input type="radio" name="q8" value="d"> Операционная система</label>
            </li>
            <li>
                <p>Что такое вирус?</p>
                <label><input type="radio" name="q9" value="a"> Вредоносная программа</label><br>
                <label><input type="radio" name="q9" value="b"> Программа для работы с базами данных</label><br>
                <label><input type="radio" name="q9" value="c"> Язык программирования</label><br>
                <label><input type="radio" name="q9" value="d"> Операционная система</label>
            </li>
            <li>
                <p>Что такое облачные технологии?</p>
                <label><input type="radio" name="q10" value="a"> Технологии для хранения данных на локальных устройствах</label><br>
                <label><input type="radio" name="q10" value="b"> Технологии для хранения и обработки данных в интернете</label><br>
                <label><input type="radio" name="q10" value="c"> Язык программирования</label><br>
                <label><input type="radio" name="q10" value="d"> Операционная система</label>
            </li>
        </ol>
        <input type="submit" value="Отправить">
    </form>
</body>
</html>