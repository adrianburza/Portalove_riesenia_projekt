<?php
include_once "db_connect.php";
$db = $GLOBALS['db'];

if(isset($_POST['submit'])) {
    $update_content = $db->updateContent($_POST['id'], $_POST['content']);

    if($update_content) {
        header("Location: update_content_page.php");
    } else {
        echo "FATAL ERROR!!!!";
    }
} else {
    header("Location: update_content_page.php");
}