<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<?php
include('config.php');
if(isset($_POST['edit']))
{	
	
	$idhs=$_POST['idhs'];
	$hoten=$_POST['hoten'];
	$ngaysinh=$_POST['ngaysinh'];
	$gioitinh=$_POST['gioitinh'];
	//$diachi=$_POST['diachi'];
	$lop=$_POST['lop'];
	
	$sql2="UPDATE tbl_hocsinh SET hoten='$hoten',ngaysinh='$ngaysinh',gioitinh='$gioitinh', lop='$lop' WHERE idhs='".$idhs."'";
	$query2=mysql_query($sql2,$con);
	echo"<script>document.location.href='?menu=hocsinh_list'</script>";
}
?>
