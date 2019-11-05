<?php
$servername = "mysql";
$username = "root";
$password = "123456";
 
echo "数据库";
// 创建连接
$conn = new mysqli($servername, $username, $password);

// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
echo "连接成功";
echo "<br/>";

phpinfo();
