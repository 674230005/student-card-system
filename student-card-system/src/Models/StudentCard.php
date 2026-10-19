<?php
declare(strict_types=1);
namespace App\Models;
use DateTimeImmutable;
final class StudentCard {
 private DateTimeImmutable $issueDate;
 private DateTimeImmutable $expireDate;
 public function __construct(private Student $student, private string $cardNumber='6742 3000 5000 0005', int $validYears=4) {
  $this->issueDate=new DateTimeImmutable('today');
  $this->expireDate=$this->issueDate->modify('+'.max(1,$validYears).' years');
 }
 public function getCardNumber(): string{return $this->cardNumber;}
 public function getIssueDate(): DateTimeImmutable{return $this->issueDate;}
 public function getExpireDate(): DateTimeImmutable{return $this->expireDate;}
 public function getStudent(): Student{return $this->student;}
 public function isValid(): bool{return new DateTimeImmutable('today') <= $this->expireDate;}
 public function toArray(): array{return ['cardNumber'=>$this->cardNumber,'issueDate'=>$this->issueDate->format('Y-m-d'),'expireDate'=>$this->expireDate->format('Y-m-d'),'isValid'=>$this->isValid(),'student'=>$this->student->toArray()];}
}
