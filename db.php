<?php

$db_config = [
    'servername' => getenv("MYSQLHOST"),
    'username' => getenv("MYSQLUSER"),
    'password' => getenv("MYSQLPASSWORD"),
    'dbname'   => getenv("MYSQLDATABASE")
];

$conn = new mysqli($db_config['servername'], $db_config['username'], $db_config['password'], $db_config['dbname']);

if ($conn->connect_error) {
    error_log("Connection failed: " . $conn->connect_error);
    die("การเชื่อมต่อล้มเหลว");
}

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
?>
