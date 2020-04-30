<?php
require 'DB.php';
$Std_ID = $_POST['ID'];
$qpro = "select * from member where Std_ID = '$Std_ID' ";
$respro = mysqli_query($conn, $qpro);
$rowpro = mysqli_fetch_array($respro, MYSQLI_ASSOC);
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>แก้ไขข้อมูลนักศึกษา</title>
        <style>   /*--เพิ่ม style เข้ามาด้วย*/
            label{
                display: block;
            }
        </style>
    </head>
    <body> 
        <h2>แก้ไขข้อมูลนักศึกษา</h2>
		<form action="update_frmimg.php" method="post" enctype="multipart/form-data" id="form1">
            <fieldset> 
                <legend>แก้ไขรูปนักศึกษา</legend>
				<input name="ID" type="hidden" id="ID" size="20" value=<?=$rowpro['ID']?>>

                <label>ภาพนักศึกษา</label>
                <input type="file" name="Std_Pic"/ value=<?=$rowpro['Std_Pic']?>>
                <br><br>
                
                <br><br>
                <input name="submit" type="submit" id="submit" value="แก้ไขรูปนักศึกษา">
            </fieldset>
         </form>
    </body>
</html>