<?php

$db_config = [
    'servername' => 'localhost',
    'username' => 'root',
    'password' => '',
    'dbname' => 'wepmove'
];


$conn = new mysqli($db_config['servername'], $db_config['username'], $db_config['password'], $db_config['dbname']);


if ($conn->connect_error) {
    error_log("Connection failed: " . $conn->connect_error); // บันทึกข้อผิดพลาด
    die("การเชื่อมต่อล้มเหลว");
}


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
?>
