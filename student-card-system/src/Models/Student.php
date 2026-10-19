<?php
declare(strict_types=1);
namespace App\Models;
final class Student {
 public function __construct(private string $id, private string $firstName, private string $lastName, private string $studentId, private string $faculty, private string $major, private string $photo='assets/photos/pawaret.jpg', private string $university='มหาวิทยาลัยราชภัฏนครปฐม') {}
 public function getId(): string{return $this->id;}
 public function getFirstName(): string{return $this->firstName;}
 public function getLastName(): string{return $this->lastName;}
 public function getFullName(): string{return $this->firstName.' '.$this->lastName;}
 public function getFullNameEN(): string{return 'PAWARET PAKDEECHAREON';}
 public function getStudentId(): string{return $this->studentId;}
 public function getFaculty(): string{return $this->faculty;}
 public function getMajor(): string{return $this->major;}
 public function getPhoto(): string{return $this->photo;}
 public function getUniversity(): string{return $this->university;}
 public function toArray(): array{return ['id'=>$this->id,'firstName'=>$this->firstName,'lastName'=>$this->lastName,'studentId'=>$this->studentId,'faculty'=>$this->faculty,'major'=>$this->major,'photo'=>$this->photo,'university'=>$this->university];}
}
