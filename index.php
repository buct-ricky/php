<?php
    $conn = mysql_connect("localhost","root","root");
    if ($conn) {
        echo "链接成功";
    }
    else {
        echo "链接失败";
    }
?>

