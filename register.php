<?php
include 'db.php';

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    
    if ($password !== $confirm_password) {
        $message = "รหัสผ่านและยืนยันรหัสผ่านไม่ตรงกัน. กรุณาลองใหม่.";
    } else {
        
        $sql = "SELECT * FROM users WHERE username = ? OR email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $username, $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $message = "ชื่อผู้ใช้หรืออีเมลนี้ถูกใช้งานแล้ว.";
        } else {
            
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            
            $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sss", $username, $email, $hashed_password);

            if ($stmt->execute()) {
                $message = "สมัครสมาชิกสำเร็จ ";
            } else {
                $message = "เกิดข้อผิดพลาด: " . $conn->error;
            }
        }
        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครสมาชิก</title>
    <link rel="stylesheet" href="Css/style.css">
    <style>
        .message-box {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            padding: 10px;
            margin-top: 15px;
            border-radius: 5px;
        }

        .success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .error {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
    </style>
</head>
<body>
    <div class="register-form">
        <h2>สมัครสมาชิก</h2>

        <?php if ($message): ?>
            <div class="message-box <?= strpos($message, 'สำเร็จ') !== false ? 'success' : 'error' ?>">
                <?= htmlspecialchars($message) ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="register.php">
            <label for="username">ชื่อผู้ใช้:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">อีเมล:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">รหัสผ่าน:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm_password">ยืนยันรหัสผ่าน:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>

            <button type="submit">สมัครสมาชิก</button>
        </form>

        <p>มีบัญชีอยู่แล้ว? <a href="login.php">เข้าสู่ระบบ</a></p>
        <p>ไปหน้าหลัก <a href="index.php">หน้าหลัก</a></p>
    </div>
</body>
</html>
