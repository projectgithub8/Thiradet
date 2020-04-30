<?php
    include_once('DB.php');
	$Faculty_Name = $_POST['Faculty_Name'];
    if (empty ($_POST['Faculty_Name'])){
        echo "<script>
			alert('กรุณากรอกข้อมูลคณะ');
			window.location = 'show_fac.php';
			</script>";
    } else {
        $sql = "insert into faculty (Faculty_Name) values('$Faculty_Name')"; 
}
	
	$result= mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>
		alert('แก้ไขข้อมูลเรียบร้อย');
		window.location = 'show_fac.php';
		</script>";
				
    } else {
        echo "<script>
		alert('เกิดข้อผิดพลาดในการเพิ่มข้อมูล');
		window.location = 'frm_fac.php.php';
		</script>";
}


mysqli_close($conn);
?>
