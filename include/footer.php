<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<?php
if(isset($_GET['page'])) {
    $page_js = '/template/default/js/' . $_GET['page'] . '-id.js' ?? '';

    if (file_exists($_SERVER['DOCUMENT_ROOT'] . $page_js)) {
        echo '<script src="/template/default/js/' . $_GET['page'] . '-id.js?ver=' . filemtime($_SERVER['DOCUMENT_ROOT'] . $page_js) . '" ></script>';
    }
}
?>
</body>
</html>
