<?php

$is_local = ($_SERVER['SERVER_NAME'] === 'localhost');

if ($is_local) {
    $db_config = [
        'servername' => 'localhost',
        'username' => 'root',
        'password' => '',
        'dbname'   => 'wepmove',
        'port'     => 3306
    ];
} else {
    $db_config = [
        'servername' => getenv('DB_HOST'),
        'username'   => getenv('DB_USER'),
        'password'   => getenv('DB_PASSWORD'),
        'dbname'     => getenv('DB_NAME'),
        'port'       => getenv('DB_PORT') ?: 3306
    ];
}

$conn = new mysqli(
    $db_config['servername'],
    $db_config['username'],
    $db_config['password'],
    $db_config['dbname'],
    $db_config['port']
);

if ($conn->connect_error) {
    error_log("Connection failed: " . $conn->connect_error);
    die("การเชื่อมต่อล้มเหลว");
}

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
?>