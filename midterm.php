<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
</head>
<body>
<h3>ระบบตรวจสอบสิทธิ์</h3>
<form method="POST">

        ชื่อผู้สมัคร: <input type="text" name="u" required><br>

        ปีเกิด (พ.ศ.): <input type="number" name="y" required><br>

        
        <br>


<input type="submit" value="ตรวจสอบ">
</form>
<hr>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$username = $_POST['u'];     // ชื่อผู้ใช้

$birthYear = (int)$_POST['y'];       // ปีเกิด (พ.ศ.)

$currentYear = 2569;     // ปีปัจจุบัน




// ================================

// คำนวณอายุ

// ================================

$age = $currentYear - $birthYear;

// ================================

// แสดงข้อมูลผู้ใช้

// ================================

echo "<h2>ระบบตรวจสอบกิจกรรมที่ได้</h2>";

echo "ชื่อผู้สมัคร: " . $username . "<br>";

echo "ปีเกิด: " . $birthYear . "<br>";


// ================================

// ตรวจสอบความถูกต้องของข้อมูล

// ================================


if ($birthYear > $currentYear) {

    echo "ข้อมูลปีเกิดไม่ถูกต้อง";

} else if ($age > 20) {
    echo "อายุของคุณคือ " . $age . " ปี<br>";

    echo "กิจกรรม : Research Conference";

} else if ($age < 15) {

    echo "อายุของคุณคือ " . $age . " ปี<br>";

    echo "กิจกรรม : Workshop Programming";

} else if ($age <= 18) {

    echo "อายุของคุณคือ " . $age . " ปี<br>";

    echo "กิจกรรม : Hackathon";

} else {
    
    echo "กรุณาตรวจสอบข้อมูลอีกครั้ง";
  

}

}

?>
</body>
</html>

 