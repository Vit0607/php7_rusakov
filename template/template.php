<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/include/header.php';
?>

<?php
if(isset($_GET['page'])) {
    $page_css = '/template/default/css/' . $_GET['page'] . '-id.css' ?? '';

    if (file_exists('./scripts/' . $_GET['page'] . '-id.php')) {
        include_once('./scripts/' . $_GET['page'] . '-id.php');
    }
}
?>




<?php
//ПОдключаем footer
require_once $_SERVER['DOCUMENT_ROOT'] . '/include/footer.php';
?>
