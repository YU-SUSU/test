<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>新增會員資料</title>
</head>
<body>
    <h1>建立會員資料</h1>
    <form action="" method="post">
        Name: <input type="text" name="name" id="name" required>
        <br/><br/>
        Birthday: <input type="date" name="birthday" id="birthday" required>
        <br/><br/>
        Email: <input type="email" name="email" id="email" required>
        <br/><br/>
        Phone: <input type="tel" name="phone" id="phone" pattern="[0-9]{4}-[0-9]{6}" required>
        <small>example : 0912-345678</small>
        <br/><br/>
        <input type="hidden" name="action" value="add">
        <input type="submit" name="add" value="OK">
    </form>
</body>
</html>
    <?php
        if (isset($_POST["add"])&&($_POST["add"] == "OK")){
        include("conn.php");
        $name = $_POST["name"];
        $birthday = $_POST["birthday"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $sql_query = "INSERT INTO users (name, birthday, email,phone) VALUES ('$name','$birthday','$email','$phone')";
        mysqli_query($db_link,$sql_query);
        header("location:crud.php");
        }
    ?>