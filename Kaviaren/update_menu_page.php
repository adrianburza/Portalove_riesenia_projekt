<?php
include_once "db_connect.php";
$db = $GLOBALS['db'];

$menus = $db->getAllMenu();

if(!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] === false) {
    header("Location: login_form.php");
}
?>

<style>
    .upd{
        position: unset;
        top: 1px;
        right: 1px;
        font-size: 15px;
    }
    .upd:hover {
        background-color: indianred;
    }
    button {
        background-color: grey;
        border: 1px solid black;
        font-family: "Arial";
        font-size: 20px;
        color: white;
        border-radius: 5px;
        position: absolute;
        top: 10px;
        right: 10px;
    }

    button:hover {
        background-color: lightsteelblue;
        cursor: pointer;
    }

    li{
        font-family: Arial;
        font-size: 17px;
    }

    a{
        font-family: "Comic Sans MS";
        font-size: 17px;
    }
    ul{
        list-style-type: square;
    }
    </style>

    <body style="background: linear-gradient(45deg, lightsteelblue 50%,lightgray 50%)";>

    <ul>
        <li><a href="admin.php">Admin page</a></li>
    </ul>
    <br><br><br>

    <a href="logout.php"><button>Logout</button></a>

<ul>
    <?php
    foreach ($menus as $menu) {
        echo "<li>Display name: ".$menu['display_name']."</li>";?>
        <button class="upd" onclick="location.href='update_menu_form.php?id=<?php echo $menu['id']?>'">Update</button> <br><br>
        <?php
    }
    ?>
</ul>


