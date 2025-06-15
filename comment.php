<?php
session_start();
include('db_connection.php');  

if (isset($_SESSION['user_id'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $comment = htmlspecialchars($_POST['comments']); 
        $user_id = $_SESSION['user_id'];

      
        if (empty($comment)) {
            echo "กรุณากรอกความคิดเห็น";
            exit;
        }

        
        $sql = "INSERT INTO comments (user_id, comment) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("is", $user_id, $comment);

        if ($stmt->execute()) {
            echo "ความคิดเห็นถูกบันทึกแล้ว";
            header("Location: " . $_SERVER['HTTP_REFERER']); 
            exit;
        } else {
            echo "เกิดข้อผิดพลาด: " . $stmt->error;
        }
        $stmt->close();
    }
} else {
    echo "กรุณาล็อกอินเพื่อแสดงความคิดเห็น";
}
?>
