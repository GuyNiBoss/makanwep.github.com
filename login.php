<?php
session_start();  


require_once 'db.php';

$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);  
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
           
            $_SESSION['logged_in'] = true;
            $_SESSION['email'] = $email;  
            $_SESSION['username'] = $row['username'];  
            $message = "เข้าสู่ระบบสำเร็จ!";
            
            header("Location: index.php");
            exit;
        } else {
            $message = "รหัสผ่านไม่ถูกต้อง!";
        }
    } else {
        $message = "ไม่มีผู้ใช้งานด้วยอีเมลนี้!";
    }
    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เข้าสู่ระบบ</title>
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
        <h2>เข้าสู่ระบบ</h2>
        <?php if ($message): ?>
            <div class="message-box <?= strpos($message, 'สำเร็จ') !== false ? 'success' : 'error' ?>">
                <?= htmlspecialchars($message) ?>
            </div>
        <?php endif; ?>
        <form method="POST" action="login.php">
            <label for="email">อีเมล:</label>
            <input type="email" id="email" name="email" required>
            <label for="password">รหัสผ่าน:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">เข้าสู่ระบบ</button>
        </form>
        <p>ยังไม่มีบัญชี? <a href="register.php">สมัครสมาชิก</a></p>
        <p>ไปหน้าหลัก <a href="index.html">หน้าหลัก</a></p>
    </div>
</body>
</html>