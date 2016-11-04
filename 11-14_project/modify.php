<?php

if (isset($_POST["action"]) && $_POST["action"] == "update") {
    require_once 'connMysql.php';
    $sql = "UPDATE `students` SET ";
    $sql .= "`cName` = '" . $_POST["cName"] . "',";
    $sql .= "`cSex` = '" . $_POST["cSex"] . "',";
    $sql .= "`cBirthday` = '" . $_POST["cBirthday"] . "',";
    $sql .= "`cEmail` = '" . $_POST["cEmail"] . "',";
    $sql .= "`cPhone` = '" . $_POST["cPhone"] . "',";
    $sql .= "`cAddr` = '" . $_POST["cAddr"] . "' ";
    $sql .= " WHERE `cID` = '" . $_POST["cID"] . "'";

    echo $sql;

    mysqli_query($conn, $sql);
    mysqli_close($conn);
    header('Location: data.php');
}

require_once 'connMysql.php';
$sql = "SELECT * FROM `students` WHERE `cID`='" . $_GET["ID"] . "'";

if ($result = mysqli_query($conn, $sql)) {
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    ?>
    <!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script>
            var cID = <?php echo '"' . $row["cID"] . '"'; ?>;
            var cName = <?php echo '"' . $row["cName"] . '"'; ?>;
            var cSex = <?php echo '"' . $row["cSex"] . '"'; ?>;
            var cBirthday = <?php echo '"' . $row["cBirthday"] . '"'; ?>;
            var cEmail = <?php echo '"' . $row["cEmail"] . '"'; ?>;
            var cPhone = <?php echo '"' . $row["cPhone"] . '"'; ?>;
            var cAddr = <?php echo '"' . $row["cAddr"] . '"'; ?>;
        </script>
    </head>
    <body>
    <h1 align="center">學生管理系統-更新資料</h1>
    <p align="center"><a href="data.php">回主畫面</a></p>

    <form action="modify.php" method="post">
        <table border="1" align="center">
            <tr>
                <td>座號</td>
                <td><input id="cID" name="cID" type="hidden" value="<?php echo $row["cID"] ?>"><?php echo $row["cID"] ?></td>
            </tr>
            <tr>
                <td>姓名</td>
                <td><input id="cName" name="cName" type="text" value="<?php echo $row["cName"] ?>"></td>
            </tr>
            <tr>
                <td>性別</td>
                <td>
                    <input type="radio" id="cSex" name="cSex" value="M" <?php  echo ( $row["cSex"] === 'M') ? 'checked=\'checked\'' : '' ?>>男
                    <input type="radio" id="cSex" name="cSex" value="F" <?php  echo ( $row["cSex"] === 'F') ? 'checked=\'checked\'' : '' ?>>女
                </td>
            </tr>
            <tr>
                <td>生日</td>
                <td><input id="cBirthday" name="cBirthday" type="text" value="<?php echo $row["cBirthday"] ?>"></td>
            </tr>
            <tr>
                <td>電子郵件</td>
                <td><input id="cEmail" name="cEmail" type="text" value="<?php echo $row["cEmail"] ?>"></td>
            </tr>
            <tr>
                <td>電話</td>
                <td><input id="cPhone" name="cPhone" type="text" value="<?php echo $row["cPhone"] ?>"></td>
            </tr>
            <tr>
                <td>住址</td>
                <td><input id="cAddr" name="cAddr" type="text" value="<?php echo $row["cAddr"] ?>"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="hidden" name="action" value="update">
                    <input type="submit" value="更新資料">
                    <input type="button" value="重新填寫" onclick="resetFields()">
                </td>
            </tr>
        </table>
    </form>
    <?php
}
?>
    <script>
        function resetFields() {
            document.getElementById("cName").value = cName;
            document.getElementById("cSex").value = cSex;
            document.getElementById("cBirthday").value = cBirthday;
            document.getElementById("cEmail").value = cEmail;
            document.getElementById("cPhone").value = cPhone;
            document.getElementById("cAddr").value = cAddr;
        }
    </script>
    </body>
    </html>
<?php
mysqli_close($conn);
?>