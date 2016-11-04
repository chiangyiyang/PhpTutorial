<?php
require_once 'connMysql.php';
$sql = "SELECT * FROM `students`";

?>
    <!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <?php
    if ($result = mysqli_query($conn, $sql)) {
        $total_records = mysqli_num_rows($result);
        ?>
        <h1 align="center">學生管理系統</h1>
        <p align="center">目前資料筆數:<?php echo $total_records; ?><a href="add.php">新增學生資料</a></p><br>

        <table border="1" align="center">
            <tr>
                <td>座號</td>
                <td>姓名</td>
                <td>性別</td>
                <td>生日</td>
                <td>電子郵件</td>
                <td>電話</td>
                <td>住址</td>
                <td>功能</td>
            </tr>

            <?php
            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                echo "<tr>";
                echo "<td>" . $row["cID"] . "</td>";
                echo "<td>" . $row["cName"] . "</td>";
                echo "<td>" . ($row["cSex"] == 'M' ? '男' : ''). ($row["cSex"] == 'F' ? '女' : '') . "</td>";
                echo "<td>" . $row["cBirthday"] . "</td>";
                echo "<td>" . $row["cEmail"] . "</td>";
                echo "<td>" . $row["cPhone"] . "</td>";
                echo "<td>" . $row["cAddr"] . "</td>";
                echo "<td><a href='update.php?ID=" . $row["cID"] . "'>修改</a> <a href='del.php?ID=" . $row["cID"] . "'>刪除</a></td>";
                echo "</tr>";
            }
            ?>
        </table>

        <?php
    }
    ?>
    </body>
    </html>

<?php
mysqli_close($conn);
?>