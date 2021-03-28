<?php
    $db_host= '127.0.0.1';
    $db_userName = 'root';
    $db_password = 'suyu860625';
    $db_name='crud';

    $db_link=@mysqli_connect($db_host,$db_userName,$db_password,$db_name);
    if(!$db_link){
        die('連線資料庫失敗');
    }
    else{
        echo "";
    }

mysqli_query($db_link,"SET NAME 'utf8'");
?>