<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>crud</title>
    <style>
        /*#Letterspacing{width:5%;}*/
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
            include("conn.php");
            $sql_query="SELECT * FROM users ORDER BY ID ASC";
            $result = mysqli_query($db_link,$sql_query);
            while($row_result = mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>".$row_result['ID']."</td>";
                echo "<td>".$row_result['name']."</td>";
                echo "<td>".$row_result['birthday']."</td>";
                echo "<td>".$row_result['email']."</td>";
                echo "<td>".$row_result['phone']."</td>";
                echo "<td><a href= 'update.php?id=".$row_result['ID']."'>修改</a>";
                echo "<a href='delete.php?id=".$row_result['ID']."'>刪除</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>