<?php

// 1 задание:
// Не так может пойти то, что обезаться может половина слова.

$a = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

$link = 'https://yandex.ru';

$b = substr($a, 0, 180) .'...';
$last_words = explode(" ", $b);
$count_elem = count($last_words);
$href_place = $last_words[$count_elem - 2].' '.$last_words[$count_elem - 1];
$result = str_replace($href_place, "<a href={$link}>{$href_place}</a>", $b);
echo $result;


// 2 задание 

$arImg = getimagesize('pony.jpg');
list($width, $height) = $arImg;
$original_img = imagecreatefromjpeg('pony.jpg');
$resized = imagecreatetruecolor(200, 100);
imagecopyresampled($resized, $original_img, 0, 0, 0, 0, 200, 100, $width, $height);
imagejpeg($resized, 'resized.jpg');

// 3 задание
// Where фильтрует данные из таблиц a, b, а join объединяет их



// 4 
echo '<br>-------------------------------------------------------------------------------<br>';

$array = [1, 1, 2, 3, 4 -51, 12, 12, 12, -51, 4, 4];
$size_array = sizeof($array);
$count = 0;


for ($i = 0; $i < $size_array - 1; $i++) {
    if ($array[$i] == $array[$i + 1]) {
        $count++;
    }
}

echo $count;

?>