<?php
session_start();  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หนังดราม่า 2024</title>
    <link rel="stylesheet" href="Css/index.css">
</head>
<body>
   <?php include 'header.php'; ?>

    <div class="movie-ranking">
        <ol class="movie-list">
    <li>
        <h2>Conclave</h2>
        <div class="movie-details">
            <div class="movie-image-container">
                <img src="img/darma/1.jpg" alt="Conclave" class="movie-image">
            </div>
            <div class="movie-video-container">
                <a href="#" class="view-trailer-btn" id="viewTrailerBtn1">ดูตัวอย่างหนัง</a>
                <div id="video1" class="movie-video" style="display:none;">   
                    <video width="600" height="340" controls>
                        <source src="video/darma/Conclave.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
        <p><strong>คำอธิบาย:</strong> ภาพยนตร์ดราม่าการเมืองที่ถ่ายทอดเรื่องราวการเลือกพระสันตะปาปาคนใหม่ ภายใต้แรงกดดันและความลับที่เปิดเผย</p>
        <p><strong>ยอดคนดู:</strong> รายได้ทั่วโลก 180 ล้านดอลลาร์สหรัฐ</p>
        <ul>
            <li>⭐ IMDb: 7.8/10</li>
            <li>🍅 Rotten Tomatoes: 83%</li>
        </ul>
    </li>

    <li>
        <h2>The Holdovers</h2>
        <div class="movie-details">
            <div class="movie-image-container">
                <img src="img/darma/2.jpg" alt="The Holdovers" class="movie-image">
            </div>
            <div class="movie-video-container">
                <a href="#" class="view-trailer-btn" id="viewTrailerBtn2">ดูตัวอย่างหนัง</a>
                <div id="video2" class="movie-video" style="display:none;">
                    <video width="600" height="340" controls>
                        <source src="video/darma/TheHoldovers.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
        <p><strong>คำอธิบาย:</strong> ครูจอมเฮี้ยบที่ต้องดูแลนักเรียนในช่วงวันหยุดคริสต์มาส สะท้อนมิตรภาพและความเข้าใจ</p>
        <p><strong>ยอดคนดู:</strong> รายได้ทั่วโลก 125 ล้านดอลลาร์</p>
        <ul>
            <li>⭐ IMDb: 7.7/10</li>
            <li>🍅 Rotten Tomatoes: 96%</li>
        </ul>
    </li>

    <li>
        <h2>Past Lives</h2>
        <div class="movie-details">
            <div class="movie-image-container">
                <img src="img/darma/3.jpg" alt="Past Lives" class="movie-image">
            </div>
            <div class="movie-video-container">
                <a href="#" class="view-trailer-btn" id="viewTrailerBtn3">ดูตัวอย่างหนัง</a>
                <div id="video3" class="movie-video" style="display:none;">
                    <video width="600" height="340" controls>
                        <source src="video/darma/PastLives.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
        <p><strong>คำอธิบาย:</strong> เรื่องราวความรักและอดีตที่ยังค้างคาใจ เมื่อคนรักเก่ากลับมาเจอกันอีกครั้ง</p>
        <p><strong>ยอดคนดู:</strong>  รายได้ทั่วโลก 90 ล้านดอลลาร์</p>
        <ul>
            <li>⭐ IMDb: 8.0/10</li>
            <li>🍅 Rotten Tomatoes: 97%</li>
        </ul>
    </li>

    <li>
        <h2>May December</h2>
        <div class="movie-details">
            <div class="movie-image-container">
                <img src="img/darma/4.jpg" alt="May December" class="movie-image">
            </div>
            <div class="movie-video-container">
                <a href="#" class="view-trailer-btn" id="viewTrailerBtn4">ดูตัวอย่างหนัง</a>
                <div id="video4" class="movie-video" style="display:none;">
                    <video width="600" height="340" controls>
                        <source src="video/darma/MayDecember.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
        <p><strong>คำอธิบาย:</strong> นักแสดงสาวที่ต้องเตรียมรับบทผู้หญิงในคดีความอื้อฉาว จนเกิดความคลุมเครือของความจริง</p>
        <p><strong>ยอดคนดู:</strong>  70 ล้านดอลลาร์</p>
        <ul>
            <li>⭐ IMDb:7.2/10</li>
            <li>🍅 Rotten Tomatoes: 90%</li>
        </ul>
    </li>

    <li>
        <h2>Nyad</h2>
        <div class="movie-details">
            <div class="movie-image-container">
                <img src="img/darma/5.jpg" alt="Nyad" class="movie-image">
            </div>
            <div class="movie-video-container">
                <a href="#" class="view-trailer-btn" id="viewTrailerBtn5">ดูตัวอย่างหนัง</a>
                <div id="video5" class="movie-video" style="display:none;">
                    <video width="600" height="340" controls>
                        <source src="video/darma/Nyad.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
        <p><strong>คำอธิบาย:</strong> เรื่องจริงของนักว่ายน้ำวัย 60 ที่พยายามว่ายจากคิวบาถึงฟลอริดาโดยไม่ใช้กรงกันฉลาม</p>
        <p><strong>ยอดคนดู:</strong> 50 ล้านดอลลาร์</p>
        <ul>
            <li>⭐ IMDb: 6.9/10</li>
            <li>🍅 Rotten Tomatoes: 83%</li>
        </ul>
    </li>

    <li>
        <h2>Killers of the Flower Moon</h2>
        <div class="movie-details">
            <div class="movie-image-container">
                <img src="img/darma/6.jpg" alt="Killers of the Flower Moon" class="movie-image">
            </div>
            <div class="movie-video-container">
                <a href="#" class="view-trailer-btn" id="viewTrailerBtn6">ดูตัวอย่างหนัง</a>
                <div id="video6" class="movie-video" style="display:none;">
                    <video width="600" height="340" controls>
                        <source src="video/darma/KillersoftheFlowerMoon.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
        <p><strong>คำอธิบาย:</strong> สะท้อนความโหดร้ายในยุคคาวบอย เมื่อชนพื้นเมืองถูกฆาตกรรมเพราะน้ำมัน</p>
        <p><strong>ยอดคนดู:</strong> 250 ล้านดอลลาร์</p>
        <ul>
            <li>⭐ IMDb: 7.9/10</li>
            <li>🍅 Rotten Tomatoes: 92%</li>
        </ul>
    </li>

    <li>
        <h2>Origin</h2>
        <div class="movie-details">
            <div class="movie-image-container">
                <img src="img/darma/7.jpg" alt="Origin" class="movie-image">
            </div>
            <div class="movie-video-container">
                <a href="#" class="view-trailer-btn" id="viewTrailerBtn7">ดูตัวอย่างหนัง</a>
                <div id="video7" class="movie-video" style="display:none;">
                    <video width="600" height="340" controls>
                        <source src="video/darma/Origin.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
        <p><strong>คำอธิบาย:</strong> นักเขียนเดินทางค้นหารากของความอยุติธรรมในโลก ผ่านการเชื่อมโยงวรรณกรรมและประวัติศาสตร์</p>
        <p><strong>ยอดคนดู:</strong> 40 ล้านดอลลาร์</p>
        <ul>
            <li>⭐ IMDb: 7.5/10</li>
            <li>🍅 Rotten Tomatoes: 89%</li>
        </ul>
    </li>

    <li>
        <h2>American Fiction</h2>
        <div class="movie-details">
            <div class="movie-image-container">
                <img src="img/darma/8.jpg" alt="American Fiction" class="movie-image">
            </div>
            <div class="movie-video-container">
                <a href="#" class="view-trailer-btn" id="viewTrailerBtn8">ดูตัวอย่างหนัง</a>
                <div id="video8" class="movie-video" style="display:none;">
                    <video width="600" height="340" controls>
                        <source src="video/darma/AmericanFiction.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
        <p><strong>คำอธิบาย:</strong> นักเขียนผิวดำที่ประชดระบบอุตสาหกรรมหนังสือ ด้วยการสร้างนิยายแนวล้อเลียนที่ดันกลายเป็นหนังสือขายดี</p>
        <p><strong>ยอดคนดู:</strong> 110 ล้านดอลลาร์</p>
        <ul>
            <li>⭐ IMDb: 7.5/10</li>
            <li>🍅 Rotten Tomatoes: 94%</li>
        </ul>
    </li>

    <li>
        <h2>Maestro</h2>
        <div class="movie-details">
            <div class="movie-image-container">
                <img src="img/darma/9.jpg" alt="Maestro" class="movie-image">
            </div>
            <div class="movie-video-container">
                <a href="#" class="view-trailer-btn" id="viewTrailerBtn9">ดูตัวอย่างหนัง</a>
                <div id="video9" class="movie-video" style="display:none;">
                    <video width="600" height="340" controls>
                        <source src="video/darma/Maestro.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
        <p><strong>คำอธิบาย:</strong> ชีวประวัติของ Leonard Bernstein กับเรื่องราวชีวิตรักและดนตรีที่ซับซ้อน</p>
        <p><strong>ยอดคนดู:</strong> 85 ล้านดอลลาร์</p>
        <ul>
            <li>⭐ IMDb: 6.9/10</li>
            <li>🍅 Rotten Tomatoes: 80%</li>
        </ul>
    </li>

    <li>
        <h2>All of Us Strangers</h2>
        <div class="movie-details">
            <div class="movie-image-container">
                <img src="img/darma/10.jpg" alt="All of Us Strangers" class="movie-image">
            </div>
            <div class="movie-video-container">
                <a href="#" class="view-trailer-btn" id="viewTrailerBtn10">ดูตัวอย่างหนัง</a>
                <div id="video10" class="movie-video" style="display:none;">
                    <video width="600" height="340" controls>
                        <source src="video/darma/AllofUsStrangers.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
        <p><strong>คำอธิบาย:</strong> นักเขียนหนุ่มพบคนรักใหม่และพยายามเผชิญหน้ากับอดีตของตนเอง</p>
        <p><strong>ยอดคนดู:</strong> 60 ล้านดอลลาร์</p>
        <ul>
            <li>⭐ IMDb: 7.8/10</li>
            <li>🍅 Rotten Tomatoes: 95%</li>
        </ul>
    </li>
