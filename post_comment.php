<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_SESSION['username'], $_POST['comment'], $_POST['category'])) {
        $username = $_SESSION['username'];
        $comment = htmlspecialchars($_POST['comment']);
        $category = basename($_POST['category']); 

        $sql = "INSERT INTO comments (username, comment, category, created_at) VALUES (?, ?, ?, NOW())";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $username, $comment, $category);

       
        if ($stmt->execute()) {
            
            $redirectMap = [
                'bast' => 'index.php',
                'love' => 'love.php',
                'horror' => 'horror.php',
                'darma' => 'darma.php'
            ];

            if (isset($redirectMap[$category])) {
                header("Location: " . $redirectMap[$category]);
                exit;
            } else {
                echo "ไม่พบหน้าที่จะ redirect ไป";
            }
        } else {
            echo "เกิดข้อผิดพลาดในการบันทึกความคิดเห็น";
        }
    } else {
        echo "กรุณาเข้าสู่ระบบและกรอกข้อมูลให้ครบถ้วน";
    }
}
?>
