<?php

//СОЗДАНИЕ ПАПОК С РАНДОМНЫМИ ИМЕНАМИ:

//for ($i = 1; $i <= 5; $i++) {
//    mkdir('new' . uniqid());
//}
//
//mkdir('new dir/test.php');
//mkdir('new' . '*');

$folder = 'w:\domains\rusakov';
$files = scandir($folder);
foreach ($files as $file) {
    if ($file == '.' || $file =='..') continue;
    $substr = substr($file, 0, 3);


//    ДОБАВЛЕНИЕ ФАЙЛОВ В ПАПКУ:

//    echo $substr . '<br>';
//    if ($substr == 'new') {
//        fopen($folder . '/' . $file . '/' . 'textfile.php', "w");
//    }

//    ПОПЫТКА УДАЛЕНИЯ ФАЙЛОВ И ПАПОК. НО ЕСЛИ ДИРЕКТОРИЯ НЕ ПУСТААЯ, ОНА НЕ УДАЛЯЕТСЯ... :

    if ($substr == 'new') {
        $dirname = $folder . '/' . $file;
        array_map('unlink', glob("$dirname/*.*"));
        rmdir($dirname );
    }
}