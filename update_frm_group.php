<?php  //update_form.php
include_once('DB.php');
$ID_group = $_GET["ID_group"];
$sql = ("SELECT
			name_g
			,status_g
		FROM groupp
		WHERE ID_group = $ID_group");
$res = mysqli_query($conn,$sql)
	or die ("Error cannot select data".
	mysqli_error($conn)); 
while($row = mysqli_fetch_array($res))
{
	$group = $row["name_g"];
	$Status = $row["status_g"];
}
mysqli_free_result($res);
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<body>
<form action="update.php" method="post">
<input type="hidden" name="ID_group" value=<?php echo $ID_group;?>>
<center><b><u>อัพเดทข้อมูลกลุ่มเรียน</b></u><br><br>
ชื่อกลุ่มเรียน  :<input type="text"
				name="name_g" 
				value=<?php echo $group; ?>><br><br>
หลักสูตร  :<select name = "status_g">
			<option value = "4 ปี">4  ปี</option> 
			<option value = "เทียบโอนปกติ">เทียบโอนปกติ</option>
			<option value = "เทียบโอนสมทบ">เทียบโอนสมทบ</option>
			<option value = "" selected></option>
		</select><br><br>
<input type= "submit" value="อัพเดต">
<input type= "reset" value="ยกเลิก">
</center>
</form>
</body>
