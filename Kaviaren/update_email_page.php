<?php
include_once "db_connect.php";
$db = $GLOBALS['db'];

$emails = $db->getAllEmails();

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
        height: 10%;
        width: auto;
    }

    h1{
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
    </style>

    <body style="background: linear-gradient(45deg, lightsteelblue 50%,lightgray 50%)";>

    <ul>
        <li><a href="admin.php">Admin page</a></li>
    </ul>
    <br><br><br>

    <a href="logout.php"><button>Logout</button></a>



    <h1>Mailing list:</h1>

    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th colspan="2">Edit</th>
        </tr>
        <?php
        foreach ($emails as $email) {
                ?>
        <tr>
            <td><?php echo $email["name"] ?></td>
            <td><?php echo $email["email"] ?></td>
            <td><?php echo $email["message"] ?></td>
            <td>
                <button class="btn" onclick="location.href='update_email_form.php?id=<?php echo $email['id'] ?>'">Update</button>
                <button class="btn" onclick="location.href='delete_email.php?id=<?php echo $email['id'] ?>'">Delete</button>
            </td>
        </tr>
            <?php
        }
        ?>
    </table>


