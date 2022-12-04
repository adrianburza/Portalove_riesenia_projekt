<?php
include_once "db_connect.php";
$db = $GLOBALS['db'];

$cafeItems = $db->getAllCafe("hot");
$cafeItems2 = $db->getAllCafe("iced");

if(!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] === false) {
    header("Location: login_form.php");
}
?>

<style>
    .btn{
        position: unset;
        top: 0px;
        right: 0px;
    }
    .btn:hover{
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

    table, th, td {
        font-family: Arial;
        background: lightgray;
        border: 1px solid black;
        border-spacing: 0;
        text-align: center;
    }

    h2{
        font-family: "Arial Rounded MT Bold";
    }

    a{
        font-family: "Comic Sans MS";
        font-size: 17px;
    }
    ul{
        list-style-type: square;
    }

    th{
        background-color: #989898;
    }

    li{
        font-size: 17px;
        padding: 5px;
    }
</style>

<body style="background: linear-gradient(45deg, lightsteelblue 50%,lightgray 50%)";>

<ul>
    <li><a href="admin.php">Admin page</a></li>
    <li><a href="insert_cafe_form.php">Insert cafe</a></li>
</ul>
<br><br><br>

<a href="logout.php"><button>Logout</button></a>


<h2>Hot cafe</h2>
<table>
    <tr>
        <th>Sys name</th>
        <th>Display name</th>
        <th>Image</th>
        <th>Size S($)</th>
        <th>Size M($)</th>
        <th>Size L($)</th>
        <th colspan="2">Edit</th>
    </tr>
    <?php
    foreach ($cafeItems as $cafe) {
        ?>
        <tr>
            <td><?php echo $cafe["sys_name"] ?></td>
            <td><?php echo $cafe["display_name"] ?></td>
            <td><?php echo $cafe["image"] ?></td>
            <td><?php echo $cafe["size_S"] ?></td>
            <td><?php echo $cafe["size_M"] ?></td>
            <td><?php echo $cafe["size_L"] ?></td>
            <td>
                <button class="btn" onclick="location.href='update_cafe_menu_form.php?id=<?php echo $cafe['id'] ?>'">Update</button>
                <button class="btn" onclick="location.href='delete_cafe.php?id=<?php echo $cafe['id'] ?>'">Delete</button>
            </td>
        </tr>
        <?php
    }
    ?>
</table>


<h2>Iced cafe</h2>
<table>
    <tr>
        <th>Sys name</th>
        <th>Display name</th>
        <th>Image</th>
        <th>Size S($)</th>
        <th>Size M($)</th>
        <th>Size L($)</th>
        <th colspan="2">Edit</th>
    </tr>
    <?php
    foreach ($cafeItems2 as $cafe) {
        ?>
        <tr>
            <td><?php echo $cafe["sys_name"] ?></td>
            <td><?php echo $cafe["display_name"] ?></td>
            <td><?php echo $cafe["image"] ?></td>
            <td><?php echo $cafe["size_S"] ?></td>
            <td><?php echo $cafe["size_M"] ?></td>
            <td><?php echo $cafe["size_L"] ?></td>
            <td>
                <button class="btn" onclick="location.href='update_cafe_menu_form.php?id=<?php echo $cafe['id'] ?>'">Update</button>
                <button class="btn" onclick="location.href='delete_cafe.php?id=<?php echo $cafe['id'] ?>'">Delete</button>
            </td>
        </tr>
        <?php
    }
    ?>
</table>


