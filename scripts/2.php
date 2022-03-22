<?php
// Задание Русакова: Сделайте сортировку массива с помощью uasort() так, чтобы все сотрудники были отсортированы по возрасту, например, по возрастанию.

$users = [
    ['id' => 9, 'name' => 'John', 'age' => 25],
    ['id' => 3, 'name' => 'Dave', 'age' => 40],
    ['id' => 5, 'name' => 'Nick', 'age' => 33],
    ['id' => 1, 'name' => 'Katy', 'age' => 27]
];

//Видео: https://www.youtube.com/watch?v=dVmkJF8mK6E - также показывается обратная сортировка и др.


function my_sort($a, $b) {
    return $a['age'] <=> $b['age'];
}

var_dump($users);
uasort($users, 'my_sort');
//Если использовать просто usort() - теряются ключи (в данном случае - цифровые ключи списка)
var_dump($users);