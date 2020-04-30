<?php
    require 'DB.php';
   ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ข้อมูลสมรรถนะที่จำเป็นพื้นฐานของนักศึกษาระดับชาติ</title>
        <style>
            label{
                display: block;
            }
        </style>
    </head>
	<center>
    <body>
        <h2>ข้อมูลสมรรถนะที่จำเป็นพื้นฐานของนักศึกษาระดับชาติ</h2>
        <form action = "insert_capa.php" method=  "post" enctype = "multipart/form-data" id="form1">
             <fieldset style = "width : 470px; height : 150px;" > 
				<table align = center width = 450px border = "0">
                <legend><b style = "font-size : 20px">ข้อมูลสมรรถที่จำเป็นพื้นฐานของนักศึกษาระดับชาติ</legend>
                <tr><td><label><b> รหัส </label></td><td><input name = "cap_id" type = "text" id = "cap_id" size="40"></td></tr>
				<tr><td><label><b> รายการ </label></td><td><input name = "cap_list" type = "text" id = "cap_list" size="40"></td></tr>
                <tr><td></td><td><input name="submit" type="submit" id="submit" value="เพิ่มข้อมูล">
				<input name="reset" type = "reset" id = "reset" value = "ล้างข้อมูล"><br></td></tr>
            </fieldset>
         </form><br>
    </body>
	</center>
</html>
