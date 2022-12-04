<?php
include_once "db_connect.php";
$db = $GLOBALS['db'];

if(isset($_POST['submit'])) {
    $insert = $db->insertEmail($_POST['from'], $_POST['email'], $_POST['message']);

    if($insert) {
        header("Location: index.php");
    } else {
        echo "FATAL ERROR!!!!";
    }
} else {
    header("Location: index.php");
}