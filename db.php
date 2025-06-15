<?php
$is_production = getenv('DB_HOST') && getenv('DB_HOST') !== 'localhost';

if ($is_production) {
    $db_config = [
        'servername' => getenv('DB_HOST'),
        'username'   => getenv('DB_USER'),
        'password'   => getenv('DB_PASSWORD'),
        'dbname'     => getenv('DB_NAME'),
        'port'       => getenv('DB_PORT') ?: 3306
    ];
} else {
    $db_config = [
        'servername' => 'localhost',
        'username' => 'root',
        'password' => '',
        'dbname'   => 'wepmove',
        'port'     => 3306
    ];
}

try {
    $conn = new mysqli(
        $db_config['servername'],
        $db_config['username'],
        $db_config['password'],
        $db_config['dbname'],
        $db_config['port']
    );
    
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }
    
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    
    // Debug info (ลบออกได้เมื่อแน่ใจว่าทำงาน)
    error_log("Database connected successfully to: " . $db_config['servername']);
    
} catch (Exception $e) {
    error_log("Database connection error: " . $e->getMessage());
    error_log("Trying to connect to: " . $db_config['servername'] . ":" . $db_config['port']);
    die("การเชื่อมต่อฐานข้อมูลล้มเหลว");
}
?>