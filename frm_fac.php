<?php
    require 'DB.php';
   ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>ข้อมูลคณะ มทร.สุวรรณภูมิ</title>
        <style>
            label{
                display: block;
            }
        </style>
    </head>
	<center>
    <body>
        <h2>ข้อมูลคณะภายในมหาวิทยาลัยเทคโนโลยีราชมงคลสุวรรณภูมิ</h2>
        <form action="fac_insert.php" method="post" enctype="multipart/form-data" id="form1">
             <fieldset style = "width : 470px; height : 100px;" > 
				<table align = center width = 450px border = "0">
                <legend><b style = "font-size : 20px">ข้อมูลคณะ</legend>
                <tr><td><label><b> ชื่อคณะ : </label></td><td><input name="Faculty_Name" type="text" id="Faculty_Name" size="40"></td></tr>
                <tr><td></td><td><input name="submit" type="submit" id="submit" value="เพิ่มข้อมูล"></td></tr>
            </fieldset>
         </form>
    </body>
	</center>
	    </html>
