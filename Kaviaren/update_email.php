<?php
include_once "db_connect.php";
$db = $GLOBALS['db'];

if(isset($_POST['submit'])) {
    $update = $db->updateEmail($_POST['id'], $_POST['from'], $_POST['email'], $_POST['message']);

    if($update) {
        header("Location: update_email_page.php");
    } else {
        echo "FATAL ERROR!!!!";
    }
} else {
    header("Location: update_email_page.php");
}