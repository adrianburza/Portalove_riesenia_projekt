<?php
include_once "db_connect.php";
$db = $GLOBALS['db'];

if(!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] === false) {
    header("Location: login_form.php");
        }
    ?>

<style>

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
        font-size: 17px;
        padding: 5px;
    }

    a{
        font-family: "Comic Sans MS";
    }
    ul{
        list-style-type: square;
    }

</style>

<body style="background: linear-gradient(45deg, lightsteelblue 50%,lightgray 50%)";>

    <ul>
        <li><a href="index.php">Web page</a></li>
        <li><a href="update_email_page.php">Edit emails</a></li>
        <li><a href="update_content_page.php">Edit content</a></li>
        <li><a href="update_menu_page.php">Edit menu</a></li>
        <li><a href="update_cafe_menu_page.php">Edit cafe menu</a></li>
        <a href="logout.php"><button>Logout</button></a>
    </ul>
    <br><br><br>

