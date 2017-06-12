<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<?php
if(isset($_POST["edit"]))
{
	$idmach=$_POST['idmach'];
	$noidung=$_POST['noidung'];
	$lc1=$_POST['lc1'];
	$lc2=$_POST['lc2'];
	$lc3=$_POST['lc3'];
	$lc4=$_POST['lc4'];
	$dapan=$_POST['dapan'];
	
	//// la bi sao h han ko update dc do T, van giu nguyen kq do h H thu lai di/ rang han luu a, b rua T he. a b dau H
	 $sql="UPDATE  tbl_cauhoi SET `ma_ch` =  '".$idmach."',
	`noidung` ='".$noidung."',
	`lc1` ='".$lc1."',
	`lc2` ='".$lc2."',
	`lc3` ='".$lc3."',
	`lc4` ='".$lc4."',
	`dapan` ='".$dapan."'
	where ma_ch='".$idmach."'";
	
	$rs=mysql_query($sql);
	//echo $sql;
	echo"<script>document.location.href='?menu=cauhoi_list' </script>";
}
?>