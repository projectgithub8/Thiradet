 <?php
    require 'db.php';
    
    $Faculty_ID = $_POST['Faculty_ID'];  
    $Faculty_name = $_POST['Faculty_Name'];
    
    
    $q = "update faculty set faculty_name='$Faculty_name' where Faculty_ID='$Faculty_ID'";
    $result= mysqli_query($conn,$q);
    
    if($result){
        echo "<script>
			alert('แก้ไขข้อมูลในตารางเรียบร้อยแล้ว')
			window.location='show_fac.php';
			</script>";
    } else {
        echo "<script>
			alert('เกิดข้อผิดพลาด ไม่สามารถแก้ไขข้อมูลได้')
			window.location='update_fac_frm.php';
			</script>";
    }
    mysqli_close($conn);
?>