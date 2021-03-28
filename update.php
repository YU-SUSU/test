<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD UPDATE</title>
</head>
<body>
    <form action="" method="post">
        Name: <input type="text" name="name" value=" <?php echo $name ?>">
        <br/><br/>
        Birthday: <input type="date" name="birthday" value="<?php echo $birthday ?>">
        <br/><br/>
        Email: <input type="email" name="email" vaule="<?php echo $email ?>">
        <br/><br/>
        Phone: <input type="tel" name="phone" pattern="[0-9]{4}-[0-9]{6}" value="<?php echo $phone?>">
        <small>example : 0912-345678</small>
        <br/><br/>
        <input type="hidden" value="$id">
        <input type="submit" name=update value="update">
    </form>
    <?php
        if($_POST["update"]=="update"){
            include("conn.php");
            //$userid = $GET['id'];
            $userID = $_GET['id'];
            $newname = $_POST['name'];
            $newbirthday = $_POST['birthday'];
            $newemail = $_POST['email'];
            $newphone = $_POST['phone'];
            $sql_query = "UPDATE users SET name='$newname',birthday='$newbirthday',email='$newemail',phone='$newphone' WHERE ID='$userID'";
            mysqli_query($db_link,$sql_query);
            $db_link->close();
            header("location: crud.php");
        }
    ?>

</body>
</html>