<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>crud</title>
    <style>
        table,th,td,tr{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h2>會員資料表&nbsp;&nbsp;<a href='createform.php'>新增資料</a></h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Birthday</th>
            <th>Email</th>
            <th>Phone</th>
            <th>編輯</th>
        </tr>
        <?php
            include("PDO_conn.php");
            $sql = "SELECT *FROM users ORDER BY ID ASC";
            $query = $pdo->query($sql);
            $query->setFetchMode(PDO::FETCH_ASSOC);
            while($row = $query->fetch()){
                echo "<tr>";
                echo "<td>".$row['ID']."</td>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['birthday']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['phone']."</td>";
                echo "<td><a href= 'update.php?id=".$row['ID']."'>修改</a>";
                echo "<a href='delete.php?id=".$row['ID']."'>刪除</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>