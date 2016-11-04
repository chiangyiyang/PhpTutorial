<?php
if (isset($_POST["action"]) && $_POST["action"] == "del") {
    require_once 'connMysql.php';
    $sql = "DELETE FROM `students` WHERE `cID`='" . $_POST["cID"] . "'";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    header('Location: data.php');

}

require_once 'connMysql.php';
$sql = "SELECT * FROM `students` WHERE `cID`='" . $_GET["ID"] . "'";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

mysqli_free_result($result);
mysqli_close($conn);

?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <script>
        function myFun() {
            if (confirm("\n您確定要刪除這筆資料嗎？\n刪除後無法恢復\n")) return true;
            return false;
        }
    </script>

</head>
<body>
<h1 align="center">學生管理系統-刪除資料</h1>
<p align="center"><a href="data.php">回主畫面</a></p>

<form action="del.php" method="post">
    <table border="1" align="center">
        <tr>
            <td>座號</td>
            <td><?php echo $row["cID"] ?></td>
        </tr>
        <tr>
            <td>姓名</td>
            <td><?php echo $row["cName"] ?></td>
        </tr>
        <tr>
            <td>性別</td>
            <td> <?php echo ($row["cSex"] == 'M' ? '男' : ''). ($row["cSex"] == 'F' ? '女' : '') ?> </td>
        </tr>
        <tr>
            <td>生日</td>
            <td><?php echo $row["cBirthday"] ?></td>
        </tr>
        <tr>
            <td>電子郵件</td>
            <td><?php echo $row["cEmail"] ?></td>
        </tr>
        <tr>
            <td>電話</td>
            <td><?php echo $row["cPhone"] ?></td>
        </tr>
        <tr>
            <td>住址</td>
            <td><?php echo $row["cAddr"] ?></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="hidden" name="action" value="del">
                <input type="hidden" name="cID" value="<?php echo $row["cID"] ?>">
                <!--                <input type="submit" value="刪除資料">-->
                <!--                <input type="button" value="取消" onclick="window.location = 'data.php';">-->
                <button onclick="return myFun();">刪除資料</button>
            </td>
        </tr>
    </table>
</form>
