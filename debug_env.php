<?php
// ไฟล์สำหรับตรวจสอบตัวแปรสภาพแวดล้อม
echo "<h3>ตรวจสอบตัวแปรสภาพแวดล้อม</h3>";

echo "<h4>SERVER_NAME:</h4>";
var_dump($_SERVER['SERVER_NAME']);

echo "<h4>getenv() results:</h4>";
echo "DB_HOST: " . (getenv('DB_HOST') ?: 'ไม่พบ') . "<br>";
echo "DB_USER: " . (getenv('DB_USER') ?: 'ไม่พบ') . "<br>";
echo "DB_PASSWORD: " . (getenv('DB_PASSWORD') ?: 'ไม่พบ') . "<br>";
echo "DB_NAME: " . (getenv('DB_NAME') ?: 'ไม่พบ') . "<br>";
echo "DB_PORT: " . (getenv('DB_PORT') ?: 'ไม่พบ') . "<br>";

echo "<h4>$_ENV array:</h4>";
echo "DB_HOST: " . ($_ENV['DB_HOST'] ?? 'ไม่พบ') . "<br>";
echo "DB_USER: " . ($_ENV['DB_USER'] ?? 'ไม่พบ') . "<br>";
echo "DB_PASSWORD: " . ($_ENV['DB_PASSWORD'] ?? 'ไม่พบ') . "<br>";
echo "DB_NAME: " . ($_ENV['DB_NAME'] ?? 'ไม่พบ') . "<br>";
echo "DB_PORT: " . ($_ENV['DB_PORT'] ?? 'ไม่พบ') . "<br>";

echo "<h4>ไฟล์ .env มีอยู่หรือไม่:</h4>";
echo file_exists(__DIR__ . '/.env') ? 'มี' : 'ไม่มี';

echo "<h4>เนื้อหาไฟล์ .env (ถ้ามี):</h4>";
if (file_exists(__DIR__ . '/.env')) {
    echo "<pre>" . htmlspecialchars(file_get_contents(__DIR__ . '/.env')) . "</pre>";
}
?>