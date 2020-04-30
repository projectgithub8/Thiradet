 <?php
    require 'DB.php';
    $Std_ID = $_POST['Std_ID'];  
    $Std_Name = $_POST['Std_Name'];
	$Group_ID = $_POST['Group_ID'];
    $Faculty_ID = $_POST['Faculty_ID'];
    /* $o_img = $_POST['o_img']; */	 

//upload image จะทำการเช็คว่าเป็นไฟล์รูปภาพจริงหรือไม่
    $ext = pathinfo(basename($_FILES['Std_Pic']['name']),PATHINFO_EXTENSION);
    $new_image_name = 'img_'.uniqid().".".$ext;
    $image_path = "images/"; //อ้างอิง path ที่เก็บภาพ
    $upload_path = $image_path.$new_image_name; //เตรียมการอัพโหลด
    /* echo "img name = ". $new_image_name ."<BR>";
    echo "path = ". $upload_path  ."<BR>"; */
	
	if( !empty($ext) )
	{
    //uploading
       $success= move_uploaded_file($_FILES['Std_Pic']['tmp_name'],$upload_path);
	   $Std_Pic = $new_image_name;
       if( $success == false){
           echo "ไม่สามารถ upload รูปภาพได้";
           exit();
       }
    }else{
	   /* $Std_Pic = $o_img; */
	}
	
 
	$q = "update member set Std_Name = '$Std_Name',Group_ID = '$Group_ID',Faculty_ID = '$Faculty_ID',Std_Pic = '$Std_Pic' where Std_ID = '$Std_ID'";
	/* echo $q."<BR>"; */
	
    $result = mysqli_query($conn,$q);
    
    if($result){
         echo "<script>
			alert('แก้ไขข้อมูลเรียบร้อยแล้ว');
			window.location = 'show_student.php';
			</script>";
			
    }else {
        echo "<script>
			alert('เกืดข้อผิดพลาดในการแก้ไขข้อมูล');
			window.location = 'update_frm_std.php';
			</script>";
    }
    mysqli_close($conn);
	
?>	