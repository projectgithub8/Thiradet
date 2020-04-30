<form method="get" id="form" enctype="multipart/form-data" action="" ><br>
<strong><center>ข้อมูลกลุ่มเรียน</strong></center><br><br>
    <strong><center>ค้นหาข้อมูล</strong>
    <input type="text" name="search" size="30" value="">
    <input type="submit" value="ค้นหาข้อมูล"><br><br>
	ตารางแสดงข้อมูลกลุ่มเรียน</center>
</form>
<?php
echo "<center>";
$date = date("l d F Y");
echo "Todey : $date"."<BR>";
echo "</center>"."<br>";
include_once('DB.php');
$search = isset($_GET['search']) ? $_GET['search']:'';
$sql = "SELECT * FROM groupp WHERE name_g LIKE '%$search%'";
$result = mysqli_query($conn,$sql)
	or die ("Error cannot select data".mysqli_error($conn));
	echo "<table border=3px 
			bordercolor=#DOE7A3
			bgcolor=#FFFFCC
			align=center>";
	echo "<tr align = center>";
	echo "<th width = '20px'>รหัสกลุ่มเรียน</th>";
	echo "<th width = '100px'>รหัสกลุ่มเรียน</th>";
	echo "<th width = '150px'>ชื่อกลุ่มเรียน</th>";
	echo "<th width = '100px'>หลักสูตร</th>";
	echo "<th width = '100px'>อัพเดท</th>";
	echo "<th width = '100px'>ลบ</th>";
	echo "</tr>";
while($row = mysqli_fetch_array($result))
{
	echo "<tr align=center>";
	echo "<td>".$row['ID_group']."</td>";
	echo "<td>".$row['name_g']."</td>";
	echo "<td>".$row['status_g']."</td>";
	echo "<td><a href='update_frm_group.php?ID_group=".$row['ID_group']."'>
	<img src='edit.png' width='20px' height='20px'></a></td>";
	echo "<td><a href='delete_group.php?ID_group=".$row['ID_group']."'
	onclick='return confirm(\"คุณต้องการที่จะลบข้อมูลนี้หรือไม่ ?\")'>
	<img src='delete.png' width='20px' height='20px'></a></td>";
	echo "</tr>";
}
echo "</table>"."<br>";
mysqli_free_result($result);
mysqli_close($conn);
?>
<center><a href='insert_group_frm.php'>ย้อนกลับ</a></center>