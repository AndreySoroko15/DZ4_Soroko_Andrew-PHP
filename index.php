<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework 4</title>

    <style>

    hr {
            height: 3px;
            background-image: linear-gradient(to right, khaki 40%, darkKhaki 60%);
        }

    input {
        padding: 5px;
        text-decoration: inherit;
        border-radius: 10px;
        border: 1px solid gray;
        font-style: italic;
        margin-bottom: 10px;
    }

    </style>
</head>
<body>
    <?php 
    
    //task 1
    echo '<p class="task"> 1. Дана строка \'london is the capital of great britain\'. Сделайте из нее строку \'London Is The Capital Of Great Britain\'. </p>';

    function up_first_letter($str = "text") {

        return (!is_string($str)) ? 'Не строковое значение' : ucwords($str, ' ');
    }

    echo up_first_letter('london is a capital of grear britain') . '<hr>';

    //task 2
    echo '<p class="task"> 2. Дана строка \'html <b>css</b> php\'. Удалите теги из этой строки. С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива. </p>';

    function tag_del($str = "html <b>css</b> php") {
        
        return explode(' ', strip_tags($str)); 
    }

    echo '<pre>' . print_r(tag_del( "html <b>css</b> php"), true)  . '</pre> <hr>';

    //task 3
    echo '<p class="task"> 3. Дана строка. Перемешайте символы этой строки в случайном порядке. </p>';

    function task3($str = 'text') {

        return (is_string($str)) ? str_shuffle($str) : 'Не строковое значение';
    }

    echo task3('i learn php') . '<hr>';

    //task 4
    echo '<p class="task"> 4. Найдите количество дней в текущем месяце. Скрипт должен работать независимо от месяца, в котором он запущен. </p>';


    function d_in_current_m() {

        return date('t');
    }

    echo 'В мае ' . d_in_current_m() . ' день <hr>';


    //task 5
    echo "<p class='task'> 5. Выведите текущую дату-время в форматах '2025-12-31', '31.12.2025', '31.12.13', '12:59:59', timestamp. </p>"; 
    function current_date() {
        
        return $arr = [
            date('Y-m-d'),
            date('d.m.Y'),
            date('d.m.y'),
            date('h:i:s'),
            time(),
        ];
    }

    echo '<pre>' . print_r(current_date(), true) . '</pre> <hr>';
    
    //task 6
    echo "<p class='task'> 6. В переменной \$date лежит дата в формате '2025-12-31'. Прибавьте к этой дате 2 дня, 1 месяц и 3 дня, 1 год. Отнимите от этой даты 3 дня. </p>";

    function task6($date = '2001-01-01') {

        return date('Y-m-d', strtotime($date . '+2 days +1 month +3 days +1 year -3 days'));
    }

    echo task6('2025-12-31') . '<hr>';

    //task 7
    echo "<p class='task'> 7. Дана строка с буквами и цифрами, например, '1a2b3c4b5d6e7f8g9h0'. Удалите из нее все цифры. То есть в нашем случае должна получится строка 'abcbdefgh'. </p>";

    function delete_degits($str = 'text123') {

        return preg_replace('/\d/', '', $str);
    }

    echo delete_degits('1a2b3c4b5d6e7f8g9h0') . '<hr>';

    //task 8
    echo "<p class='task'> 8. Даны числа 4, -2, 5, 19, -130, 0, 10. Найдите минимальное и максимальное число. </p>";

    function min_and_max($arr = [1,2,3]) {
        return [
            'min' => min($arr),
            'max' => max($arr),
        ];
    }

    echo '<pre>' . print_r(min_and_max([4, -2, 5, 19, -130, 0, 10,]), true) . '</pre> <hr>';

    //task 9
    echo "<p class='task'> 9. Выведите на экран случайное число от 1 до 100. </p>";

    function random_from1to100() {
        return rand(1,100);
    }

   // echo random_from1to100() . '<hr>';

    function random($start, $end) {
        $arr = [];

        for($i = $start; $i <= $end; $i++) {
            array_push($arr, $i);
        }

        shuffle($arr);

        return $arr[0];
    }
    
    echo random(1, 100) . '<hr>';
    
    //task 10
    echo "<p class='task'> 10. Создайте ассоциативный массив дней недели. Ключами в нем должны служить номера дней от начала недели (понедельник - должен иметь ключ 1, вторник - 2 и т.д.). Выведите на экран текущий день недели. </p>";

    function current_day() {
        $arr = [
            1 => 'Понедельник',
            2 => 'Вторник',
            3 => 'Среда', 
            4 => 'Четверг',
            5 => 'Пятница', 
            6 => 'Суббота',
            0 => 'Воскресенье',
        ];

        foreach ($arr as $key => $value) {
            if ($key == date('w')) return $value;
        }
    }

    echo current_day() . '<hr>';

    // task 11
    echo "<p class='task'> 11. Дан двухмерный массив с числами, например [[1, 2, 3], [4, 5], [6]]. Найдите сумму элементов этого массива. Массив, конечно же, может быть произвольным. </p>";

    function sum_of_arr_elem($arr = [1,2,3]) {

        $res = 0;

        for($i = 0; $i < count($arr); $i++) {
            if (is_array($arr[$i])) {
                for($j = 0; $j < count($arr); $j++) {
                    $res += $arr[$i][$j];
                } 
            } else {
                $res += $arr[$i];
            }
        }

        return $res;
    }

    echo sum_of_arr_elem([[1, 2, 3], [4, 5], [6]]);
    echo '<hr>';

    // task 12
    echo "<p class='task'> 12. Есть массив \$array = array(1,1,1,2,2,2,2,3), необходимо вывести 1,2,3, то есть вывести без дублей при помощи лишь одного цикла и без использования функций PHP. </p>";

    function without_double($arr = [1,1,2,2,3,3]) {

        foreach ($arr as $key => $value) {
            
            if($arr[$key] != $arr[$key +1]) echo $arr[$key];
        }

    }

    //echo '<pre>' . print_r($new_arr) . '</pre>';
    without_double();
    echo '<hr>';

    // task 13
    echo "<p class='task'> 13. Используя ассоциативный массив, добавить на страницу навигационное меню. </p>";

    function add_menu() {

        $arr = [
            'index' => 'Home',
            'about' => 'About',
            'services' => 'Services', 
            'catalog' => 'Catalog',
            'contacts' => 'Contact', 
        ];

        echo '<ul>';

        foreach ($arr as $key => $value) {
            echo "<li><a href={$key}>{$value}</a></li>";
        }

        echo '</ul>';
    }

    add_menu();
    echo '<hr>';

    // task 14
    echo "<p class='task'> 14. Вывести на черном фоне n красных квадратов случайного размера в случайной позиции в браузере. </p>";

    function random_rectangle($n) {
        echo '<div style="background-color: black; width: 700px; height: 200px; margin: auto; position: relative; overflow: hidden;">';

        for($i = 0; $i <$n; $i++) {
            echo "<div style='
                    width:" . rand(10, 100) . "px; 
                    height:" . rand(10, 100) . "px; 
                    background-color: red;
                    position: absolute;
                    top:" . rand(50, 150) . "px;
                    left:" . rand(50,650) . "px;
                    margin: 20px;
                    border: 2px solid white;
                '> </div>";
        }

        echo '</div>';
    }

    random_rectangle(7);
    echo '<hr>';

    // task 15
    echo "<p class='task'> 15. Дана строка с любыми символами. Для примера пусть будет '1234567890'. Нужно разбить эту строку в массив таким образом: array('1', '23', '456', '7890') и так далее пока символы в строке не закончатся. </p>";

    function task15($str = '1234567890') {

        $arr = [];
        $start = 0;

        for($i = 0; $i < strlen($str); $i++) {
            $start += $i;
            $cut_str = mb_substr($str, $start, $i+1);

            if(!empty($cut_str)) array_push($arr, $cut_str);
        }

        return $arr;
    }

    echo '<pre>' . print_r(task15(), true) . '</pre> <hr>';

    // task 16
    echo "<p class='task'> 16. Найдите сумму элементов массива между двумя нулями (первым и последним нулями в массиве). Если двух нулей нет в массиве, то выведите ноль. В массиве может быть более 2х нулей. Пример массива: [48,9,0,4,21,2,1,0,8,84,76,8,4,13,2] или [1,8,0,13,76,8,7,0,22,0,2,3,2] </p> ";
    
    // ничего другого придумать не смог :( 

    function sum_between_0($arr = [48,9,0,4,21,2,1,0,8,84,76,8,4,13,2]) {
    
        $res = 0;

        for ($i = 0; $i < count($arr); $i++) {
            if ($arr[$i] != 0) {
                unset($arr[$i]);
            } else break;
        }
    
        for ($i = count($arr) + 1; $i >= 0; $i--) {
            if ($arr[$i] != 0) {
                unset($arr[$i]);
            } else break;
        }

        foreach ($arr as $value) {
            $res += $value;
        }

        return $res;
    }

    echo sum_between_0([1,8,0,13,76,8,7,0,22,0,2,3,2]) . '<hr>';

    // task 17
    echo "<p class='task'> 17. Сделайте функцию, которая будет генерировать случайный цвет в hex (dechex) формате (типа #ffffff). </p>";

    function random_color() {
        $arr = [1,2,3,4,5,6,7,8,9,'a','b','c','d','e','f',];
        $color = "#";

        for ($i = 0; $i < 6; $i++) {
            shuffle($arr);

            $color .= $arr[$i];
        }

        return $color;
    }

    echo '<div style="width: 100px; height: 100px; background-color: ' . random_color() . '"></div> <hr>';

    // task 18
    echo "<p class='task'> 18. Дана строка '332 441 550'. Найдите все места, где есть два одинаковых идущих подряд цифры и замените их на '!'. </p>";

    function task18($str = '332 441 550') {
        if(!is_string($str)) return 'Введено не строковое значение';

        $regexp = '/\d{2}/m';
        
        return preg_replace($regexp, '!', $str);
    }

    echo task18() . '<hr>';

    // task 19
    echo "<p class='task'> 19. Напишите ф-цию строгой проверки ввода номер телефона в международном формате (<код страны> <код города или сети> <номер телефона>) и упрощенной проверки ввода простого номера с кодом и без него. Функция должна возвращать true или false. </p>";

    echo '<form method="POST"> <input name="phone" type="text" placeholder="+375(29)289-25-46"> </form>';

    function check_currect_number($phone_number = '292892546') {
        $regexp = '/^\+?([375]*)([( ]?\d{2}[) ]?)(\d{3}[- ]?\d{2}[- ]?\d{2})$/';

        return (preg_match($regexp, $phone_number)) ? 'Номер телефона принят!' : 'Некорректно введен номер!'; 
    }

    echo check_currect_number($_POST['phone']) . '<hr>';

    // task 19
    echo "<p class='task'> 20. Напишите ф-цию, которая должна проверить правильность ввода адреса эл. почты. Почта верна при условии: <br> a. весь адрес не должен содержать русские буквы и спецсимволы, кроме одной «собачки», знака подчеркивания, дефиса и точки, причем они не могут быть первыми и последними в адресе, и идти подряд, например: «..», «@.», «.@» или «@@», «_@», «@-», «--» и т.п. <br> b. имя эл. почты (до знака @ должно быть длиной более 2 символов, причем имя может содержать только буквы, цифры, но не быть первыми и  единственными в имени, и точку; <br> c. после последней точки и после @, домен верхнего уровня (ru, by, com и т.п.) не может быть длиной менее 2 и более 11 символов. </p>";

    echo '<form method="POST"> <input name="email" type="text" placeholder="name@mail.ru"> </form>';
    function check_correct_email($str = ''){

        $regexp = '/^[a-z]{1,}([a-z-_]+\.)*[a-z0-9]{1,}@[a-z]+\.[a-z]{2,11}$/i';

        return (preg_match($regexp, $str, $matches)) ? 'Адрес эл.почты принят!' : 'Некорректно введет адрес!';   
    }

    echo check_correct_email($_POST['email']);

    ?>



    
</body>
</html>