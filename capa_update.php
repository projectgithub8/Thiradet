 <?php
    require 'DB.php';
    $cap_id = $_POST['cap_id'];  
    $cap_list = $_POST['cap_list'];
    $q = "update capa_basic set cap_list = '$cap_list' where cap_id ='$cap_id'";
    $result= mysqli_query($conn,$q);
    
    if($result){
        echo "<script>
		alert('แก้ไขข้อมูลเรียบร้อย');
		window.location = 'show_capa.php';
		</script>";
    } else {
        echo "<script>
		alert('เกิดข้อผิดพลาด');
		window.location = 'update_frm_capa.php';
		</script>";
    }
    mysqli_close($conn);
?>