<?php
include_once "db_connect.php";
$db = $GLOBALS['db'];

$emailDetails = $db->getEmailDetails($_GET['id']);
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

<form action="update_email.php" method="post">
    From:<br>
    <input type="text" name="from" value="<?php echo $emailDetails[0]['name']; ?>" /><br>
    Email:<br>
    <input type="email" name="email" value="<?php echo $emailDetails[0]['email']; ?>" /><br>
    Message:<br>
    <textarea name="message"><?php echo $emailDetails[0]['message']; ?></textarea><br>
    <input type="hidden" name="id" value="<?php echo $emailDetails[0]['id']; ?>"><br>
    <input class="upd" type="submit" name="submit" value="Update">
</form>