<?php
include_once "db_connect.php";
$db = $GLOBALS['db'];

if(isset($_POST['submit'])) {
    $update_menu = $db->updateMenu($_POST['id'], $_POST['display_name']);

    if($update_menu) {
        header("Location: update_menu_page.php");
    } else {
        echo "FATAL ERROR!!!!";
    }
} else {
    header("Location: update_menu_page.php");
}