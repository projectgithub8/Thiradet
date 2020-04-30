<?php
require 'DB.php';
$cap_id = $_GET['cap_id'];
$qpro = "select * from capa_basic where cap_id ='$cap_id' ";
$respro = mysqli_query($conn, $qpro);
$rowpro = mysqli_fetch_array($respro, MYSQLI_ASSOC);
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>แก้ไขข้อมูลสมรรถนะที่จำเป็นพื้นฐานของนักศึกษาระดับชาติ</title>
        <style>
            label{
                display: block;
            }
        </style>
    </head>
	<center>
    <body> 
        <h2>แก้ไขข้อมูลสมรรถนะ</h2>
		<form action="capa_update.php" method="post" enctype="multipart/form-data" id="form1"> 
            <fieldset style = "width : 470px; height : 100px;" >
				<table align = center width = 450px border = "0">
                <legend><b style = "font-size : 20px">แก้ไขข้อมูลสมรรถนะ</legend>
                <tr><td><label><b> รหัส : </label></label></td><td><input name="cap_id" type="text" id="cap_id" size="30" value="<?php echo $rowpro['cap_id']; ?>" disabled = ""></td></tr> 
                <tr><td><label><b> รายการ : </label></label></td><td><input name="cap_list" type="text" id="cap_list" size="40" value="<?php echo $rowpro['cap_list']; ?>"></td></tr> 
				<tr><td></td><td><input type="hidden" name = "cap_id" value="<?php echo $rowpro['cap_id']; ?>">
                <input name="submit" type="submit" id="submit" value="แก้ไขข้อมูล"></td></tr>
            </fieldset>
         </form>
    </body>
	</center>
</html>
