<?php
session_start();  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หนังยอดนิยม 2024</title>
    <link rel="stylesheet" href="Css/index.css">
</head>
<body>
   <?php include 'header.php'; ?>

    <div class="movie-ranking">
        <ol class="movie-list">
    <li>
        <h2>Avatar: The Way of Water</h2>
        <div class="movie-details">
            <div class="movie-image-container">
                <img src="img/1.jpg" alt="Avatar: The Way of Water" class="movie-image">
            </div>
            <div class="movie-video-container">
                <a href="#" class="view-trailer-btn" id="viewTrailerBtn1">ดูตัวอย่างหนัง</a>
                <div id="video1" class="movie-video" style="display:none;">   
                    <video width="600" height="340" controls>
                        <source src="video/bast/Avatar.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
        <p><strong>คำอธิบาย:</strong> ภาคต่อของภาพยนตร์ไซไฟที่เล่าเรื่องราวการผจญภัยของเจค ซัลลี่ และเนย์ทีรี ในโลกใต้ทะเลของแพนดอร่า</p>
        <p><strong>ยอดคนดู:</strong> ทำรายได้ทั่วโลกกว่า 2,000 ล้านดอลลาร์สหรัฐ</p>
        <ul>
            <li>⭐ IMDb: 7.6/10</li>
            <li>🍅 Rotten Tomatoes: 76%</li>
        </ul>
    </li>

    <li>
        <h2>Oppenheimer</h2>
        <div class="movie-details">
            <div class="movie-image-container">
                <img src="img/2.jpg" alt="Oppenheimer" class="movie-image">
            </div>
            <div class="movie-video-container">
                <a href="#" class="view-trailer-btn" id="viewTrailerBtn2">ดูตัวอย่างหนัง</a>
                <div id="video2" class="movie-video" style="display:none;">
                    <video width="600" height="340" controls>
                        <source src="video/bast/Oppenheimer.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
        <p><strong>คำอธิบาย:</strong> เรื่องราวชีวประวัติของ J. Robert Oppenheimer นักฟิสิกส์ผู้คิดค้นระเบิดปรมาณู</p>
        <p><strong>ยอดคนดู:</strong> รายได้รวมทั่วโลกมากกว่า 950 ล้านดอลลาร์</p>
        <ul>
            <li>⭐ IMDb: 8.5/10</li>
            <li>🍅 Rotten Tomatoes: 93%</li>
        </ul>
    </li>

    <li>
        <h2>Barbie</h2>
        <div class="movie-details">
            <div class="movie-image-container">
                <img src="img/3.jpg" alt="Barbie" class="movie-image">
            </div>
            <div class="movie-video-container">
                <a href="#" class="view-trailer-btn" id="viewTrailerBtn3">ดูตัวอย่างหนัง</a>
                <div id="video3" class="movie-video" style="display:none;">
                    <video width="600" height="340" controls>
                        <source src="video/bast/Barbie.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
        <p><strong>คำอธิบาย:</strong> การผจญภัยสุดอลังการของตุ๊กตาบาร์บี้ที่ออกค้นหาความหมายในโลกจริง</p>
        <p><strong>ยอดคนดู:</strong> รายได้กว่า 1.4 พันล้านดอลลาร์</p>
        <ul>
            <li>⭐ IMDb: 7.0/10</li>
            <li>🍅 Rotten Tomatoes: 88%</li>
        </ul>
    </li>

    <li>
        <h2>Dune: Part Two</h2>
        <div class="movie-details">
            <div class="movie-image-container">
                <img src="img/4.jpg" alt="Dune: Part Two" class="movie-image">
            </div>
            <div class="movie-video-container">
                <a href="#" class="view-trailer-btn" id="viewTrailerBtn4">ดูตัวอย่างหนัง</a>
                <div id="video4" class="movie-video" style="display:none;">
                    <video width="600" height="340" controls>
                        <source src="video/bast/4.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
        <p><strong>คำอธิบาย:</strong> ภาคต่อของ Dune ว่าด้วยการต่อสู้เพื่อควบคุมดาว Arrakis</p>
        <p><strong>ยอดคนดู:</strong> รายได้เปิดตัวอันดับ 1 ทั่วโลก</p>
        <ul>
            <li>⭐ IMDb: 8.6/10</li>
            <li>🍅 Rotten Tomatoes: 91%</li>
        </ul>
    </li>

    <li>
        <h2>Godzilla x Kong: The New Empire</h2>
        <div class="movie-details">
            <div class="movie-image-container">
                <img src="img/5.jpg" alt="Godzilla x Kong" class="movie-image">
            </div>
            <div class="movie-video-container">
                <a href="#" class="view-trailer-btn" id="viewTrailerBtn5">ดูตัวอย่างหนัง</a>
                <div id="video5" class="movie-video" style="display:none;">
                    <video width="600" height="340" controls>
                        <source src="video/bast/GodzillaKong.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
        <p><strong>คำอธิบาย:</strong> การรวมพลังของสัตว์ประหลาดในตำนาน เพื่อต่อสู้กับภัยร้ายใหม่</p>
        <p><strong>ยอดคนดู:</strong> รายได้ทะลุ 500 ล้านดอลลาร์ในสัปดาห์แรก</p>
        <ul>
            <li>⭐ IMDb: 7.1/10</li>
            <li>🍅 Rotten Tomatoes: 74%</li>
        </ul>
    </li>

    <li>
        <h2>John Wick: Chapter 4</h2>
        <div class="movie-details">
            <div class="movie-image-container">
                <img src="img/6.jpg" alt="John Wick 4" class="movie-image">
            </div>
            <div class="movie-video-container">
                <a href="#" class="view-trailer-btn" id="viewTrailerBtn6">ดูตัวอย่างหนัง</a>
                <div id="video6" class="movie-video" style="display:none;">
                    <video width="600" height="340" controls>
                        <source src="video/bast/JohnWick4.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
        <p><strong>คำอธิบาย:</strong> การกลับมาของนักฆ่าในตำนาน กับภารกิจสุดเดือดเพื่ออิสรภาพ</p>
        <p><strong>ยอดคนดู:</strong> เปิดตัวทำรายได้สูงสุดในแฟรนไชส์</p>
        <ul>
            <li>⭐ IMDb: 8.2/10</li>
            <li>🍅 Rotten Tomatoes: 94%</li>
        </ul>
    </li>

    <li>
        <h2>Spider-Man: Across the Spider-Verse</h2>
        <div class="movie-details">
            <div class="movie-image-container">
                <img src="img/7.jpg" alt="Spider-Verse" class="movie-image">
            </div>
            <div class="movie-video-container">
                <a href="#" class="view-trailer-btn" id="viewTrailerBtn7">ดูตัวอย่างหนัง</a>
                <div id="video7" class="movie-video" style="display:none;">
                    <video width="600" height="340" controls>
                        <source src="video/bast/SpiderVerse.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
        <p><strong>คำอธิบาย:</strong> เรื่องราวการข้ามจักรวาลของ Miles Morales และการพบสไปเดอร์ฮีโร่จากหลายโลก</p>
        <p><strong>ยอดคนดู:</strong> รายได้มากกว่า 600 ล้านดอลลาร์</p>
        <ul>
            <li>⭐ IMDb: 8.7/10</li>
            <li>🍅 Rotten Tomatoes: 96%</li>
        </ul>
    </li>

    <li>
        <h2>Mission: Impossible – Dead Reckoning Part One</h2>
        <div class="movie-details">
            <div class="movie-image-container">
                <img src="img/8.jpg" alt="Mission Impossible" class="movie-image">
            </div>
            <div class="movie-video-container">
                <a href="#" class="view-trailer-btn" id="viewTrailerBtn8">ดูตัวอย่างหนัง</a>
                <div id="video8" class="movie-video" style="display:none;">
                    <video width="600" height="340" controls>
                        <source src="video/bast/MissionImpossible.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
        <p><strong>คำอธิบาย:</strong> การกลับมาของอีธาน ฮันท์ กับภารกิจเสี่ยงตายที่สุด</p>
        <p><strong>ยอดคนดู:</strong> รายได้รวมทั่วโลก 570 ล้านดอลลาร์</p>
        <ul>
            <li>⭐ IMDb: 7.8/10</li>
            <li>🍅 Rotten Tomatoes: 85%</li>
        </ul>
    </li>

    <li>
        <h2>Fast X</h2>
        <div class="movie-details">
            <div class="movie-image-container">
                <img src="img/9.jpg" alt="Fast X" class="movie-image">
            </div>
            <div class="movie-video-container">
                <a href="#" class="view-trailer-btn" id="viewTrailerBtn9">ดูตัวอย่างหนัง</a>
                <div id="video9" class="movie-video" style="display:none;">
                    <video width="600" height="340" controls>
                        <source src="video/bast/FastX.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
        <p><strong>คำอธิบาย:</strong> ภาคต่อความมันส์ของแฟรนไชส์รถซิ่ง ที่มีดราม่าและระเบิดตูมตาม</p>
        <p><strong>ยอดคนดู:</strong> รายได้ทั่วโลกเกือบ 700 ล้านดอลลาร์</p>
        <ul>
            <li>⭐ IMDb: 6.0/10</li>
            <li>🍅 Rotten Tomatoes: 56%</li>
        </ul>
    </li>

    <li>
        <h2>The Marvels</h2>
        <div class="movie-details">
            <div class="movie-image-container">
                <img src="img/10.jpg" alt="The Marvels" class="movie-image">
            </div>
            <div class="movie-video-container">
                <a href="#" class="view-trailer-btn" id="viewTrailerBtn10">ดูตัวอย่างหนัง</a>
                <div id="video10" class="movie-video" style="display:none;">
                    <video width="600" height="340" controls>
                        <source src="video/bast/TheMarvels.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
        <p><strong>คำอธิบาย:</strong> รวมพลังซูเปอร์ฮีโร่หญิงจากจักรวาลมาร์เวลต่อสู้กับศัตรูข้ามจักรวาล</p>
        <p><strong>ยอดคนดู:</strong> รายได้เปิดตัวสูงในหลายประเทศ</p>
        <ul>
            <li>⭐ IMDb: 6.2/10</li>
            <li>🍅 Rotten Tomatoes: 60%</li>
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

    <h3>ความคิดเห็น</h3>
    <?php
include 'db.php';
$category = 'bast'; 


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
    <input type="hidden" name="category" value="bast">
    <button type="submit">ส่งความคิดเห็น</button>
</form>
<?php else: ?>
<p>กรุณา <a href='login.php'>เข้าสู่ระบบ</a> เพื่อแสดงความคิดเห็น</p>
<?php endif; ?>


</body>
</html>
