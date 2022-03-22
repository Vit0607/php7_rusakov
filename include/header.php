<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <?php
    //        Подключение стилей страницы по ID
    if(isset($_GET['page'])) {
        $page_css = '/template/default/css/' . $_GET['page'] . '-id.css' ?? '';

        if (file_exists($_SERVER['DOCUMENT_ROOT'] . $page_css)) {
            echo '<link rel="stylesheet" type="text/css" href="' . $page_css . '?var=' . filemtime($_SERVER['DOCUMENT_ROOT'] . $page_css) . '">' . "\n";
        }
    }
    ?>

    <title>Михаил Русаков</title>
</head>
<body>
