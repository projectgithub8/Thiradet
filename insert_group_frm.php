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
<table align = center width = "30%" border = "0">
<table align = center width = "30%" border = "0">
<tr><td align=right><label> ชื่อกลุ่มเรียน: </td><td><input name="group" type="text" id="group" size="20"></td></tr></label>
<tr><td align=right><label></td><td><font size="1" color="red"> * กรุณากรอกตัวอักษรเป็นตัวพิมพ์ใหญ่ เช่น ITS16221N</label></font></td></tr>
<tr><td></td><td></td></tr>
<tr><td align=right><label>หลักสูตร  : </td>
		<td><input type="radio" name="pro_status" value="0" id="pro_status_0">  4 ปี</td></tr></label>
		<tr><td><label></td><td><input type="radio" name="pro_status" value="1" id="pro_status_1"> เทียบโอนปกติ </label></td></tr>
		<tr><td><label></td><td><input type="radio" name="pro_status" value="2" id="pro_status_3"> เทียบโอนสมทบ </label></td></tr>
	<tr><td><b></td><td></td></tr>
	<tr><td><b></td>
	<td><input type="submit" value="ตกลง">
	<input type="reset" value="ยกเลิก"><br><br></td></tr>
	</table><br>
</center>
</form>
</body>
</html>