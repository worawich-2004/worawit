<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ฟอร์มรับข้อมูล - วรวิช โนนแดง(อ๊อฟ)</title>

    <!-- Bootstrap 5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to right, #e3f2fd, #f8f9fa);
        }
        h1 {
            font-weight: 700;
            text-shadow: 1px 1px 2px #ccc;
        }
        .form-card {
            background: #ffffff;
            border-radius: 12px;
            padding: 30px;
            border: 1px solid #ddd;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        }
        .btn:hover {
            transform: scale(1.03);
            transition: 0.2s;
        }
        .result-box {
            border: 1px solid #cfd4da;
            padding: 20px;
            border-radius: 10px;
            background-color: #fdfdfd;
            box-shadow: 0 3px 10px rgba(0,0,0,0.05);
        }
        .color-display {
            display: inline-block;
            width: 80px;
            height: 30px;
            margin-left: 10px;
            border-radius: 4px;
            border: 1px solid #bbb;
            vertical-align: middle;
        }
        .section-title {
            font-size: 1.4rem;
            font-weight: 600;
            color: #198754;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">

        <h1 class="text-center text-primary mb-4">ฟอร์มรับข้อมูล - วรวิช โนนแดง(อ๊อฟ)CHAT GPT</h1>

        <!-- ฟอร์ม -->
        <div class="form-card mx-auto col-md-8 col-lg-6">
            <form method="post" action="">
                
                <div class="mb-3">
                    <label class="form-label">ชื่อ-สกุล <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="fullname" autofocus required>
                </div>

                <div class="mb-3">
                    <label class="form-label">เบอร์โทร <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="phone" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">ส่วนสูง <span class="text-danger">*</span></label>
                    <div class="input-group">
                        <input type="number" class="form-control" name="height" min="100" max="200" required>
                        <span class="input-group-text">ซม.</span>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">ที่อยู่</label>
                    <textarea class="form-control" name="address" rows="3"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">วันเดือนปีเกิด</label>
                    <input type="date" class="form-control" name="birthday">
                </div>

                <div class="mb-3">
                    <label class="form-label">สีที่ชอบ</label><br>
                    <input type="color" class="form-control form-control-color" name="color" value="#563d7c">
                </div>

                <div class="mb-3">
                    <label class="form-label">สาขาวิชา</label>
                    <select class="form-select" name="major">
                        <option value="การบัญชี">การบัญชี</option>
                        <option value="การตลาด">การตลาด</option>
                        <option value="การจัดการ">การจัดการ</option>
                        <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
                    </select>
                </div>

                <div class="d-grid gap-2 d-md-block mt-4 text-center">
                    <button type="submit" name="Submit" class="btn btn-success px-4">สมัครสมาชิก</button>
                    <button type="reset" class="btn btn-secondary px-4">ยกเลิก</button>
                    <button type="button" class="btn btn-info text-white px-4" onclick="window.location='https://www.msu.ac.th/';">Go to MSU</button>
                    <button type="button" class="btn btn-warning px-4" onmouseover="alert('สวัสดีจ้าา!');">Hello</button>
                    <button type="button" class="btn btn-primary px-4" onclick="window.print()">พิมพ์</button>
                </div>

            </form>
        </div>

        <!-- แสดงผลข้อมูล -->
        <hr class="my-5">

        <?php
        if(isset($_POST['Submit'])) {
            $fullname = htmlspecialchars($_POST['fullname']);
            $phone = htmlspecialchars($_POST['phone']);
            $height = htmlspecialchars($_POST['height']);
            $address = htmlspecialchars($_POST['address']);
            $birthday = htmlspecialchars($_POST['birthday']);
            $color = htmlspecialchars($_POST['color']);
            $major = htmlspecialchars($_POST['major']);

            if (!empty($birthday)) {
                $date_obj = new DateTime($birthday);
                $formatted_birthday = $date_obj->format('d/m/Y');
            } else {
                $formatted_birthday = "-";
            }

            echo '<h3 class="section-title">ข้อมูลที่ส่งมา</h3>';
            echo '<div class="result-box">';
            echo '<p><strong>ชื่อ-สกุล:</strong> ' . $fullname . '</p>';
            echo '<p><strong>เบอร์โทร:</strong> ' . $phone . '</p>';
            echo '<p><strong>ส่วนสูง:</strong> ' . $height . ' ซม.</p>';
            echo '<p><strong>ที่อยู่:</strong> ' . nl2br($address) . '</p>';
            echo '<p><strong>วันเดือนปีเกิด:</strong> ' . $formatted_birthday . '</p>';
            echo '<p><strong>สีที่ชอบ:</strong> ' . $color .
                 ' <span class="color-display" style="background-color:' . $color . ';"></span></p>';
            echo '<p><strong>สาขาวิชา:</strong> ' . $major . '</p>';
            echo '</div>';
        }
        ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
