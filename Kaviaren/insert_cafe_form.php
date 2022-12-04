<form method="post" action="insert_cafe.php">

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

        select{
            background-color: white;
            border-radius: 3px;
            border: 2px solid black;
            padding: 3px;
        }

        textarea {
            background-color: lightgray;
            border-radius: 3px;
            border: 2px solid black;
        }

        .ins{
            font-family: Arial;
            color: white;
            background-color: grey;
            border-radius: 3px;
            border: 2px solid black;
            font-size: 15px;
        }
        .ins:hover{
            background-color: indianred;
            cursor: pointer;
        }
    </style>

    <body style="background: linear-gradient(45deg, lightsteelblue 50%,lightgray 50%)";>

    Sys name: <br>
    <input type="text" name="sys_name" value="" required><br><br>
    Display name: <br>
    <input type="text" name="display_name" value="" required><br><br>
    <select name="cafeType" id="select1" onchange="getSelectValue(this.value);" required>

        <option value="">Type of cafe</option>
        <option value="hot">Hot</option>
        <option value="iced">Iced</option>

    </select><br><br>
    Image: <br>
    <input type="text" name="image" value="" required><br><br>
    <h3>Price by size:</h3>
    Size S: <br>
    <input type="text" name="size_S" value="" ><br>
    <br>
    Size M: <br>
    <input type="text" name="size_M" value="" ><br>
    <br>
    Size L: <br>
    <input type="text" name="size_L" value="" ><br>
    <br>


    <input class="ins" type="submit" name="submit" value="Insert">

</form>
</body>