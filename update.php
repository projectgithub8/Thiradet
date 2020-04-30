<?php
include_once('DB.php');
$ID_group = $_POST["ID_group"];
$group = $_POST["name_g"];
$Status = $_POST["status_g"];
$sql = "update groupp set 
			name_g = '$group'
		,	status_g = '$Status'
		WHERE ID_group = $ID_group; ";
$result=mysqli_query($conn,$sql);
if($result){
	echo "<script>
			alert('แก้ไขข้อมูลในตารางเรียบร้อยแล้ว')
			window.location='select.php';
			</script>";
}else{
	echo mysqli_error($conn);
	echo "<script>
			alert('ไม่สามารถแก้ไขข้อมูลได้')
			window.location='select.php';
			</script>";
}
mysqli_close($conn);
?>