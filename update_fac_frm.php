<?php
require 'DB.php';
$Faculty_ID = $_GET['Faculty_ID'];
$qpro = "select * from Faculty where Faculty_ID='$Faculty_ID' ";
$respro = mysqli_query($conn, $qpro);
$rowpro = mysqli_fetch_array($respro, MYSQLI_ASSOC);
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>แก้ไขข้อมูลคณะ</title>
        <style>   /*--เพิ่ม style เข้ามาด้วย*/
            label{
                display: block;
            }
        </style>
    </head>
	<center>
    <body> 
        <h2>แก้ไขข้อมูลคณะ</h2>
		<form action="fac_update.php" method="post" enctype="multipart/form-data" id="form1"> 
            <fieldset style = "width : 470px; height : 100px;" >
				<table align = center width = 450px border = "0">
                <legend><b style = "font-size : 20px">แก้ไขข้อมูลคณะ</legend>
                <tr><td><label><b> ชื่อคณะ: </label></label></td><td><input name="Faculty_Name" type="text" id="Faculty_Name" size="40" value="<?php echo $rowpro['Faculty_Name']; ?>"></td></tr> 
                <tr><td></td><td><input type="hidden" name="Faculty_ID" value="<?php echo $rowpro['Faculty_ID']; ?>">
                <input name="submit" type="submit" id="submit" value="แก้ไขข้อมูล"></td></tr>
            </fieldset>
         </form>
    </body>
	</center>
</html>
