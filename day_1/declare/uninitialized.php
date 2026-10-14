<?php

class User
{
    public string $name; // default qiymati berilmagan string bolishi mumkin initialized
    public ?int $age; // default qiymat berilmagan integer yoki null bo'lishi mumkin lekin default qiymati yoq initialized
    public ?string $gender = "male"; // null yoki tring bolishi mumkin, default qiymat berilgan shuni hizobiga initialized emas
}
$user = new User();
echo $user->name; //default qiymati yuq
echo $user->age; // default qiymati yuq
echo $user->gender; // default qiymati bor
