# ระบบแสดงบัตรนักศึกษา (PHP OOP + SDLC)

## สิ่งที่ปรับแก้
- แยกคลาส Student, StudentCard, StudentCardService และ CardRenderer ตามแนวทาง OOP
- ใช้ PHP 8+ และแก้ปัญหาการโหลดคลาสโดยไม่เรียก vendor/autoload.php ที่ไม่มีอยู่
- ตรวจสอบข้อมูลที่จำเป็นและรองรับรหัสนักศึกษา 9 หลัก
- ใช้รูปและตราที่ตัดจากภาพบัตรที่แนบมา
- รองรับมือถือและการพิมพ์/บันทึกเป็น PDF
- ไม่ต้องใช้ฐานข้อมูลหรือ Composer

## วิธีเปิดด้วย XAMPP
1. แตก ZIP แล้วคัดลอกโฟลเดอร์ student-card-system ไปไว้ที่ C:\xampp\htdocs\
2. เปิด XAMPP Control Panel แล้ว Start Apache
3. เปิด http://localhost/student-card-system/

## วิธีเปิดด้วย PHP
เปิด Terminal ในโฟลเดอร์นี้แล้วรัน `php -S localhost:8000` จากนั้นเปิด http://localhost:8000

## โครงสร้าง
- index.php — จุดเริ่มต้นระบบ
- src/Models/Student.php — ข้อมูลนักศึกษา
- src/Models/StudentCard.php — ข้อมูลบัตร
- src/Services/StudentCardService.php — สร้างและตรวจสอบข้อมูล
- src/Views/CardRenderer.php — หน้าแสดงบัตรและ CSS
- assets/ — รูปและตรา

หมายเหตุ: เป็นบัตรจำลองเพื่อการศึกษา ไม่ใช่บัตรทางการ และไม่มีระบบชำระเงินหรือฐานข้อมูล
