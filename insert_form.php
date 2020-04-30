<?php
    require 'DB.php';
   ?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8">
        <title>ข้อมูลกลุ่มเรียน</title>
        <style>
            label{
                display: block;
            }
        </style>
    </head>
<body>
<form action="insert.php" method="post"><br>
<strong><center>ข้อมูลกลุ่มเรียน</strong></center><br><br>
<strong><center>

<label> ชื่อกลุ่มเรียน: <input name="group" type="text" id="group" size="20"></label><br><br>
หลักสูตร  : <br>
      <label> <input type="radio" name="pro_status" value="0" id="pro_status_0">  4 ปี</label> <br>
      <label>  <input type="radio" name="pro_status" value="1" id="pro_status_1"> เทียบโอนปกติ </label><br>
	  <label> <input type="radio" name="pro_status" value="2" id="pro_status_3"> เทียบโอนสมทบ </label><br>


<br><br>
	<input type="submit" value="ตกลง">
	<input type="reset" value="ยกเลิก">
</form>
</body>
</html>

	