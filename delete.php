<?php
    $userID = $_GET['id'];
    include("conn.php");
    $sql_query = "DELETE FROM users WHERE ID = $userID";
    mysqli_query($db_link,$sql_query);
    $db_link->close();
    header("Location: crud.php");
?>