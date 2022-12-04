<?php
include_once "db_connect.php";

$db = $GLOBALS['db'];

if (isset($_POST['submit'])) {
    $insert = $db->insertCafe($_POST['sys_name'], $_POST['display_name'], $_POST['image'], $_POST['size_S'], $_POST['size_M'], $_POST['size_L'], $_POST['cafeType']);

    if ($insert) {
        header('Location: update_cafe_menu_page.php');
    } else {
        echo "FATAL ERROR!";
    }
} else {
    header('Location: update_cafe_menu_page.php');
}
?>

