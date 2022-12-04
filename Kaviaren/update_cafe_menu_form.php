<?php
include_once "db_connect.php";
$db = $GLOBALS['db'];

$cafeMenuDetails = $db->getCafeMenuDetails($_GET['id']);
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

    textarea {
        background-color: lightgray;
        border-radius: 3px;
        border: 2px solid black;
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

<form action="update_cafe_menu.php" method="post">
    Sys name:<br>
    <input type="text" name="sys_name" value="<?php echo $cafeMenuDetails[0]['sys_name']; ?>" /><br><br>
    Display name:<br>
    <input type="text" name="display_name" value="<?php echo $cafeMenuDetails[0]['display_name']; ?>" /><br><br>
    Image:<br>
    <input type="text" name="image" value="<?php echo $cafeMenuDetails[0]['image']; ?>" /><br><br>
    <h3>Price by size:</h3>
    Size S:<br>
    <input type="text" name="size_S" value="<?php echo $cafeMenuDetails[0]['size_S']; ?>" /><br><br>
    Size M:<br>
    <input type="text" name="size_M" value="<?php echo $cafeMenuDetails[0]['size_M']; ?>" /><br><br>
    Size L:<br>
    <input type="text" name="size_L" value="<?php echo $cafeMenuDetails[0]['size_L']; ?>" /><br><br>
    <input type="hidden" name="id" value="<?php echo $cafeMenuDetails[0]['id']; ?>">
    <input class="upd" type="submit" name="submit" value="Update">
</form>