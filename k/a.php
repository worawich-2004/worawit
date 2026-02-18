<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>66010914036วรวิช โนนแดง(อ๊อฟ)</title>
</head>

<body>
<br>
<h1>งาน--k66010914036วรวิช โนนแดง(อ๊อฟ)</h1>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>PHP Image Switcher</title>
    <style>
        body { text-align: center; padding: 50px; font-family: sans-serif; }
        .btn { padding: 15px 30px; font-size: 18px; cursor: pointer; border: none; border-radius: 8px; margin: 10px; color: white; text-decoration: none; display: inline-block; }
        .btn-green { background-color: #28a745; }
        .btn-yellow { background-color: #ffc107; color: black; }
        img { max-width: 500px; margin-top: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
    </style>
</head>
<body>

    <h2>เลือกรูปภาพ (PHP Version)</h2>

    <img src="images/1.jpg"width="500"> class="btn btn-green">ปุ่มสีเขียว (รูปที่ 1)</a>
    <img src="images/3.jpg"width="500"> class="btn btn-yellow">ปุ่มสีเหลือง (รูปที่ 3)</a>

    <div class="display-area">
        <?php
            // เช็คว่ามีการกดปุ่มส่งค่า img มาหรือไม่
            if (isset($_GET['img'])) {
                $image = $_GET['img'];
                // แสดงรูปภาพตามค่าที่รับมา
                echo '<img src="' . htmlspecialchars($image) . '" alt="Image">';
            } else {
                echo '<p>กรุณากดปุ่มเพื่อแสดงรูปภาพ</p>';
            }
        ?>
    </div>

</body>
</html>
</body>
</html>