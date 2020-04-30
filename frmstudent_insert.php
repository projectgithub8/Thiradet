<?php
    require 'DB.php';
 	$Std_ID = $_POST['Std_ID'];
	$chack = "SELECT * FROM member WHERE Std_ID = '$Std_ID' ";
	$result1 = mysqli_query($conn, $chack);
    if (empty($_POST['Std_ID'])){
        echo "<script language = 'Javascript'>
			alert('กรุณากรอกรหัสนักศึกษา !!');
			window.location = 'frm_student.php';
			</script>";
    } elseif(mysqli_num_rows($result1) > 0)
	{
		echo "<script language = 'Javascript'>
			alert('มีรหัสนักศึกษานี้ในระบบแล้ว กรุณาลองใหม่อีกครั้ง');
			window.location = 'frm_student.php';
			</script>";
	}
	else {
        $Std_ID = mysqli_real_escape_string($conn, $_POST['Std_ID']);
	}
	
    $Std_name= $_POST['Std_name'];
    $Group_ID = $_POST['Group_ID'];
    $Faculty_ID = $_POST['Faculty_ID'];
        
    
    $ext = pathinfo(basename($_FILES['Std_Pic']['name']),PATHINFO_EXTENSION);
    $new_image_name = 'img_'.uniqid().".".$ext;
    $image_path = "images/";
    $upload_path = $image_path.$new_image_name;
    
    $success= move_uploaded_file($_FILES['Std_Pic']['tmp_name'],$upload_path);
    if( $success == false){
        echo "<script language = 'Javascript'>
			alert('ไม่สามารถอัพโหลดรูปภาพได้ กรุณาลองใหม่อีกครั้ง !!');
			window.location = 'frm_student.php';
			</script>";
        exit();
    }
    
    $Std_Pic = $new_image_name;

    $q = "insert into member (Std_ID,Std_name,Group_ID,Faculty_ID,Std_Pic)";
	$q .= "values('$Std_ID','$Std_name','$Group_ID','$Faculty_ID','$Std_Pic')";
	
    
    $result= mysqli_query($conn, $q);
    if ($result) {
		echo "<script>
			alert('เพิ่มข้อมูลเรียบร้อย');
			window.location = 'show_student.php';
			</script>";
    } else {
        echo "<script>
			alert('ไม่สามารถเพิ่มข้อมูลได้')
			window.location = 'frm_student.php';
			</script>";
}
mysqli_close($conn);
?>