</ul>

        </ol>
    </div>

    <script>
        
         document.querySelectorAll('.view-trailer-btn').forEach(function(button) {
    button.addEventListener('click', function(e) {
        e.preventDefault();

        document.querySelectorAll('.movie-video').forEach(function(videoDiv) {
            videoDiv.style.display = 'none';
        });

        const videoContainer = this.nextElementSibling;
        if (videoContainer.style.display === 'block') {
            videoContainer.style.display = 'none'; 
        } else {
            videoContainer.style.display = 'block'; 
        }
    });
});

    </script>


<h3>แสดงความคิดเห็น</h3>

<?php

include 'db.php';
$category = 'darma'; 


$sql = "SELECT username, comment, created_at FROM comments WHERE category = ? ORDER BY id DESC";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $category);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    $username = htmlspecialchars($row['username']);
    $comment = htmlspecialchars($row['comment']);
    $created_at = date("d M Y, H:i", strtotime($row['created_at'])); // แปลงเวลาให้อ่านง่าย

    echo "<div class='comment-box'>";
    echo "<strong>$username</strong> <small style='color:gray;'>($created_at)</small><br>";
    echo "$comment";
    echo "</div>";
}
?>


<?php if (isset($_SESSION['username'])): ?>
<form action="post_comment.php" method="post">
    <textarea name="comment" placeholder="แสดงความคิดเห็น..." required></textarea><br>
    <input type="hidden" name="category" value="darma">
    <button type="submit">ส่งความคิดเห็น</button>
</form>
<?php else: ?>
<p>กรุณา <a href='login.php'>เข้าสู่ระบบ</a> เพื่อแสดงความคิดเห็น</p>
<?php endif; ?>
</body>
</html>

