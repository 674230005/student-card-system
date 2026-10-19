<?php
declare(strict_types=1);
namespace App\Services;
use App\Models\Student;
use App\Models\StudentCard;
final class StudentCardService {
 public function createStudentCard(array $data): StudentCard {
  foreach(['firstName','lastName','studentId','faculty','major'] as $key) if(!isset($data[$key]) || trim((string)$data[$key])==='') throw new \InvalidArgumentException('ข้อมูลนักศึกษาไม่ครบ: '.$key);
  $student=new Student((string)($data['id']??'STU001'),(string)$data['firstName'],(string)$data['lastName'],(string)$data['studentId'],(string)$data['faculty'],(string)$data['major'],(string)($data['photo']??'assets/photos/pawaret.jpg'),(string)($data['university']??'มหาวิทยาลัยราชภัฏนครปฐม'));
  return new StudentCard($student,(string)($data['cardNumber']??'6742 3000 5000 0005'));
 }
 public function validateCard(StudentCard $card): array {
  $errors=[]; $s=$card->getStudent();
  if(trim($s->getFullName())==='') $errors[]='กรุณาระบุชื่อ-สกุล';
  if(!preg_match('/^\\d{9}$/',$s->getStudentId())) $errors[]='รหัสนักศึกษาต้องเป็นตัวเลข 9 หลัก';
  if(!$card->isValid()) $errors[]='บัตรหมดอายุ';
  return ['isValid'=>count($errors)===0,'errors'=>$errors];
 }
}
