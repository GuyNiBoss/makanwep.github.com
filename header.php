<nav>
    <ul>
        <li><a href="index.php">หนังยอดนิยมปี 2024</a></li>
        <li><a href="darma.php">หนังดราม่า 2024</a></li>
        <li><a href="love.php">หนังรัก 2024</a></li>
        <li><a href="horror.php">หนังระทึกขวัญ 2024</a></li>
    </ul>
<div>
    <?php if (isset($_SESSION['username'])): ?>
        <span class="welcome-text">ยินดีต้อนรับ, <?php echo htmlspecialchars($_SESSION['username']); ?></span> | 
        <a href="logout.php" class="user-btn">ออกจากระบบ</a>
    <?php else: ?>
        <a href="login.php" class="user-btn">เข้าสู่ระบบ</a> | 
        <a href="register.php" class="user-btn">สมัครสมาชิก</a>
    <?php endif; ?>
</div>


</nav>
