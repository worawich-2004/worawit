<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>66010914036วรวิช โนนแดง(อ๊อฟ)</title>
</head>

<body>
<br>
<h1>งาน--k66010914036วรวิช โนนแดง(อ๊อฟ)</h1>
<?php
// 1. กำหนดชื่อไฟล์รูปภาพที่อยู่ในโฟลเดอร์เครื่องของคุณ
$img_green_path  = "1.jpg";  // เปลี่ยนเป็นชื่อไฟล์รูปที่ 1 ของคุณ
$img_yellow_path = "3.png"; // เปลี่ยนเป็นชื่อไฟล์รูปที่ 2 ของคุณ
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>Display Local Image</title>
    <style>
        body {
            font-family: 'Kanit', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }

        /* ดีไซน์ปุ่ม */
        .btn {
            padding: 20px 40px;
            margin: 10px;
            font-size: 20px;
            font-weight: bold;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: 0.3s;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .btn-green { background-color: #2ecc71; color: white; }
        .btn-green:hover { background-color: #27ae60; transform: scale(1.05); }

        .btn-yellow { background-color: #f1c40f; color: #333; }
        .btn-yellow:hover { background-color: #f39c12; transform: scale(1.05); }

        /* หน้าต่าง Modal ที่จะเด้งขึ้นมา */
        .modal-overlay {
            display: none; 
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background: rgba(0,0,0,0.8);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            max-width: 85%;
            max-height: 85%;
            border: 5px solid white;
            border-radius: 10px;
            animation: bounceIn 0.4s ease;
        }

        @keyframes bounceIn {
            0% { transform: scale(0.5); opacity: 0; }
            70% { transform: scale(1.05); }
            100% { transform: scale(1); opacity: 1; }
        }

        .close-btn {
            position: absolute;
            top: 20px; right: 30px;
            color: white; font-size: 40px; cursor: pointer;
        }
    </style>
</head>
<body>

    <button class="btn btn-green" onclick="showImg('<?php echo $img_green_path; ?>')">แสดงรูปสีเขียว</button>
    <button class="btn btn-yellow" onclick="showImg('<?php echo $img_yellow_path; ?>')">แสดงรูปสีเหลือง</button>

    <div id="imageModal" class="modal-overlay" onclick="hideImg()">
        <span class="close-btn">&times;</span>
        <img id="modalImg" class="modal-content" src="">
    </div>

    <script>
        function showImg(src) {
            const modal = document.getElementById('imageModal');
            const img = document.getElementById('modalImg');
            img.src = src; // นำชื่อไฟล์จาก PHP มาใส่ใน src ของ img
            modal.style.display = 'flex';
        }

        function hideImg() {
            document.getElementById('imageModal').style.display = 'none';
        }
    </script>

</body>
</html>

</body>
</html>