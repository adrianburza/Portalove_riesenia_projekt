<?php
include_once "db_connect.php";

if(isset($_GET['id'])) {
    $db = $GLOBALS['db'];
    $delete = $db->deleteCafe($_GET['id']);

    if($delete) {
        header("Location: update_cafe_menu_page.php");
    } else {
        echo "FATAL ERROR!!!!!";
    }
} else {
    header("Location: update_cafe_menu_page.php");
}