<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ฟอร์มรับสมัครงาน - TechGen Solutions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <style>
        /* Custom styling for better look */
        .header-section {
            background-color: #0d6efd; /* Primary blue */
            color: white;
            padding: 20px 0;
            border-radius: 5px 5px 0 0;
        }
        .form-section {
            background-color: #f8f9fa; /* Light grey background for form */
            padding: 30px;
            border-radius: 0 0 5px 5px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <div class="card border-0">
            <div class="header-section text-center">
                <h2 class="fw-bold">TechGen Solutions Co., Ltd.</h2>
                <p class="lead mb-0">ฟอร์มใบสมัครงาน | Job Application Form</p>
            </div>
            
            <div class="form-section">
                <h4 class="mb-4 text-primary">ส่วนที่ 1: ข้อมูลทั่วไป</h4>
                
                <form method="post" action="process\_application.php">
                    
                    <div class="mb-3">
                        <label for="job_position" class="form-label fw-bold">ตำแหน่งงานที่สนใจสมัคร <span class="text-danger">*</span></label>
                        <select class="form-select" id="job_position" name="job_position" required>
                            <option value="" selected disabled>--- กรุณาเลือกตำแหน่งที่ต้องการสมัคร ---</option>
                            <option value="Software Developer">Software Developer (Junior/Senior)</option>
                            <option value="System Analyst">System Analyst</option>
                            <option value="UX/UI Designer">UX/UI Designer</option>
                            <option value="Digital Marketing Specialist">Digital Marketing Specialist</option>
                            <option value="Human Resources Officer">Human Resources Officer</option>
                        </select>
                    </div>

                    <hr class="my-4">

                    <div class="row g-3">
                        <div class="col-md-3">
                            <label for="prefix" class="form-label">คำนำหน้าชื่อ <span class="text-danger">*</span></label>
                            <select class="form-select" id="prefix" name="prefix" required>
                                <option value="นาย">นาย</option>
                                <option value="นาง">นาง</option>
                                <option value="นางสาว">นางสาว</option>
                                <option value="อื่นๆ">อื่นๆ</option>
                            </select>
                        </div>

                        <div class="col-md-5">
                            <label for="first_name" class="form-label">ชื่อ (ภาษาไทย) <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="first_name" name="first_name" required>
                        </div>

                        <div class="col-md-4">
                            <label for="last_name" class="form-label">นามสกุล (ภาษาไทย) <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="last_name" name="last_name" required>
                        </div>
                    </div>
                    
                    <div class="row g-3 mt-1">
                        <div class="col-md-6">
                            <label for="dob" class="form-label">วันเดือนปีเกิด <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" id="dob" name="dob" required>
                        </div>

                        <div class="col-md-6">
                            <label for="phone" class="form-label">เบอร์โทรศัพท์ <span class="text-danger">*</span></label>
                            <input type="tel" class="form-control" id="phone" name="phone" pattern="[0-9]{10}" title="กรุณากรอกเบอร์โทร 10 หลัก" required>
                        </div>
                    </div>

                    <hr class="my-4">
                    <h4 class="mb-4 text-primary">ส่วนที่ 2: ข้อมูลการศึกษาและความสามารถ</h4>

                    <div class="mb-3">
                        <label for="education_level" class="form-label fw-bold">ระดับการศึกษาสูงสุด <span class="text-danger">*</span></label>
                        <select class="form-select" id="education_level" name="education_level" required>
                            <option value="" selected disabled>--- เลือกระดับการศึกษาสูงสุด ---</option>
                            <option value="ปวส.">ประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.)</option>
                            <option value="ปริญญาตรี">ปริญญาตรี</option>
                            <option>ปริญญาโท</option>
                            <option>ปริญญาเอก</option>
                        </select>
                    </div>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="major" class="form-label">สาขาวิชา/คณะ</label>
                            <input type="text" class="form-control" id="major" name="major" placeholder="เช่น วิทยาการคอมพิวเตอร์">
                        </div>
                        <div class="col-md-6">
                            <label for="institute" class="form-label">สถาบันการศึกษา</label>
                            <input type="text" class="form-control" id="institute" name="institute" placeholder="เช่น มหาวิทยาลัยมหาสารคาม">
                        </div>
                    </div>

                    <div class="mb-3 mt-3">
                        <label for="skills" class="form-label">ความสามารถพิเศษ หรือ ทักษะที่เกี่ยวข้องกับตำแหน่งงาน</label>
                        <textarea class="form-control" id="skills" name="skills" rows="3" placeholder="เช่น สามารถเขียน Python, มีใบรับรอง Google Analytics, ใช้โปรแกรม Adobe Illustrator ได้คล่องแคล่ว"></textarea>
                    </div>

                    <hr class="my-4">
                    <h4 class="mb-4 text-primary">ส่วนที่ 3: ประสบการณ์และเอกสาร</h4>
                    
                    <div class="mb-3">
                        <label for="experience" class="form-label">ประสบการณ์ทำงาน (โปรดสรุปโดยย่อ)</label>
                        <textarea class="form-control" id="experience" name="experience" rows="4" placeholder="ระบุตำแหน่ง, บริษัท, และระยะเวลาทำงาน (หากมี)"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="expected_salary" class="form-label">เงินเดือนที่ต้องการ (บาท)</label>
                        <input type="number" class="form-control" id="expected_salary" name="expected_salary" min="0" placeholder="ตัวอย่าง: 25000">
                    </div>

                    <div class="mb-4">
                        <label for="resume_file" class="form-label">แนบไฟล์ Resume / ประวัติส่วนตัว (PDF/DOCX) <span class="text-danger">*</span></label>
                        <input class="form-control" type="file" id="resume_file" name="resume_file" accept=".pdf, .docx" required>
                        <div class="form-text">ขนาดไฟล์ไม่เกิน 5MB.</div>
                    </div>

                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" value="" id="data_consent" required>
                        <label class="form-check-label" for="data_consent">
                            ข้าพเจ้ายินยอมให้บริษัท TechGen Solutions เก็บและประมวลผลข้อมูลส่วนบุคคลของข้าพเจ้าเพื่อวัตถุประสงค์ในการสมัครงาน
                        </label>
                        <span class="text-danger">*</span>
                    </div>


                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-success btn-lg">ส่งใบสมัครงาน</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>