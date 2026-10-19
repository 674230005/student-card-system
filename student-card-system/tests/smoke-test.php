<?php
require_once __DIR__.'/../src/Models/Student.php';
require_once __DIR__.'/../src/Models/StudentCard.php';
require_once __DIR__.'/../src/Services/StudentCardService.php';
$s=new \App\Services\StudentCardService();
$c=$s->createStudentCard(['firstName'=>'ปวเรศ','lastName'=>'ภักดีเจริญ','studentId'=>'674230005','faculty'=>'คณะวิทยาศาสตร์และเทคโนโลยี','major'=>'เทคโนโลยีสารสนเทศ']);
if (!$s->validateCard($c)['isValid']) exit(1);
echo "Smoke test passed\n";
