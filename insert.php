<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD INSERT</title>
</head>
<body>
    <?php
        include("conn.php");
        $name = $_POST['name'];
        $birthday = $_POST['birthday'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $sql_query = "INSERT INTO users (name,birthday,email,phone) VALUE('$name','$birthday','$email','$phone')";
        mysqli_query($db_link,$sql_query);
        header('location: crud.php');
    ?>
</body>