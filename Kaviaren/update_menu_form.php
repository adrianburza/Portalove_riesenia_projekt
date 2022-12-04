<?php
include_once "db_connect.php";
$db = $GLOBALS['db'];

$menuDetails = $db->getMenuDetails($_GET['id']);
?>

<style>
    body{
        font-family: Arial;
        font-size: 17px;
    }

    input {
        background-color: lightgray;
        border-radius: 3px;
        border: 2px solid black;
        padding: 3px;
    }
    .upd{
        font-family: Arial;
        color: white;
        background-color: grey;
        border-radius: 3px;
        border: 2px solid black;
        font-size: 15px;
    }
    .upd:hover{
        background-color: indianred;
        cursor: pointer;
    }
</style>
<body style="background: linear-gradient(45deg, lightsteelblue 50%,lightgray 50%)";>

<form action="update_menu.php" method="post">
    Display name:<br>
    <input type="text" name="display_name" value="<?php echo $menuDetails[0]['display_name']; ?>" /><br>
    <input type="hidden" name="id" value="<?php echo $menuDetails[0]['id']; ?>"><br>
    <input class="upd" type="submit" name="submit" value="Update">
</form>