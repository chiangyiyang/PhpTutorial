<?php

if (isset($_POST["action"]) && $_POST["action"] == "add") {
    require_once 'connMysql.php';
    $sql = "INSERT INTO `students` (`cName`, `cSex`, `cBirthday`, `cEmail`, `cPhone`, `cAddr`) VALUES ('";
    $sql .= $_POST["cName"] . "','";
    $sql .= $_POST["cSex"] . "','";
    $sql .= $_POST["cBirthday"] . "','";
    $sql .= $_POST["cEmail"] . "','";
    $sql .= $_POST["cPhone"] . "','";
    $sql .= $_POST["cAddr"] . "')";

    mysqli_query($conn, $sql);
    mysqli_close($conn);
    header('Location: data.php');
}

?>
    <!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <h1 align="center">學生管理系統-新增資料</h1>
    <p align="center"><a href="data.php">回主畫面</a></p>

    <form action="add.php" method="post" name="formadd" id="formadd">
        <table border="1" align="center" cellpadding="4">
            <tr>
                <th>欄位</th>
                <th>資料</th>
            </tr>
            <tr>
                <td>姓名</td>
                <td><input id="cName" name="cName" type="text" value=""></td>
            </tr>
            <tr>
                <td>性別</td>
                <td>
                    <input type="radio" id="cSex" name="cSex" value="M">男
                    <input type="radio" id="cSex" name="cSex" value="F">女
                </td>
            </tr>
            <tr>
                <td>生日</td>
                <td><input id="cBirthday" name="cBirthday" type="date" value=""></td>
            </tr>
            <tr>
                <td>電子郵件</td>
                <td><input id="cEmail" name="cEmail" type="text" value=""></td>
            </tr>
            <tr>
                <td>電話</td>
                <td><input id="cPhone" name="cPhone" type="text" value=""></td>
            </tr>
            <tr>
                <td>住址</td>
                <td><input id="cAddr" name="cAddr" type="text" value=""></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="hidden" name="action" value="add">
                    <input type="submit" value="新增資料">
                    <input type="button" value="重新填寫" onclick="myFunction()">
                </td>
            </tr>
        </table>
    </form>

    <script>
        function myFunction() {
            document.getElementById("cName").value = "";
            document.getElementById("cSex").value = "";
            document.getElementById("cBirthday").value = "";
            document.getElementById("cEmail").value = "";
            document.getElementById("cPhone").value = "";
            document.getElementById("cAddr").value = "";
        }
    </script>

    </body>
    </html>

<?php
?>