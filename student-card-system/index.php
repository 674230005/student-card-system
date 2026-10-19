<?php
declare(strict_types=1);
require_once __DIR__.'/src/Models/Student.php';
require_once __DIR__.'/src/Models/StudentCard.php';
require_once __DIR__.'/src/Services/StudentCardService.php';
require_once __DIR__.'/src/Views/CardRenderer.php';
use App\Services\StudentCardService;
use App\Views\CardRenderer;
$data=['id'=>'674230005','firstName'=>'ปวเรศ','lastName'=>'ภักดีเจริญ','studentId'=>'674230005','faculty'=>'คณะวิทยาศาสตร์และเทคโนโลยี','major'=>'สาขาเทคโนโลยีสารสนเทศ','photo'=>'assets/photos/pawaret.jpg','university'=>'มหาวิทยาลัยราชภัฏนครปฐม','cardNumber'=>'6742 3000 5000 0005'];
try {
 $service=new StudentCardService(); $card=$service->createStudentCard($data); $validation=$service->validateCard($card);
 if(!$validation['isValid']) { http_response_code(422); echo '<h1>ข้อมูลไม่ถูกต้อง</h1><ul>'; foreach($validation['errors'] as $error) echo '<li>'.htmlspecialchars($error,ENT_QUOTES,'UTF-8').'</li>'; echo '</ul>'; exit; }
 echo (new CardRenderer($card))->render();
} catch(Throwable $e) { http_response_code(500); echo 'เกิดข้อผิดพลาดในการแสดงบัตร กรุณาตรวจสอบการตั้งค่า PHP'; }
