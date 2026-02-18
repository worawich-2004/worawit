<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ผลลัพธ์ใบสมัครงาน - TechGen Solutions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <style>
        .result-container {
            border: 1px solid #0d6efd;
            border-left: 5px solid #0d6efd;
            padding: 25px;
            border-radius: 5px;
            background-color: #f0f8ff; /* Light blue background */
        }
        .header-section {
            background-color: #0d6efd;
            color: white;
            padding: 15px;
            border-radius: 5px 5px 0 0;
            margin-top: -25px; /* Pull up to the top of the container */
            margin-bottom: 20px;
        }
        .data-label {
            font-weight: bold;
            color: #343a40;
        }
    </style>
</head>

<body>
    <div class="container my-5">
        
        <?php
        // ตรวจสอบว่ามีการส่งข้อมูลแบบ POST มาหรือไม่
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            // ----------------------------------------------------
            // 1. รับข้อมูลทั้งหมดจาก $_POST และทำความสะอาดข้อมูล (Sanitize)
            // ----------------------------------------------------
            
            $job_position = htmlspecialchars($_POST['job_position'] ?? ' - ');
            $prefix = htmlspecialchars($_POST['prefix'] ?? ' - ');
            $first_name = htmlspecialchars($_POST['first_name'] ?? ' - ');
            $last_name = htmlspecialchars($_POST['last_name'] ?? ' - ');
            $dob = htmlspecialchars($_POST['dob'] ?? ' - ');
            $phone = htmlspecialchars($_POST['phone'] ?? ' - ');
            $education_level = htmlspecialchars($_POST['education_level'] ?? ' - ');
            $major = htmlspecialchars($_POST['major'] ?? ' - ');
            $institute = htmlspecialchars($_POST['institute'] ?? ' - ');
            $skills = htmlspecialchars($_POST['skills'] ?? ' - ');
            $experience = htmlspecialchars($_POST['experience'] ?? ' - ');
            $expected_salary = htmlspecialchars($_POST['expected_salary'] ?? ' - ');

            // การจัดการไฟล์อัปโหลด (เนื่องจากไม่ได้อัปโหลดจริงในโค้ดนี้ จะแสดงแค่ชื่อไฟล์)
            // ในการใช้งานจริง ต้องมีการจัดการ $_FILES['resume_file'] อย่างถูกต้อง
            $resume_file_info = " - (ไม่มีการประมวลผลไฟล์จริงในโค้ดตัวอย่าง) - ";
            if (isset($_FILES['resume_file']) && $_FILES['resume_file']['error'] == 0) {
                $resume_file_info = htmlspecialchars($_FILES['resume_file']['name']);
            }
            
            // ----------------------------------------------------
            // 2. การจัดรูปแบบข้อมูลบางส่วน
            // ----------------------------------------------------
            
            // จัดรูปแบบวันเดือนปีเกิด
            $formatted_dob = ' - ';
            if (!empty($dob) && $dob != ' - ') {
                try {
                    $date_obj = new DateTime($dob);
                    // แปลงเป็นรูปแบบ วัน/เดือน/ปี พ.ศ.
                    $formatted_dob = $date_obj->format('d/m/') . ($date_obj->format('Y') + 543);
                } catch (Exception $e) {
                    $formatted_dob = $dob; // ใช้ค่าเดิมถ้าแปลงไม่ได้
                }
            }
            
            // จัดรูปแบบเงินเดือน
            $formatted_salary = ' - ';
            if (is_numeric($expected_salary)) {
                $formatted_salary = number_format($expected_salary) . ' บาท';
            } elseif ($expected_salary != ' - ') {
                $formatted_salary = $expected_salary;
            }
            
            // ----------------------------------------------------
            // 3. แสดงผลข้อมูล
            // ----------------------------------------------------
            ?>

            <div class="result-container shadow-lg">
                <div class="header-section text-center">
                    <h3 class="fw-bold">🎉 ข้อมูลใบสมัครที่ได้รับเรียบร้อยแล้ว</h3>
                    <p class="mb-0">บริษัท TechGen Solutions ขอบคุณสำหรับการสมัครงาน</p>
                </div>
                
                <h4 class="text-primary mb-3">ตำแหน่งที่สมัคร</h4>
                <p><span class="data-label">ตำแหน่ง:</span> <span class="badge bg-success fs-6"><?php echo $job_position; ?></span></p>

                <hr>

                <h4 class="text-primary mb-3">ข้อมูลส่วนตัว</h4>
                <div class="row">
                    <div class="col-md-6"><p><span class="data-label">ชื่อ-สกุล:</span> <?php echo $prefix . ' ' . $first_name . ' ' . $last_name; ?></p></div>
                    <div class="col-md-6"><p><span class="data-label">เบอร์โทรศัพท์:</span> <?php echo $phone; ?></p></div>
                    <div class="col-md-6"><p><span class="data-label">วันเดือนปีเกิด:</span> <?php echo $formatted_dob; ?></p></div>
                </div>
                
                <hr>

                <h4 class="text-primary mb-3">ข้อมูลการศึกษาและความสามารถ</h4>
                <div class="row">
                    <div class="col-md-6"><p><span class="data-label">ระดับการศึกษา:</span> <?php echo $education_level; ?></p></div>
                    <div class="col-md-6"><p><span class="data-label">สาขาวิชา/คณะ:</span> <?php echo $major; ?></p></div>
                    <div class="col-12"><p><span class="data-label">สถาบันการศึกษา:</span> <?php echo $institute; ?></p></div>
                </div>
                <p><span class="data-label">ความสามารถพิเศษ/ทักษะ:</span> <br><?php echo nl2br($skills); ?></p>
                
                <hr>

                <h4 class="text-primary mb-3">ประสบการณ์และอื่นๆ</h4>
                <p><span class="data-label">ประสบการณ์ทำงาน:</span> <br><?php echo nl2br($experience); ?></p>
                <p><span class="data-label">เงินเดือนที่ต้องการ:</span> <span class="text-success fw-bold"><?php echo $formatted_salary; ?></span></p>
                <p><span class="data-label">ชื่อไฟล์ Resume ที่แนบ:</span> <span class="text-info"><?php echo $resume_file_info; ?></span></p>

            </div>
            
            <?php
        } else {
            // กรณีเข้าถึงหน้านี้โดยไม่ได้ส่งข้อมูลจากฟอร์ม
            echo '<div class="alert alert-warning text-center" role="alert">';
            echo '<strong>❗ คำเตือน:</strong> กรุณากรอกข้อมูลผ่านแบบฟอร์มรับสมัครงานก่อน';
            echo '<br><a href="job_application_form.html" class="alert-link">กลับไปหน้าฟอร์ม</a>';
            echo '</div>';
        }
        ?>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>